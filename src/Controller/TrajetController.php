<?php


namespace App\Controller;

use App\Entity\Trajet;
use App\Form\TrajetSearchType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class TrajetController extends AbstractController
{
    private $entityManager;

    // Injecter l'EntityManager via le constructeur
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/trajets', name: 'trajet_search')]
    public function search(Request $request)
    {
        $form = $this->createForm(TrajetSearchType::class);
        $form->handleRequest($request);

        $trajets = [];

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $trajets = $this->entityManager->getRepository(Trajet::class)->findTrajets($data);
        }

        return $this->render('trajet/search.html.twig', [
            'form' => $form->createView(),
            'trajets' => $trajets,
        ]);
    }

    #[Route('/trajet/{id}', name: 'trajet_details')]
    public function details($id)
    {
        $trajet = $this->entityManager->getRepository(Trajet::class)->find($id);

        if (!$trajet) {
            throw $this->createNotFoundException('Ce trajet n\'existe pas.');
        }

        return $this->render('trajet/details.html.twig', [
            'trajet' => $trajet,
        ]);
    }
}
