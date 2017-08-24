<?php

namespace ISETSO\MagazineBundle\Controller\Magazine;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Doctrine\Common\Collections\ArrayCollection;

use ISETSO\MagazineBundle\Entity\Magazine\MagazineDischarge;
use ISETSO\MagazineBundle\Form\Magazine\MagazineDischargeType;
use ISETSO\MagazineBundle\Entity\Magazine\Magazine;
use ISETSO\MagazineBundle\Entity\DetailArticleManagement\DetailDischargeArticle;
use ISETSO\MagazineBundle\Form\DetailArticleManagement\DetailDischargeArticleDurableType;
use ISETSO\MagazineBundle\Form\DetailArticleManagement\DetailDischargeArticleConsumableType;

use ISETSO\MagazineBundle\Form\Search\SearchWithDateType;
use ISETSO\MagazineBundle\Form\Check\CheckType;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * Magazine\MagazineDischarge controller.
 *
 * @Route("/magazine_magazinedischarge")
 */
class StoreDischargeController extends Controller
{
    const ROLE = 'ROLE_GESTION_MAGAZINE';
    const MSG_NEW = 'magazineDischarge.flash.created';
    const MSG_EDIT = 'magazineDischarge.flash.updated';
    const MSG_DELETE = 'magazineDischarge.flash.deleted';
    const MSG_CHECK = 'magazineDischarge.flash.check';

    /**
     * Lists all Magazine\MagazineDischarge entities.
     *
     * @Route("/index/{id}", name="magazine_magazinedischarge_index")
     * @Method({"GET", "POST"})
     */
    public function indexAction(Request $request,Magazine $magazine)
    {
        $entityManager = $this->getEntityManager();
        $form = $this->createForm(SearchWithDateType::class)->handleRequest($request);

        // récupiré le requéte a partir de information déja collecter
        $query = $entityManager->getEntityBySubEntity($magazine,$this->getDoctrine()->getRepository(MagazineDischarge::class), $this->getUser() ,self::ROLE, $form);

        // creé le delete form
        $deleteForms = array();
        foreach ($query->getQuery()->getResult() as $entity) {
            $deleteForms[$entity->getId()] = $this->createDeleteForm($entity)->createView();
        }

            
        return $this->render('ISETSOMagazineBundle:magazine_discharge:index.html.twig', array(
            'padding' => $entityManager->createPaginator($query ,$request),
            'form'=> $form->createView(),
            'deleteForms' => $deleteForms,
            'magazine_info' => $magazine
        ));
    }

    /**
     * Displays a form to check an existing DischargeArticleToUser entity.
     *
     * @Route("/check/{id}", name="magazine_magazinedischarge_check")
     * @Method({"GET", "POST"})
     * @Security("is_granted('Manager', 'ROLE_GESTION_DISCHARGE_TO_USER')")
     */
    public function checkAction(Request $request, magazineDischarge $magazine )
    {
        $editForm = $this->createForm(CheckType::class)->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            $result = $this->getEntityManager()->checkSubStoreDischargeArticleDetail ($magazine, $editForm->get('etat')->getData());
            if(count($result)){
                $this->addFlash('msg',implode(" , ", $result));
                
            }else{
                $this->addFlash('msg',$this->get('translator')->trans(self::MSG_CHECK));
                // creé un historique pour cette user
                $this->getHistoryManager()->insertCheckUserHistory(self::ROLE,$this->getUser(),self::MSG_CHECK); 
            }
            return $this->redirectToRoute('magazine_magazinedischarge_index',array('id' => $magazine->getFromMagazine()->getId()));
        }

        return $this->render('ISETSOMagazineBundle:magazine_discharge:check.html.twig', array(
            'magazine' => $magazine,
            'edit_form' => $editForm->createView()
        ));
    }

    /**
     * Creates a new Magazine\MagazineDischarge entity.
     *
     * @Route("/new/{id}", name="magazine_magazinedischarge_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request,Magazine $magazine)
    {
        $magazineDischarge = new MagazineDischarge();
        $form = $this->createForm(MagazineDischargeType::class, $magazineDischarge)->handleRequest($request);

        $detailDurable = $this->createForm(DetailDischargeArticleDurableType::class, new DetailDischargeArticle())->handleRequest($request);
        $detailConsumable = $this->createForm(DetailDischargeArticleConsumableType::class, new DetailDischargeArticle())->handleRequest($request);
        
        $session = $this->getRequest()->getSession();

        if ($form->isSubmitted() && $form->isValid() && $session->has($this->getSessionName()) && !$session->get($this->getSessionName())->isEmpty()) {

            $this->getEntityManager()->saveMagazineDetail($magazine ,$magazineDischarge,$session->get($this->getSessionName()) , $this->getUser());
            $session->set($this->getSessionName(), new ArrayCollection());
            $this->addFlash('msg',$this->get('translator')->trans(self::MSG_NEW));
            $this->getHistoryManager()->insertAddUserHistory(self::ROLE,$this->getUser(),self::MSG_NEW);
            
            return $this->redirectToRoute('magazine_magazinedischarge_index',array('id' => $magazine->getId()));
        }

        return $this->render('ISETSOMagazineBundle:magazine_discharge:new.html.twig', array(
            'magazine' => $magazine,
            'form' => $form->createView(),
            'detailDurable' => $detailDurable->createView(),
            'detailConsumable' => $detailConsumable->createView()
        ));
    }

    /**
     * Finds and displays a Magazine\MagazineDischarge entity.
     *
     * @Route("/{id}", name="magazine_magazinedischarge_show")
     * @Method("GET")
     */
    public function showAction(MagazineDischarge $magazine)
    {

        return $this->render('ISETSOMagazineBundle:magazine_discharge:show.html.twig', array(
            'magazineDischarge' => $magazine,
        ));
    }

    /**
     * Displays a form to edit an existing Magazine\MagazineDischarge entity.
     *
     * @Route("/edit/{id}", name="magazine_magazinedischarge_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, MagazineDischarge $magazine)
    {
        $editForm = $this->createForm(MagazineDischargeType::class, $magazine)->handleRequest($request);

        $detailDurable = $this->createForm(DetailDischargeArticleDurableType::class, new DetailDischargeArticle())->handleRequest($request);
        $detailConsumable = $this->createForm(DetailDischargeArticleConsumableType::class, new DetailDischargeArticle())->handleRequest($request);
        
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            // persite le entité
            $this->getEntityManager()->save($magazine);
            // flash un message
            $this->addFlash('msg', $this->get('translator')->trans(self::MSG_EDIT));
            // creé un historique pour cette user
            $this->getHistoryManager()->insertEditUserHistory(self::ROLE,$this->getUser(),self::MSG_EDIT);

            return $this->redirectToRoute('magazine_magazinedischarge_index');
        }

        return $this->render('ISETSOMagazineBundle:magazine_discharge:edit.html.twig', array(
            'magazine' => $magazine,
            'form' => $editForm->createView(),
            'detailDurable' => $detailDurable->createView(),
            'detailConsumable' => $detailConsumable->createView()
        ));
    }

    /**
     * Deletes a Magazine\MagazineDischarge entity.
     *
     * @Route("/{id}", name="magazine_magazinedischarge_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, MagazineDischarge $magazine)
    {
        $form = $this->createDeleteForm($magazine);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // supprimeé le entité
            $this->getEntityManager()->delete($magazine , $magazine->getDetail());
            // flash un message
            $this->addFlash('msg', $this->get('translator')->trans(self::MSG_DELETE) );
            // creé un historique pour cette user
            $this->getHistoryManager()->insertDeleteUserHistory(self::ROLE,$this->getUser(),self::MSG_DELETE);
            // get magasin id
            return $this->redirectToRoute('magazine_magazinedischarge_index',array('id' => $magazine->getFromMagazine()->getId()));
        }

        throw $this->createNotFoundException('delete Error');
    }

    /**
     * Creates a form to delete a Magazine\MagazineDischarge entity.
     *
     * @param MagazineDischarge $magazine\MagazineDischarge The Magazine\MagazineDischarge entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(MagazineDischarge $magazine)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('magazine_magazinedischarge_delete', array('id' => $magazine->getId())))
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
        return "detailDischargeSubMagazineArticle";
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
