<?php

namespace ISETSO\MagazineBundle\Controller\ArticleManagement;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use ISETSO\MagazineBundle\Entity\ArticleManagement\ReturnArticleToSubStore;
use ISETSO\MagazineBundle\Form\ArticleManagement\ReturnArticleToSubStoreType;
use ISETSO\MagazineBundle\Entity\DetailArticleManagement\DetailReturnArticle;
use ISETSO\MagazineBundle\Form\DetailArticleManagement\DetailReturnArticleType;
use ISETSO\MagazineBundle\Form\Search\SearchWithDateType;
use ISETSO\MagazineBundle\Form\Check\CheckType;

use Doctrine\Common\Collections\ArrayCollection;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use ISETSO\MagazineBundle\Entity\Magazine\Magazine;

/**
 * ReturnArticle controller.
 *
 * @Route("/returnarticle_subStore")
 * @Security("user.isSuperAdmin() or has_role('ROLE_GESTION_RETURN_TO_SUB_STORE')")
 */
class ReturnArticleToSubStoreController extends Controller
{
    const ROLE = 'ROLE_GESTION_RETURN_TO_SUB_STORE_TO_SUB_STORE';
    const MSG_NEW = 'return.flash.created';
    const MSG_EDIT = 'return.flash.updated';
    const MSG_DELETE = 'return.flash.deleted';
    const MSG_CHECK = 'return.flash.check';
    

    /**
     * Lists all ReturnArticleToSubStore entities.
     *
     * @Route("/{id}", name="returnarticle_subStore_index")
     * @Method({"GET", "POST"})
     * @Security("is_granted('View', 'ROLE_GESTION_RETURN_TO_SUB_STORE') or is_granted('Manager', 'ROLE_GESTION_RETURN_TO_SUB_STORE')")
     */
    public function indexAction(Request $request ,Magazine $store)
    {
        $entityManager = $this->getEntityManager();
        $form = $this->createForm(SearchWithDateType::class, null, array('method' => 'GET'))->handleRequest($request);

        // récupiré le requéte a partir de information déja collecter
        $query = $entityManager->getEntityBySubEntity($store,$this->getDoctrine()->getRepository(ReturnArticleToSubStore::class), $this->getUser() ,self::ROLE, $form);

        // creé le delete form
        $deleteForms = array();
        foreach ($query->getQuery()->getResult() as $entity) {
            $deleteForms[$entity->getId()] = $this->createDeleteForm($entity)->createView();
        }

        // imprimé pdf
        if ($request->query->get('print')!= null && $request->query->get('print')){
            return $entityManager->getPDF($this->renderView($this->getParameter('return_pdf'), array('returnArticle' => $query->getQuery()->getResult())));
        }
            
        return $this->render('ISETSOMagazineBundle:returnarticle_SubStore:index.html.twig', array(
            'padding' => $entityManager->createPaginator($query ,$request),
            'form'=> $form->createView(),
            'deleteForms' => $deleteForms,
            'store' => $store
        ));
    }

    /**
     * Creates a new ReturnArticle entity.
     *
     * @Route("/new/{id}", name="returnArticle_subStore_new")
     * @Method({"GET", "POST"})
     * @Security("is_granted('Add', 'ROLE_GESTION_RETURN_TO_SUB_STORE') or is_granted('Manager', 'ROLE_GESTION_RETURN_TO_SUB_STORE')")
     */
    public function newAction(Request $request,Magazine $store)
    {
        if (empty($this->getEntityManager()->getDischargeSubStoreByUser($this->getUser(), $store)))
            throw $this->createNotFoundException('Discharge Not Found');
         
        $returnArticle = new ReturnArticleToSubStore();
        $form = $this->createForm(ReturnArticleToSubStoreType::class, $returnArticle)->handleRequest($request);

        $session = $this->getRequest()->getSession();

        if ($form->isSubmitted() && $form->isValid() && $session->has($this->getSessionName()) && !$session->get($this->getSessionName())->isEmpty()) {

            $this->getEntityManager()->saveMagazineDetail($store ,$returnArticle,$session->get($this->getSessionName()) , $this->getUser());
            $session->set($this->getSessionName(), new ArrayCollection());
            $this->addFlash('msg',$this->get('translator')->trans(self::MSG_NEW));
            $this->getHistoryManager()->insertAddUserHistory(self::ROLE,$this->getUser(),self::MSG_NEW);
            
            return $this->redirectToRoute('returnarticle_subStore_index',array('id' => $store->getId()));
        }


        return $this->render('ISETSOMagazineBundle:returnarticle_SubStore:new.html.twig', array(
            'discharge' => $this->getEntityManager()->getDischargeSubStoreByUser($this->getUser(), $store),
            'form' => $form->createView(),
            'store' => $store
        ));
    }

    /**
     * Displays a form to edit an existing ReturnArticleToSubStore entity.
     *
     * @Route("/check/{id}", name="returnArticle_subStore_check")
     * @Method({"GET", "POST"})
     * @Security("is_granted('Manager', 'ROLE_GESTION_RETURN_TO_SUB_STORE')")
     */
    public function checkAction(Request $request, ReturnArticleToSubStore $returnArticle)
    {
        $editForm = $this->createForm(CheckType::class)->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getEntityManager()->checkSubStoreReturnArticleDetail ($returnArticle, $editForm->get('etat')->getData());
            $this->addFlash('msg',$this->get('translator')->trans(self::MSG_CHECK));
            // creé un historique pour cette user
            $this->getHistoryManager()->insertCheckUserHistory(self::ROLE,$this->getUser(),self::MSG_CHECK); 
            return $this->redirectToRoute('returnarticle_subStore_index',array('id' => $returnArticle->getToSubStore()->getId()));
        }

        return $this->render('ISETSOMagazineBundle:returnarticle_SubStore:check.html.twig', array(
            'returnArticle' => $returnArticle,
            'edit_form' => $editForm->createView()
        ));
    }

    /**
     * Finds and displays a ReturnArticleToSubStore entity.
     *
     * @Route("/show/{id}", name="returnArticle_subStore_show")
     * @Method("GET")
     * @Security("is_granted('View', 'ROLE_GESTION_RETURN_TO_SUB_STORE')")
     */
    public function showAction(ReturnArticleToSubStore $returnArticle)
    {
        $deleteForm = $this->createDeleteForm($returnArticle);

        return $this->render('ISETSOMagazineBundle:returnarticle_SubStore:show.html.twig', array(
            
            'returnArticle' => $returnArticle,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ReturnArticleToSubStore entity.
     *
     * @Route("/edit/{id}", name="returnArticle_subStore_edit")
     * @Method({"GET", "POST"})
     * @Security("is_granted('Edit', 'ROLE_GESTION_RETURN_TO_SUB_STORE') and returnArticle.isAuthor(user) or is_granted('Manager', 'ROLE_GESTION_RETURN_TO_SUB_STORE')")
     */
    public function editAction(Request $request, ReturnArticleToSubStore $returnArticle)
    {
        $editForm = $this->createForm(ReturnArticleToSubStoreType::class, $returnArticle)->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            // persite le entité
            $this->getEntityManager()->save($returnArticle);
            // flash un message
            $this->addFlash('msg', $this->get('translator')->trans(self::MSG_EDIT));
            // creé un historique pour cette user
            $this->getHistoryManager()->insertEditUserHistory(self::ROLE,$this->getUser(),self::MSG_EDIT);

            return $this->redirectToRoute('returnarticle_subStore_index',array('id' => $returnArticle->getToSubStore()->getId()));
        }

        return $this->render('ISETSOMagazineBundle:returnarticle_SubStore:edit.html.twig', array(
            'returnArticle' => $returnArticle,
            'discharge' => $this->getEntityManager()->getDischargeSubStoreByUser($this->getUser(), $returnArticle->getToSubStore()),
            'form' => $editForm->createView()
        ));
    }

    /**
     * Deletes a ReturnArticleToSubStore entity.
     *
     * @Route("/delete/{id}", name="returnarticle_subStore_delete")
     * @Method("DELETE")
     * @Security("is_granted('Delete', 'ROLE_GESTION_RETURN_TO_SUB_STORE')  and returnArticle.isAuthor(user)  or is_granted('Manager', 'ROLE_GESTION_RETURN_TO_SUB_STORE')")
     */
    public function deleteAction(Request $request, ReturnArticleToSubStore $returnArticle)
    {
        $form = $this->createDeleteForm($returnArticle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // supprimeé le entité
            $this->getEntityManager()->delete($returnArticle , $returnArticle->getDetail());
            // flash un message
            $this->addFlash('msg', $this->get('translator')->trans(self::MSG_DELETE) );
            // creé un historique pour cette user
            $this->getHistoryManager()->insertDeleteUserHistory(self::ROLE,$this->getUser(),self::MSG_DELETE);
        }

        return $this->redirectToRoute('returnarticle_subStore_index',array('id' => $returnArticle->getToSubStore()->getId()));
    }

    /**
     * Creates a form to delete a ReturnArticleToSubStore entity.
     *
     * @param ReturnArticleToSubStore $returnArticle The ReturnArticleToSubStore entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ReturnArticleToSubStore $returnArticle)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('returnarticle_subStore_delete', array('id' => $returnArticle->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    /**
     * récupiré le nom de session
     *
     * @return string
     */
    private function getSessionName(){
        return "detailReturnArticle";
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
