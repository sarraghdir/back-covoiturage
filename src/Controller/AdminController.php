<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin')]
    public function index(): Response
    {
        // Correction : la méthode correcte est denyAccessUnlessGranted (avec "Access")
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        // Rendu de la vue sans virgule superflue
        return $this->render('admin/index.html.twig');
    }
    #[Route('/welcome', name: 'app_welcome')]
public function welcome(): Response
{
    return $this->render('templates/welcome.html.twig');
}
}
