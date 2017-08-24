<?php

namespace ISETSO\MagazineBundle\Controller\Local;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use ISETSO\MagazineBundle\Entity\Local\TypeLocal;
use ISETSO\MagazineBundle\Form\Local\TypeLocalType;
use ISETSO\MagazineBundle\Form\Search\SearchType;
use ISETSO\MagazineBundle\Entity\Local\Local;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * TypeLocal controller.
 *
 * @Route("/typelocal")
 * @Security("user.isSuperAdmin() or has_role('ROLE_GESTION_TYPE_LOCAL')")
 */
class TypeLocalController extends Controller
{
    const ROLE = 'ROLE_GESTION_TYPE_LOCAL';
    const MSG_NEW = 'typelocal.flash.created';
    const MSG_EDIT = 'typelocal.flash.updated';
    const MSG_DELETE = 'typelocal.flash.deleted';

    /**
     * Lists all TypeLocal entities.
     *
     * @Route("/", name="typelocal_index")
     * @Method({"GET", "POST"})
     * @Security("is_granted('View', 'ROLE_GESTION_TYPE_LOCAL') or is_granted('Manager', 'ROLE_GESTION_TYPE_LOCAL')")
     */
    public function indexAction(Request $request )
    {
        $entityManager = $this->getEntityManager();
        $form = $this->createForm(SearchType::class)->handleRequest($request);

        // récupiré le requéte a partir de information déja collecter
        $query = $entityManager->getEntityBy($this->getDoctrine()->getRepository(TypeLocal::class), $this->getUser() ,self::ROLE, $form);

         // creé le delete form
        $deleteForms = array();
        foreach ($query->getQuery()->getResult() as $entity) {
            $deleteForms[$entity->getId()] = $this->createDeleteForm($entity)->createView();
        }

            
        return $this->render('ISETSOMagazineBundle:typelocal:index.html.twig', array(
            'padding' => $entityManager->createPaginator($query ,$request),
            'form'=> $form->createView(),
            'deleteForms' => $deleteForms
        ));
    }

    /**
     * Creates a new TypeLocal entity.
     *
     * @Route("/new", name="typelocal_new")
     * @Method({"GET", "POST"})
     * @Security("is_granted('Add', 'ROLE_GESTION_TYPE_LOCAL') or is_granted('Manager', 'ROLE_GESTION_TYPE_LOCAL')")
     */
    public function newAction(Request $request)
    {
        $typeLocal = new TypeLocal();
        $form = $this->createForm(TypeLocalType::class, $typeLocal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // persite le entité
            $this->getEntityManager()->save($typeLocal , $this->getUser());
            // flash un message
            $this->addFlash('msg',$this->get('translator')->trans(self::MSG_NEW));
            // creé un historique pour cette user
            $this->getHistoryManager()->insertAddUserHistory(self::ROLE,$this->getUser(),self::MSG_NEW);
            return $this->redirectToRoute('typelocal_index');
            

        }

        return $this->render('ISETSOMagazineBundle:typelocal:new.html.twig', array(
            'typeLocal' => $typeLocal,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TypeLocal entity.
     *
     * @Route("/{id}", name="typelocal_show")
     * @Method("GET")
     * @Security("is_granted('View', 'ROLE_GESTION_TYPE_LOCAL') or is_granted('Manager', 'ROLE_GESTION_TYPE_LOCAL')")
     */
    public function showAction(TypeLocal $typeLocal,Request $request)
    {
        $entityManager = $this->getEntityManager();
        $form = $this->createForm(SearchType::class)->handleRequest($request);

        // récupiré le requéte a partir de information déja collecter
        $query = $entityManager->getEntityBySubEntity($typeLocal,$this->getDoctrine()->getRepository(Local::class), $this->getUser() ,self::ROLE, $form);


        return $this->render('ISETSOMagazineBundle:typelocal:show.html.twig', array(
            'typeLocal' => $typeLocal,
            'padding' => $entityManager->createPaginator($query ,$request),
            'form'=> $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TypeLocal entity.
     *
     * @Route("/{id}/edit", name="typelocal_edit")
     * @Method({"GET", "POST"})
     * @Security("is_granted('Edit', 'ROLE_GESTION_TYPE_LOCAL')  and typeLocal.isAuthor(user) or is_granted('Manager', 'ROLE_GESTION_TYPE_LOCAL')")
     */
    public function editAction(Request $request, TypeLocal $typeLocal)
    {
        $deleteForm = $this->createDeleteForm($typeLocal);
        $editForm = $this->createForm(TypeLocalType::class, $typeLocal);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            // persite le entité
            $this->getEntityManager()->save($typeLocal);
            // flash un message
            $this->addFlash('msg', $this->get('translator')->trans(self::MSG_EDIT));
            // creé un historique pour cette user
            $this->getHistoryManager()->insertEditUserHistory(self::ROLE,$this->getUser(),self::MSG_EDIT);
            
            return $this->redirectToRoute('typelocal_index');
        }

        return $this->render('ISETSOMagazineBundle:typelocal:edit.html.twig', array(
            'typeLocal' => $typeLocal,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a TypeLocal entity.
     *
     * @Route("/{id}", name="typelocal_delete")
     * @Method("DELETE")
     * @Security("is_granted('Delete', 'ROLE_GESTION_TYPE_LOCAL')  and typeLocal.isAuthor(user) or is_granted('Manager', 'ROLE_GESTION_TYPE_LOCAL')")
     */
    public function deleteAction(Request $request, TypeLocal $typeLocal)
    {
        $form = $this->createDeleteForm($typeLocal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // supprimeé le entité
            $this->getEntityManager()->delete($typeLocal);
            // flash un message
            $this->addFlash('msg', $this->get('translator')->trans(self::MSG_DELETE) );
            // creé un historique pour cette user
            $this->getHistoryManager()->insertDeleteUserHistory(self::ROLE,$this->getUser(),self::MSG_DELETE);
        }

        return $this->redirectToRoute('typelocal_index');
    }

    /**
     * Creates a form to delete a TypeLocal entity.
     *
     * @param TypeLocal $typeLocal The TypeLocal entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TypeLocal $typeLocal)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('typelocal_delete', array('id' => $typeLocal->getId())))
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
