<?php

namespace ISETSO\MagazineBundle\Controller\Provider;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use ISETSO\MagazineBundle\Entity\Provider\Provider;
use ISETSO\MagazineBundle\Form\Provider\ProviderType;
use ISETSO\MagazineBundle\Form\Search\SearchType;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * Provider controller.
 *
 * @Route("/provider")
 * @Security("user.isSuperAdmin() or has_role('ROLE_GESTION_PROVIDER')")
 */
class ProviderController extends Controller
{
    const ROLE = 'ROLE_GESTION_PROVIDER';
    const MSG_NEW = 'provider.flash.created';
    const MSG_EDIT = 'provider.flash.updated';
    const MSG_DELETE = 'provider.flash.deleted';

    /**
     * Lists all Provider entities.
     *
     * @Route("/", name="provider_index")
     * @Method({"GET", "POST"})
     * @Security("is_granted('View', 'ROLE_GESTION_PROVIDER') or is_granted('Manager', 'ROLE_GESTION_PROVIDER')")
     */
    public function indexAction(Request $request )
    {
        $entityManager = $this->getEntityManager();
        $form = $this->createForm(SearchType::class)->handleRequest($request);

        // récupiré le requéte a partir de information déja collecter
        $query = $entityManager->getEntityBy($this->getDoctrine()->getRepository(Provider::class), $this->getUser() ,self::ROLE, $form);

         // creé le delete form
        $deleteForms = array();
        foreach ($query->getQuery()->getResult() as $entity) {
            $deleteForms[$entity->getId()] = $this->createDeleteForm($entity)->createView();
        }

            
        return $this->render('ISETSOMagazineBundle:provider:index.html.twig', array(
            'padding' => $entityManager->createPaginator($query ,$request),
            'form'=> $form->createView(),
            'deleteForms' => $deleteForms
        ));
    }

    /**
     * Creates a new Provider entity.
     *
     * @Route("/new", name="provider_new")
     * @Method({"GET", "POST"})
     * @Security("is_granted('Add', 'ROLE_GESTION_PROVIDER') or is_granted('Manager', 'ROLE_GESTION_PROVIDER')")
     */
    public function newAction(Request $request)
    {
        $provider = new Provider();
        $form = $this->createForm(ProviderType::class, $provider);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // persite le entité
            $this->getEntityManager()->save($provider , $this->getUser());
            // flash un message
            $this->addFlash('msg',$this->get('translator')->trans(self::MSG_NEW));
            // creé un historique pour cette user
            $this->getHistoryManager()->insertAddUserHistory(self::ROLE,$this->getUser(),self::MSG_NEW);

            return $this->redirectToRoute('provider_index');
            

        }

        return $this->render('ISETSOMagazineBundle:provider:new.html.twig', array(
            'provider' => $provider,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Provider entity.
     *
     * @Route("/{id}", name="provider_show")
     * @Method("GET")
     * @Security("is_granted('View', 'ROLE_GESTION_PROVIDER') or is_granted('Manager', 'ROLE_GESTION_PROVIDER')")
     */
    public function showAction(Provider $provider)
    {
        $deleteForm = $this->createDeleteForm($provider);

        return $this->render('ISETSOMagazineBundle:provider:show.html.twig', array(
            'provider' => $provider,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Provider entity.
     *
     * @Route("/{id}/edit", name="provider_edit")
     * @Method({"GET", "POST"})
     * @Security("is_granted('Edit', 'ROLE_GESTION_PROVIDER') and provider.isAuthor(user) or is_granted('Manager', 'ROLE_GESTION_PROVIDER')")
     */
    public function editAction(Request $request, Provider $provider)
    {
        $deleteForm = $this->createDeleteForm($provider);
        $editForm = $this->createForm(ProviderType::class, $provider);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            // persite le entité
            $this->getEntityManager()->save($provider);
            // flash un message
            $this->addFlash('msg', $this->get('translator')->trans(self::MSG_EDIT));
            // creé un historique pour cette user
            $this->getHistoryManager()->insertEditUserHistory(self::ROLE,$this->getUser(),self::MSG_EDIT);
            return $this->redirectToRoute('provider_index');
        }

        return $this->render('ISETSOMagazineBundle:provider:edit.html.twig', array(
            'provider' => $provider,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Provider entity.
     *
     * @Route("/{id}", name="provider_delete")
     * @Method("DELETE")
     * @Security("is_granted('Delete', 'ROLE_GESTION_PROVIDER') and provider.isAuthor(user) or is_granted('Manager', 'ROLE_GESTION_PROVIDER')")
     */
    public function deleteAction(Request $request, Provider $provider)
    {
        $form = $this->createDeleteForm($provider);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // supprimeé le entité
            $this->getEntityManager()->delete($provider);
            // flash un message
            $this->addFlash('msg', $this->get('translator')->trans(self::MSG_DELETE) );
            // creé un historique pour cette user
            $this->getHistoryManager()->insertDeleteUserHistory(self::ROLE,$this->getUser(),self::MSG_DELETE);
        }

        return $this->redirectToRoute('provider_index');
    }

    /**
     * Creates a form to delete a Provider entity.
     *
     * @param Provider $provider The Provider entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Provider $provider)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('provider_delete', array('id' => $provider->getId())))
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
