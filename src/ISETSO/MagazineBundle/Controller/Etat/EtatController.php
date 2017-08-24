<?php

namespace ISETSO\MagazineBundle\Controller\Etat;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use ISETSO\MagazineBundle\Entity\Journal\SupportingDocument;
use ISETSO\MagazineBundle\Entity\Journal\Journal;
use ISETSO\MagazineBundle\Form\Search\SearchWithDateType;
use ISETSO\MagazineBundle\Form\Search\SearchType;

class EtatController extends Controller
{
    /**
     * @Route("inventory" ,name="Inventory_index")
     * @Method("GET")
     */
    public function inventoryAction(Request $request)
    {
    	$entityManager = $this->getEntityManager();
        $form = $this->createForm(SearchWithDateType::class, null, array('method' => 'GET'))->handleRequest($request);

        // récupiré le requéte a partir de information déja collecter
        $query = $entityManager->getInventory($this->getDoctrine()->getRepository(SupportingDocument::class), $form);
        
        // imprimé pdf
        if ($request->query->get('print')!= null && $request->query->get('print')){
            return $entityManager->getPDF($this->renderView($this->getParameter('inventory_pdf'), array('inventory' => $query->getQuery()->getResult())));
        }

        return $this->render('ISETSOMagazineBundle:Etat:inventory.html.twig', array(
            'padding' => $entityManager->createPaginator($query ,$request),
            'form'=> $form->createView()
        ));
    }

    /**
     * @Route("stock" ,name="stock_index")
     * @Method({"GET", "POST"})
     */
    public function stockAction(Request $request)
    {
        $entityManager = $this->getEntityManager();
        $form = $this->createForm(SearchType::class, null, array('method' => 'GET'))->handleRequest($request);

        // récupiré le requéte a partir de information déja collecter
        $query = $entityManager->getStock();
        
        // imprimé pdf
        if ($request->query->get('print')!= null && $request->query->get('print')){
            return $entityManager->getPDF($this->renderView($this->getParameter('stock_pdf'), array('listStock' => $query->getResult())));
        }
        
        return $this->render('ISETSOMagazineBundle:Etat:stock.html.twig', array(
            'padding' => $entityManager->createPaginator($query ,$request),
            'form'=> $form->createView()
        ));
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
