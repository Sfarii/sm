<?php

namespace ISETSO\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use ISETSO\UserBundle\Entity\User\UserGroup;
use ISETSO\UserBundle\Entity\User\User;
use ISETSO\UserBundle\Form\UserGroupType;
use ISETSO\MagazineBundle\Form\Search\SearchType;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * UserGroup controller.
 *
 * @Route("/usergroup")
 * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_GESTION_GROUP')")
 */
class UserGroupController extends Controller
{
    const ROLE = 'ROLE_GESTION_GROUP';
    const MSG_NEW = 'usergroup.flash.created';
    const MSG_EDIT = 'usergroup.flash.updated';
    const MSG_DELETE = 'usergroup.flash.deleted';

    /**
     * Lists all UserGroup entities.
     *
     * @Route("/", name="usergroup_index")
     * @Method("GET")
     * @Security("is_granted('View', 'ROLE_GESTION_GROUP')")
     */
    public function indexAction(Request $request )
    {
        $entityManager = $this->getEntityManager();
        $form = $this->createForm(SearchType::class)->handleRequest($request);

        // récupiré le requéte a partir de information déja collecter
        $query = $entityManager->getEntityBy($this->getDoctrine()->getRepository(UserGroup::class), $this->getUser() ,self::ROLE, $form);

        // creé le delete form
        $deleteForms = array();
        foreach ($query->getQuery()->getResult() as $entity) {
            $deleteForms[$entity->getId()] = $this->createDeleteForm($entity)->createView();
        }
            
        return $this->render('ISETSOUserBundle:usergroup:index.html.twig', array(
            'padding' => $entityManager->createPaginator($query ,$request),
            'form'=> $form->createView(),
            'deleteForms' => $deleteForms
        ));
    }

    /**
     * Creates a new UserGroup entity.
     *
     * @Route("/new", name="usergroup_new")
     * @Method({"GET", "POST"})
     * @Security("is_granted('Add', 'ROLE_GESTION_GROUP')")
     */
    public function newAction(Request $request)
    {
        $userGroup = new UserGroup();
        $form = $this->createForm(UserGroupType::class, $userGroup)
                    ->add('roles', 'choice', array(
                        'choices' => $this->getExistingRoles(),
                        'label' => 'magazine.field.role',
                        'multiple' => true,
                        'mapped' => true
                        ))
                    ->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getEntityManager()->save($userGroup,$this->getUser());
            $this->addFlash('msg', $this->get('translator')->trans(self::MSG_NEW));
            // creé un historique pour cette user
            $this->getHistoryManager()->insertAddUserHistory(self::ROLE,$this->getUser(),self::MSG_NEW);
            
            return $this->redirectToRoute('usergroup_index');
        }

        return $this->render('ISETSOUserBundle:usergroup:new.html.twig', array(
            'userGroup' => $userGroup,
            'form' => $form->createView(),
        ));
    }

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
     * Finds and displays a UserGroup entity.
     *
     * @Route("/{id}", name="usergroup_show")
     * @Method("GET")
     * @Security("is_granted('View', 'ROLE_GESTION_GROUP')")
     */
    public function showAction(UserGroup $userGroup)
    {
        $deleteForm = $this->createDeleteForm($userGroup);

        return $this->render('ISETSOUserBundle:usergroup:show.html.twig', array(
            'userGroup' => $userGroup,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    

    /**
     * Displays a form to edit an existing UserGroup entity.
     *
     * @Route("/{id}/edit", name="usergroup_edit")
     * @Method({"GET", "POST"})
     * @Security("is_granted('Edit', 'ROLE_GESTION_GROUP')")
     */
    public function editAction(Request $request, UserGroup $userGroup)
    {
        $editForm = $this->createForm(UserGroupType::class, $userGroup)
                            ->add('roles', 'choice', array(
                                'choices' => $this->getExistingRoles(),
                                'label' => 'magazine.field.role',
                                'multiple' => true,
                                'mapped' => true,
                                'preferred_choices' => $userGroup->getRoles(),
                            ))
                            ->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            // persite le entité
            $this->getEntityManager()->save($userGroup);
            // flash un message
            $this->addFlash('msg', $this->get('translator')->trans(self::MSG_EDIT));
            // creé un historique pour cette user
            $this->getHistoryManager()->insertEditUserHistory(self::ROLE,$this->getUser(),self::MSG_EDIT);
            return $this->redirectToRoute('usergroup_index');
        }

        return $this->render('ISETSOUserBundle:usergroup:edit.html.twig', array(
            'userGroup' => $userGroup,
            'edit_form' => $editForm->createView(),
        ));
    }

    /**
     * Deletes a UserGroup entity.
     *
     * @Route("/{id}", name="usergroup_delete")
     * @Method("DELETE")
     * @Security("is_granted('Delete', 'ROLE_GESTION_GROUP')")
     */
    public function deleteAction(Request $request, UserGroup $userGroup)
    {
        $form = $this->createDeleteForm($userGroup);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // supprimeé le entité
            $this->getEntityManager()->delete($userGroup);
            // flash un message
            $this->addFlash('msg', $this->get('translator')->trans(self::MSG_DELETE) );
            // creé un historique pour cette user
            $this->getHistoryManager()->insertDeleteUserHistory(self::ROLE,$this->getUser(),self::MSG_DELETE);
        }

        return $this->redirectToRoute('usergroup_index');
    }

    /**
     * Creates a form to delete a UserGroup entity.
     *
     * @param UserGroup $userGroup The UserGroup entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(UserGroup $userGroup)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('usergroup_delete', array('id' => $userGroup->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    /**
     * récupiré un service
     *
     * @return ISETSO\MagazineBundle\Services\MagazineEntityManager
     */
    private function getEntityManager(){
        if (!$this->has('magazine.entity_manager')){
           throw $this->createNotFoundException('Service Not Found');
        }
        return $this->get('magazine.entity_manager');
    }

    /**
     * récupiré un service
     *
     * @return ISETSO\MagazineBundle\Services\UserHistoryManager
     */
    private function getHistoryManager(){
        // test si le service n'est pas existe
        if (!$this->has('user.history_manager')){
           throw $this->createNotFoundException('Service Not Found');
        }
        return $this->get('user.history_manager');
    }
}
