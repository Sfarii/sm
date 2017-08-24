<?php

namespace ISETSO\MagazineBundle\Controller\Article;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use ISETSO\MagazineBundle\Entity\Article\Unit;
use ISETSO\MagazineBundle\Form\Article\UnitType;
use ISETSO\MagazineBundle\Form\Search\SearchType;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * Unit controller.
 *
 * @Route("/unit")
 * @Security("user.isSuperAdmin() or has_role('ROLE_GESTION_UNIT')")
 */
class UnitController extends Controller
{
    const ROLE = 'ROLE_GESTION_UNIT';
    const MSG_NEW = 'unit.flash.created';
    const MSG_EDIT = 'unit.flash.updated';
    const MSG_DELETE = 'unit.flash.deleted';

    /**
     * Lists all Unit entities.
     *
     * @Route("/", name="unit_index")
     * @Method({"GET", "POST"})
     * @Security("is_granted('View', 'ROLE_GESTION_UNIT') or is_granted('Manager', 'ROLE_GESTION_UNIT')")
     */
    public function indexAction(Request $request )
    {
        $entityManager = $this->getEntityManager();
        $form = $this->createForm(SearchType::class)->handleRequest($request);

        // récupiré le requéte a partir de information déja collecter
        $query = $entityManager->getEntityBy($this->getDoctrine()->getRepository(Unit::class), $this->getUser() ,self::ROLE, $form);

        // creé le delete form
        $deleteForms = array();
        foreach ($query->getQuery()->getResult() as $entity) {
            $deleteForms[$entity->getId()] = $this->createDeleteForm($entity)->createView();
        }
            
        return $this->render('ISETSOMagazineBundle:unit:index.html.twig', array(
            'padding' => $entityManager->createPaginator($query ,$request),
            'form'=> $form->createView(),
            'deleteForms' => $deleteForms
        ));
    }

    /**
     * Creates a new Unit entity.
     *
     * @Route("/new", name="unit_new")
     * @Method({"GET", "POST"})
     * @Security("is_granted('Add', 'ROLE_GESTION_UNIT') or is_granted('Manager', 'ROLE_GESTION_UNIT')")
     */
    public function newAction(Request $request)
    {
        $unit = new Unit();
        $form = $this->createForm(UnitType::class, $unit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // persite le entité
            $this->getEntityManager()->save($unit , $this->getUser());

            // flash un message
            $this->addFlash('msg',$this->get('translator')->trans(self::MSG_NEW));

            // creé un historique pour cette user
            $this->getHistoryManager()->insertAddUserHistory(self::ROLE,$this->getUser(),self::MSG_NEW); 

            return $this->redirectToRoute('unit_index');
        }

        return $this->render('ISETSOMagazineBundle:unit:new.html.twig', array(
            'unit' => $unit,
            'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Unit entity.
     *
     * @Route("/{id}/edit", name="unit_edit")
     * @Method({"GET", "POST"})
     * @Security("is_granted('Edit', 'ROLE_GESTION_UNIT') and unit.isAuthor(user) or is_granted('Manager', 'ROLE_GESTION_UNIT')")
     */
    public function editAction(Request $request, Unit $unit)
    {
        $deleteForm = $this->createDeleteForm($unit);
        $editForm = $this->createForm(UnitType::class, $unit);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            // persite le entité
            $this->getEntityManager()->save($unit);
            // flash un message
            $this->addFlash('msg', $this->get('translator')->trans(self::MSG_EDIT));
            // creé un historique pour cette user
            $this->getHistoryManager()->insertEditUserHistory(self::ROLE,$this->getUser(),self::MSG_EDIT);
            
            return $this->redirectToRoute('unit_index');
        }

        return $this->render('ISETSOMagazineBundle:unit:edit.html.twig', array(
            'unit' => $unit,
            'edit_form' => $editForm->createView(),
        ));
    }

    /**
     * Deletes a Unit entity.
     *
     * @Route("/{id}", name="unit_delete")
     * @Method("DELETE")
     * @Security("is_granted('Delete', 'ROLE_GESTION_UNIT') and unit.isAuthor(user) or is_granted('Manager', 'ROLE_GESTION_UNIT')")
     */
    public function deleteAction(Request $request, Unit $unit)
    {
        $form = $this->createDeleteForm($unit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // supprimeé le entité
            $this->getEntityManager()->delete($unit);
            // flash un message
            $this->addFlash('msg', $this->get('translator')->trans(self::MSG_DELETE) );
            // creé un historique pour cette user
            $this->getHistoryManager()->insertDeleteUserHistory(self::ROLE,$this->getUser(),self::MSG_DELETE);
        }

        return $this->redirectToRoute('unit_index');
    }

    /**
     * Creates a form to delete a Unit entity.
     *
     * @param Unit $unit The Unit entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Unit $unit)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('unit_delete', array('id' => $unit->getId())))
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
