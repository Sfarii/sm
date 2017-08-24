<?php

namespace ISETSO\MagazineBundle\Controller\ArticleManagement;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Doctrine\Common\Collections\ArrayCollection;

use ISETSO\MagazineBundle\Entity\ArticleManagement\DischargeArticleToLocal;
use ISETSO\MagazineBundle\Form\ArticleManagement\DischargeArticleToLocalType;
use ISETSO\MagazineBundle\Entity\DetailArticleManagement\DetailDischargeArticle;
use ISETSO\MagazineBundle\Form\DetailArticleManagement\DetailDischargeArticleType;

use ISETSO\MagazineBundle\Form\DetailArticleManagement\DetailDischargeArticleDurableType;
use ISETSO\MagazineBundle\Form\DetailArticleManagement\DetailDischargeArticleConsumableType;
use ISETSO\MagazineBundle\Form\Search\SearchWithDateType;
use ISETSO\MagazineBundle\Form\Check\CheckType;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * DischargeArticleToLocal controller.
 *
 * @Route("/dischargearticle_local")
 * @Security("user.isSuperAdmin() or has_role('ROLE_GESTION_DISCHARGE_TO_LOCAL')")
 */
class DischargeArticleToLocalController extends Controller
{
    const ROLE = 'ROLE_GESTION_DISCHARGE_TO_LOCAL';
    const MSG_NEW = 'dischargeArticleToMagazine.flash.created';
    const MSG_EDIT = 'dischargeArticleToMagazine.flash.updated';
    const MSG_DELETE = 'dischargeArticleToMagazine.flash.deleted';
    const MSG_CHECK = 'dischargeArticleToMagazine.flash.check';

    /**
     * Lists all DischargeArticleToLocal entities.
     *
     * @Route("/", name="discharge_article_to_local_index")
     * @Method({"GET", "POST"})
     * @Security("is_granted('View', 'ROLE_GESTION_DISCHARGE_TO_LOCAL') or is_granted('Manager', 'ROLE_GESTION_DISCHARGE_TO_LOCAL')")
     */
    public function indexAction(Request $request )
    {
        $entityManager = $this->getEntityManager();
        $form = $this->createForm(SearchWithDateType::class, null, array('method' => 'GET'))->handleRequest($request);

        // récupiré le requéte a partir de information déja collecter
        $query = $entityManager->getEntityBy($this->getDoctrine()->getRepository(DischargeArticleToLocal::class), $this->getUser() ,self::ROLE, $form);

        // creé le delete form
        $deleteForms = array();
        foreach ($query->getQuery()->getResult() as $entity) {
            $deleteForms[$entity->getId()] = $this->createDeleteForm($entity)->createView();
        }

        // imprimé pdf
        if ($request->query->get('print')!= null && $request->query->get('print')){
            return $entityManager->getPDF($this->renderView($this->getParameter('discharge_pdf'), array('discharge' => $query->getQuery()->getResult())));
        }
            
        return $this->render('ISETSOMagazineBundle:discharge_article_local:index.html.twig', array(
            'padding' => $entityManager->createPaginator($query ,$request),
            'form'=> $form->createView(),
            'deleteForms'=>$deleteForms
        ));
    }

    /**
     * Displays a form to edit an existing DischargeArticleToLocal entity.
     *
     * @Route("/check/{id}", name="discharge_article_to_local_check")
     * @Method({"GET", "POST"})
     * @Security("is_granted('Manager', 'ROLE_GESTION_DISCHARGE_TO_LOCAL')")
     */
    public function checkAction(Request $request, DischargeArticleToLocal $dischargeArticle)
    {
        $editForm = $this->createForm(CheckType::class)->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $result = $this->getEntityManager()->checkDischargeArticleDetail ($dischargeArticle, $editForm->get('etat')->getData());
            if(count($result)){
                $this->addFlash('msg',implode(" , ", $result));
                
            }else{
                $this->addFlash('msg',$this->get('translator')->trans(self::MSG_CHECK));
                // creé un historique pour cette user
                $this->getHistoryManager()->insertCheckUserHistory(self::ROLE,$this->getUser(),self::MSG_CHECK); 
            }

            return $this->redirectToRoute('discharge_article_to_local_index');
        }

        return $this->render('ISETSOMagazineBundle:discharge_article_local:check.html.twig', array(
            'dischargeArticle' => $dischargeArticle,
            'edit_form' => $editForm->createView()
        ));
    }

    /**
     * Creates a new DischargeArticleToLocal entity.
     *
     * @Route("/new", name="discharge_article_to_local_new")
     * @Method({"GET", "POST"})
     * @Security("is_granted('Add', 'ROLE_GESTION_DISCHARGE_TO_LOCAL') or is_granted('Manager', 'ROLE_GESTION_DISCHARGE_TO_LOCAL')")
     */
    public function newAction(Request $request)
    {
        $dischargeArticle = new DischargeArticleToLocal();
        $form = $this->createForm(DischargeArticleToLocalType::class, $dischargeArticle)->handleRequest($request);

        $detailDurable = $this->createForm(DetailDischargeArticleDurableType::class, new DetailDischargeArticle())->handleRequest($request);
        $detailConsumable = $this->createForm(DetailDischargeArticleConsumableType::class, new DetailDischargeArticle())->handleRequest($request);
        
        $session = $this->getRequest()->getSession();

        if ($form->isSubmitted() && $form->isValid() && $session->has($this->getSessionName()) && !$session->get($this->getSessionName())->isEmpty()) {

            $this->getEntityManager()->saveArticleDetail($dischargeArticle ,$session->get($this->getSessionName()) , $this->getUser());
            $session->set($this->getSessionName(), new ArrayCollection());
            $this->addFlash('msg',$this->get('translator')->trans(self::MSG_NEW));
            $this->getHistoryManager()->insertAddUserHistory(self::ROLE,$this->getUser(),self::MSG_NEW);
            
            return $this->redirectToRoute('discharge_article_to_local_index');
        }

        return $this->render('ISETSOMagazineBundle:discharge_article_local:new.html.twig', array(
            'dischargeArticle' => $dischargeArticle,
            'form' => $form->createView(),
            'detailDurable' => $detailDurable->createView(),
            'detailConsumable' => $detailConsumable->createView()
        ));
    }

    /**
     * Finds and displays a DischargeArticleToLocal entity.
     *
     * @Route("/show/{id}", name="discharge_article_to_local_show")
     * @Method("GET")
     * @Security("is_granted('View', 'ROLE_GESTION_DISCHARGE_TO_LOCAL') or is_granted('Manager', 'ROLE_GESTION_DISCHARGE_TO_LOCAL')")
     */
    public function showAction(DischargeArticleToLocal $dischargeArticle)
    {
        // imprimé pdf
        if ($this->getRequest()->query->get('print')!= null && $this->getRequest()->query->get('print')){
            return $this->getEntityManager()->getPDF($this->renderView($this->getParameter('discharge_detail_pdf'), array('discharge' => $dischargeArticle)));
        }

        return $this->render('ISETSOMagazineBundle:discharge_article_local:show.html.twig', array(
            'dischargeArticle' => $dischargeArticle,
        ));
    }

    /**
     * Displays a form to edit an existing DischargeArticleToLocal entity.
     *
     * @Route("/edit/{id}", name="discharge_article_to_local_edit")
     * @Method({"GET", "POST"})
     * @Security("is_granted('Edit', 'ROLE_GESTION_DISCHARGE_TO_LOCAL')  and dischargeArticle.isAuthor(user) or is_granted('Manager', 'ROLE_GESTION_DISCHARGE_TO_LOCAL')")
     */
    public function editAction(Request $request, DischargeArticleToLocal $dischargeArticle)
    {
        $editForm = $this->createForm(DischargeArticleToLocalType::class, $dischargeArticle)->handleRequest($request);

        $detailDurable = $this->createForm(DetailDischargeArticleDurableType::class, new DetailDischargeArticle())->handleRequest($request);
        $detailConsumable = $this->createForm(DetailDischargeArticleConsumableType::class, new DetailDischargeArticle())->handleRequest($request);
        
        if ($editForm->isSubmitted() && $editForm->isValid()) {
             // persite le entité
            $this->getEntityManager()->save($dischargeArticle);
            // flash un message
            $this->addFlash('msg', $this->get('translator')->trans(self::MSG_EDIT));
            // creé un historique pour cette user
            $this->getHistoryManager()->insertEditUserHistory(self::ROLE,$this->getUser(),self::MSG_EDIT);

            return $this->redirectToRoute('discharge_article_to_local_index');
        }
        
        return $this->render('ISETSOMagazineBundle:discharge_article_local:edit.html.twig', array(
            'form' => $editForm->createView(),
            'detailDurable' => $detailDurable->createView(),
            'detailConsumable' => $detailConsumable->createView()
        ));
    }

    /**
     * Deletes a DischargeArticleToLocal entity.
     *
     * @Route("/delete/{id}", name="discharge_article_to_local_delete")
     * @Method("DELETE")
     * @Security("is_granted('Delete', 'ROLE_GESTION_DISCHARGE_TO_LOCAL')  and dischargeArticle.isAuthor(user) or is_granted('Manager', 'ROLE_GESTION_DISCHARGE_TO_LOCAL')")
     */
    public function deleteAction(Request $request, DischargeArticleToLocal $dischargeArticle)
    {
        $form = $this->createDeleteForm($dischargeArticle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // supprimeé le entité
            $this->getEntityManager()->delete($dischargeArticle , $dischargeArticle->getDetail());
            // flash un message
            $this->addFlash('msg', $this->get('translator')->trans(self::MSG_DELETE) );
            // creé un historique pour cette user
            $this->getHistoryManager()->insertDeleteUserHistory(self::ROLE,$this->getUser(),self::MSG_DELETE);
        }

        return $this->redirectToRoute('discharge_article_to_local_index');


    }

    /**
     * Creates a form to delete a DischargeArticleToLocal entity.
     *
     * @param DischargeArticleToLocal $dischargeArticle The DischargeArticleToLocal entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(DischargeArticleToLocal $dischargeArticle)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('discharge_article_to_local_delete', array('id' => $dischargeArticle->getId())))
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
        return "detailDischarge";
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
