<?php

namespace ISETSO\MagazineBundle\Controller\Article;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use ISETSO\MagazineBundle\Entity\Article\ArticleConsumable;
use ISETSO\MagazineBundle\Form\Article\ArticleConsumableType;
use ISETSO\MagazineBundle\Form\Search\SearchType;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * ArticleConsumable controller.
 *
 * @Route("/articleconsumable")
 * @Security("user.isSuperAdmin() or has_role('ROLE_GESTION_ARTICLE')")
 *
 */
class ArticleConsumableController extends Controller 
{
    const ROLE = 'ROLE_GESTION_ARTICLE';
    const MSG_NEW = 'articleConsumable.flash.created';
    const MSG_EDIT = 'articleConsumable.flash.updated';
    const MSG_DELETE = 'articleConsumable.flash.deleted';

    /**
     * Lists all ArticleConsumable entities.
     *
     * @Route("/", name="articleconsumable_index")
     * @Method({"GET", "POST"})
     * @Security("is_granted('View', 'ROLE_GESTION_ARTICLE') or is_granted('Manager', 'ROLE_GESTION_ARTICLE')")
     */
    public function indexAction(Request $request )
    {
        $entityManager = $this->getEntityManager();
        $form = $this->createForm(SearchType::class)->handleRequest($request);

        // récupiré le requéte a partir de information déja collecter
        $query = $entityManager->getEntityBy($this->getDoctrine()->getRepository(ArticleConsumable::class), $this->getUser() ,self::ROLE, $form);

         // creé le delete form
        $deleteForms = array();
        foreach ($query->getQuery()->getResult() as $entity) {
            $deleteForms[$entity->getId()] = $this->createDeleteForm($entity)->createView();
        }

        return $this->render('ISETSOMagazineBundle:articleconsumable:index.html.twig', array(
            'padding' => $entityManager->createPaginator($query ,$request),
            'form' => $form->createView(),
            'deleteForms' => $deleteForms
        ));
    }

    

    /**
     * Creates a new ArticleConsumable entity.
     *
     * @Route("/new", name="articleconsumable_new")
     * @Method({"GET", "POST"})
     * @Security("is_granted('Add', 'ROLE_GESTION_ARTICLE') or is_granted('Manager', 'ROLE_GESTION_ARTICLE')")
     */
    public function newAction(Request $request)
    {
        $articleConsumable = new ArticleConsumable();
        // creé un formulaire
        $form = $this->createForm(ArticleConsumableType::class, $articleConsumable);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // persite le entité
            $this->getEntityManager()->save($articleConsumable , $this->getUser());
            // flash un message
            $this->addFlash( 'msg',$this->get('translator')->trans(self::MSG_NEW));
            // creé un historique pour cette user
            $this->getHistoryManager()->insertAddUserHistory(self::ROLE,$this->getUser(),self::MSG_NEW);

            return $this->redirectToRoute('articleconsumable_index');
        }

        return $this->render('ISETSOMagazineBundle:articleconsumable:new.html.twig', array(
            'articleConsumable' => $articleConsumable,
            'form' => $form->createView()
        ));
    }

    /**
     * Finds and displays a ArticleConsumable entity.
     *
     * @Route("/{id}", name="articleconsumable_show")
     * @Method("GET")
     * @Security("is_granted('View', 'ROLE_GESTION_ARTICLE') or is_granted('Manager', 'ROLE_GESTION_ARTICLE')")
     */
    public function showAction(ArticleConsumable $articleConsumable)
    {
        return $this->render('ISETSOMagazineBundle:articleconsumable:show.html.twig', array(
            'articleConsumable' => $articleConsumable,
        ));
    }

    /**
     * Displays a form to edit an existing ArticleConsumable entity.
     *
     * @Route("/{id}/edit", name="articleconsumable_edit")
     * @Method({"GET", "POST"})
     * @Security("is_granted('Edit', 'ROLE_GESTION_ARTICLE') and articleConsumable.isAuthor(user) or is_granted('Manager', 'ROLE_GESTION_ARTICLE')")
     */
    public function editAction(Request $request, ArticleConsumable $articleConsumable)
    {
        // creé un formulaire
        $editForm = $this->createForm(ArticleConsumableType::class, $articleConsumable);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            // persite le entité
            $this->getEntityManager()->save($articleConsumable);
            // flash un message
            $this->addFlash('msg', $this->get('translator')->trans(self::MSG_EDIT));
            // creé un historique pour cette user
            $this->getHistoryManager()->insertEditUserHistory(self::ROLE,$this->getUser(),self::MSG_EDIT);
            
            return $this->redirectToRoute('articleconsumable_index');
        }

        return $this->render('ISETSOMagazineBundle:articleconsumable:edit.html.twig', array(
            'articleConsumable' => $articleConsumable,
            'edit_form' => $editForm->createView(),
        ));
    }

    /**
     * Deletes a ArticleConsumable entity.
     *
     * @Route("/{id}", name="articleconsumable_delete")
     * @Method("DELETE")
     * @Security("is_granted('Delete', 'ROLE_GESTION_ARTICLE') and articleConsumable.isAuthor(user) or is_granted('Manager', 'ROLE_GESTION_ARTICLE')")
     */
    public function deleteAction(Request $request, ArticleConsumable $articleConsumable)
    {
        // creé un formulaire
        $form = $this->createDeleteForm($articleConsumable);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // supprimeé le entité
            $this->getEntityManager()->delete($articleConsumable);
            // flash un message
            $this->addFlash('msg', $this->get('translator')->trans(self::MSG_DELETE) );
            // creé un historique pour cette user
            $this->getHistoryManager()->insertDeleteUserHistory(self::ROLE,$this->getUser(),self::MSG_DELETE);
        }

        return $this->redirectToRoute('articleconsumable_index');
    }

    /**
     * Creates a form to delete a ArticleConsumable entity.
     *
     * @param ArticleConsumable $articleConsumable
     *
     * @return \Symfony\Component\Form\Form
     */
    private function createDeleteForm(ArticleConsumable $articleConsumable)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('articleconsumable_delete', array('id' => $articleConsumable->getId())))
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