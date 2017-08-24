<?php

namespace ISETSO\MagazineBundle\Controller\ArticleManagement;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Doctrine\Common\Collections\ArrayCollection;

use ISETSO\MagazineBundle\Entity\ArticleManagement\OrderArticle;
use ISETSO\MagazineBundle\Form\ArticleManagement\OrderArticleType;
use ISETSO\MagazineBundle\Entity\DetailArticleManagement\DetailOrderArticle;
use ISETSO\MagazineBundle\Form\DetailArticleManagement\DetailOrderArticleType;
use ISETSO\MagazineBundle\Form\Search\SearchWithDateType;
use ISETSO\MagazineBundle\Form\Check\CheckType;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * OrderArticle controller.
 *
 * @Route("/orderarticle")
 * @Security("user.isSuperAdmin() or has_role('ROLE_GESTION_ORDER')")
 */
class OrderArticleController extends Controller
{
    const ROLE = 'ROLE_GESTION_ORDER';
    const MSG_NEW = 'order.flash.created';
    const MSG_EDIT = 'order.flash.updated';
    const MSG_DELETE = 'order.flash.deleted';
    const SESSION_NAME = 'detailOrderArticle';

    /**
     * Lists all OrderArticle entities.
     *
     * @Route("/", name="orderarticle_index")
     * @Method({"GET", "POST"})
     * @Security("is_granted('View', 'ROLE_GESTION_ORDER') or is_granted('Manager', 'ROLE_GESTION_ORDER')")
     */
    public function indexAction(Request $request)
    {
        $entityManager = $this->getEntityManager();
        $form = $this->createForm(SearchWithDateType::class, null, array('method' => 'GET'))->handleRequest($request);

        // récupiré le requéte a partir de information déja collecter
        $query = $entityManager->getEntityBy($this->getDoctrine()->getRepository(OrderArticle::class), $this->getUser() ,self::ROLE, $form);

        // creé le delete form
        $deleteForms = array();
        foreach ($query->getQuery()->getResult() as $entity) {
            $deleteForms[$entity->getId()] = $this->createDeleteForm($entity)->createView();
        }

        // imprimé pdf
        if ($request->query->get('print')!= null && $request->query->get('print')){
            return $entityManager->getPDF($this->renderView($this->getParameter('order_pdf'), array('order' => $query->getQuery()->getResult())));
        }

        return $this->render('ISETSOMagazineBundle:orderarticle:index.html.twig', array(
            'padding' => $entityManager->createPaginator($query ,$request),
            'form'=> $form->createView(),
            'deleteForms' => $deleteForms
        ));
    }

    /**
     * Creates a new OrderArticle entity.
     *
     * @Route("/new", name="orderarticle_new")
     * @Method({"GET", "POST"})
     * @Security("is_granted('Add', 'ROLE_GESTION_ORDER') or is_granted('Manager', 'ROLE_GESTION_ORDER')")
     */
    public function newAction(Request $request)
    {
        $orderArticle = new OrderArticle();
        $form = $this->createForm(OrderArticleType::class, $orderArticle)->handleRequest($request);

        $detail = $this->createForm(DetailOrderArticleType::class, new DetailOrderArticle())->handleRequest($request);

        $session = $this->getRequest()->getSession();

        if ($form->isSubmitted() && $form->isValid() && $session->has(self::SESSION_NAME) && !$session->get(self::SESSION_NAME)->isEmpty()) {

            $this->getEntityManager()->saveOrderArticleDetail($orderArticle ,$session->get(self::SESSION_NAME) , $this->getUser());
            $session->set(self::SESSION_NAME, new ArrayCollection());
            $this->addFlash('msg',$this->get('translator')->trans(self::MSG_NEW));
            $this->getHistoryManager()->insertAddUserHistory(self::ROLE,$this->getUser(),self::MSG_NEW);
            
            return $this->redirectToRoute('orderarticle_index');
        }

        return $this->render('ISETSOMagazineBundle:orderarticle:new.html.twig', array(
            'orderArticle' => $orderArticle,
            'form' => $form->createView(),
            'detail' => $detail->createView(),
        ));
    }

    /**
     * Finds and displays a OrderArticle entity.
     *
     * @Route("/show/{id}", name="orderarticle_show")
     * @Method("GET")
     * @Security("is_granted('View', 'ROLE_GESTION_ORDER') or is_granted('Manager', 'ROLE_GESTION_ORDER')")
     */
    public function showAction(OrderArticle $orderArticle)
    {
        // imprimé pdf
        if ($this->getRequest()->query->get('print')!= null && $this->getRequest()->query->get('print')){
            return $this->getEntityManager()->getPDF($this->renderView($this->getParameter('order_detail_pdf'), array('orderArticle' => $orderArticle)));
        }

        return $this->render('ISETSOMagazineBundle:orderarticle:show.html.twig', array(
            'orderArticle' => $orderArticle
        ));

    }

    /**
     * Displays a form to edit an existing OrderArticle entity.
     *
     * @Route("/edit/{id}", name="orderarticle_edit")
     * @Method({"GET", "POST"})
     * @Security("is_granted('Edit', 'ROLE_GESTION_ORDER')  and orderArticle.isAuthor(user) or is_granted('Manager', 'ROLE_GESTION_ORDER')")
     */
    public function editAction(Request $request, OrderArticle $orderArticle)
    {
        $editForm = $this->createForm(OrderArticleType::class, $orderArticle)->handleRequest($request);

        $detail = $this->createForm(DetailOrderArticleType::class, new DetailOrderArticle())->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            // persite le entité
            $this->getEntityManager()->save($orderArticle);
            // flash un message
            $this->addFlash('msg', $this->get('translator')->trans(self::MSG_EDIT));
            // creé un historique pour cette user
            $this->getHistoryManager()->insertEditUserHistory(self::ROLE,$this->getUser(),self::MSG_EDIT);
            return $this->redirectToRoute('orderarticle_index');
        }
        
        return $this->render('ISETSOMagazineBundle:orderarticle:edit.html.twig', array(
            'orderArticle' => $orderArticle,
            'form' => $editForm->createView(),
            'detail' => $detail->createView(),
        ));
    }

    /**
     * Deletes a OrderArticle entity.
     *
     * @Route("/delete/{id}", name="orderarticle_delete")
     * @Method("DELETE")
     * @Security("is_granted('Delete', 'ROLE_GESTION_ORDER')  and orderarticle.isAuthor(user) or is_granted('Manager', 'ROLE_GESTION_ORDER')")
     */
    public function deleteAction(Request $request, OrderArticle $orderArticle)
    {
        $form = $this->createDeleteForm($orderArticle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // supprimeé le entité
            $this->getEntityManager()->delete($orderArticle , $orderArticle->getDetail());
            // flash un message
            $this->addFlash('msg', $this->get('translator')->trans(self::MSG_DELETE) );
            // creé un historique pour cette user
            $this->getHistoryManager()->insertDeleteUserHistory(self::ROLE,$this->getUser(),self::MSG_DELETE);
        }

        return $this->redirectToRoute('orderarticle_index');
    }

    /**
     * Creates a form to delete a OrderArticle entity.
     *
     * @param OrderArticle $orderArticle The OrderArticle entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(OrderArticle $orderArticle)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('orderarticle_delete', array('id' => $orderArticle->getId())))
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
