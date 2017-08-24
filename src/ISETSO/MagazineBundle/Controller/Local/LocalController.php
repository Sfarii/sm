<?php

namespace ISETSO\MagazineBundle\Controller\Local;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use ISETSO\MagazineBundle\Entity\Local\Local;
use ISETSO\MagazineBundle\Form\Local\LocalType;
use ISETSO\MagazineBundle\Form\Search\SearchType;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * Local controller.
 *
 * @Route("/local")
 * @Security("user.isSuperAdmin() or has_role('ROLE_GESTION_LOCAL')")
 */
class LocalController extends Controller
{
    const ROLE = 'ROLE_GESTION_LOCAL';
    const MSG_NEW = 'local.flash.created';
    const MSG_EDIT = 'local.flash.updated';
    const MSG_DELETE = 'local.flash.deleted';

    /**
     * Lists all Local entities.
     *
     * @Route("/", name="local_index")
     * @Method({"GET", "POST"})
     * @Security("is_granted('View', 'ROLE_GESTION_LOCAL') or is_granted('Manager', 'ROLE_GESTION_LOCAL')")
     */
    public function indexAction(Request $request )
    {
       $entityManager = $this->getEntityManager();
        $form = $this->createForm(SearchType::class)->handleRequest($request);

        // récupiré le requéte a partir de information déja collecter
        $query = $entityManager->getEntityBy($this->getDoctrine()->getRepository(Local::class), $this->getUser() ,self::ROLE, $form);

         // creé le delete form
        $deleteForms = array();
        foreach ($query->getQuery()->getResult() as $entity) {
            $deleteForms[$entity->getId()] = $this->createDeleteForm($entity)->createView();
        }

        $deleteForms = array();
        foreach ($query->getQuery()->getResult() as $entity) {
            $deleteForms[$entity->getId()] = $this->createDeleteForm($entity)->createView();
        }

            
        return $this->render('ISETSOMagazineBundle:local:index.html.twig', array(
            'padding' => $entityManager->createPaginator($query ,$request),
            'form'=> $form->createView(),
            'deleteForms' => $deleteForms
        ));
    }

    /**
     * Creates a new Local entity.
     *
     * @Route("/new", name="local_new")
     * @Method({"GET", "POST"})
     * @Security("is_granted('Add', 'ROLE_GESTION_LOCAL') or is_granted('Manager', 'ROLE_GESTION_LOCAL')")
     */
    public function newAction(Request $request)
    {
        $local = new Local();
        $form = $this->createForm(LocalType::class, $local);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // persite le entité
            $this->getEntityManager()->save($local , $this->getUser());
            // flash un message
            $this->addFlash('msg',$this->get('translator')->trans(self::MSG_NEW));
            // creé un historique pour cette user
            $this->getHistoryManager()->insertAddUserHistory(self::ROLE,$this->getUser(),self::MSG_NEW);
            
            return $this->redirectToRoute('local_index');
        }

        return $this->render('ISETSOMagazineBundle:local:new.html.twig', array(
            'local' => $local,
            'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Local entity.
     *
     * @Route("/{id}/edit", name="local_edit")
     * @Method({"GET", "POST"})
     * @Security("is_granted('Edit', 'ROLE_GESTION_LOCAL') and local.isAuthor(user)  or is_granted('Manager', 'ROLE_GESTION_LOCAL')")
     */
    public function editAction(Request $request, Local $local)
    {
        $deleteForm = $this->createDeleteForm($local);
        $editForm = $this->createForm(LocalType::class, $local);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            // persite le entité
            $this->getEntityManager()->save($local);
            // flash un message
            $this->addFlash('msg', $this->get('translator')->trans(self::MSG_EDIT));
            // creé un historique pour cette user
            $this->getHistoryManager()->insertEditUserHistory(self::ROLE,$this->getUser(),self::MSG_EDIT);
            
            return $this->redirectToRoute('local_index');
        }

        return $this->render('ISETSOMagazineBundle:local:edit.html.twig', array(
            'local' => $local,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Local entity.
     *
     * @Route("/{id}", name="local_delete")
     * @Method("DELETE")
     * @Security("is_granted('Delete', 'ROLE_GESTION_LOCAL') and local.isAuthor(user) or is_granted('Manager', 'ROLE_GESTION_LOCAL')")
     */
    public function deleteAction(Request $request, Local $local)
    {
        $form = $this->createDeleteForm($local);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // supprimeé le entité
            $this->getEntityManager()->delete($local);
            // flash un message
            $this->addFlash('msg', $this->get('translator')->trans(self::MSG_DELETE) );
            // creé un historique pour cette user
            $this->getHistoryManager()->insertDeleteUserHistory(self::ROLE,$this->getUser(),self::MSG_DELETE);
        }

        return $this->redirectToRoute('local_index');
    }

    /**
     * Creates a form to delete a Local entity.
     *
     * @param Local $local The Local entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Local $local)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('local_delete', array('id' => $local->getId())))
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
