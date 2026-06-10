<?php
// src/Service/AssociationApiService.php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;

class AssociationApiService
{
    private string $baseUrl;
    
    public function __construct(
        private HttpClientInterface $httpClient,
        string $apiUrl
    ) {
        $this->baseUrl = $apiUrl;
    }

    /**
     * Récupère toutes les activités
     * @return array
     */
    public function getActivities(): array
    {
        try {
            $response = $this->httpClient->request('GET', $this->baseUrl . '/activities');
            
            if ($response->getStatusCode() !== Response::HTTP_OK) {
                return [];
            }
            
            $data = $response->toArray();
            
            // Transformer les données pour correspondre au format attendu par les templates
            return array_map(function($item) {
                return $this->formatActivity($item);
            }, $data);
            
        } catch (\Exception $e) {
            // En cas d'erreur, retourner un tableau vide
            return [];
        }
    }

    /**
     * Récupère une activité par son ID
     * @param int $id
     * @return array|null
     */
    public function getActivityById(int $id): ?array
    {
        try {
            $response = $this->httpClient->request('GET', $this->baseUrl . '/activities/' . $id);
            
            if ($response->getStatusCode() !== Response::HTTP_OK) {
                return null;
            }
            
            $data = $response->toArray();
            return $this->formatActivity($data);
            
        } catch (\Exception $e) {
            return null;
        }
    }

    /**
     * Récupère toutes les offres
     * @return array
     */
    public function getOffers(): array
    {
        try {
            $response = $this->httpClient->request('GET', $this->baseUrl . '/offers');
            
            if ($response->getStatusCode() !== Response::HTTP_OK) {
                return [];
            }
            
            $data = $response->toArray();
            
            return array_map(function($item) {
                return $this->formatOffer($item);
            }, $data);
            
        } catch (\Exception $e) {
            return [];
        }
    }

    /**
     * Récupère une offre par son ID
     * @param int $id
     * @return array|null
     */
    public function getOfferById(int $id): ?array
    {
        try {
            $response = $this->httpClient->request('GET', $this->baseUrl . '/offers/' . $id);
            
            if ($response->getStatusCode() !== Response::HTTP_OK) {
                return null;
            }
            
            $data = $response->toArray();
            return $this->formatOffer($data);
            
        } catch (\Exception $e) {
            return null;
        }
    }

    /**
     * Récupère tous les membres
     * @return array
     */
    public function getMembers(): array
    {
        try {
            $response = $this->httpClient->request('GET', $this->baseUrl . '/members');
            
            if ($response->getStatusCode() !== Response::HTTP_OK) {
                return [];
            }
            
            $data = $response->toArray();
            
            return array_map(function($item) {
                return $this->formatMember($item);
            }, $data);
            
        } catch (\Exception $e) {
            return [];
        }
    }

    /**
     * Récupère un membre par son ID
     * @param int $id
     * @return array|null
     */
    public function getMemberById(int $id): ?array
    {
        try {
            $response = $this->httpClient->request('GET', $this->baseUrl . '/members/' . $id);
            
            if ($response->getStatusCode() !== Response::HTTP_OK) {
                return null;
            }
            
            $data = $response->toArray();
            return $this->formatMember($data);
            
        } catch (\Exception $e) {
            return null;
        }
    }

    /**
     * Récupère les statistiques du dashboard
     * @return array
     */
    public function getDashboardStats(): array
    {
        try {
            $response = $this->httpClient->request('GET', $this->baseUrl . '/dashboard');
            
            if ($response->getStatusCode() !== Response::HTTP_OK) {
                return [];
            }
            
            return $response->toArray();
            
        } catch (\Exception $e) {
            return [];
        }
    }

    /**
     * Formate une activité pour correspondre au template
     * @param array $data
     * @return array
     */
    private function formatActivity(array $data): array
    {
        return [
            'id' => $data['id'] ?? null,
            'titre' => $data['title'] ?? '',
            'description' => $data['description'] ?? '',
            'resume' => $data['resume'] ?? '',
            'date' => $data['date'] ?? '',
            'lieu' => $data['lieu'] ?? '',
            'status' => $data['status'] ?? 'planifie',
            'categorie' => $data['categories']['nom'] ?? ($data['categorie'] ?? 'Non classé'),
            'image_icon' => $data['image_icon'] ?? '📌',
            'participants' => $data['participants'] ?? 0,
            'beneficiaires' => $data['beneficiaires'] ?? '',
        ];
    }

    /**
     * Formate une offre pour correspondre au template
     * @param array $data
     * @return array
     */
    private function formatOffer(array $data): array
    {
        return [
            'id' => $data['id'] ?? null,
            'titre' => $data['titre'] ?? '',
            'description' => $data['description'] ?? '',
            'resume' => $data['resume'] ?? '',
            'type' => $data['type'] ?? '',
            'lieu' => $data['lieu'] ?? '',
            'date_limite' => $data['dateLimite'] ?? '',
            'experience' => $data['experience'] ?? '',
            'formation' => $data['formation'] ?? '',
            'competences' => $data['compentences'] ?? [],
            'statut' => $data['statut'] ?? 'ouvert',
            'icon' => $data['icon'] ?? '📢',
        ];
    }

    /**
     * Formate un membre pour correspondre au template
     * @param array $data
     * @return array
     */
    private function formatMember(array $data): array
    {
        return [
            'id' => $data['id'] ?? null,
            'nom' => $data['nom'] ?? '',
            'poste' => $data['poste'] ?? '',
            'bio' => $data['bio'] ?? '',
            'specialite' => $data['specialite'] ?? '',
            'anciennete' => $data['anciennete'] ?? '',
            'initiales' => $data['initiales'] ?? '',
            'couleur' => $data['couleur'] ?? 'from-amber-500 to-orange-600',
            'linkedin' => $data['linkedin'] ?? '#',
            'email' => $data['email'] ?? '',
        ];
    }
}