<?php

namespace ISETSO\MagazineBundle\Controller\Family;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

use ISETSO\MagazineBundle\Entity\Family\FamilyConsumable;
use ISETSO\MagazineBundle\Entity\Family\FamilyDurable;
use ISETSO\MagazineBundle\Entity\Family\Family;

use ISETSO\MagazineBundle\Entity\Family\SubFamily;
use ISETSO\MagazineBundle\Form\Family\SubFamilyType;

use ISETSO\MagazineBundle\Form\Search\SearchType;

/**
 * sous famille controller.
 *
 * @Route("/subfamily")
 * @Security("user.isSuperAdmin() or has_role('ROLE_GESTION_SUBFAMILY')")
 */
class SubFamilyController extends Controller
{
    const ROLE = 'ROLE_GESTION_SUBFAMILY';
    const MSG_NEW = 'subfamily.flash.created';
    const MSG_EDIT = 'subfamily.flash.updated';
    const MSG_DELETE = 'subfamily.flash.deleted';

    /**
     * Lists all Family entities.
     *
     * @Route("/index/{id}", name="subfamily_index")
     * @Method("GET")
     * @Security("is_granted('Add', 'ROLE_GESTION_SUBFAMILY') or is_granted('Manager', 'ROLE_GESTION_SUBFAMILY')")
     */
    public function indexAction(Request $request,Family $family)
    {
        if ($family instanceof FamilyDurable){
            return $this->redirectToRoute('familydurable_show', array('id' => $family->getId()));
        }elseif ($family instanceof FamilyConsumable) {
            return $this->redirectToRoute('familyconsumable_show', array('id' => $family->getId()));
        }else{
            throw $this->createNotFoundException('Family Not Found');
        }
    }

    /**
     * Creates a new SubFamily entity.
     *
     * @Route("/new/{id}", name="subfamily_new")
     * @Method({"GET", "POST"})
     * @Security("is_granted('Add', 'ROLE_GESTION_SUBFAMILY') or is_granted('Manager', 'ROLE_GESTION_SUBFAMILY')")
     */
    public function newAction(Request $request,Family $family)
    {
        $subFamily = new SubFamily();
        $form = $this->createForm(SubFamilyType::class, $subFamily);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // persite le entité
            $subFamily->setFamily($family);
            $this->getEntityManager()->save($subFamily , $this->getUser());
            // flash un message
            $this->addFlash('msg',$this->get('translator')->trans(self::MSG_NEW));
            // creé un historique pour cette user
            $this->getHistoryManager()->insertAddUserHistory(self::ROLE,$this->getUser(),self::MSG_NEW);
           
            return $this->redirectToRoute('subfamily_index', array('id' => $family->getId()));
        }

        return $this->render('ISETSOMagazineBundle:subfamily:new.html.twig', array(
            'family' => $family,
            'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing SubFamily entity.
     *
     * @Route("/{id}/edit{idFamily}", name="subfamily_edit")
     * @Method({"GET", "POST"})
     * @ParamConverter("family", options={"mapping": {"idFamily": "id"}})
     * @Security("is_granted('Edit', 'ROLE_GESTION_SUBFAMILY') and subFamily.isAuthor(user) or is_granted('Manager', 'ROLE_GESTION_SUBFAMILY')")
     */
    public function editAction(Request $request, SubFamily $subFamily , Family $family)
    {
        $deleteForm = $this->createDeleteForm($subFamily);
        $editForm = $this->createForm(SubFamilyType::class, $subFamily);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            // persite le entité
            $subFamily->setFamily($family);
            $this->getEntityManager()->save($subFamily);
            // flash un message
            $this->addFlash('msg', $this->get('translator')->trans(self::MSG_EDIT));
            // creé un historique pour cette user
            $this->getHistoryManager()->insertEditUserHistory(self::ROLE,$this->getUser(),self::MSG_EDIT);
            
            return $this->redirectToRoute('subfamily_index', array('id' => $family->getId()));
        }

        return $this->render('ISETSOMagazineBundle:subfamily:edit.html.twig', array(
            'family' => $family,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a SubFamily entity.
     *
     * @Route("/{id}", name="subfamily_delete")
     * @Method("DELETE")
     * @Security("is_granted('Delete', 'ROLE_GESTION_SUBFAMILY') and subFamily.isAuthor(user) or is_granted('Manager', 'ROLE_GESTION_SUBFAMILY')")
     */
    public function deleteAction(Request $request, SubFamily $subFamily)
    {
        $form = $this->createDeleteForm($subFamily);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // supprimeé le entité
            $this->getEntityManager()->delete($subFamily);
            // flash un message
            $this->addFlash('msg', $this->get('translator')->trans(self::MSG_DELETE) );
            // creé un historique pour cette user
            $this->getHistoryManager()->insertDeleteUserHistory(self::ROLE,$this->getUser(),self::MSG_DELETE);
        }

        return $this->redirectToRoute('subfamily_index', array('id' => $subFamily->getFamily()->getId()));
    }

    /**
     * Creates a form pour delete a SubFamily entity.
     *
     * @param SubFamily $subFamily The SubFamily entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(SubFamily $subFamily)
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