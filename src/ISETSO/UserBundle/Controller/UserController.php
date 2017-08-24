<?php

namespace ISETSO\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use ISETSO\UserBundle\Entity\User\User;
use ISETSO\UserBundle\Form\UserType;
use ISETSO\MagazineBundle\Form\Search\SearchType;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * User controller.
 *
 * @Route("/user")
 * @Security("user.isSuperAdmin() or has_role('ROLE_GESTION_USER')")
 */
class UserController extends Controller
{
    const ROLE = 'ROLE_GESTION_USER';
    const MSG_NEW = 'registration.flash.user_created';
    const MSG_EDIT = 'user.flash.updated';
    const MSG_LOCK = 'user.flash.lock';
    const MSG_EXPIRE = 'user.flash.expire';

    /**
     * Lists all User entities.
     *
     * @Route("/", name="user_index")
     * @Method({"GET", "POST"})
     * @Security("is_granted('View', 'ROLE_GESTION_USER')")
     */
    public function indexAction(Request $request )
    {
        $entityManager = $this->getEntityManager();
        $form = $this->createForm(SearchType::class)->handleRequest($request);

        // récupiré le requéte a partir de information déja collecter
        $query = $entityManager->getEntityBy($this->getDoctrine()->getRepository(User::class), $this->getUser() ,self::ROLE, $form);

         // creé le delete form
        $deleteForms = array();
        $expiredForm = array();
        foreach ($query->getQuery()->getResult() as $entity) {
            $deleteForms[$entity->getId()] = $this->createLockedForm($entity)->createView();
            $expiredForm[$entity->getId()] = $this->createExpiredForm($entity)->createView();
        }

            
        return $this->render('ISETSOUserBundle:user:index.html.twig', array(
            'padding' => $entityManager->createPaginator($query ,$request),
            'form'=> $form->createView(),
            'deleteForms' => $deleteForms,
            'expiredForm' => $expiredForm
        ));
    }

    /**
     * Finds and displays a User entity.
     *
     * @Route("/{id}", name="user_show")
     * @Method("GET")
     * @Security("is_granted('View', 'ROLE_GESTION_USER')")
     */
    public function showAction(User $user)
    {
        return $this->render('ISETSOUserBundle:user:show.html.twig', array(
            'user' => $user,
        ));
    }

    

    /**
     * Displays a form to edit an existing User entity.
     *
     * @Route("/{id}/edit", name="user_edit")
     * @Method({"GET", "POST"})
     * @Security("is_granted('Edit', 'ROLE_GESTION_USER')")
     */
    public function editAction(Request $request, User $user)
    {
        $editForm = $this->createForm(UserType::class, $user)
                            ->add('roles', 'choice', array(
                                'choices' => $this->getExistingRoles(),
                                'label' => 'role',
                                'multiple' => true,
                                'mapped' => true,
                                'preferred_choices' => $user->getUserRoles(),
                            ))
                            ->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            // persite le entité
            $this->getEntityManager()->save($user);
            // flash un message
            $this->addFlash('msg', $this->get('translator')->trans(self::MSG_EDIT));
            // creé un historique pour cette user
            $this->getHistoryManager()->insertEditUserHistory(self::ROLE,$this->getUser(),self::MSG_EDIT);

            return $this->redirectToRoute('user_index');
        }

        return $this->render('ISETSOUserBundle:user:edit.html.twig', array(
            'user' => $user,
            'edit_form' => $editForm->createView()
        ));
    }

    /**
     * creé un utilisateur
     *
     * @Route("new", name="user_new")
     * @Method({"GET", "POST"})
     * @Security("is_granted('Add', 'ROLE_GESTION_USER')")
     */
    public function newAction(Request $request)
    {
        $form = $this->get('fos_user.registration.form')
                        ->add('roles', 'choice', array(
                                'choices' => $this->getExistingRoles(),
                                'label' => 'role',
                                'multiple' => true,
                                'mapped' => true,
                            ))
                        ->handleRequest($request);

        if ($form->isValid()) {

            $user = $form->getData();
            $this->getEntityManager()->save($user,$this->getUser());
            $this->addFlash('msg', $this->get('translator')->trans(self::MSG_NEW));
            // creé un historique pour cette user
            $this->getHistoryManager()->insertAddUserHistory(self::ROLE,$this->getUser(),self::MSG_NEW);

            return $this->redirectToRoute('user_index');
        }

        return $this->render('FOSUserBundle:user:new.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * lock a User entity.
     *
     * @Route("/{id}", name="user_delete")
     * @Method("DELETE")
     * @Security("is_granted('Delete', 'ROLE_GESTION_USER') and !userEntity.isSuperAdmin()")
     */
    public function lockedAction(Request $request, User $userEntity)
    {
        $form = $this->createLockedForm($userEntity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getEntityManager()->lock($userEntity);
            $this->addFlash('msg',$this->get('translator')->trans(self::MSG_LOCK));
            // creé un historique pour cette user
            $this->getHistoryManager()->insertLockUserHistory(self::ROLE,$this->getUser(),self::MSG_LOCK);
        }
        return $this->redirectToRoute('user_index');
    }

    /**
     * lock a User entity.
     *
     * @Route("/expired/{id}", name="user_expired")
     * @Method("DELETE")
     * @Security("is_granted('Delete', 'ROLE_GESTION_USER') and !userEntity.isSuperAdmin()")
     */
    public function expiredAction(Request $request, User $userEntity)
    {
        $form = $this->createExpiredForm($userEntity);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $this->getEntityManager()->expire ($userEntity , $form);
            $this->addFlash('msg',$this->get('translator')->trans(self::MSG_EXPIRE));
            // creé un historique pour cette user
            $this->getHistoryManager()->insertExpireUserHistory(self::ROLE,$this->getUser(),self::MSG_EXPIRE);
        }

        return $this->redirectToRoute('user_index');
    }

    /**
     * Creates a form to delete a User entity.
     *
     * @param User $user The User entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createLockedForm(User $user)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('user_delete', array('id' => $user->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    /**
     * Creates a form to delete a User entity.
     *
     * @param User $user The User entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createExpiredForm(User $user)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('user_expired', array('id' => $user->getId())))
            ->setMethod('DELETE')
            ->add('dateExp', "date", array(
                    'label' => false ,
                    'widget' => 'single_text',
                    'format' => 'yyyy-MM-dd',
                ))
            ->add('expired', "choice" , array(
                    'label' => false ,
                    'choices' => array (true => 'expired.yes' , false => 'expired.no'),
                    'multiple' => false
                ))
            ->getForm()
        ;
    }

    /**
     * @return array
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