<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route(path: '/login', name: 'app_login')]
    // Dans SecurityController

public function login(AuthenticationUtils $authenticationUtils): Response
{
    if ($this->getUser()) {
        // Message flash de connexion réussie
        $this->addFlash('success', 'You have successfully logged in!');
        // Redirection vers la page de bienvenue après la connexion
        return $this->redirectToRoute('app_welcome');
    }

    $error = $authenticationUtils->getLastAuthenticationError();
    $lastUsername = $authenticationUtils->getLastUsername();

    return $this->render('security/login.html.twig', [
        'last_username' => $lastUsername,
        'error' => $error,
    ]);
}

}