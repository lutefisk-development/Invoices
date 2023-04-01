<?php
declare(strict_types=1);

namespace App\Controller;

use App\Connection\Database;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class InvoiceController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function getInvoices(Environment $twig): Response
    {
        /**
         * Connect to db:
         * $conn = Database::connect();
         */

        return new Response(
            $twig->render('invoices/home.html.twig', [
                'heading' => 'Hello World!!'
            ])
        );
    }
}