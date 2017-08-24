<?php

namespace ISETSO\MagazineBundle\Controller\DetailArticleManagement;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Doctrine\Common\Collections\ArrayCollection;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\JsonResponse;

use ISETSO\MagazineBundle\Entity\ArticleManagement\OrderArticle;
use ISETSO\MagazineBundle\Entity\DetailArticleManagement\DetailOrderArticle;
use ISETSO\MagazineBundle\Form\DetailArticleManagement\DetailOrderArticleType;

use ISETSO\MagazineBundle\Entity\Article\Article;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * OrderArticle controller.
 *
 * @Route("/detailOrder")
 * @Security("user.isSuperAdmin()")
 */
class DetailOrderArticleController extends Controller
{
    const MSG_EXIST = 'detail.flash.existe';
    const MSG_NEW = 'detail.flash.created';
    const MSG_EDIT = 'detail.flash.updated';
    const MSG_DELETE = 'detail.flash.deleted';
    const SESSION_NAME = 'detailOrderArticle';

    /**
     * Lists all detailOrderArticle entities.
     *
     * @Route("/index", name="detailOrderArticle_index", options={"expose"=true})
     * @Method("GET")
     * @Security("is_granted('Add', 'ROLE_GESTION_ORDER')  or is_granted('Manager', 'ROLE_GESTION_ORDER')")
     */
    public function indexSaveInSessionAction()
    {
        $response = new JsonResponse();
        $response->setData($this->getEntityManager()->detailOrderArticleToArray($this->getDetailSession(self::SESSION_NAME)));
        return $response;
    }

    /**
     * Lists all detailOrderArticle entities.
     *
     * @Route("/index/{id}", name="detailOrderArticle_dataBase_index", options={"expose"=true})
     * @Method("GET")
     * @Security("is_granted('Add', 'ROLE_GESTION_ORDER')  or is_granted('Manager', 'ROLE_GESTION_ORDER')")
     */
    public function indexSaveInDataBaseAction(OrderArticle $orderArticle)
    {
        $response = new JsonResponse();
        $response->setData($this->getEntityManager()->detailOrderArticleToArray($orderArticle->getDetail()));
        return $response;
    }

    /**
     * Creates a new OrderArticle entity.
     *
     * @Route("/new/{id}",defaults= {"id" = 0 }, name="detailOrderArticle_new", options={"expose"=true})
     * @Method("POST")
     * @Security("is_granted('Add', 'ROLE_GESTION_ORDER') or is_granted('Manager', 'ROLE_GESTION_ORDER')")
     */
    public function newAction($id)
    {
        $response = new JsonResponse();

        $detail = $this->getEntityManager()->arrayToArticleDetail($this->get("request")->getContent(), new DetailOrderArticle());
        
        if (!is_null($detail)){

            if ($id == 0 && $this->getEntityManager()->newEntitySaveInSession($detail,$this->getDetailSession())){
                $response->setData(array("msg" =>$this->get('translator')->trans(self::MSG_NEW) , "type" => "success"));
                
            }else if ($id != 0 && $this->getEntityManager()->editEntitySaveInSession($detail,$this->getDetailSession(),$id)){
                $response->setData(array("msg" =>$this->get('translator')->trans(self::MSG_EDIT) , "type" => "success"));  
                
            }else{
                $response->setData(array("msg" =>$this->get('translator')->trans(self::MSG_EXIST) , "type" => "error"));
            }
        }

        return $response;
    }

    /**
     * edit piece justificative consumable
     *
     * @Route("/{id}/edit/{idDetail}",defaults= {"idDetail" = 0 }, name="detailOrderArticle_edit", options={"expose"=true})
     * @Method("POST")
     * @Security("is_granted('Edit', 'ROLE_GESTION_ORDER') and orderArticle.isAuthor(user)  or is_granted('Manager', 'ROLE_GESTION_ORDER')")
     */
    public function editDetailAction(Request $request ,OrderArticle $orderArticle ,$idDetail)
    {
        
        $response = new JsonResponse();

        $detail = $this->getEntityManager()->arrayToArticleDetail($this->get("request")->getContent(), new DetailOrderArticle());
        
        if (!is_null($detail)){

            if ($idDetail == 0 && $this->getEntityManager()->newEntitySaveInDataBase($detail,$orderArticle->getDetail())){
                $response->setData(array("msg" =>$this->get('translator')->trans(self::MSG_NEW) , "type" => "success"));
                
            }else if ($idDetail != 0 && $this->getEntityManager()->editOrderDetailSaveInDataBase($detail,$orderArticle->getDetail(),$idDetail)){
                $response->setData(array("msg" =>$this->get('translator')->trans(self::MSG_EDIT) , "type" => "success"));  
            }else{
                $response->setData(array("msg" =>$this->get('translator')->trans(self::MSG_EXIST) , "type" => "error"));
            }
        }

        return $response;
    }

    /**
     * supprimé le SupportingDocument dans le session.
     *
     * @Route("/deleteFormSession/{id}", name="detailOrderFormSession_delete", options={"expose"=true})
     * @Method("DELETE")
     * @Security("is_granted('Add', 'ROLE_GESTION_ORDER') or is_granted('Manager', 'ROLE_GESTION_ORDER')")
     */
    public function deleteDetailFromSessionAction(Request $request,Article $article)
    {
        $this->getEntityManager()->deleteEntitySaveInSession($article->getId(),$this->getDetailSession());
        $response = new JsonResponse();
        $response->setData(array("msg" =>$this->get('translator')->trans(self::MSG_DELETE) , "type" => "success"));
        return $response;
    }

    
    /**
     * Deletes a SupportingDocument entity.
     *
     * @Route("/detail/{id}", name="detailOrderArticle_delete", options={"expose"=true})
     * @Method("DELETE")
     * @Security("is_granted('Add', 'ROLE_GESTION_ORDER') or is_granted('Edit', 'ROLE_GESTION_ORDER')  or is_granted('Manager', 'ROLE_GESTION_ORDER')")
     */
    public function deleteDetailAction(Request $request, DetailOrderArticle $detail)
    {
        // supprimeé le entité
        $this->getEntityManager()->delete($detail);
        $response = new JsonResponse();
        $response->setData(array("msg" =>$this->get('translator')->trans(self::MSG_DELETE) , "type" => "success"));
        return $response;
            
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
     * récupiré le session
     *
     * @return array
     */
    private function getDetailSession()
    {
        $session = $this->getRequest()->getSession();
        if (!$session->has(self::SESSION_NAME)){
            $session->set(self::SESSION_NAME, new ArrayCollection());
        }

        return $session->get(self::SESSION_NAME);
    }
}
