<?php

namespace App\Controller;

use App\Entity\Annonce;
use App\Form\AnnonceType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;

class AnnonceController extends AbstractController
{
    // Route pour ajouter une annonce
    #[Route('/ajouter-annonce', name: 'app_annonce_add')]
    public function add(Request $request, EntityManagerInterface $entityManager): Response
    {
        $annonce = new Annonce();
        $form = $this->createForm(AnnonceType::class, $annonce);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($annonce);
            $entityManager->flush();
            return $this->redirectToRoute('app_annonce_list');
        }

        return $this->render('annonce/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    // Route pour afficher et modifier une annonce
    #[Route('/annonce/edit/{id}', name: 'app_annonce_edit')]
    public function edit(int $id, Request $request, EntityManagerInterface $entityManager): Response
    {
        $annonce = $entityManager->getRepository(Annonce::class)->find($id);

        if (!$annonce) {
            throw $this->createNotFoundException('L\'annonce demandée n\'existe pas.');
        }

        $form = $this->createForm(AnnonceType::class, $annonce);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            return $this->redirectToRoute('app_annonce_list');
        }

        return $this->render('annonce/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    // Route pour supprimer une annonce
    #[Route('/annonce/delete/{id}', name: 'app_annonce_delete')]
    public function delete(int $id, EntityManagerInterface $entityManager): RedirectResponse
    {
        $annonce = $entityManager->getRepository(Annonce::class)->find($id);

        if (!$annonce) {
            throw $this->createNotFoundException('L\'annonce demandée n\'existe pas.');
        }

        $entityManager->remove($annonce);
        $entityManager->flush();

        return $this->redirectToRoute('app_annonce_list');
    }

    // Route pour afficher la page d'accueil des annonces
    #[Route('/annonce-home', name: 'app_annonce_home')]
    public function home(): Response
    {
        return $this->render('annonce/home.html.twig');
    }

    // Route pour afficher le tableau de bord des annonces
    #[Route('/annonce-dashboard', name: 'app_annonce_dashboard')]  // Changez la route ici
    public function dashboard(): Response
    {
        return $this->render('annonce/dashboard.html.twig');
    }

    // Route pour afficher la liste des annonces
    #[Route('/annonces', name: 'app_annonce_list')]
    public function list(EntityManagerInterface $entityManager): Response
    {
        $annonces = $entityManager->getRepository(Annonce::class)->findAll();

        return $this->render('annonce/index.html.twig', [
            'annonces' => $annonces,
        ]);
    }
}
