<?php

namespace App\DataFixtures;

class AppData
{
    public static function getActivites(): array
    {
        return [
            [
                'id' => 1,
                'titre' => 'Programme d\'Éducation aux Droits Humains',
                'description' => 'Sensibilisation des communautés rurales et urbaines sur leurs droits fondamentaux, notamment le droit à l\'information et à l\'éducation. Des ateliers sont organisés dans les écoles et espaces communautaires d\'Uvira et environs.',
                'resume' => 'Ateliers de sensibilisation sur les droits fondamentaux dans les communautés d\'Uvira.',
                'date' => '2024-03-15',
                'lieu' => 'Uvira, Quartier Rombe',
                'status' => 'en_cours',
                'categorie' => 'Education',
                'image_icon' => '📚',
                'participants' => 320,
                'beneficiaires' => '5 écoles, 12 quartiers',
            ],
            [
                'id' => 2,
                'titre' => 'Campagne de Protection contre les Violences Basées sur le Genre',
                'description' => 'Programme de protection et d\'accompagnement des victimes de violences basées sur le genre dans la province du Sud-Kivu. Comprend des consultations juridiques gratuites, un soutien psychosocial et une réinsertion sociale.',
                'resume' => 'Accompagnement et protection des victimes de violences et de discrimination.',
                'date' => '2024-04-01',
                'lieu' => 'Province du Sud-Kivu',
                'status' => 'en_cours',
                'categorie' => 'Protection',
                'image_icon' => '🛡️',
                'participants' => 180,
                'beneficiaires' => '200+ victimes',
            ],
            [
                'id' => 3,
                'titre' => 'Agriculture Moderne et Développement Rural',
                'description' => 'Formation des agriculteurs aux techniques agricoles modernes et durables pour améliorer les rendements et promouvoir la sécurité alimentaire dans les communautés rurales du Sud-Kivu.',
                'resume' => 'Formation en techniques agricoles modernes pour les communautés rurales.',
                'date' => '2024-02-10',
                'lieu' => 'Territoires ruraux, Sud-Kivu',
                'status' => 'termine',
                'categorie' => 'Agriculture',
                'image_icon' => '🌱',
                'participants' => 450,
                'beneficiaires' => '3 territoires ruraux',
            ],
            [
                'id' => 4,
                'titre' => 'Santé pour Tous — Lutte contre le VIH/SIDA et Paludisme',
                'description' => 'Campagne de sensibilisation et de prise en charge des personnes atteintes du VIH/SIDA et du paludisme. Distribution de moustiquaires, dépistage gratuit et accompagnement thérapeutique dans les zones reculées.',
                'resume' => 'Sensibilisation, dépistage et prise en charge des malades du VIH/SIDA et paludisme.',
                'date' => '2024-05-20',
                'lieu' => 'Uvira et villages environnants',
                'status' => 'planifie',
                'categorie' => 'Santé',
                'image_icon' => '🏥',
                'participants' => 600,
                'beneficiaires' => '10 villages',
            ],
            [
                'id' => 5,
                'titre' => 'Promotion de l\'Hygiène Publique',
                'description' => 'Initiative de sensibilisation à l\'hygiène publique incluant la construction de latrines communautaires, la distribution de kits d\'hygiène et des formations sur les bonnes pratiques sanitaires.',
                'resume' => 'Sensibilisation et amélioration de l\'hygiène publique dans les communautés locales.',
                'date' => '2024-01-20',
                'lieu' => 'Uvira, Zones périurbaines',
                'status' => 'termine',
                'categorie' => 'Hygiène',
                'image_icon' => '💧',
                'participants' => 250,
                'beneficiaires' => '8 quartiers',
            ],
            [
                'id' => 6,
                'titre' => 'Programme de Consolidation de la Paix',
                'description' => 'Dialogue intercommunautaire et ateliers de réconciliation pour consolider la paix entre différentes communautés dans la région du Sud-Kivu, zone touchée par des conflits récurrents.',
                'resume' => 'Dialogue intercommunautaire pour la paix et la réconciliation au Sud-Kivu.',
                'date' => '2024-06-01',
                'lieu' => 'Sud-Kivu, zones de tension',
                'status' => 'planifie',
                'categorie' => 'Paix',
                'image_icon' => '🕊️',
                'participants' => 150,
                'beneficiaires' => '15 communautés',
            ],
        ];
    }

    public static function getOffres(): array
    {
        return [
            [
                'id' => 1,
                'titre' => 'Coordinateur(trice) de Projet — Santé Communautaire',
                'description' => 'MTU asbl recherche un(e) coordinateur(trice) de projet expérimenté(e) pour piloter notre programme de santé communautaire. Le candidat idéal possède une expérience en gestion de projets humanitaires et une connaissance du terrain au Sud-Kivu.',
                'resume' => 'Piloter les programmes de santé communautaire dans la province du Sud-Kivu.',
                'type' => 'Contrat à Durée Déterminée',
                'lieu' => 'Uvira, Sud-Kivu',
                'date_limite' => '2024-07-30',
                'experience' => '3 ans minimum',
                'formation' => 'Santé publique, Sciences sociales ou équivalent',
                'competences' => ['Gestion de projets', 'Travail communautaire', 'Reporting', 'Leadership'],
                'statut' => 'ouvert',
                'icon' => '🏥',
            ],
            [
                'id' => 2,
                'titre' => 'Chargé(e) de Communication et Plaidoyer',
                'description' => 'Nous recrutons un(e) chargé(e) de communication dynamique pour renforcer la visibilité de nos actions et mener des campagnes de plaidoyer pour les droits des communautés vulnérables.',
                'resume' => 'Gérer la communication externe et les campagnes de plaidoyer de l\'association.',
                'type' => 'Temps plein',
                'lieu' => 'Uvira, avec déplacements',
                'date_limite' => '2024-07-15',
                'experience' => '2 ans minimum',
                'formation' => 'Communication, Journalisme, Relations publiques',
                'competences' => ['Réseaux sociaux', 'Rédaction', 'Plaidoyer', 'Photographie'],
                'statut' => 'ouvert',
                'icon' => '📢',
            ],
            [
                'id' => 3,
                'titre' => 'Expert(e) Agricole — Développement Rural',
                'description' => 'MTU asbl cherche un expert agricole pour former et accompagner les agriculteurs dans l\'adoption de techniques agricoles modernes et durables adaptées au contexte du Sud-Kivu.',
                'resume' => 'Former et accompagner les agriculteurs en techniques agricoles durables.',
                'type' => 'Consultant',
                'lieu' => 'Zones rurales, Sud-Kivu',
                'date_limite' => '2024-08-10',
                'experience' => '4 ans minimum',
                'formation' => 'Agronomie, Développement rural',
                'competences' => ['Agriculture durable', 'Formation', 'Gestion d\'eau', 'Semences'],
                'statut' => 'ouvert',
                'icon' => '🌾',
            ],
            [
                'id' => 4,
                'titre' => 'Stagiaire — Droits Humains et Protection',
                'description' => 'Opportunité de stage pour un(e) étudiant(e) en droit ou sciences sociales souhaitant acquérir une expérience terrain dans le domaine de la protection des victimes et la promotion des droits humains.',
                'resume' => 'Stage pratique en droits humains et protection des victimes.',
                'type' => 'Stage',
                'lieu' => 'Uvira',
                'date_limite' => '2024-06-30',
                'experience' => 'Débutant accepté',
                'formation' => 'Droit, Sciences sociales, Criminologie',
                'competences' => ['Droits humains', 'Écoute active', 'Rédaction juridique'],
                'statut' => 'ferme',
                'icon' => '⚖️',
            ],
        ];
    }

    public static function getMembres(): array
    {
        return [
            [
                'id' => 1,
                'nom' => 'MATU Christian',
                'poste' => 'Rapporteur & Fondateur',
                'bio' => 'Fondateur de MTU asbl et journaliste engagé, Christian MATU est le porte-parole de l\'association. Il œuvre pour le droit à l\'information et la consolidation de la paix au Sud-Kivu depuis plus de 10 ans.',
                'specialite' => 'Communication & Plaidoyer',
                'anciennete' => '2015',
                'initiales' => 'CM',
                'couleur' => 'from-amber-500 to-orange-600',
                'linkedin' => '#',
                'email' => 'christian.matu@mtu-asbl.org',
            ],
            [
                'id' => 2,
                'nom' => 'AMANI Espérance',
                'poste' => 'Directrice Exécutive',
                'bio' => 'Spécialiste en développement communautaire, Espérance AMANI dirige les opérations de MTU asbl avec une vision claire et un engagement indéfectible pour les communautés vulnérables du Sud-Kivu.',
                'specialite' => 'Gestion & Développement',
                'anciennete' => '2016',
                'initiales' => 'AE',
                'couleur' => 'from-orange-500 to-amber-700',
                'linkedin' => '#',
                'email' => 'esperance.amani@mtu-asbl.org',
            ],
            [
                'id' => 3,
                'nom' => 'BUKURU Jean-Paul',
                'poste' => 'Responsable Programmes Santé',
                'bio' => 'Infirmier de formation, Jean-Paul BUKURU coordonne tous les programmes de santé de MTU asbl. Il supervise les campagnes de lutte contre le VIH/SIDA et le paludisme dans les zones les plus reculées.',
                'specialite' => 'Santé Publique',
                'anciennete' => '2018',
                'initiales' => 'BJ',
                'couleur' => 'from-yellow-500 to-amber-600',
                'linkedin' => '#',
                'email' => 'jeanpaul.bukuru@mtu-asbl.org',
            ],
            [
                'id' => 4,
                'nom' => 'ZAWADI Marie-Claire',
                'poste' => 'Coordinatrice Protection',
                'bio' => 'Juriste spécialisée en droits des femmes, Marie-Claire ZAWADI accompagne les victimes de violences basées sur le genre avec compassion et expertise. Elle a formé plus de 200 acteurs communautaires.',
                'specialite' => 'Protection & Genre',
                'anciennete' => '2017',
                'initiales' => 'ZM',
                'couleur' => 'from-amber-600 to-orange-500',
                'linkedin' => '#',
                'email' => 'marieclaire.zawadi@mtu-asbl.org',
            ],
            [
                'id' => 5,
                'nom' => 'MITIMA Patrick',
                'poste' => 'Expert Agricole',
                'bio' => 'Agronome de terrain, Patrick MITIMA forme les communautés rurales aux techniques agricoles durables. Son travail a permis d\'augmenter la production agricole de nombreuses familles du territoire.',
                'specialite' => 'Agriculture Durable',
                'anciennete' => '2019',
                'initiales' => 'MP',
                'couleur' => 'from-orange-600 to-amber-500',
                'linkedin' => '#',
                'email' => 'patrick.mitima@mtu-asbl.org',
            ],
            [
                'id' => 6,
                'nom' => 'SIFA Gloire',
                'poste' => 'Chargée Hygiène & Environnement',
                'bio' => 'Ingénieure sanitaire, Gloire SIFA mène les initiatives d\'amélioration de l\'hygiène publique et de protection de l\'environnement. Elle coordonne la construction de latrines et les campagnes de sensibilisation.',
                'specialite' => 'Environnement & Hygiène',
                'anciennete' => '2020',
                'initiales' => 'SG',
                'couleur' => 'from-yellow-600 to-orange-500',
                'linkedin' => '#',
                'email' => 'gloire.sifa@mtu-asbl.org',
            ],
        ];
    }

    public static function getActiviteById(int $id): ?array
    {
        foreach (self::getActivites() as $activite) {
            if ($activite['id'] === $id) return $activite;
        }
        return null;
    }

    public static function getOffreById(int $id): ?array
    {
        foreach (self::getOffres() as $offre) {
            if ($offre['id'] === $id) return $offre;
        }
        return null;
    }
}
