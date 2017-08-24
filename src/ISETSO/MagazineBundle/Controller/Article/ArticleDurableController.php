<?php

namespace ISETSO\MagazineBundle\Controller\Article;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use ISETSO\MagazineBundle\Entity\Article\ArticleDurable;
use ISETSO\MagazineBundle\Form\Article\ArticleDurableType;
use ISETSO\MagazineBundle\Form\Search\SearchType;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * ArticleDurable controller.
 *
 * @Route("/articledurable")
 * @Security("user.isSuperAdmin() or has_role('ROLE_GESTION_ARTICLE')")
 */
class ArticleDurableController extends Controller
{
    const ROLE = 'ROLE_GESTION_ARTICLE';
    const MSG_NEW = 'articleConsumable.flash.created';
    const MSG_EDIT = 'articleConsumable.flash.updated';
    const MSG_DELETE = 'articleConsumable.flash.deleted';

    /**
     * Lists all ArticleDurable entities.
     *
     * @Route("/", name="articledurable_index")
     * @Method({"GET", "POST"})
     * @Security("is_granted('View', 'ROLE_GESTION_ARTICLE') or is_granted('Manager', 'ROLE_GESTION_ARTICLE')")
     */
    public function indexAction(Request $request )
    {
        $entityManager = $this->getEntityManager();
        $form = $this->createForm(SearchType::class)->handleRequest($request);

        // récupiré le requéte a partir de information déja collecter
        $query = $entityManager->getEntityBy($this->getDoctrine()->getRepository(ArticleDurable::class),$this->getUser() ,self::ROLE, $form);

         // creé le delete form
        $deleteForms = array();
        foreach ($query->getQuery()->getResult() as $entity) {
            $deleteForms[$entity->getId()] = $this->createDeleteForm($entity)->createView();
        }
        
        return $this->render('ISETSOMagazineBundle:articledurable:index.html.twig', array(
            'padding' => $entityManager->createPaginator($query ,$request),
            'form'=> $form->createView(),
            'deleteForms' => $deleteForms
        ));
    }

    /**
     * Creates a new ArticleDurable entity.
     *
     * @Route("/new", name="articledurable_new")
     * @Method({"GET", "POST"})
     * @Security("is_granted('Add', 'ROLE_GESTION_ARTICLE') or is_granted('Manager', 'ROLE_GESTION_ARTICLE')")
     */
    public function newAction(Request $request)
    {
        $articleDurable = new ArticleDurable();
        $form = $this->createForm(ArticleDurableType::class, $articleDurable);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // persite le entité
            $this->getEntityManager()->save($articleDurable , $this->getUser());

            // flash un message
            $this->addFlash( 'msg',$this->get('translator')->trans(self::MSG_NEW));

            // creé un historique pour cette user
            $this->getHistoryManager()->insertAddUserHistory(self::ROLE,$this->getUser(),self::MSG_NEW);

            return $this->redirectToRoute('articledurable_index');
        }

        return $this->render('ISETSOMagazineBundle:articledurable:new.html.twig', array(
            'articleDurable' => $articleDurable,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ArticleDurable entity.
     *
     * @Route("/{id}", name="articledurable_show")
     * @Method("GET")
     * @Security("is_granted('View', 'ROLE_GESTION_ARTICLE') or is_granted('Manager', 'ROLE_GESTION_ARTICLE')")
     */
    public function showAction(ArticleDurable $articleDurable)
    {
        return $this->render('ISETSOMagazineBundle:articledurable:show.html.twig', array(
            'articleDurable' => $articleDurable,
        ));
    }

    /**
     * Displays a form to edit an existing ArticleDurable entity.
     *
     * @Route("/{id}/edit", name="articledurable_edit")
     * @Method({"GET", "POST"})
     * @Security("is_granted('Edit', 'ROLE_GESTION_ARTICLE') and articleDurable.isAuthor(user) or is_granted('Manager', 'ROLE_GESTION_ARTICLE')")
     */
    public function editAction(Request $request, ArticleDurable $articleDurable)
    {
        $deleteForm = $this->createDeleteForm($articleDurable);
        $editForm = $this->createForm(ArticleDurableType::class, $articleDurable);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            // persite le entité
            $this->getEntityManager()->save($articleDurable);
            // flash un message
            $this->addFlash('msg', $this->get('translator')->trans(self::MSG_EDIT));
            // creé un historique pour cette user
            $this->getHistoryManager()->insertEditUserHistory(self::ROLE,$this->getUser(),self::MSG_EDIT);
            
            return $this->redirectToRoute('articledurable_index');
        }

        return $this->render('ISETSOMagazineBundle:articledurable:edit.html.twig', array(
            'articleDurable' => $articleDurable,
            'edit_form' => $editForm->createView(),
        ));
    }

    /**
     * Deletes a ArticleDurable entity.
     *
     * @Route("/{id}", name="articledurable_delete")
     * @Method("DELETE")
     * @Security("is_granted('delete', 'ROLE_GESTION_ARTICLE') and articleDurable.isAuthor(user) or is_granted('Manager', 'ROLE_GESTION_ARTICLE')")
     */
    public function deleteAction(Request $request, ArticleDurable $articleDurable)
    {
        $form = $this->createDeleteForm($articleDurable);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // supprimeé le entité
            $this->getEntityManager()->delete($articleDurable);
            // flash un message
            $this->addFlash('msg', $this->get('translator')->trans(self::MSG_DELETE) );
            // creé un historique pour cette user
            $this->getHistoryManager()->insertDeleteUserHistory(self::ROLE,$this->getUser(),self::MSG_DELETE);
        }

        return $this->redirectToRoute('articledurable_index');
    }

    /**
     * Creates a form to delete a ArticleDurable entity.
     *
     * @param ArticleDurable $articleDurable The ArticleDurable entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ArticleDurable $articleDurable)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('articledurable_delete', array('id' => $articleDurable->getId())))
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
