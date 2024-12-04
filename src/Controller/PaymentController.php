<?php

// src/Controller/PaymentController.php

namespace App\Controller;

use App\Entity\Payment;
use App\Entity\Reservation;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PaymentController extends AbstractController
{
    #[Route('/payment', name: 'payment_method')]
    public function choisirMethodePaiement(): Response
    {
        // Afficher le formulaire pour choisir la méthode de paiement
        return $this->render('payment/payment_method.html.twig');
    }

    #[Route('/payment/process', name: 'payment_process', methods: ['POST'])]
    public function traiterPaiement(Request $request, EntityManagerInterface $entityManager): Response
    {
        $methodePaiement = $request->get('paymentMethod'); // Méthode de paiement choisie
        $montant = 100.00;  // Le montant de paiement, par exemple 100€
        
        // Récupérer la réservation liée
        $reservationId = $request->get('reservationId');
        $reservation = $entityManager->getRepository(Reservation::class)->find($reservationId);

        if (!$reservation) {
            $this->addFlash('error', 'Réservation introuvable.');
            return $this->redirectToRoute('passenger_profile');
        }

        // Créer l'objet Payment
        $paiement = new Payment();
        $paiement->setMontant($montant);  // Définir le montant du paiement
        $paiement->setMethodePaiement($methodePaiement);  // Définir la méthode de paiement
        $paiement->setDatePaiement(new \DateTime());  // Définir la date du paiement
        $paiement->setReservation($reservation);  // Lier le paiement à la réservation

        // Sauvegarder le paiement dans la base de données
        $entityManager->persist($paiement);
        $entityManager->flush();

        // Afficher un message de succès et rediriger
        $this->addFlash('success', 'Le paiement a été effectué avec succès.');
        return $this->redirectToRoute('passenger_profile');
    }
}

