# MTU asbl — Site Web Officiel
## MWANADAMU TUMAINI a.s.b.l — Uvira, Province du Sud-Kivu, RDC

Site web moderne développé avec **Symfony 7** + **TailwindCSS 3 (CDN)**.

---

## 🚀 Installation & Lancement

### Prérequis
- PHP 8.2+
- Composer
- Symfony CLI (recommandé)

### Installation

```bash
# 1. Cloner ou décompresser le projet
cd mtu-asbl

# 2. Installer les dépendances PHP
composer install

# 3. Créer le fichier .env.local (optionnel)
cp .env .env.local

# 4. Lancer le serveur de développement
symfony serve
# OU
php -S localhost:8000 -t public/
```

Ouvrir http://localhost:8000 dans votre navigateur.

---

## 📁 Structure du projet

```
mtu-asbl/
├── src/
│   ├── Controller/
│   │   └── MainController.php       # Toutes les routes
│   ├── DataFixtures/
│   │   └── AppData.php              # Données en dur (activités, offres, membres)
│   └── Kernel.php
├── templates/
│   ├── base.html.twig               # Layout principal (nav + footer)
│   ├── pages/
│   │   ├── home.html.twig           # Page d'accueil
│   │   ├── about.html.twig          # À propos
│   │   └── contact.html.twig        # Contact
│   ├── activite/
│   │   ├── index.html.twig          # Liste des activités (avec filtre)
│   │   └── show.html.twig           # Détail activité
│   ├── offre/
│   │   ├── index.html.twig          # Liste des offres
│   │   └── show.html.twig           # Détail offre
│   └── membre/
│       └── index.html.twig          # Page membres
├── public/
│   └── index.php
└── composer.json
```

---

## 🎨 Design

- **Couleur primaire** : Amber/Jaune foncé (`#d97706` — amber-600)
- **Couleur secondaire** : Orange (`#f97316` — orange-500)
- **Couleur complémentaire** : Amber clair (`#fbbf24` — amber-400)
- **Fond** : Noir chaud (`#0a0704`)
- **Police display** : Playfair Display (titres)
- **Police corps** : DM Sans (texte)

### Fonctionnalités UI
- Hero section animée avec orbs flottants et grille
- Cards avec effets hover (elevation + glow)
- Badges de statut colorés (en_cours / terminé / planifié / ouvert / fermé)
- Filtre des activités par statut (JS vanilla)
- Navigation glassmorphism avec scroll effect
- Scroll reveal sur toutes les sections
- Animations CSS (float, pulse, fadeUp, slideIn)
- Menu mobile responsive
- Formulaire de contact avec confirmation
- Gradient text, gradient borders, noise overlay

---

## 📋 Pages

| Route | Nom | Description |
|-------|-----|-------------|
| `/` | app_home | Accueil avec échantillons |
| `/a-propos` | app_about | Présentation, mission, équipe |
| `/contact` | app_contact | Formulaire + coordonnées |
| `/activites` | app_activites | Liste filtrée des activités |
| `/activites/{id}` | app_activite_show | Détail d'une activité |
| `/offres` | app_offres | Liste des offres d'emploi |
| `/offres/{id}` | app_offre_show | Détail d'une offre |
| `/membres` | app_membres | Page équipe complète |

---

## ✏️ Modifier les données

Toutes les données sont dans `src/DataFixtures/AppData.php`.  
Pour ajouter une activité, une offre ou un membre, modifiez simplement le tableau correspondant.

---

## 🌐 Déploiement

```bash
# Production
APP_ENV=prod composer install --no-dev --optimize-autoloader
php bin/console cache:clear --env=prod
```

Configurez votre serveur web (Apache/Nginx) pour pointer vers le dossier `public/`.

---

**MTU asbl** — Uvira, Quartier Rombe 2, Avenue Orthodoxe, Province du Sud-Kivu, RDC  
📞 +243 97 482 155 | ✉️ mawanadamutumaini@gmail.com
