<?php

namespace ISETSO\MagazineBundle\Controller\Home;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use ISETSO\MagazineBundle\Entity\ArticleManagement\OrderArticle;
use ISETSO\MagazineBundle\Entity\ArticleManagement\ReturnArticle;
use ISETSO\MagazineBundle\Entity\ArticleManagement\DischargeArticle;
use ISETSO\UserBundle\Entity\User\User;
use ISETSO\MagazineBundle\Entity\Magazine\Magazine;

class DashboardController extends Controller
{
    /**
     * @Route("home" ,name="dashboard_index")
     */
    public function indexAction()
    {
        // récupiré le class dao de cette entite
        $orderRepository = $this->getDoctrine()->getRepository(OrderArticle::class);
        $returnRepository = $this->getDoctrine()->getRepository(ReturnArticle::class);
        $dischargeRepository = $this->getDoctrine()->getRepository(DischargeArticle::class);
        $userRepository = $this->getDoctrine()->getRepository(User::class);

        return $this->render('ISETSOMagazineBundle:Dashboard:index.html.twig', array(
            'totalOrderNumber' => $orderRepository->getTotalOrderNumber(),
            'newOrderNumber' => $orderRepository->getNewOrderNumber(),
            'totalReturnNumber' => $returnRepository->getTotalReturnNumber(),
            'newReturnNumber' => $returnRepository->getNewReturnNumber(),
            'totalDischargeNumber' => $dischargeRepository->getTotalDischargeNumber(),
            'newDischargeNumber' => $dischargeRepository->getNewDischargeNumber(),
            'totalUserNumber' => $userRepository->getTotalUserNumber()
        ));
    }

}
