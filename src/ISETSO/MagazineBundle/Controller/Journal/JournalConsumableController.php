<?php

namespace ISETSO\MagazineBundle\Controller\Journal;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\Response;

use ISETSO\MagazineBundle\Entity\Journal\JournalConsumable;
use ISETSO\MagazineBundle\Form\Journal\JournalConsumableType;
use ISETSO\MagazineBundle\Entity\Journal\SupportingDocument;
use ISETSO\MagazineBundle\Form\Journal\SupportingDocumentConsumableType;
use ISETSO\MagazineBundle\Form\Search\SearchWithDateType;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

use ISETSO\MagazineBundle\Controller\PDF\PDFController;

/**
 * JournalConsumable controller.
 *
 * @Route("/journalconsumable")
 * @Security("user.isSuperAdmin() or has_role('ROLE_GESTION_JOURNAL')")
 */
class JournalConsumableController extends Controller
{
    const ROLE = 'ROLE_GESTION_JOURNAL';
    const MSG_NEW = 'journalConsumable.flash.created';
    const MSG_EDIT = 'journalConsumable.flash.updated';
    const MSG_DELETE = 'journalConsumable.flash.deleted';
    const SESSION_NAME = 'SupportingDocumentConsumable';

    /**
     * Lists all JournalConsumable entities.
     *
     * @Route("/", name="journalconsumable_index")
     * @Method({"GET", "POST"})
     * @Security("is_granted('View', 'ROLE_GESTION_JOURNAL') or is_granted('Manager', 'ROLE_GESTION_JOURNAL')")
     */
    public function indexAction(Request $request )
    {
        //$time = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];
        $entityManager = $this->getEntityManager();
        $form = $this->createForm(SearchWithDateType::class)->handleRequest($request);

        // récupiré le requéte a partir de information déja collecter
        $query = $entityManager->getEntityBy($this->getDoctrine()->getRepository(JournalConsumable::class), $this->getUser() ,self::ROLE, $form);

        // creé le delete form
        $deleteForms = array();
        foreach ($query->getQuery()->getResult() as $entity) {
            $deleteForms[$entity->getId()] = $this->createDeleteForm($entity)->createView();
        }

        // imprimé pdf
        if ($request->request->get('print')!= null && $request->request->get('print')){
            return $entityManager->getPDF($this->renderView($this->getParameter('journal_pdf'), array('journal' => $query->getQuery()->getResult())));
        }
            
        return $this->render('ISETSOMagazineBundle:journalconsumable:index.html.twig', array(
            'padding' => $entityManager->createPaginator($query ,$request),
            'form'=> $form->createView(),
            'deleteForms' => $deleteForms
        ));
    }

    /**
     * Creates a new JournalConsumable entity.
     *
     * @Route("/new", name="journalconsumable_new", options={"expose"=true})
     * @Method({"GET", "POST"})
     * @Security("is_granted('Add', 'ROLE_GESTION_JOURNAL')  or is_granted('Manager', 'ROLE_GESTION_JOURNAL')")
     */
    public function newAction(Request $request)
    {
        $journalConsumable = new JournalConsumable();
        $form = $this->createForm(JournalConsumableType::class, $journalConsumable)->handleRequest($request);

        $formSupportingDocument = $this->createForm(SupportingDocumentConsumableType::class, new SupportingDocument())->handleRequest($request);

        $session = $this->getRequest()->getSession();

        if ($form->isSubmitted() && $form->isValid() && $session->has(self::SESSION_NAME) && !$session->get(self::SESSION_NAME)->isEmpty()) {
            
            $this->getEntityManager()->saveJournalConsumable($journalConsumable ,$session->get(self::SESSION_NAME) , $this->getUser());
            $session->set(self::SESSION_NAME, new ArrayCollection());
            $this->addFlash('msg',$this->get('translator')->trans(self::MSG_NEW));
            $this->getHistoryManager()->insertAddUserHistory(self::ROLE,$this->getUser(),self::MSG_NEW);
            
            return $this->redirectToRoute('journalconsumable_index');
        }

        return $this->render('ISETSOMagazineBundle:journalconsumable:new.html.twig', array(
            'journalConsumable' => $journalConsumable,
            'form' => $form->createView(),
            'formSupportingDocument'=> $formSupportingDocument->createView()
        ));
    }

    /**
     * Finds and displays a JournalConsumable entity.
     *
     * @Route("/{id}", name="journalconsumable_show")
     * @Method("GET")
     * @Security("is_granted('View', 'ROLE_GESTION_JOURNAL')  or is_granted('Manager', 'ROLE_GESTION_JOURNAL')")
     */
    public function showAction(JournalConsumable $journalConsumable)
    {
        // imprimé pdf
        if ($this->getRequest()->query->get('print')!= null && $this->getRequest()->query->get('print')){
            return $this->getEntityManager()->getPDF($this->renderView($this->getParameter('journal_detail_pdf'), array('journal' => $journalConsumable)));
        }

        return $this->render('ISETSOMagazineBundle:journalconsumable:show.html.twig', array(
            'journalConsumable' => $journalConsumable
        ));
    }

    /**
     * Displays a form to edit an existing JournalConsumable entity.
     *
     * @Route("/edit/{id}", name="journalconsumable_edit")
     * @Method({"GET", "POST"})
     * @Security("is_granted('Edit', 'ROLE_GESTION_JOURNAL') and journalConsumable.isAuthor(user)  or is_granted('Manager', 'ROLE_GESTION_JOURNAL')")
     */
    public function editAction(Request $request, JournalConsumable $journalConsumable)
    {
        $editForm = $this->createForm(JournalConsumableType::class, $journalConsumable);
        $editForm->handleRequest($request);

        $formSupportingDocument = $this->createForm(SupportingDocumentConsumableType::class, new SupportingDocument())->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
           // persite le entité
            $this->getEntityManager()->save($journalConsumable);
            // flash un message
            $this->addFlash('msg', $this->get('translator')->trans(self::MSG_EDIT));
            // creé un historique pour cette user
            $this->getHistoryManager()->insertEditUserHistory(self::ROLE,$this->getUser(),self::MSG_EDIT);
            
            return $this->redirectToRoute('journalconsumable_index');
        }

        return $this->render('ISETSOMagazineBundle:journalconsumable:edit.html.twig', array(
            'form' => $editForm->createView(),
            'formSupportingDocument'=> $formSupportingDocument->createView()
        ));
    }

    /**
     * Deletes a JournalConsumable entity.
     *
     * @Route("/{id}", name="journalconsumable_delete")
     * @Method("DELETE")
     * @Security("is_granted('Delete', 'ROLE_GESTION_JOURNAL') and journalConsumable.isAuthor(user)  or is_granted('Manager', 'ROLE_GESTION_JOURNAL')")")
     */
    public function deleteAction(Request $request, JournalConsumable $journalConsumable)
    {
        $form = $this->createDeleteForm($journalConsumable)->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // supprimeé le entité
            $this->getEntityManager()->delete($journalConsumable , $journalConsumable->getSupportingDocument());
            // flash un message
            $this->addFlash('msg', $this->get('translator')->trans(self::MSG_DELETE) );
            // creé un historique pour cette user
            $this->getHistoryManager()->insertDeleteUserHistory(self::ROLE,$this->getUser(),self::MSG_DELETE);
        }

        return $this->redirectToRoute('journalconsumable_index');
    }

    /**
     * Creates a form to delete a JournalConsumable entity.
     *
     * @param JournalConsumable $journalConsumable The JournalConsumable entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(JournalConsumable $journalConsumable)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('journalconsumable_delete', array('id' => $journalConsumable->getId())))
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
