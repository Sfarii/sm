<?php

namespace ISETSO\MagazineBundle\Controller\ArticleManagement;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use ISETSO\MagazineBundle\Entity\ArticleManagement\ReturnArticleToCentralStore;
use ISETSO\MagazineBundle\Form\ArticleManagement\ReturnArticleToCentralStoreType;
use ISETSO\MagazineBundle\Entity\DetailArticleManagement\DetailReturnArticle;
use ISETSO\MagazineBundle\Form\DetailArticleManagement\DetailReturnArticleType;
use ISETSO\MagazineBundle\Form\Search\SearchWithDateType;
use ISETSO\MagazineBundle\Form\Check\CheckType;

use Doctrine\Common\Collections\ArrayCollection;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * ReturnArticle controller.
 *
 * @Route("/returnarticle_centralStore")
 * @Security("user.isSuperAdmin() or has_role('ROLE_GESTION_RETURN_TO_CENTRAL_STORE')")
 */
class ReturnArticleToCentralStoreController extends Controller
{
    const ROLE = 'ROLE_GESTION_RETURN_TO_CENTRAL_STORE';
    const MSG_NEW = 'return.flash.created';
    const MSG_EDIT = 'return.flash.updated';
    const MSG_DELETE = 'return.flash.deleted';
    const MSG_CHECK = 'return.flash.check';
    

    /**
     * Lists all ReturnArticle entities.
     *
     * @Route("/", name="returnArticle_centralStore_index")
     * @Method({"GET", "POST"})
     * @Security("is_granted('View', 'ROLE_GESTION_RETURN_TO_CENTRAL_STORE') or is_granted('Manager', 'ROLE_GESTION_RETURN_TO_CENTRAL_STORE')")
     */
    public function indexAction(Request $request )
    {
        $entityManager = $this->getEntityManager();
        $form = $this->createForm(SearchWithDateType::class, null, array('method' => 'GET'))->handleRequest($request);

        // récupiré le requéte a partir de information déja collecter
        $query = $entityManager->getEntityBy($this->getDoctrine()->getRepository(ReturnArticleToCentralStore::class), $this->getUser() ,self::ROLE, $form);

        // creé le delete form
        $deleteForms = array();
        foreach ($query->getQuery()->getResult() as $entity) {
            $deleteForms[$entity->getId()] = $this->createDeleteForm($entity)->createView();
        }

        // imprimé pdf
        if ($request->query->get('print')!= null && $request->query->get('print')){
            return $entityManager->getPDF($this->renderView($this->getParameter('return_pdf'), array('returnArticle' => $query->getQuery()->getResult())));
        }
            
        return $this->render('ISETSOMagazineBundle:returnarticle_centralStore:index.html.twig', array(
            'padding' => $entityManager->createPaginator($query ,$request),
            'form'=> $form->createView(),
            'deleteForms' => $deleteForms
        ));
    }

    /**
     * Creates a new ReturnArticle entity.
     *
     * @Route("/new", name="returnArticle_centralStore_new")
     * @Method({"GET", "POST"})
     * @Security("is_granted('Add', 'ROLE_GESTION_RETURN_TO_CENTRAL_STORE') or is_granted('Manager', 'ROLE_GESTION_RETURN_TO_CENTRAL_STORE')")
     */
    public function newAction(Request $request)
    {
        if (empty($this->getEntityManager()->getDischargeAndReturnByUser($this->getUser())))
            throw $this->createNotFoundException('Discharge Not Found');
            

        $returnArticle = new ReturnArticleToCentralStore();
        $form = $this->createForm(ReturnArticleToCentralStoreType::class, $returnArticle)->handleRequest($request);

        $session = $this->getRequest()->getSession();

        if ($form->isSubmitted() && $form->isValid() && $session->has($this->getSessionName()) && !$session->get($this->getSessionName())->isEmpty()) {

            $this->getEntityManager()->saveArticleDetail($returnArticle ,$session->get($this->getSessionName()) , $this->getUser());
            $session->set($this->getSessionName(), new ArrayCollection());
            $this->addFlash('msg',$this->get('translator')->trans(self::MSG_NEW));
            $this->getHistoryManager()->insertAddUserHistory(self::ROLE,$this->getUser(),self::MSG_NEW);
            
            return $this->redirectToRoute('returnArticle_centralStore_index');
        }


        return $this->render('ISETSOMagazineBundle:returnarticle_centralStore:new.html.twig', array(
            'discharge' => $this->getEntityManager()->getDischargeAndReturnByUser($this->getUser()),
            'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ReturnArticle entity.
     *
     * @Route("/check/{id}", name="returnArticle_centralStore_check")
     * @Method({"GET", "POST"})
     * @Security("is_granted('Manager', 'ROLE_GESTION_RETURN_TO_CENTRAL_STORE')")
     */
    public function checkAction(Request $request, ReturnArticleToCentralStore $returnArticle)
    {
        $editForm = $this->createForm(CheckType::class)->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $result = $this->getEntityManager()->checkReturnArticleDetail($returnArticle , $editForm->get('etat')->getData());
            if (count($result)){
                $this->addFlash('msg',implode(",", $result));
                return $this->redirectToRoute('returnArticle_centralStore_index');
            }
               
            $this->addFlash('msg',$this->get('translator')->trans(self::MSG_CHECK));
            // creé un historique pour cette user
            $this->getHistoryManager()->insertCheckUserHistory(self::ROLE,$this->getUser(),self::MSG_CHECK); 
            return $this->redirectToRoute('returnArticle_centralStore_index');
        }

        return $this->render('ISETSOMagazineBundle:returnarticle_centralStore:check.html.twig', array(
            'returnArticle' => $returnArticle,
            'edit_form' => $editForm->createView()
        ));
    }

    /**
     * Finds and displays a ReturnArticleToCentralStore entity.
     *
     * @Route("/show/{id}", name="returnArticle_centralStore_show")
     * @Method("GET")
     * @Security("is_granted('View', 'ROLE_GESTION_RETURN_TO_CENTRAL_STORE') or is_granted('Manager', 'ROLE_GESTION_RETURN_TO_CENTRAL_STORE')")
     */
    public function showAction(ReturnArticleToCentralStore $returnArticle)
    {
        // imprimé pdf
        if ($this->getRequest()->query->get('print')!= null && $this->getRequest()->query->get('print')){
            return $this->getEntityManager()->getPDF($this->renderView($this->getParameter('return_detail_pdf'), array('returnArticle' => $returnArticle)));
        }

        return $this->render('ISETSOMagazineBundle:returnarticle_centralStore:show.html.twig', array(
            'returnArticle' => $returnArticle,
        ));
    }

    /**
     * Displays a form to edit an existing ReturnArticleToCentralStore entity.
     *
     * @Route("/edit/{id}", name="returnArticle_centralStore_edit")
     * @Method({"GET", "POST"})
     * @Security("is_granted('Edit', 'ROLE_GESTION_RETURN_TO_CENTRAL_STORE') and returnArticle.isAuthor(user) or is_granted('Manager', 'ROLE_GESTION_RETURN_TO_CENTRAL_STORE')")
     */
    public function editAction(Request $request, ReturnArticleToCentralStore $returnArticle)
    {
        $editForm = $this->createForm(ReturnArticleToCentralStoreType::class, $returnArticle)->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            // persite le entité
            $this->getEntityManager()->save($returnArticle);
            // flash un message
            $this->addFlash('msg', $this->get('translator')->trans(self::MSG_EDIT));
            // creé un historique pour cette user
            $this->getHistoryManager()->insertEditUserHistory(self::ROLE,$this->getUser(),self::MSG_EDIT);

            return $this->redirectToRoute('returnArticle_centralStore_index');
        }

        return $this->render('ISETSOMagazineBundle:returnarticle_centralStore:edit.html.twig', array(
            'returnArticle' => $returnArticle,
            'discharge' => $this->getEntityManager()->getDischargeAndReturnByUser($this->getUser()),
            'form' => $editForm->createView()
        ));
    }

    /**
     * Deletes a ReturnArticleToCentralStore entity.
     *
     * @Route("/delete/{id}", name="returnArticle_centralStore_delete")
     * @Method("DELETE")
     * @Security("is_granted('Delete', 'ROLE_GESTION_RETURN_TO_CENTRAL_STORE')  and returnArticle.isAuthor(user)  or is_granted('Manager', 'ROLE_GESTION_RETURN_TO_CENTRAL_STORE')")
     */
    public function deleteAction(Request $request, ReturnArticleToCentralStore $returnArticle)
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

        return $this->redirectToRoute('returnArticle_centralStore_index');
    }

    /**
     * Creates a form to delete a ReturnArticleToCentralStore entity.
     *
     * @param ReturnArticleToCentralStore $returnArticle The ReturnArticleToCentralStore entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ReturnArticleToCentralStore $returnArticle)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('returnArticle_centralStore_delete', array('id' => $returnArticle->getId())))
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
