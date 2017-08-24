<?php

namespace ISETSO\MagazineBundle\Controller\JSON;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Symfony\Component\HttpFoundation\JsonResponse;

use ISETSO\MagazineBundle\Entity\Family\Family;
use ISETSO\MagazineBundle\Entity\Family\SubFamily;

use ISETSO\MagazineBundle\Entity\Article\Article;

use ISETSO\MagazineBundle\Entity\Journal\Journal;
use ISETSO\MagazineBundle\Entity\Journal\SupportingDocument;
use ISETSO\MagazineBundle\Entity\Local\TypeLocal;
use ISETSO\UserBundle\Entity\User\UserHistory;
use ISETSO\UserBundle\Entity\Message\Thread;
use ISETSO\UserBundle\Entity\User\User;


/**
 * ActivityDomain controller.
 *
 * @Route("/json")
 */
class JsonController extends Controller
{
    private $_normalizer ,$_encoder , $_serializer ;

    function __construct() {
        $this->_normalizer = new ObjectNormalizer();
        $this->_encoder = new JsonEncoder();
        $this->_serializer = new Serializer(array($this->_normalizer), array($this->_encoder));

        $this->_normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getId();
        });
    }

	/**
     * Lists all family entities.
     *
     * @Route("/family/{id}", name="Sub_family_index", options={"expose"=true})
     * @Method("POST")
     */
    public function getSubFamilyAction(Family $family)
    {

        $response = new Response();
        $this->_normalizer->setIgnoredAttributes(array('user','articles','family'));

        $response->setContent($this->_serializer->serialize($family->getSubfamily(), 'json'));
        $response->setStatusCode(Response::HTTP_OK);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    /**
     * Lists all type entities.
     *
     * @Route("/local/{id}", name="json_local_index", options={"expose"=true})
     * @Method("POST")
     */
    public function getTypeLocalAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $local = $em->getRepository(TypeLocal::class)->find($id);

        $response = new Response();
        $this->_normalizer->setIgnoredAttributes(array('user','typeLocal','dischargeArticle'));

        $response->setContent($this->_serializer->serialize($local->getLocals(), 'json'));
        $response->setStatusCode(Response::HTTP_OK);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    /**
     * Lists all type entities.
     *
     * @Route("/subFamily/{id}", name="json_subFamily_index", options={"expose"=true})
     * @Method("POST")
     */
    public function getArticleAction(SubFamily $subFamily)
    {

        $response = new JsonResponse();
        $this->_normalizer->setIgnoredAttributes(array('subFamily','user','subfamily','articles','supportingDocuments'));

        $response->setContent($this->_serializer->serialize($subFamily->getArticles(), 'json'));
        $response->setStatusCode(Response::HTTP_OK);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    /**
     * Lists all type entities.
     *
     * @Route("/article/{id}", name="json_article_index", options={"expose"=true})
     * @Method("GET")
     */
    public function getArticleByIdAction(Article $article)
    {

        $response = new Response();
        $this->_normalizer->setIgnoredAttributes(array('user','subfamily','articles','supportingDocuments','detailOrder'));

        $response->setContent($this->_serializer->serialize($article, 'json'));
        $response->setStatusCode(Response::HTTP_OK);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    /**
     * Lists all type entities.
     *
     * @Route("/supporting_document/{id}", name="json_supporting_document_index", options={"expose"=true})
     * @Method("POST")
     */
    public function getSupportingDocumentAction($id)
    {
        $response = new Response();
        $response->setContent($this->_serializer->serialize($this->getEntityManager()->getJournalManager()->getStockByArticleId($id), 'json'));
        $response->setStatusCode(Response::HTTP_OK);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    /**
     * Lists all type entities.
     *
     * @Route("/{id}/supporting_subStore_document/{article_id}", name="json_supporting_document_subStore_index", options={"expose"=true})
     * @Method("POST")
     */
    public function getSubStoreSupportingDocumentAction($id, $article_id)
    {
        $response = new Response();
        $response->setContent($this->_serializer->serialize($this->getEntityManager()->getJournalManager()->getSubStoreStockByArticleId($id, $article_id), 'json'));
        $response->setStatusCode(Response::HTTP_OK);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    /**
     * Lists all type entities.
     *
     * @Route("/inventoryNumber/{inventoryNumber}",defaults= {"inventoryNumber" = 0 }, name="json_InventoryNumber_generate", options={"expose"=true})
     * @Method("GET")
     */
    public function generateInventoryNumberAction($inventoryNumber)
    {

        $response = new JsonResponse();
        if ($inventoryNumber == 0){
            $response->setData(array("inventoryNumber"=> $this->getEntityManager()->getGeneratedInventoryNumber()));
        }else{
            $response->setData(array("inventoryNumber"=> $this->getEntityManager()->isUniqueInventoryNumber($inventoryNumber)));
        }
        
        return $response;
    }

    /**
     * Lists all Famille entities.
     *
     * @Route("/user_onligne", name="user_onligne_json_show", options={"expose"=true})
     * @Method("POST")
     * @Cache(expires="tomorrow", public=true)
     */
    public function userOnligneAction()
    {

        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository(User::class);

        $result = $repository->getUsersOnligne();

        $response = new Response();
        $response->setContent($this->_serializer->serialize($result, 'json'));
        $response->setStatusCode(Response::HTTP_OK);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    /**
     * Lists  entities.
     *
     * @Route("/stock_json", name="stock_json_show", options={"expose"=true})
     * @Method("GET")
     */
    public function stockAction()
    {
        $journalManager = $this->get('magazine.journal_manager');
        $result = $journalManager->getAllStock();

        $response = new Response();
        $response->setContent($this->_serializer->serialize($result, 'json'));
        $response->setStatusCode(Response::HTTP_OK);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    /**
     * Lists  entities.
     *
     * @Route("/bl_json", name="bl_json_show", options={"expose"=true})
     * @Method("GET")
     */
    public function blAction()
    {

        $em = $this->getDoctrine()->getManager();
        $result = $em->getRepository('ISETSOMagazineBundle:Journal')->findAll();

        $response = new Response();

        $response->setContent($this->_serializer->serialize($result, 'json'));
        $response->setStatusCode(Response::HTTP_OK);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    /**
     * Lists  entities.
     *
     * @Route("/facture_json", name="facture_json_show", options={"expose"=true})
     * @Method("GET")
     */
    public function factureAction()
    {

        $em = $this->getDoctrine()->getManager();
        $family = $em->getRepository('ISETSOMagazineBundle:Journal')->findAll();

        $response = new Response();

        $response->setContent($this->_serializer->serialize($result, 'json'));
        $response->setStatusCode(Response::HTTP_OK);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    /**
     * Lists  entities.
     *
     * @Route("/journal_json", name="journal_json_show", options={"expose"=true})
     * @Method("POST")
     */
    public function journalAction()
    {

        $em = $this->getDoctrine()->getManager();
        $result = $em->getRepository(Journal::class)->getByDate();

        $response = new Response();

        $response->setContent($this->_serializer->serialize($result, 'json'));
        $response->setStatusCode(Response::HTTP_OK);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    /**
     * Lists  entities.
     *
     * @Route("/qte_journal_json", name="journal_by_qte_json_show", options={"expose"=true})
     * @Method("POST")
     */
    public function journalByQuantityAction()
    {

        $em = $this->getDoctrine()->getManager();
        $result = $em->getRepository(Journal::class)->getByQuantity();

        $response = new Response();

        $response->setContent($this->_serializer->serialize($result, 'json'));
        $response->setStatusCode(Response::HTTP_OK);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    /**
     * Lists  entities.
     *
     * @Route("/session_clear", name="clear_session_json", options={"expose"=true})
     * @Method("GET")
     */
    public function clearSessionAction()
    {

        $session = $this->getRequest()->getSession();
        $sessions = array("SupportingDocumentDurable","SupportingDocumentConsumable");
        foreach ($sessions as $value) {
            if ($session->has($value)) {
                $session->remove($value);
            }
        }
        $response = new Response();
        $response->setStatusCode(Response::HTTP_OK);
        $response->headers->set('Content-Type', 'application/json');
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

}
