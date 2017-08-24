<?php

namespace ISETSO\MagazineBundle\Controller\Journal;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Doctrine\Common\Collections\ArrayCollection;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use ISETSO\MagazineBundle\Entity\Journal\JournalDurable;
use ISETSO\MagazineBundle\Entity\Journal\SupportingDocument;
use ISETSO\MagazineBundle\Form\Journal\SupportingDocumentDurableType;

use ISETSO\MagazineBundle\Entity\Article\ArticleDurable;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * JournalConsumable controller.
 *
 * @Route("/supportingDocumentDurable")
 * @Security("user.isSuperAdmin() or has_role('ROLE_GESTION_JOURNAL')")
 */
class SupportingDocumentDurableController extends Controller
{
    const MSG_EXIST = 'supportingdocument.flash.existe';
    const MSG_NEW = 'supportingdocument.flash.created';
    const MSG_EDIT = 'supportingdocument.flash.updated';
    const MSG_DELETE = 'supportingdocument.flash.deleted';
    const SESSION_DURABLE = 'SupportingDocumentDurable';

    /**
     * Lists all JournalConsumable entities.
     *
     * @Route("/durable", name="supportingdocumentdurable_session_index", options={"expose"=true})
     * @Method("GET")
     * @Security("is_granted('Add', 'ROLE_GESTION_JOURNAL')  or is_granted('Manager', 'ROLE_GESTION_JOURNAL')")
     */
    public function indexDurableSaveInSessionAction()
    {
        $response = new JsonResponse();
        $response->setData($this->getEntityManager()->supportingDocumentToArray($this->getSession(self::SESSION_DURABLE)));
        return $response;
    }

    /**
     * Lists all JournalConsumable entities.
     *
     * @Route("/durable/{id}", name="supportingdocumentdurable_dataBase_index", options={"expose"=true})
     * @Method("GET")
     * @Security("is_granted('Add', 'ROLE_GESTION_JOURNAL')  or is_granted('Manager', 'ROLE_GESTION_JOURNAL')")
     */
    public function indexDurableSaveInDataBaseAction(JournalDurable $journalDurable)
    {
        $response = new JsonResponse();
        $response->setData($this->getEntityManager()->supportingDocumentInDataBaseToArray($journalDurable->getSupportingDocument()));
        return $response;
    }

    /**
     * supprimé le SupportingDocument dans le session.
     *
     * @Route("/deleteFormSession/{id}", name="supportingDocumentDurableFormSession_delete" , options={"expose"=true})
     * @Method("DELETE")
     * @Security("is_granted('Add', 'ROLE_GESTION_JOURNAL') or is_granted('Manager', 'ROLE_GESTION_JOURNAL')")
     */
    public function deleteSupportingDocumentFromSessionAction(Request $request,ArticleDurable $article)
    {
        $this->getEntityManager()->deleteEntitySaveInSession($article->getId(),$this->getSession(self::SESSION_DURABLE));
        $response = new JsonResponse();
        $response->setData(array("msg" =>$this->get('translator')->trans(self::MSG_DELETE) , "type" => "success"));
        return $response;
    }

    

    /**
     * Deletes a SupportingDocument entity.
     *
     * @Route("/supportingdocument/{id}", name="supportingDocumentDurable_delete" , options={"expose"=true})
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
     * Creates a new JournalConsumable entity.
     *
     * @Route("/newSupportingDocumentDurable/{id}",defaults= {"id" = 0 }, name="supportingdocumentdurable_new" , options={"expose"=true})
     * @Method({"GET", "POST"})
     * @Security("is_granted('Add', 'ROLE_GESTION_JOURNAL')  or is_granted('Manager', 'ROLE_GESTION_JOURNAL')")
     */
    public function newSupportingDocumentDurableAction($id)
    {
        $response = new JsonResponse();
        $supportingDocument = $this->getEntityManager()->arrayToSupportingDocument($this->get("request")->getContent());
        
        if (!is_null($supportingDocument)){
            if ($id == 0 && $this->getEntityManager()->newEntitySaveInSession($supportingDocument,$this->getSession(self::SESSION_DURABLE))){
                $response->setData(array("msg" =>$this->get('translator')->trans(self::MSG_NEW) , "type" => "success"));
            }else if ($id != 0 && $this->getEntityManager()->editEntitySaveInSession($supportingDocument,$this->getSession(self::SESSION_DURABLE),$id)){
                $response->setData(array("msg" =>$this->get('translator')->trans(self::MSG_EDIT) , "type" => "success"));
            }else{
                $response->setData(array("msg" =>$this->get('translator')->trans(self::MSG_EXIST) , "type" => "error"));
            }
        }
        return $response;
    }

    /**
     * Displays a form to edit an existing JournalConsumable entity.
     *
     * @Route("/{id}/editSupportingDocumentDurable", name="supportingdocumentdurable_edit", options={"expose"=true})
     * @Method({"GET", "POST"})
     * @Security("is_granted('Edit', 'ROLE_GESTION_JOURNAL') and journalDurable.isAuthor(user)  or is_granted('Manager', 'ROLE_GESTION_JOURNAL')")
     */
    public function editSupportingDocumentDurableAction(Request $request ,JournalDurable $journalDurable)
    {
        $response = new JsonResponse();
        $supportingDocument = $this->getEntityManager()->arrayToSupportingDocument($this->get("request")->getContent());
        
        if (!is_null($supportingDocument)){
            $this->getEntityManager()->newArticleDurableSaveInDataBase($supportingDocument,$journalDurable->getSupportingDocument());
            $response->setData(array("msg" =>$this->get('translator')->trans(self::MSG_NEW) , "type" => "success"));
        }
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