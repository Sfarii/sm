<?php

namespace ISETSO\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use ISETSO\UserBundle\Entity\User\UserHistory;

class HistoryController extends Controller
{
    /**
     * @Route("/history", name="history")
     */
    public function indexAction(Request $request)
    {
    	$user = $this->container->get('security.context')->getToken()->getUser();
    	$repository = $this->getDoctrine()
                        ->getRepository(UserHistory::class);
        $query = $repository->createQueryBuilder('n')
                            ->join('n.author', 'u')
                            ->where('u.id = :id')
                            ->setParameter('id',$user->getId())
                            ;
        $form = $this->createSearchForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid() && !empty($form->get('search')->getData())) {
            $query->andWhere('f.id like :search OR f.designation LIKE :search')
                    ->setParameter('search', '%'.$form->get('search')->getData().'%')
                    ->orderBy('f.id', 'ASC');
        }


        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10 /*limit per page*/
        );


           
        return $this->render('ISETSOUserBundle:history:index.html.twig', array(
            'history' => $pagination,
            'form'=> $form->createView(),
        ));
    }

    /**
     * Creates a form to Search a ArticleDurable entity.
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createSearchForm()
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('articledurable_index'))
            ->setMethod('GET')
            ->add('search')
            ->getForm();
        ;
    }

}
