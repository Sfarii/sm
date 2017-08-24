<?php

namespace ISETSO\MagazineBundle\Controller\Journal;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\JsonResponse;

use ISETSO\MagazineBundle\Entity\Journal\Journal;
use ISETSO\MagazineBundle\Entity\Journal\JournalConsumable;

use ISETSO\MagazineBundle\Entity\Journal\SupportingDocument;
use ISETSO\MagazineBundle\Form\Journal\SupportingDocumentConsumableType;

use ISETSO\MagazineBundle\Entity\Article\ArticleConsumable;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * JournalConsumable controller.
 *
 * @Route("/supportingDocumentConsumable")
 * @Security("user.isSuperAdmin() or has_role('ROLE_GESTION_JOURNAL')")
 */
class SupportingDocumentConsumableController extends Controller
{
    const MSG_EXIST = 'supportingdocument.flash.existe';
    const MSG_NEW = 'supportingdocument.flash.created';
    const MSG_EDIT = 'supportingdocument.flash.updated';
    const MSG_DELETE = 'supportingdocument.flash.deleted';
    const SESSION_CONSOMABLE = 'SupportingDocumentConsumable';

    /**
     * Lists all JournalConsumable entities.
     *
     * @Route("/consumable", name="supportingdocumentconsumable_session_index", options={"expose"=true})
     * @Method("GET")
     * @Security("is_granted('Add', 'ROLE_GESTION_JOURNAL')  or is_granted('Manager', 'ROLE_GESTION_JOURNAL')")
     */
    public function indexConsumableSaveInSessionAction()
    {
        $response = new JsonResponse();
        $response->setData($this->getEntityManager()->supportingDocumentToArray($this->getSession(self::SESSION_CONSOMABLE)));
        return $response;
    }

    /**
     * Lists all JournalConsumable entities.
     *
     * @Route("/consumable/{id}", name="supportingdocumentconsumable_dataBase_index", options={"expose"=true})
     * @Method("GET")
     * @Security("is_granted('Add', 'ROLE_GESTION_JOURNAL')  or is_granted('Manager', 'ROLE_GESTION_JOURNAL')")
     */
    public function indexConsumableSaveInDataBaseAction(JournalConsumable $journalConsumable)
    {
        $response = new JsonResponse();
        $response->setData($this->getEntityManager()->supportingDocumentInDataBaseToArray($journalConsumable->getSupportingDocument()));
        return $response;
    }

    /**
     * creé piece justificative consumable
     *
     * @Route("/newSupportingDocumentConsumable/{id}",defaults= {"id" = 0 }, name="supportingdocumentconsumable_new", options={"expose"=true})
     * @Method({"GET", "POST"})
     * @Security("is_granted('Add', 'ROLE_GESTION_JOURNAL')  or is_granted('Manager', 'ROLE_GESTION_JOURNAL')")
     */
    public function newSupportingDocumentConsumableAction($id)
    {
        $response = new JsonResponse();
        $supportingDocument = $this->getEntityManager()->arrayToSupportingDocument($this->get("request")->getContent());
        
        if (!is_null($supportingDocument)){
           if ($id == 0 && $this->getEntityManager()->newEntitySaveInSession($supportingDocument,$this->getSession(self::SESSION_CONSOMABLE))){
                $response->setData(array("msg" =>$this->get('translator')->trans(self::MSG_NEW) , "type" => "success"));
            }else if ($id != 0 && $this->getEntityManager()->editEntitySaveInSession($supportingDocument,$this->getSession(self::SESSION_CONSOMABLE),$id)){
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
     * @Route("/{id}/editSupportingDocumentConsumable/{idSupportingDocument}",defaults= {"idSupportingDocument" = 0 }, name="supportingdocumentconsumable_edit", options={"expose"=true})
     * @Method({"GET", "POST"})
     * @Security("is_granted('Edit', 'ROLE_GESTION_JOURNAL') and journalConsumable.isAuthor(user)  or is_granted('Manager', 'ROLE_GESTION_JOURNAL')")
     */
    public function editSupportingDocumentConsumableAction(Request $request ,JournalConsumable $journalConsumable ,$idSupportingDocument)
    {
        $response = new JsonResponse();
        $supportingDocument = $this->getEntityManager()->arrayToSupportingDocument($this->get("request")->getContent());
        
        if (!is_null($supportingDocument)){
           if ($idSupportingDocument == 0 && $this->getEntityManager()->newEntitySaveInDataBase($supportingDocument,$journalConsumable->getSupportingDocument())){
                $response->setData(array("msg" =>$this->get('translator')->trans(self::MSG_NEW) , "type" => "success"));
            }else if ($idSupportingDocument != 0 && $this->getEntityManager()->editEntitySaveInDataBase($supportingDocument,$journalConsumable->getSupportingDocument(),$idSupportingDocument)){
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
     * @Route("/deleteFormSession/{id}", name="supportingDocumentConsumableFormSession_delete" , options={"expose"=true})
     * @Method("DELETE")
     * @Security("is_granted('Add', 'ROLE_GESTION_JOURNAL') or is_granted('Manager', 'ROLE_GESTION_JOURNAL')")
     */
    public function deleteSupportingDocumentFromSessionAction(Request $request,ArticleConsumable $article)
    {
        $this->getEntityManager()->deleteEntitySaveInSession($article->getId(),$this->getSession(self::SESSION_CONSOMABLE));
        $response = new JsonResponse();
        $response->setData(array("msg" =>$this->get('translator')->trans(self::MSG_DELETE) , "type" => "success"));
        return $response;
    }

    

    /**
     * Deletes a SupportingDocument entity.
     *
     * @Route("/{id}/supportingdocument", name="supportingDocumentConsumable_delete", options={"expose"=true})
     * @Method("DELETE")
     * @Security("is_granted('Add', 'ROLE_GESTION_JOURNAL') or is_granted('Edit', 'ROLE_GESTION_JOURNAL')  or is_granted('Manager', 'ROLE_GESTION_JOURNAL')")
     */
    public function deleteSupportingDocumentAction(Request $request, SupportingDocument $supportingdocument)
    {
        $this->getEntityManager()->delete($supportingdocument);
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
     * @param String sessionName
     * @return array
     */
    private function getSession($sessionName)
    {
        $session = $this->getRequest()->getSession();
        if (!$session->has($sessionName)){
            $session->set($sessionName, new ArrayCollection());
        }

        return $session->get($sessionName);
    }
}