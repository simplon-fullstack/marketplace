# marketplace

    Projet Marketplace


## Prochaines semaines

    Projet Marketplace
    * version individuelle (codé de zéro à la main)
        * évoluer assez rapidement vers la Programmation Orienté Objet
    * version en équipe (laravel et VueJS)
        * reprendre le code individuel et l'intégrer dans Laravel

    Portfolio pour le CV
    * Onepage
    * vitrine
    * blog
    => TRAVAILLER LES PERSONA CLIENT ET VISITEURS
    => ET AVANCER SUR LES MAQUETTES HTML, CSS et JS
    => PREPARER LES TABLES SQL
    => (MAIS JE DECONSEILLE DE VOULOIR AVANCER SUR PHP... 
        PARCE QUE CA VA CHANGER ASSEZ RAPIDEMENT...)


## Mon projet de MarketPlace


    Persona Client
        Une entreprise veut proposer un site d'annonces
        ...

    Persona Visiteur
        Des particuliers viennent sur le site pour s'inscrire
        et publier des annonces
        ...

    Exemple: 
        le bon coin
        https://www.leboncoin.fr/


    Pages sur le site
    Accueil                         index.php
                                        formulaire de newsletter

    Contact                         contact.php
                                        formulaire de contact

    Blog                            blog.php

    Liste des annonces              annonces.php

    Chaque Annonce aura sa page     template-annonce.php?id=123

    Page des annonces par catégorie template-categorie.php?categorie=categorie-exemple

    Page des résultats de recherche rechercher.php

    Inscription                     inscription.php
    Activation                      activation.php
    Login                           login.php
    Mot de passe oublié             mot-passe-oublie.php

    Espace Membre                   espace-membre.php

    Espace Admin                    espace-admin.php

    Mentions légales                mentions-legales.php
    Crédits                         credits.php


    (paiement => on ne va pas faire de boutique... pas de paiement...)

    ASTUCE:
    * REFLECHIR AUX SCENARIOS D'UTILISATION (Use Case)
    * => SI ON A BIEN DEFINI LES PERSONAS (CLIENT ET VISITEUR)


    * SQL: MODELE CONCEPTUEL DES DONNEES

    Database: marketplace
    Tables:     

    * user        
    (simple: admin et les membres dans la même table)

    * newsletter

    * contact

    * blog
    (pour les articles)

    * annonce
    (pour les annonces)


## FORMULAIRE DE NEWSLETTER

    * MCD: Modèle Conceptuel des Données

    CREER LA DATABASE (BDD) marketplace 
    AVEC LE CHARSET utf8mb4_general_ci

    ET AJOUTER UNE TABLE newsletter

        id                  INT             INDEX=PRIMARY   A_I
        nom                 VARCHAR(160)
        email               VARCHAR(160)
        dateInscription     DATETIME

    * ASTUCE: COMMENCER PAR DEFINIR LES COLONNES
    * => PERMET DE REUTILISER LES MEMES NOMS DANS LES FORMULAIRES HTML

## CSS: Cascading Style Sheets

    * la première règle: les instructions CSS sont lues dans l'ordre
    * les instructions qui arrivent après peuvent écraser les instructions d'avant

    * on peut jouer aussi sur les priorités entre les règles css
    * sélecteur (un sélecteur plus précis est prioritaire)
    * !important

    * => CSS CALCULE UN SCORE POUR CHAQUE REGLE
    * => LE PLUS GRAND SCORE GAGNE
    * => SPECIFICITY

    https://www.w3schools.com/css/css_specificity.asp

    * méthode recommandée pour coder avec CSS
    * on code en mobile first et on ajoute des media queries pour les tailles d'écran plus grandes
    * on organise le CSS en commençant par les balises parentes et ensuite, on descend dans les niveaux d'enfants

    /* niveau 0 */
    html, body

    /* niveau 1 */
    header
    main
    footer

    /* niveau 2 */
    h1
    nav
    section

    /* ... */

    /* personnaliser pour les écrans plus grands grâce aux media queries */
    @media (min-width:375px) {

        /* niveau 1 */
        header
        main
        footer

        /* niveau 2 */
        h1
        nav
        section

        /* ... */

    }


## AJOUT AJAX SUR LES FORMULAIRES


AVANT PROJET CODAGE
* PERSONA CLIENT
    ANALYSE DES BESOINS
* PERSONA VISITEUR
    USE CASES (UML: SCENARIO D'UTILISATIONS)
    ETUDE DE MARCHE POUR COMPARER AVEC LA CONCURRENCE

* MODELISATION CONEPTUEL DES DONNEES
    CREATION DE LA DATABASE ET DES TABLES SQL

ROLE DE CHAQUE LANGAGE
* FRONT=> HTML:     POUR CREER LA PAGE WEB ET LES FORMULAIRES 
* FRONT => CSS:     POUR AFFICHER UNE MISE EN PAGE PROPRE (RESPONSIVE)
* BACK => PHP:      RECEVOIR LES INFOS DE FORMULAIRE ET LES TRAITER
* BACK => SQL:      STOCKER LES INFOS DANS LA BDD
* FRONT => JS:      PERMET DE NE PAS RECHARGER LA PAGE 
                QUAND ON ENVOIE UN FORMULAIRE AVEC AJAX 
                (ET MODIFIER LA PAGE EXISTANTE AVEC LE MESSAGE DE CONFIRMATION)

* DEMO LIVE POUR MONTRER QUE CA MARCHE
    => REPRENDRE LES USE CASES (UML: SCENARIO D'UTILISATIONS)

ET AUSSI DONNER UNE SYNTHESE DU PROJET:
* PARTIES FACILES
* PARTIES DIFFICILES
* PROBLEMES RENCONTRES
* EVOLUTIONS FUTURES

## ON VEUT AFFICHER DES ANNONCES POUR ATTIRER DES VISITEURS



