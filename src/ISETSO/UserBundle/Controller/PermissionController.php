<?php

namespace ISETSO\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use ISETSO\UserBundle\Entity\User\User;
use ISETSO\UserBundle\Entity\User\UserGroup;
use ISETSO\UserBundle\Form\User\UserType;
use ISETSO\MagazineBundle\Form\Search\SearchType;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * permission controller.
 *
 * @Route("/permission")
 */
class PermissionController extends Controller
{
    const MSG_PERMISSION = 'user.flash.updated';

    /**
     * Creates a permisson User entity.
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createUserPermissonForm(User $user)
    {
        $userManager = $this->getEntityManager();
        $permisson = array($userManager::VIEW => 'view',$userManager::ADD => 'add',$userManager::EDIT => 'edit',$userManager::DELETE => 'delete', $userManager::MANAGER => 'manager');
        $form = $this->createFormBuilder()
            ->setAction($this->generateUrl('user_permission', array('id' => $user->getId())))
            ->setMethod('POST');
            foreach ($user->getUserRoles() as $value) {
                if ($value != 'ROLE_USER'){
                    $form->add($value, 'choice', array('label' => $value ,
                        'choices' => $permisson,
                        'multiple' => true,
                        'choices_as_values' => false,
                        'preferred_choices' => $user->getRolePermission($value),
                    ));
                }
            }

        return $form->getForm();
    }

    /**
     * creé un utilisateur
     *
     * @Route("user/{id}", name="user_permission")
     * @Method({"GET", "POST"})
     * @Security("is_granted('Add', 'ROLE_GESTION_USER')")
     */
    public function userPermissionAction(Request $request,User $user)
    {
        $form = $this->createUserPermissonForm($user)->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $this->getEntityManager()->savePermission ($user, $user->getUserRoles() , $form);
            $this->addFlash('msg',$this->get('translator')->trans(self::MSG_PERMISSION));
            return $this->redirectToRoute('user_index');
        }

        return $this->render('ISETSOUserBundle:user:permission.html.twig', array(
            'user' => $user,
            'form' => $form->createView(),
        ));
    }

    /**
     * Creates a permisson User entity.
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createGroupPermissonForm(UserGroup $userGroup)
    {
        $userManager = $this->getEntityManager();
        $permisson = array($userManager::VIEW => 'view',$userManager::ADD => 'add',$userManager::EDIT => 'edit',$userManager::DELETE => 'delete', $userManager::MANAGER => 'manager');
        $form = $this->createFormBuilder()
            ->setAction($this->generateUrl('usergroup_edit', array('id' => $userGroup->getId())))
            ->setMethod('POST');
            foreach ($userGroup->getRoles() as $value) {
                if ($value != 'ROLE_USER'){
                    $form->add($value, 'choice', array('label' => $value ,
                        'choices' => $permisson,
                        'multiple' => true,
                        'preferred_choices' => $userGroup->getRolePermission($value),
                     ));
                }
            }

        return $form->getForm();
    }

    /**
     * creé un utilisateur
     *
     * @Route("group/{id}", name="userGroup_permission")
     * @Method({"GET", "POST"})
     * @Security("is_granted('Add', 'ROLE_GESTION_GROUP')")
     */
    public function groupPermissionAction(Request $request,UserGroup $userGroup)
    {
        $form = $this->createGroupPermissonForm($userGroup)->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getEntityManager()->savePermission ($userGroup, $userGroup->getRoles() , $form);
            $this->addFlash('msg',$this->get('translator')->trans(self::MSG_PERMISSION));
            return $this->redirectToRoute('userGroup_index');
        }

        return $this->render('ISETSOUserBundle:usergroup:permission.html.twig', array(
            'usergroup' => $userGroup,
            'form' => $form->createView(),
        ));
    }

    /**
     * récupiré un service
     *
     * @return ISETSO\MagazineBundle\Services\MagazineEntityManager
     */
    private function getExistingRoles()
    {
        $roleHierarchy = $this->getParameter('security.role_hierarchy.roles');
        $roles = array_keys($roleHierarchy);

        foreach ($roles as $role) {
            $theRoles[$role] = $role;
        }
        return $theRoles;
    }

    /**
     * récupiré un service
     *
     * @return ISETSO\MagazineBundle\Services\MagazineEntityManager
     */
    private function getEntityManager(){
        if (!$this->has('user.entity_manager')){
           throw $this->createNotFoundException('Service Not Found');
        }
        return $this->get('user.entity_manager');
    }
}