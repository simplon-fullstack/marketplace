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







