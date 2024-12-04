<?php

namespace App\Controller;

use App\Entity\Trajet;
use App\Entity\Payment;
use App\Entity\NotificationPreferences;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\UserType;
use App\Form\NotificationPreferencesType;

class ProfileController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    // Afficher le profil de l'utilisateur
    #[Route('/profile', name: 'passenger_profile')]
    public function profile(): Response
    {
        $user = $this->getUser(); 
        if (!$user) {
            $this->addFlash('error', 'Vous devez être connecté pour accéder à votre profil.');
            return $this->redirectToRoute('app_login');
        }

        return $this->render('profile/profile.html.twig', [
            'user' => $user,
        ]);
    }

    // Modifier les informations du profil de l'utilisateur
    #[Route('/profile/edit', name: 'passenger_profile_edit')]
    public function editProfile(Request $request): Response
    {
        $user = $this->getUser();
        if (!$user) {
            $this->addFlash('error', 'Vous devez être connecté pour modifier votre profil.');
            return $this->redirectToRoute('app_login');
        }

        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush(); 
            $this->addFlash('success', 'Profil mis à jour avec succès.');
            return $this->redirectToRoute('passenger_profile'); 
        }

        return $this->render('profile/edit_profile.html.twig', [
            'form' => $form->createView(), 
        ]);
    }

    // Afficher les trajets de l'utilisateur
    #[Route('/profile/trajets', name: 'passenger_profile_trajets')]
    public function viewTrajets(): Response
    {
        $user = $this->getUser();
        if (!$user) {
            $this->addFlash('error', 'Vous devez être connecté pour voir vos trajets.');
            return $this->redirectToRoute('app_login');
        }

        $trajets = $this->entityManager->getRepository(Trajet::class)->findBy(['passager' => $user]);

        return $this->render('profile/trajets.html.twig', [
            'trajets' => $trajets, 
        ]);
    }

    // Gérer les préférences de notifications
    #[Route('/profile/notifications', name: 'passenger_profile_notifications')]
    public function manageNotifications(Request $request): Response
    {
        $user = $this->getUser(); // Récupérer l'utilisateur connecté

        // Si l'utilisateur n'est pas connecté, créer un objet NotificationPreferences avec des valeurs par défaut
        if (!$user) {
            $this->addFlash('info', 'Vous n\'êtes pas connecté, les préférences de notification seront limitées.');
            $preferences = new NotificationPreferences();
            $preferences->setReceiveBookingReminders(true); // Rappel de réservation activé par défaut
            $preferences->setReceiveNewTripAlerts(true); // Alertes pour nouveaux trajets activées
        } else {
            // Si un utilisateur est connecté, récupérer ses préférences de notification
            $preferences = $user->getNotificationPreferences();

            // Si l'utilisateur n'a pas encore de préférences de notification, créer de nouvelles
            if (!$preferences) {
                $preferences = new NotificationPreferences();
                $preferences->setUser($user); // Associer les préférences de notification à l'utilisateur
            }
        }

        // Créer et gérer le formulaire
        $form = $this->createForm(NotificationPreferencesType::class, $preferences);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($preferences); // Persister les modifications
            $this->entityManager->flush();
            $this->addFlash('success', 'Préférences de notifications mises à jour.');
            return $this->redirectToRoute('passenger_profile');
        }

        // Passer le formulaire au template pour l'affichage
        return $this->render('profile/notifications.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    #[Route('/profile/payments', name: 'passenger_profile_payments')]
    public function viewPayments(EntityManagerInterface $entityManager): Response
    {
    $user = $this->getUser();
    
    // Récupérer tous les paiements effectués pour les réservations du passager
    $payments = $entityManager->getRepository(Payment::class)
        ->createQueryBuilder('p')
        ->innerJoin('p.reservation', 'r')
        ->where('r.user = :user')
        ->setParameter('user', $user)
        ->getQuery()
        ->getResult();

    return $this->render('payment/payment_history.html.twig', [
        'payments' => $payments,
    ]);
}
}
