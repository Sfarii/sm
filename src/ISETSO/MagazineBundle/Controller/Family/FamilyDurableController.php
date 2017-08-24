<?php

namespace ISETSO\MagazineBundle\Controller\Family;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use ISETSO\MagazineBundle\Entity\Family\FamilyDurable;
use ISETSO\MagazineBundle\Entity\Family\SubFamily;
use ISETSO\MagazineBundle\Form\Family\FamilyType;
use ISETSO\MagazineBundle\Form\Search\SearchType;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * Family controller.
 *
 * @Route("/durableFamily")
 * @Security("user.isSuperAdmin() or has_role('ROLE_GESTION_FAMILY')")
 */
class FamilyDurableController extends Controller
{
    const ROLE = 'ROLE_GESTION_FAMILY';
    const MSG_NEW = 'family.flash.created';
    const MSG_EDIT = 'family.flash.updated';
    const MSG_DELETE = 'family.flash.deleted';

    /**
     * Lists all Family entities.
     *
     * @Route("/index", name="familydurable_index")
     * @Method({"GET", "POST"})
     * @Security("is_granted('View', 'ROLE_GESTION_FAMILY') or is_granted('Manager', 'ROLE_GESTION_FAMILY')")
     */
    public function indexAction(Request $request)
    {
        $entityManager = $this->getEntityManager();
        $form = $this->createForm(SearchType::class)->handleRequest($request);

        // récupiré le requéte a partir de information déja collecter
        $query = $entityManager->getEntityBy($this->getDoctrine()->getRepository(FamilyDurable::class), $this->getUser() ,self::ROLE, $form);

         // creé le delete form
        $deleteForms = array();
        foreach ($query->getQuery()->getResult() as $entity) {
            $deleteForms[$entity->getId()] = $this->createDeleteForm($entity)->createView();
        }

        return $this->render('ISETSOMagazineBundle:familydurable:index.html.twig', array(
            'families' => $entityManager->createPaginator($query ,$request),
            'form'=> $form->createView(),
            'deleteForms' => $deleteForms
        ));
    }

    /**
     * Creates a new Family entity.
     *
     * @Route("/new", name="familydurable_new")
     * @Method({"GET", "POST"})
     * @Security("is_granted('Add', 'ROLE_GESTION_FAMILY') or is_granted('Manager', 'ROLE_GESTION_FAMILY')")
     */
    public function newAction(Request $request)
    {
        $family = new FamilyDurable();
        $form = $this->createForm(FamilyType::class, $family);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // persite le entité
            $this->getEntityManager()->save($family , $this->getUser());
            // flash un message
            $this->addFlash('msg',$this->get('translator')->trans(self::MSG_NEW));
            // creé un historique pour cette user
            $this->getHistoryManager()->insertAddUserHistory(self::ROLE,$this->getUser(),self::MSG_NEW);
           
            return $this->redirectToRoute('familydurable_index');
        }

        return $this->render('ISETSOMagazineBundle:familydurable:new.html.twig', array(
            'family' => $family,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Family entity.
     *
     * @Route("/{id}", name="familydurable_show")
     * @Method({"GET", "POST"})
     * @Security("is_granted('View', 'ROLE_GESTION_FAMILY') or is_granted('Manager', 'ROLE_GESTION_FAMILY')")
     */
    public function showAction(Request $request,FamilyDurable $family)
    {
        $entityManager = $this->getEntityManager();
        $form = $this->createForm(SearchType::class)->handleRequest($request);

        // récupiré le requéte a partir de information déja collecter
        $query = $entityManager->getEntityBySubEntity($family,$this->getDoctrine()->getRepository(SubFamily::class), $this->getUser() ,self::ROLE, $form);

        // creé le delete form
        $deleteForms = array();
        foreach ($query->getQuery()->getResult() as $entity) {
            $deleteForms[$entity->getId()] = $this->createSubFamilyDeleteForm($entity)->createView();
        }

        return $this->render('ISETSOMagazineBundle:familydurable:show.html.twig', array(
            'family' => $family,
            'families' => $entityManager->createPaginator($query ,$request),
            'form'=> $form->createView(),
            'deleteForms' => $deleteForms
        ));
    }

    /**
     * Displays a form to edit an existing Family entity.
     *
     * @Route("/{id}/edit", name="familydurable_edit")
     * @Method({"GET", "POST"})
     * @Security("is_granted('Edit', 'ROLE_GESTION_FAMILY') and family.isAuthor(user) or is_granted('Manager', 'ROLE_GESTION_FAMILY')")
     */
    public function editAction(Request $request, FamilyDurable $family)
    {
        
        $deleteForm = $this->createDeleteForm($family);
        $editForm = $this->createForm(FamilyType::class, $family);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            // persite le entité
            $this->getEntityManager()->save($family);
            // flash un message
            $this->addFlash('msg', $this->get('translator')->trans(self::MSG_EDIT));
            // creé un historique pour cette user
            $this->getHistoryManager()->insertEditUserHistory(self::ROLE,$this->getUser(),self::MSG_EDIT);
            

            return $this->redirectToRoute('familydurable_index');
        }

        return $this->render('ISETSOMagazineBundle:familydurable:edit.html.twig', array(
            'family' => $family,
            'edit_form' => $editForm->createView(),
        ));
    }

    /**
     * Deletes a Family entity.
     *
     * @Route("/{id}", name="familydurable_delete")
     * @Method("DELETE")
     * @Security("is_granted('Delete', 'ROLE_GESTION_FAMILY') and family.isAuthor(user) or is_granted('Manager', 'ROLE_GESTION_FAMILY')")
     */
    public function deleteAction(Request $request, FamilyDurable $family)
    {
        $form = $this->createDeleteForm($family);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // supprimeé le entité
            $this->getEntityManager()->delete($family);
            // flash un message
            $this->addFlash('msg', $this->get('translator')->trans(self::MSG_DELETE) );
            // creé un historique pour cette user
            $this->getHistoryManager()->insertDeleteUserHistory(self::ROLE,$this->getUser(),self::MSG_DELETE);
        }

        return $this->redirectToRoute('familydurable_index');
    }

    /**
     * Creates a form to delete a Family entity.
     *
     * @param Family $family The Family entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(FamilyDurable $family)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('familydurable_delete', array('id' => $family->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    /**
     * Creates a form pour delete a SubFamily entity.
     *
     * @param SubFamily $subFamily The SubFamily entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createSubFamilyDeleteForm(SubFamily $subFamily)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('subfamily_delete', array('id' => $subFamily->getId())))
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
