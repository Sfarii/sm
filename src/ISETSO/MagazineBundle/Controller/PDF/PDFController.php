<?php

namespace ISETSO\MagazineBundle\Controller\PDF;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use ISETSO\MagazineBundle\Entity\ArticleManagement\OrderArticle;
use ISETSO\MagazineBundle\Entity\ArticleManagement\ReturnArticle;
use ISETSO\MagazineBundle\Entity\ArticleManagement\DischargeArticle;
use ISETSO\UserBundle\Entity\User\User;
use ISETSO\MagazineBundle\Entity\Journal\JournalConsumable;

/**
 * pdf controller.
 *
 * @Route("/pdf")
 */

class PDFController extends Controller
{

    /**
     * Finds and displays pdf for LivreJournalDurable entity.
     *
     * @Route("/pdf/{id}", name="journalconsumable_pdf")
     * @Method("GET")
     */
    public function pdfJournalConsumableAction(JournalConsumable $journalConsumable)
    {
        $html = $this->render('ISETSOMagazineBundle:journalPDF:pdf.html.twig', array(
            'journal' => $journalConsumable,
        ));

        return new Response(
            $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'attachment; filename="journalconsumable.pdf"'
            )
        );
    }

    /**
     * Finds and displays pdf for LivreJournalDurable entity.
     *
     * @Route("/pdf/{id}", name="journaldurable_pdf")
     * @Method("GET")
     */
    public function pdfJournalDurableAction(JournalDurable $journalDurable)
    {
        $html = $this->render('ISETSOMagazineBundle:journalPDF:pdf.html.twig', array(
            'journal' => $journalDurable,
        ));

        return new Response(
            $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'attachment; filename="journalDurable.pdf"'
            )
        );
    }

}