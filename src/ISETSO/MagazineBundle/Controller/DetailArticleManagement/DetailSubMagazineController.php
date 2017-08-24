<?php

namespace ISETSO\MagazineBundle\Controller\DetailArticleManagement;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Doctrine\Common\Collections\ArrayCollection;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\JsonResponse;

use ISETSO\MagazineBundle\Entity\Magazine\MagazineDischarge;
use ISETSO\MagazineBundle\Entity\Magazine\DetailMagazine;
use ISETSO\MagazineBundle\Form\DetailArticleManagement\DetailDischargeArticleType;
use ISETSO\MagazineBundle\Entity\Journal\SupportingDocument;

use ISETSO\MagazineBundle\Entity\Article\Article;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * OrderArticle controller.
 *
 * @Route("/detailSubMagazine")
 * @Security("user.isSuperAdmin()")
 */
class DetailSubMagazineController extends Controller
{
    const MSG_EXIST = 'detail.flash.existe';
    const MSG_NEW = 'detail.flash.created';
    const MSG_EDIT = 'detail.flash.updated';
    const MSG_DELETE = 'detail.flash.deleted';
    const SESSION_NAME = 'detailDischargeSubMagazineArticle';

    /**
     * Lists all detailOrderArticle entities.
     *
     * @Route("/index", name="detailDischargeSubMagazine_session_index", options={"expose"=true})
     * @Method("GET")
     * @Security("is_granted('Add', 'ROLE_GESTION_DISCHARGE_TO_USER')  or is_granted('Manager', 'ROLE_GESTION_DISCHARGE_TO_USER')")
     */
    public function indexInSessionAction()
    {
        $response = new JsonResponse();
        $response->setData($this->getEntityManager()->detailArticleToArray($this->getDetailSession(self::SESSION_NAME)));
        return $response;
    }

    /**
     * Lists all detailOrderArticle entities.
     *
     * @Route("/index/{id}", name="detailDischargeSubMagazine_dataBase_index", options={"expose"=true})
     * @Method("GET")
     * @Security("is_granted('Add', 'ROLE_GESTION_DISCHARGE_TO_USER')  or is_granted('Manager', 'ROLE_GESTION_DISCHARGE_TO_USER')")
     */
    public function indexInDataBaseAction(MagazineDischarge $article)
    {
        $response = new JsonResponse();
        $response->setData($this->getEntityManager()->detailArticleToArray($article->getDetail()));
        return $response;
    }

    /**
     * Creates a new DischargeArticleToUser entity.
     *
     * @Route("/new/{id}",defaults= {"id" = 0 }, name="detailDischargeSubMagazine_new", options={"expose"=true})
     * @Method({"GET", "POST"})
     * @Security("is_granted('Add', 'ROLE_GESTION_ORDER') or is_granted('Manager', 'ROLE_GESTION_ORDER')")
     */
    public function newAction($id)
    {
        $response = new JsonResponse();

        $detail = $this->getEntityManager()->arrayToDetail($this->get("request")->getContent(), new DetailMagazine());
        
        if (!is_null($detail)){

            if ($id == 0 && $this->getEntityManager()->newDetailSaveInSession($detail,$this->getDetailSession())){
                $response->setData(array("msg" =>$this->get('translator')->trans(self::MSG_NEW) , "type" => "success"));
                
            }else if ($id != 0 && $this->getEntityManager()->editDetailSaveInSession($detail,$this->getDetailSession(),$id)){
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
     * @Route("/{id}/edit/{idDetail}",defaults= {"idDetail" = 0 }, name="detailDischargeSubMagazine_edit", options={"expose"=true})
     * @Method({"GET", "POST"})
     * @Security("is_granted('Edit', 'ROLE_GESTION_ORDER') and magazineDischarge.isAuthor(user)  or is_granted('Manager', 'ROLE_GESTION_ORDER')")
     */
    public function editDetailAction(Request $request ,MagazineDischarge $magazineDischarge ,$idDetail)
    {
        $response = new JsonResponse();

        $detail = $this->getEntityManager()->arrayToDetail($this->get("request")->getContent(), new DetailMagazine());
        
        if (!is_null($detail)){

            if ($idDetail == 0 && $this->getEntityManager()->newDetailSaveInDataBase($detail,$magazineDischarge->getDetail())){
                $response->setData(array("msg" =>$this->get('translator')->trans(self::MSG_NEW) , "type" => "success"));
                
            }else if ($idDetail != 0 && $this->getEntityManager()->editDischargeStoreDetailSaveInDataBase($detail,$magazineDischarge->getDetail(),$idDetail)){
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
     * @Route("/deleteFormSession/{id}", name="detailDischargeSubMagazine_session_delete", options={"expose"=true})
     * @Method("DELETE")
     * @Security("is_granted('Add', 'ROLE_GESTION_ORDER') or is_granted('Manager', 'ROLE_GESTION_ORDER')")
     */
    public function deleteDetailFromSessionAction(Request $request,SupportingDocument $article)
    {
        $this->getEntityManager()->deleteDetailSaveInSession($article->getId(),$this->getDetailSession());
        $response = new JsonResponse();
        $response->setData(array("msg" =>$this->get('translator')->trans(self::MSG_DELETE) , "type" => "success"));
        return $response;
    }

    
    /**
     * Deletes a SupportingDocument entity.
     *
     * @Route("/detail/{id}", name="detailDischargeSubMagazine_delete", options={"expose"=true})
     * @Method("DELETE")
     * @Security("is_granted('Add', 'ROLE_GESTION_ORDER') or is_granted('Edit', 'ROLE_GESTION_ORDER')  or is_granted('Manager', 'ROLE_GESTION_ORDER')")
     */
    public function deleteDetailAction(Request $request, DetailMagazine $detail)
    {
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
