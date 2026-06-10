<?php
// src/Controller/ErrorController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Symfony\Component\Routing\Attribute\Route;

class ErrorController extends AbstractController
{
    #[Route('/error/{statusCode}', name: 'app_error')]
    public function show(Request $request, int $statusCode = null): Response
    {
        $exception = $request->attributes->get('exception');
        
        if ($exception instanceof HttpExceptionInterface) {
            $statusCode = $exception->getStatusCode();
            $statusText = Response::$statusTexts[$statusCode] ?? 'Erreur';
        } else {
            $statusCode = $statusCode ?? 500;
            $statusText = Response::$statusTexts[$statusCode] ?? 'Erreur interne';
        }
        
        return $this->render("bundles/TwigBundle/Exception/error{$statusCode}.html.twig", [
            'status_code' => $statusCode,
            'status_text' => $statusText,
        ]);
    }
}