<?php

namespace ISETSO\MagazineBundle\Controller\Journal;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use ISETSO\MagazineBundle\Entity\Journal\Origin;
use ISETSO\MagazineBundle\Form\Journal\OriginType;
use ISETSO\MagazineBundle\Form\Search\SearchType;

use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * Origin controller.
 *
 * @Route("/origin")
 * @Security("user.isSuperAdmin() or has_role('ROLE_GESTION_ORIGIN')")
 */
class OriginController extends Controller
{
    const ROLE = 'ROLE_GESTION_ORIGIN';
    const MSG_NEW = 'origin.flash.created';
    const MSG_EDIT = 'origin.flash.updated';
    const MSG_DELETE = 'origin.flash.deleted';

    /**
     * Lists all Origin entities.
     *
     * @Route("/", name="origin_index")
     * @Method({"GET", "POST"})
     * @Security("is_granted('View', 'ROLE_GESTION_ORIGIN') or is_granted('Manager', 'ROLE_GESTION_ORIGIN')")
     */
    public function indexAction(Request $request )
    {
        $entityManager = $this->getEntityManager();
        $form = $this->createForm(SearchType::class)->handleRequest($request);

        // récupiré le requéte a partir de information déja collecter
        $query = $entityManager->getEntityBy($this->getDoctrine()->getRepository(Origin::class), $this->getUser() ,self::ROLE, $form);

        // creé le delete form
        $deleteForms = array();
        foreach ($query->getQuery()->getResult() as $entity) {
            $deleteForms[$entity->getId()] = $this->createDeleteForm($entity)->createView();
        }

        return $this->render('ISETSOMagazineBundle:origin:index.html.twig', array(
            'padding' => $entityManager->createPaginator($query ,$request),
            'form'=> $form->createView(),
            'deleteForms' => $deleteForms
        ));
    }

    /**
     * Creates a new Origin entity.
     *
     * @Route("/new", name="origin_new")
     * @Method({"GET", "POST"})
     * @Security("is_granted('Add', 'ROLE_GESTION_ORIGIN') or is_granted('Manager', 'ROLE_GESTION_ORIGIN')")
     */
    public function newAction(Request $request)
    {
        $origin = new Origin();
        $form = $this->createForm(OriginType::class, $origin);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // persite le entité
            $this->getEntityManager()->save($origin , $this->getUser());

            // flash un message
            $this->addFlash('msg',$this->get('translator')->trans(self::MSG_NEW));

            // creé un historique pour cette user
            $this->getHistoryManager()->insertAddUserHistory(self::ROLE,$this->getUser(),self::MSG_NEW); 
            return $this->redirectToRoute('origin_index');
            

        }

        return $this->render('ISETSOMagazineBundle:origin:new.html.twig', array(
            'origin' => $origin,
            'form' => $form->createView(),
        ));
    }
    

    /**
     * Displays a form to edit an existing Origin entity.
     *
     * @Route("/{id}/edit", name="origin_edit")
     * @Method({"GET", "POST"})
     * @Security("is_granted('Edit', 'ROLE_GESTION_ORIGIN')  and origin.isAuthor(user) or is_granted('Manager', 'ROLE_GESTION_ORIGIN')")
     */
    public function editAction(Request $request, Origin $origin)
    {
        $deleteForm = $this->createDeleteForm($origin);
        $editForm = $this->createForm(OriginType::class, $origin);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            // persite le entité
            $this->getEntityManager()->save($origin);
            // flash un message
            $this->addFlash('msg', $this->get('translator')->trans(self::MSG_EDIT));
            // creé un historique pour cette user
            $this->getHistoryManager()->insertEditUserHistory(self::ROLE,$this->getUser(),self::MSG_EDIT);
            
            return $this->redirectToRoute('origin_index');
        }

        return $this->render('ISETSOMagazineBundle:origin:edit.html.twig', array(
            'origin' => $origin,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Origin entity.
     *
     * @Route("/{id}", name="origin_delete")
     * @Method("DELETE")
     * @Security("is_granted('Delete', 'ROLE_GESTION_ORIGIN')  and origin.isAuthor(user) or is_granted('Manager', 'ROLE_GESTION_ORIGIN')")
     */
    public function deleteAction(Request $request, Origin $origin)
    {
        $form = $this->createDeleteForm($origin);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // supprimeé le entité
            $this->getEntityManager()->delete($origin);
            // flash un message
            $this->addFlash('msg', $this->get('translator')->trans(self::MSG_DELETE) );
            // creé un historique pour cette user
            $this->getHistoryManager()->insertDeleteUserHistory(self::ROLE,$this->getUser(),self::MSG_DELETE);
        }

        return $this->redirectToRoute('origin_index');
    }

    /**
     * Creates a form to delete a Origin entity.
     *
     * @param Origin $origin The Origin entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Origin $origin)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('origin_delete', array('id' => $origin->getId())))
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
