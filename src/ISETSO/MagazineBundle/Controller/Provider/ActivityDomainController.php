<?php

namespace ISETSO\MagazineBundle\Controller\Provider;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use ISETSO\MagazineBundle\Entity\Provider\ActivityDomain;
use ISETSO\MagazineBundle\Form\Provider\ActivityDomainType;
use ISETSO\MagazineBundle\Form\Search\SearchType;
use ISETSO\MagazineBundle\Entity\Provider\Provider;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * ActivityDomain controller.
 *
 * @Route("/activitydomain")
 * @Security("user.isSuperAdmin() or has_role('ROLE_GESTION_ACTIVITY_DOMAIN')")
 */
class ActivityDomainController extends Controller
{
    const ROLE = 'ROLE_GESTION_ACTIVITY_DOMAIN';
    const MSG_NEW = 'activityDomain.flash.created';
    const MSG_EDIT = 'activityDomain.flash.updated';
    const MSG_DELETE = 'activityDomain.flash.deleted';

    /**
     * Lists all ActivityDomain entities.
     *
     * @Route("/", name="activitydomain_index")
     * @Method({"GET", "POST"})
     * @Security("is_granted('View', 'ROLE_GESTION_ACTIVITY_DOMAIN') or is_granted('Manager', 'ROLE_GESTION_ACTIVITY_DOMAIN')")
     */
    public function indexAction(Request $request )
    {
        $entityManager = $this->getEntityManager();
        $form = $this->createForm(SearchType::class)->handleRequest($request);

        // récupiré le requéte a partir de information déja collecter
        $query = $entityManager->getEntityBy($this->getDoctrine()->getRepository(ActivityDomain::class), $this->getUser() ,self::ROLE, $form);

         // creé le delete form
        $deleteForms = array();
        foreach ($query->getQuery()->getResult() as $entity) {
            $deleteForms[$entity->getId()] = $this->createDeleteForm($entity)->createView();
        }


        return $this->render('ISETSOMagazineBundle:activitydomain:index.html.twig', array(
            'padding' => $entityManager->createPaginator($query ,$request),
            'form'=> $form->createView(),
            'deleteForms' => $deleteForms
        ));
    }

    /**
     * Creates a new ActivityDomain entity.
     *
     * @Route("/new", name="activitydomain_new")
     * @Method({"GET", "POST"})
     * @Security("is_granted('Add', 'ROLE_GESTION_ACTIVITY_DOMAIN') or is_granted('Manager', 'ROLE_GESTION_ACTIVITY_DOMAIN')")
     */
    public function newAction(Request $request)
    {
        $activityDomain = new ActivityDomain();
        $form = $this->createForm(ActivityDomainType::class, $activityDomain);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // persite le entité
            $this->getEntityManager()->save($activityDomain , $this->getUser());
            // flash un message
            $this->addFlash('msg',$this->get('translator')->trans(self::MSG_NEW));
            // creé un historique pour cette user
            $this->getHistoryManager()->insertAddUserHistory(self::ROLE,$this->getUser(),self::MSG_NEW);

            return $this->redirectToRoute('activitydomain_index');
        }

        return $this->render('ISETSOMagazineBundle:activitydomain:new.html.twig', array(
            'activityDomain' => $activityDomain,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ActivityDomain entity.
     *
     * @Route("/{id}", name="activitydomain_show")
     * @Method("GET")
     * @Security("is_granted('View', 'ROLE_GESTION_ACTIVITY_DOMAIN') or is_granted('Manager', 'ROLE_GESTION_ACTIVITY_DOMAIN')")
     */
    public function showAction(ActivityDomain $activityDomain, Request $request)
    {
        $entityManager = $this->getEntityManager();
        $form = $this->createForm(SearchType::class)->handleRequest($request);

        // récupiré le requéte a partir de information déja collecter
        $query = $entityManager->getEntityBySubEntity($activityDomain,$this->getDoctrine()->getRepository(Provider::class), $this->getUser() ,self::ROLE, $form);


        return $this->render('ISETSOMagazineBundle:activitydomain:show.html.twig', array(
            'activityDomain' => $activityDomain,
            'padding' => $entityManager->createPaginator($query ,$request),
            'form'=> $form->createView(),
        ));

    }

    /**
     * Displays a form to edit an existing ActivityDomain entity.
     *
     * @Route("/{id}/edit", name="activitydomain_edit")
     * @Method({"GET", "POST"})
     * @Security("is_granted('Edit', 'ROLE_GESTION_ACTIVITY_DOMAIN') and activityDomain.isAuthor(user) or is_granted('Manager', 'ROLE_GESTION_ACTIVITY_DOMAIN')")
     */
    public function editAction(Request $request, ActivityDomain $activityDomain)
    {

        $editForm = $this->createForm(ActivityDomainType::class, $activityDomain);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            // persite le entité
            $this->getEntityManager()->save($activityDomain);
            // flash un message
            $this->addFlash('msg', $this->get('translator')->trans(self::MSG_EDIT));
            // creé un historique pour cette user
            $this->getHistoryManager()->insertEditUserHistory(self::ROLE,$this->getUser(),self::MSG_EDIT);

            return $this->redirectToRoute('activitydomain_index');
        }

        return $this->render('ISETSOMagazineBundle:activitydomain:edit.html.twig', array(
            'activityDomain' => $activityDomain,
            'edit_form' => $editForm->createView(),
        ));
    }

    /**
     * Deletes a ActivityDomain entity.
     *
     * @Route("/{id}", name="activitydomain_delete")
     * @Method("DELETE")
     * @Security("is_granted('Delete', 'ROLE_GESTION_ACTIVITY_DOMAIN') and activityDomain.isAuthor(user) or is_granted('Manager', 'ROLE_GESTION_ACTIVITY_DOMAIN')")
     */
    public function deleteAction(Request $request, ActivityDomain $activityDomain)
    {
        $form = $this->createDeleteForm($activityDomain);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // supprimeé le entité
            $this->getEntityManager()->delete($family);
            // flash un message
            $this->addFlash('msg', $this->get('translator')->trans(self::MSG_DELETE) );
            // creé un historique pour cette user
            $this->getHistoryManager()->insertDeleteUserHistory(self::ROLE,$this->getUser(),self::MSG_DELETE);

        }

        return $this->redirectToRoute('activitydomain_index');
    }

    /**
     * Creates a form to delete a ActivityDomain entity.
     *
     * @param ActivityDomain $activityDomain The ActivityDomain entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ActivityDomain $activityDomain)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('activitydomain_delete', array('id' => $activityDomain->getId())))
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
