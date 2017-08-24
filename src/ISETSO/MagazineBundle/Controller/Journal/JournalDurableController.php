<?php

namespace ISETSO\MagazineBundle\Controller\Journal;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\Response;

use ISETSO\MagazineBundle\Entity\Journal\JournalDurable;
use ISETSO\MagazineBundle\Form\Journal\JournalDurableType;
use ISETSO\MagazineBundle\Entity\Journal\SupportingDocument;
use ISETSO\MagazineBundle\Form\Journal\SupportingDocumentDurableType;
use ISETSO\MagazineBundle\Form\Search\SearchWithDateType;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * JournalDurable controller.
 *
 * @Route("/journaldurable")
 * @Security("user.isSuperAdmin() or has_role('ROLE_GESTION_JOURNAL')")
 */
class JournalDurableController extends Controller
{
    const ROLE = 'ROLE_GESTION_JOURNAL';
    const MSG_NEW = 'journalDurable.flash.created';
    const MSG_EDIT = 'journalDurable.flash.updated';
    const MSG_DELETE = 'journalDurable.flash.deleted';
    const SESSION_NAME = 'SupportingDocumentDurable';

    /**
     * Lists all JournalDurable entities.
     *
     * @Route("/", name="journaldurable_index")
     * @Method({"GET", "POST"})
     * @Security("is_granted('View', 'ROLE_GESTION_JOURNAL') or is_granted('Manager', 'ROLE_GESTION_JOURNAL')")
     */
    public function indexAction(Request $request )
    {
        $entityManager = $this->getEntityManager();
        $form = $this->createForm(SearchWithDateType::class)->handleRequest($request);

        // récupiré le requéte a partir de information déja collecter
        $query = $entityManager->getEntityBy($this->getDoctrine()->getRepository(JournalDurable::class), $this->getUser() ,self::ROLE, $form);

        // creé le delete form
        $deleteForms = array();
        foreach ($query->getQuery()->getResult() as $entity) {
            $deleteForms[$entity->getId()] = $this->createDeleteForm($entity)->createView();
        }

        // imprimé pdf
        if ($request->request->get('print')!= null && $request->request->get('print')){
            return $entityManager->getPDF($this->renderView($this->getParameter('journal_pdf'), array('journal' => $query->getQuery()->getResult())));
        }
            
        return $this->render('ISETSOMagazineBundle:journaldurable:index.html.twig', array(
            'padding' => $entityManager->createPaginator($query ,$request),
            'form'=> $form->createView(),
            'deleteForms' => $deleteForms
        ));
    }

    /**
     * Creates a new JournalDurable entity.
     *
     * @Route("/new", name="journaldurable_new")
     * @Method({"GET", "POST"})
     * @Security("is_granted('Add', 'ROLE_GESTION_JOURNAL') or is_granted('Manager', 'ROLE_GESTION_JOURNAL')")
     */
    public function newAction(Request $request)
    {
        $journalDurable = new JournalDurable();
        $form = $this->createForm(JournalDurableType::class, $journalDurable)->handleRequest($request);

        $formSupportingDocument = $this->createForm(SupportingDocumentDurableType::class, new SupportingDocument())->handleRequest($request);

        $session = $this->getRequest()->getSession();

        if ($form->isSubmitted() && $form->isValid()&& $session->has(self::SESSION_NAME) && !$session->get(self::SESSION_NAME)->isEmpty()) {
            
            $this->getEntityManager()->saveJournalDurable($journalDurable ,$session->get(self::SESSION_NAME) , $this->getUser());
            $session->set(self::SESSION_NAME, new ArrayCollection());
            $this->addFlash('msg',$this->get('translator')->trans(self::MSG_NEW));
            $this->getHistoryManager()->insertAddUserHistory(self::ROLE,$this->getUser(),self::MSG_NEW);

            return $this->redirectToRoute('journaldurable_index');
            

        }

        return $this->render('ISETSOMagazineBundle:journaldurable:new.html.twig', array(
            'journal' => $journalDurable,
            'form' => $form->createView(),
            'formSupportingDocument'=> $formSupportingDocument->createView()
        ));
    }

    /**
     * Finds and displays a JournalDurable entity.
     *
     * @Route("/{id}", name="journaldurable_show")
     * @Method("GET")
     * @Security("is_granted('View', 'ROLE_GESTION_JOURNAL') or is_granted('Manager', 'ROLE_GESTION_JOURNAL')")
     */
    public function showAction(JournalDurable $journalDurable)
    {
        if ($this->getRequest()->query->get('print')!= null && $this->getRequest()->query->get('print')){
            return $this->getEntityManager()->getPDF($this->renderView($this->getParameter('journal_detail_pdf'), array('journal' => $journalDurable)));
        }

        return $this->render('ISETSOMagazineBundle:journaldurable:show.html.twig', array(
            'journalDurable' => $journalDurable,
        ));
    }

    /**
     * Displays a form to edit an existing JournalDurable entity.
     *
     * @Route("/edit/{id}", name="journaldurable_edit")
     * @Method({"GET", "POST"})
     * @Security("is_granted('Edit', 'ROLE_GESTION_JOURNAL') and journalDurable.isAuthor(user) or is_granted('Manager', 'ROLE_GESTION_JOURNAL')")
     */
    public function editAction(Request $request, JournalDurable $journalDurable )
    {
        $editForm = $this->createForm(JournalDurableType::class, $journalDurable);
        $editForm->handleRequest($request);

        $formSupportingDocument = $this->createForm(SupportingDocumentDurableType::class, new SupportingDocument())->handleRequest($request);
        
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            // persite le entité
            $this->getEntityManager()->save($journalDurable);
            // flash un message
            $this->addFlash('msg', $this->get('translator')->trans(self::MSG_EDIT));
            // creé un historique pour cette user
            $this->getHistoryManager()->insertEditUserHistory(self::ROLE,$this->getUser(),self::MSG_EDIT);

            return $this->redirectToRoute('journaldurable_index');
        }

        return $this->render('ISETSOMagazineBundle:journaldurable:edit.html.twig', array(
            'journal' => $journalDurable,
            'form' => $editForm->createView(),
            'formSupportingDocument'=> $formSupportingDocument->createView()
        ));
    }

    /**
     * Deletes a JournalDurable entity.
     *
     * @Route("/{id}", name="journaldurable_delete")
     * @Method("DELETE")
     * @Security("is_granted('Delete', 'ROLE_GESTION_JOURNAL')  and journalDurable.isAuthor(user) or is_granted('Manager', 'ROLE_GESTION_JOURNAL')")
     */
    public function deleteAction(Request $request, JournalDurable $journalDurable)
    {
        $form = $this->createDeleteForm($journalDurable);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // supprimeé le entité
            $this->getEntityManager()->delete($journalDurable , $journalDurable->getSupportingDocument());
            // flash un message
            $this->addFlash('msg', $this->get('translator')->trans(self::MSG_DELETE) );
            // creé un historique pour cette user
            $this->getHistoryManager()->insertDeleteUserHistory(self::ROLE,$this->getUser(),self::MSG_DELETE);
        }

        return $this->redirectToRoute('journaldurable_index');
    }

    /**
     * Creates a form to delete a JournalDurable entity.
     *
     * @param JournalDurable $journalDurable The JournalDurable entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(JournalDurable $journalDurable)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('journaldurable_delete', array('id' => $journalDurable->getId())))
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
