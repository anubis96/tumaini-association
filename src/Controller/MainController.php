<?php

namespace App\Controller;

use App\Service\AssociationApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    public function __construct(
        private AssociationApiService $apiService
    ) {}

    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $activities = $this->apiService->getActivities();
        $offers = $this->apiService->getOffers();
        $members = $this->apiService->getMembers();
        $galleries = $this->apiService->getLatestGalleries();
        $categories = $this->apiService->getCategories();
        
        return $this->render('pages/home.html.twig', [
            'activites' => array_slice($activities, 0, 3),
            'offres' => array_slice($offers, 0, 3),
            'membres' => array_slice($members, 0, 4),
            'galleries' => $galleries,
            'categories' => $categories
        ]);
    }

    #[Route('/a-propos', name: 'app_about')]
    public function about(): Response
    {
        return $this->render('pages/about.html.twig', [
            'membres' => $this->apiService->getMembers(),
        ]);
    }

    // #[Route('/', name: 'app_home')]
    // public function index(): Response
    // {
    //     return $this->render('pages/home.html.twig', [
    //         'activites' => array_slice(AppData::getActivites(), 0, 3),
    //         'offres' => array_slice(AppData::getOffres(), 0, 3),
    //         'membres' => array_slice(AppData::getMembres(), 0, 4),
    //     ]);
    // }

    // #[Route('/a-propos', name: 'app_about')]
    // public function about(): Response
    // {
    //     return $this->render('pages/about.html.twig', [
    //         'membres' => AppData::getMembres(),
    //     ]);
    // }

    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('pages/contact.html.twig');
    }

    #[Route('/activites', name: 'app_activites')]
    public function activites(): Response
    {
        return $this->render('activite/index.html.twig', [
            'activites' => $this->apiService->getActivities(),
        ]);
    }

    // --- Activités ---
    // #[Route('/activites', name: 'app_activites')]
    // public function activites(): Response
    // {
    //     return $this->render('activite/index.html.twig', [
    //         'activites' => AppData::getActivites(),
    //     ]);
    // }

    // #[Route('/activites/{id}', name: 'app_activite_show', requirements: ['id' => '\d+'])]
    // public function activiteShow(int $id): Response
    // {
    //     $activite = AppData::getActiviteById($id);
    //     if (!$activite) {
    //         throw $this->createNotFoundException('Activité introuvable.');
    //     }
    //     $autres = array_filter(AppData::getActivites(), fn($a) => $a['id'] !== $id);
    //     return $this->render('activite/show.html.twig', [
    //         'activite' => $activite,
    //         'autres' => array_slice(array_values($autres), 0, 3),
    //     ]);
    // }
    #[Route('/activites/{id}', name: 'app_activite_show', requirements: ['id' => '\d+'])]
    public function activiteShow(int $id): Response
    {
        $activite = $this->apiService->getActivityById($id);
        
        if (!$activite) {
            throw $this->createNotFoundException('Activité introuvable.');
        }
        
        $autres = array_filter(
            $this->apiService->getActivities(), 
            fn($a) => $a['id'] !== $id
        );
        
        return $this->render('activite/show.html.twig', [
            'activite' => $activite,
            'autres' => array_slice(array_values($autres), 0, 3),
        ]);
    }
    // --- Offres ---
    #[Route('/offres', name: 'app_offres')]
    public function offres(): Response
    {
        return $this->render('offre/index.html.twig', [
            'offres' => $this->apiService->getOffers(),
        ]);
    }

    // #[Route('/offres', name: 'app_offres')]
    // public function offres(): Response
    // {
    //     return $this->render('offre/index.html.twig', [
    //         'offres' => AppData::getOffres(),
    //     ]);
    // }

    // #[Route('/offres/{id}', name: 'app_offre_show', requirements: ['id' => '\d+'])]
    // public function offreShow(int $id): Response
    // {
    //     $offre = AppData::getOffreById($id);
    //     if (!$offre) {
    //         throw $this->createNotFoundException('Offre introuvable.');
    //     }
    //     $autres = array_filter(AppData::getOffres(), fn($o) => $o['id'] !== $id);
    //     return $this->render('offre/show.html.twig', [
    //         'offre' => $offre,
    //         'autres' => array_slice(array_values($autres), 0, 3),
    //     ]);
    // }

    #[Route('/offres/{id}', name: 'app_offre_show', requirements: ['id' => '\d+'])]
    public function offreShow(int $id): Response
    {
        $offre = $this->apiService->getOfferById($id);
        
        if (!$offre) {
            throw $this->createNotFoundException('Offre introuvable.');
        }
        
        $autres = array_filter(
            $this->apiService->getOffers(), 
            fn($o) => $o['id'] !== $id
        );
        
        return $this->render('offre/show.html.twig', [
            'offre' => $offre,
            'autres' => array_slice(array_values($autres), 0, 3),
        ]);
    }
    // --- Membres ---
    #[Route('/membres', name: 'app_membres')]
    public function membres(): Response
    {
        return $this->render('membre/index.html.twig', [
            'membres' => $this->apiService->getMembers(),
        ]);
    }

    #[Route('/galerie', name: 'app_gallery')]
    public function gallery(): Response
    {
        $galleries = $this->apiService->getGalleries();
        
        return $this->render('gallery/index.html.twig', [
            'galleries' => $galleries,
        ]);
    }
    // #[Route('/membres', name: 'app_membres')]
    // public function membres(): Response
    // {
    //     return $this->render('membre/index.html.twig', [
    //         'membres' => AppData::getMembres(),
    //     ]);
    // }
}
