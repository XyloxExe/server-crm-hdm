# API de HDMHub


# Description
HDMHub est une plateforme en ligne innovante conçue pour rassembler les services, les ressources et les informations essentielles de l'entreprise HDM au sein d'un seul endroit pratique. Cette plateforme est dédiée à la communauté HDM, offrant un espace d'échange, de collaboration et de partage d'informations entre les membres, les clients et les partenaires.

Grâce à HDMHub, les utilisateurs pourront accéder facilement aux dernières actualités, aux ressources pertinentes, et aux services proposés par HDM. La plateforme permettra également aux membres de la communauté de se connecter, de collaborer sur des projets, et de bénéficier d'analyses et d'insights clés pour mieux répondre à leurs besoins.

## Technologies Utilisées

Ce projet a été développé en utilisant les technologies suivantes :

- **Symfony 5.4** : Framework PHP populaire, utilisé pour créer des applications web robustes et évolutives.
- **PHP 8+** : La dernière version majeure de PHP, offrant de nouvelles fonctionnalités et améliorations de performances.
- **ApiPlatform 2.7** : Plateforme API open-source basée sur Symfony, facilitant la création d'API REST complètes et performantes.

## Mise en place du Projet

**Prérequis** :

Avoir installé la dernière version de **composer** et de **symfony**.

Suivez les étapes ci-dessous pour mettre en place le projet localement :

1. **Cloner le projet :**
   Clonez le projet depuis GitHub en utilisant la commande suivante dans votre terminal :

   ```bash
   git clone https://github.com/XyloxExe/server-crm-hdm.git

2. **Accéder au répertoire du projet :**
    Utilisez la commande cd pour accéder au répertoire du projet que vous venez de cloner :

    ```bash
    cd api-crm-hdm

3. **Configurer le fichier .env :**
    Assurez-vous d'avoir configuré correctement le fichier .env avec les détails appropriés pour votre base de données et d'autres paramètres importants du projet.

4. **Installer les dépendances avec Composer :**
    Exécutez la commande suivante pour installer toutes les dépendances du projet :

    ```bash
    composer install

5. **Installer les fixtures pour l'applications :**
    Exécutez la commande suivante pour avoir des données fake et créer votre base de donnée :

    ```bash
    composer db

6. **Lancer le serveur Symfony :**
    Enfin, lancez le serveur Symfony pour exécuter le projet :

    ```bash
    symfony serve

Le serveur devrait maintenant démarrer, et vous pouvez accéder à votre API à l'adresse : http://localhost:8000/api

## Exemples de Requêtes API

Voici quelques exemples de requêtes API pour interagir avec l'API CRM HDM :

1. **Récupérer tous les clients :**

   ```http
   GET /api/clients

[
    {
        "id": 1,
        "lastName": "Dupont",
        "firstName": "Jean",
        "mail": "jean.dupont@example.com",
        "telephone": "0606060606",
        "company": "CO Google",
        "contracts: []
    },
    {
        "id": 2,
        "lastName": "John",
        "firstName": "Does",
        "mail": "john.does@example.com",
        "telephone": "0606060606",
        "company": "CO John",
        "contracts: []
    },
    ...
]

2. **Récupérer un client spécifique :**

    ```http
   GET /api/clients/{id}

[
    {
        "id": 1,
        "lastName": "Dupont",
        "firstName": "Jean",
        "mail": "jean.dupont@example.com",
        "telephone": "0606060606",
        "company": "CO Google",
        "contracts: []
    }
]

**Pour voir toutes autres méthodes disponible : http://localhost:8000/api**

## Fonctionnalités

Voici la liste des fonctionnalités disponibles dans l'API CRM HDM :

- **Clients :**
  - Création d'un client
  - Suppression d'un client
  - Récupération des données d'un client

- **Stagiaires :**
  - Création d'un stagiaire
  - Suppression d'un stagiaire
  - Récupération des données d'un stagiaire

- **Contrats :**
  - Création d'un contrat
  - Suppression d'un contrat
  - Récupération des données d'un contrat

- **Utilisateurs :**
  - Création d'un utilisateur
  - Suppression d'un utilisateur
  - Récupération des données d'un utilisateur
  - Authentification des utilisateurs
  - Inscription des utilisateurs

- **Pôles :**
  - Création d'un pôle
  - Suppression d'un pôle
  - Récupération des données d'un pôle

- **Projets :**
  - Création d'un projet
  - Suppression d'un projet
  - Récupération des données d'un projet

- **Tâches :**
  - Création d'une tâche
  - Suppression d'une tâche
  - Récupération des données d'une tâche

- **Statuts :**
  - Création d'un statut
  - Suppression d'un statut
  - Récupération des données d'un statut

- **Messages Privés :**
  - Système de messagerie privée entre deux utilisateurs