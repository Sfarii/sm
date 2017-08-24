<?php

namespace ISETSO\MagazineBundle\Controller\Magazine;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use ISETSO\MagazineBundle\Entity\Magazine\Magazine;
use ISETSO\MagazineBundle\Form\Magazine\MagazineType;
use ISETSO\MagazineBundle\Form\Search\SearchType;
use ISETSO\MagazineBundle\Entity\ArticleManagement\DischargeArticleToMagazine;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * Magazine controller.
 *
 * @Route("/magazine")
 * @Security("user.isSuperAdmin() or has_role('ROLE_GESTION_MAGAZINE')")
 */
class StoreController extends Controller
{
    const ROLE = 'ROLE_GESTION_MAGAZINE';
    const MSG_NEW = 'magazin.flash.created';
    const MSG_EDIT = 'magazin.flash.updated';
    const MSG_DELETE = 'magazin.flash.deleted';

    /**
     * Lists all Magazine entities.
     *
     * @Route("/", name="magazine_index")
     * @Method({"GET", "POST"})
     * @Security("is_granted('View', 'ROLE_GESTION_MAGAZINE') or is_granted('Manager', 'ROLE_GESTION_MAGAZINE')")
     */
    public function indexAction(Request $request )
    {
        $entityManager = $this->getEntityManager();
        $form = $this->createForm(SearchType::class)->handleRequest($request);

        // récupiré le requéte a partir de information déja collecter
        $query = $entityManager->getEntityBy($this->getDoctrine()->getRepository(Magazine::class), $this->getUser() ,self::ROLE, $form);

         // creé le delete form
        $deleteForms = array();
        foreach ($query->getQuery()->getResult() as $entity) {
            $deleteForms[$entity->getId()] = $this->createDeleteForm($entity)->createView();
        }

        return $this->render('ISETSOMagazineBundle:magazine:index.html.twig', array(
            'padding' => $entityManager->createPaginator($query ,$request),
            'form'=> $form->createView(),
            'deleteForms' => $deleteForms
        ));
    }

    /**
     * Creates a new Magazine entity.
     *
     * @Route("/new", name="magazine_new")
     * @Method({"GET", "POST"})
     * @Security("is_granted('new', 'ROLE_GESTION_MAGAZINE') or is_granted('Manager', 'ROLE_GESTION_MAGAZINE')")
     */
    public function newAction(Request $request)
    {
        $magazine = new Magazine();
        $form = $this->createForm(MagazineType::class, $magazine);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // persite le entité
            $this->getEntityManager()->save($magazine , $this->getUser());

            // flash un message
            $this->addFlash('msg',$this->get('translator')->trans(self::MSG_NEW));

            // creé un historique pour cette user
            $this->getHistoryManager()->insertAddUserHistory(self::ROLE,$this->getUser(),self::MSG_NEW); 
            return $this->redirectToRoute('magazine_index');
            

        }

        return $this->render('ISETSOMagazineBundle:magazine:new.html.twig', array(
            'magazine' => $magazine,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Magazine entity.
     *
     * @Route("/{id}", name="magazine_show")
     * @Method("GET")
     * @Security("is_granted('View', 'ROLE_GESTION_MAGAZINE') or is_granted('Manager', 'ROLE_GESTION_MAGAZINE')")
     */
    public function showAction(Magazine $magazine , Request $request)
    {   
        $query = $this->getJournalManager()->getAllMagazineDischarge($magazine->getId());
        $form = $this->createForm(SearchType::class)->handleRequest($request);

        return $this->render('ISETSOMagazineBundle:magazine:show.html.twig', array(
            'magazine' => $this->getEntityManager()->createPaginator($query ,$request),
            'magazine_info'=> $magazine,
            'form' => $form->createView()

        ));
    }

    /**
     * Displays a form to edit an existing Magazine entity.
     *
     * @Route("/{id}/edit", name="magazine_edit")
     * @Method({"GET", "POST"})
     * @Security("is_granted('Edit', 'ROLE_GESTION_MAGAZINE') and magazine.isAuthor(user) or is_granted('Manager', 'ROLE_GESTION_MAGAZINE')")
    **/
    public function editAction(Request $request, Magazine $magazine)
    {
        $deleteForm = $this->createDeleteForm($magazine);
        $editForm = $this->createForm(MagazineType::class, $magazine);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            // persite le entité
            $this->getEntityManager()->save($family);
            // flash un message
            $this->addFlash('msg', $this->get('translator')->trans(self::MSG_EDIT));
            // creé un historique pour cette user
            $this->getHistoryManager()->insertEditUserHistory(self::ROLE,$this->getUser(),self::MSG_EDIT);
            return $this->redirectToRoute('magazine_index');
        }

        return $this->render('ISETSOMagazineBundle:magazine:edit.html.twig', array(
            'magazine' => $magazine,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Magazine entity.
     *
     * @Route("/{id}", name="magazine_delete")
     * @Method("DELETE")
     * @Security("is_granted('Delete', 'ROLE_GESTION_MAGAZINE') and magazine.isAuthor(user) or is_granted('Manager', 'ROLE_GESTION_MAGAZINE')")
     */
    public function deleteAction(Request $request, Magazine $magazine)
    {
        $form = $this->createDeleteForm($magazine);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // supprimeé le entité
            $this->getEntityManager()->delete($magazine);
            // flash un message
            $this->addFlash('msg', $this->get('translator')->trans(self::MSG_DELETE) );
            // creé un historique pour cette user
            $this->getHistoryManager()->insertDeleteUserHistory(self::ROLE,$this->getUser(),self::MSG_DELETE);
        }

        return $this->redirectToRoute('magazine_index');
    }

    /**
     * Creates a form to delete a Magazine entity.
     *
     * @param Magazine $magazine The Magazine entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Magazine $magazine)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('magazine_delete', array('id' => $magazine->getId())))
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

    /**
     * récupiré un service
     *
     * @return ISETSO\MagazineBundle\Services\JournalManager
     */
    private function getJournalManager(){
        if (!$this->has('magazine.journal_manager')){
           throw $this->createNotFoundException('Service Not Found');
        }
        return $this->get('magazine.journal_manager');
    }
}
