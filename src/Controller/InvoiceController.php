<?php
declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InvoiceController
{
    #[Route('/')]
    public function getInvoices(): Response
    {
        dump([
            $_ENV['DB_USERNAME'],
            $_ENV['DB_PASSWORD'],
            $_ENV['DB_HOST'],
            $_ENV['DB_NAME']
        ]);
        dd('HELLO WORLD');
    }
}