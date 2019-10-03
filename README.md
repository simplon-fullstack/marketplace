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

    * JE CREE MA MAQUETTE HTML ET CSS (page annonces.php)
    * => CA PERMET DE COMPRENDRE QUELLES SONT LES INFORMATIONS A AFFICHER
    * => JE PEUX CREER MA TABLE SQL annonce
    => QUELLES SONT LES COLONNES ET LEUR TYPE ?

    TABLE SQL  annonce
        id              INT             INDEX=PRIMARY       A_I
        titre           VARCHAR(160)    
        image           VARCHAR(160)
        description     TEXT
        datePublication DATETIME
        dateFin         DATETIME
        auteur          VARCHAR(160)
        categorie       VARCHAR(160)
        prix            DECIMAL(10,2)

    ATTENTION: DECIMAL 10,2 VEUT DIRE 8 UNITES ENTIERES ET 2 DECIMALES


    * CREER LA TABLE SQL
    * => ENSUITE, ON PEUT COMMENCER LE CRUD
    * CREATE
    * READ
    * UPDATE
    * DELETE


## CREATE SUR LA TABLE annonce

    * AJOUTER LE FORMULAIRE HTML DANS 
        php/view/admin-section-annonce.php
    * AJOUTER LE CODE DE TRAITEMENT PHP DANS 
        php/controller/traitement-annonce-create.php

    * ET VERIFIER QUE TOUTE LA TUYAUTERIE FONCTIONNE...


## VUEJS

    * SITE OFFICIEL
    https://vuejs.org/

    * DOCUMENTATION EN FRANCAIS
    https://fr.vuejs.org/v2/guide/

    * en anglais (tuto sur VueJS)
    https://www.vuemastery.com/courses/intro-to-vue-js


    COMPONENTS: COMPOSANTS
    * UN COMPOSANT EST UNE PARTIE DE LA PAGE WEB
    * => JE DOIS CODER LE COMPOSANT AVEC DU HTML, CSS ET JS

    VUEJS RAJOUTE DU CODE A LUI SUR LE HTML, LE CSS ET LE JS
    => VOTRE CODE N'EST PLUS VALIDE PAR RAPPORT AUX STANDARDS
    => LES MOTEURS DE RECHERCHE NE SAVENT PAS BIEN REFERENCER CES PAGES
        (A EVITER SI LE REFERENCEMENT EST IMPÖRTANT...)

    * => ON VA UTILISER VUEJS SUR LES PARTIES BACK-OFFICE
    * => LES PARTIES BACK-OFFICES (ESPACES ADMIN ET MEMBRES)
            SERONT PROTEGEES ET NE SONT PAS A REFERENCER NI REFERENCABLES


    * comparaison entre VueJS, Angular et React 
    * https://fr.vuejs.org/v2/guide/comparison.html




## LUNDI 30/09

## ETAPES POUR METTRE EN PLACE LA PAGE ADMIN annonce AVEC VUEJS

    * CRUD SUR LA PAGE admin-annonce.php
        * L'ORDRE CONSEILLE POUR AJOUTER LE CRUD
            * CREATE
            * READ
            * DELETE
            * UPDATE 

    * CREATE
        * CREER LE FORMULAIRE HTML QUI REPREND LES COLONNES DE TABLE SQL
        * ET ENSUITE QUAND ON ENVOIE LE FORMULAIRE (SANS AJAX) VERS api-json.php
            ASTUCE: SANS AJAX, JE N'AI PAS BESOIN DE JS
                    => SE CONCENTRER SUR HTML + CSS COTE FRONT ET PHP + SQL COTE BACK
        * AJOUTER LE CODE PHP POUR VERIFIER QU'ON RECOIT LES INFOS DU FORMULAIRE
                    => RECUPERER LES INFOS DU FORMULAIRE ET ON ENREGISTRE DANS SQL

        * UNE FOIS QUE CA MARCHE
            => AJOUTER AJAX AVEC JS

        * ON PEUT AJOUTER LE READ POUR AFFCIHER LA LISTE AVEC VueJS

    * READ
        * AJOUTER LE CODE JS POUR TRAVAILLER AVEC VUEJS
        * AJOUTER LA BOUCLE v-for POUR AFFICHER LES ANNONCES
        * AJOUTER LE CODE PHP+SQL QUI FOURNIT LA LISTE DES ANNONCES

    * DELETE
        * AJOUTER LE BOUTON SUPPRIMER SUR CHAQUE ANNONCE (AVEC VUEJS)
            * MODIFIER LE CODE DU READ
        * AJOUTER LE CODE JS QUI VA ENVOYER LA REQUETE AJAX QUAND ON CLIQUE SUR LE BOUTON
            * AJOUTER DU CODE SUR LA BASE DU CREATE
        * AJOUTER LE TRAITEMENT PHP+SQL POUR TRAITER LA SUPPRESSION
            * REPRENDRE LE CODE PHP+SQL DU CREATE    

    * UPDATE    (LE PLUS DIFFICILE CAR ON A DES ETAPES SUPPLEMENTAIRES)
        * AJOUTER LE BOUTON MODIFIER SUR CHAQUE ANNONCE (AVEC VUEJS)
            * MODIFIER LE CODE DU READ
        * ETAPE SUPPLEMENTAIRE: PRE-REMPLIR LE FORMULAIRE DE UPDATE 
                AVEC LES INFOS DE L'ANNONCE A MODIFIER    
        * LE VISITEUR PEUT MODIFIER LE FORMULAIRE
        * ET ENSUITE QUAND LE BOUTON "ENREGISTER"
        * AJOUTER LE CODE JS QUI VA ENVOYER LA REQUETE AJAX QUAND ON CLIQUE SUR LE BOUTON
            * AJOUTER DU CODE SUR LA BASE DU CREATE
        * AJOUTER LE TRAITEMENT PHP+SQL POUR TRAITER LA MODIFICATION
            * REPRENDRE LE CODE PHP+SQL DU CREATE    

        NOTE: LE PLUS DIFFICILE EST DE SAVOIR 
            DANS QUEL LANGAGE IL FAUT AJOUTER TEL CODE 
            A CHAQUE ETAPE


### LE CREATE EN DETAILS, ETAPE PAR ETAPE POUR LE CODE

### LE READ EN DETAILS, ETAPE PAR ETAPE POUR LE CODE

### LE DELETE EN DETAILS, ETAPE PAR ETAPE POUR LE CODE

### LE UPDATE EN DETAILS, ETAPE PAR ETAPE POUR LE CODE


    * EXERCICE: REFAIRE LE CRUD SUR LES AUTRES TABLES SQL
        * CRUD SUR LA TABLE newsletter
        * CRUD SUR LA TABLE contact
        * CRUD SUR LA TABLE user
        * ...

    LE COEUR DU SITE MARKETPLACE
    UN VISITEUR SE CREE UN COMPTE 
        (CREATE SUR LA TABLE user)
    ENSUITE, IL PEUT SE CONNECTER AVEC SON email ET SON password 
        (login => READ SUR LA TABLE user)
    ENSUITE, LE VISITEUR PEUT ACCEDER A SON ESPACE MEMBRE
        IL VOIT SES ANNONCES
        (READ SUR LA TABLE user)
    ET IL PEUT CREER DE NOUVELLES ANNONCES
        (CREATE SUR LA TABLE annonce)
    ET IL PEUT AUSSI SUPPRIMER UNE ANNONCE
        (DELETE SUR LA TABLE annonce)
    ET IL PEUT MODIFIER UNE ANNONCE
        (UPDATE SUR LA TABLE annonce)

    * SUR LA PAGE annonces
        ON VA AFFICHER LES ANNONCES DE TOUS LES MEMBRES
        (READ SUR LA TABLE annonce)

 

## INSCRIPTION ET LOGIN

    SI ON VEUT QU'UN VISITEUR PUISSE DEVENIR UN MEMBRE 
    ET ENSUITE PUBLIER DES ANNONCES

    IL FAUT PROPOSER UN FORMULAIRE D'INSCRIPTION
    => TRAITEMENT DE CE FORMULAIRE VA MEMORISER LES INFOS EN BASE DE DONNEES SQL



    MODELISATION DE LA BASE DE DONNEES 
    (Modèle Conceptuel des Données)

    AJOUTER UNE TABLE SQL membre
        id            INT             INDEX=PRIMARY   AUTO_INCREMENT(A_I)
        email         VARCHAR(160)
        username      VARCHAR(160)
        password      VARCHAR(160)
        dateInscription    DATETIME
        level           INT


    level (niveau) SERVIRA A DISTINGUER LES DIFFERENTS TYPES DE MEMBRES

    -1      INSCRIT MAIS BANNI
    0       INSCRIT MAIS PAS ACTIF
    10      INSCRIT ET ACTIF
    100     ADMIN

    ATTENTION AU RGPD: Données personnelles
    https://www.cnil.fr/fr/rgpd-par-ou-commencer


## CRUD SUR LA TABLE membre

    SUR LA CREATION DE COMPTE, ON VA HASHER LE MOT DE PASSE
    POUR EVITER DE SE FAIRE VOLER LES MOTS DE PASSE DES UTILISATEURS


    HASHAGE ???
        A SENS UNIQUE, ON NE VA JAMAIS DECRYPTER
        LA SECURITE TIENT SUR LA DIFFICULTE A DECRYPTER


    CRYPTAGE ???
        CLE DE CRYPTAGE => GARDEE SECRETE QUI DONNE LA SECURITE
        SANS LA CLE DE CRYPTAGE => ON NE PEUT PAS DECRYPTER
        SI ON A LA CLE ALORS ON PEUT DECRYPTER

    CODAGE ???



    ON VA STOCKER LE MOT DE PASSE SOUS UNE FORME HACHEE
    https://www.php.net/manual/fr/function.password-hash.php

    => PERSONNE NE POURRA DEVINER LE MOT DE PASSE ORIGINAL
    => LE HACHAGE DETRUIT DE L'INFORMATION

    exemple:
    * Fazia Bouheraoua
    * grain de sel: juiuhjhkYUYUI676788 (créé aléatoirement)
    * hashage: FzBhrjhjhk/juiuhjhkYUYUI676788

    si on a le mot original on obtiendra le meme hashage
    mais si on part du hashage on aura trop de possibilités pour deviner le mot original


    https://informationisbeautiful.net/visualizations/million-lines-of-code/

    SECURITE SUPPLEMENTAIRE POUR LE HASHAGE
    * PHP RAJOUTE UN "SALT" (UN GRAIN DE SEL) POUR COMPLIQUER LA VIE AUX PIRATES
    * LE GRAIN DE SEL VA PRODUIRE UN HASHAGE DIFFERENT MEME SI ON A 2 MOTS DE PASSE IDENTIQUES
    * (PROTECTION CONTRE LES ATTAQUES PAR DICTIONNAIRE INVERSE...)


    ET ENSUITE, ON VA POUVOIR VALIDER LE LOGIN AVEC LA FONCTION password_verify

    https://www.php.net/manual/fr/function.password-verify.php


## RESUME DES ETAPES DE LA SEMAINE POUR AVANCER SUR LE PROJET

    * CHOIX DE L'EQUIPE
    * CHOIX DU PROJET
    * LISTE DES PAGES DU SITE
    * LISTE DES TEMPLATES NECESSAIRES POUR CREER CES PAGES
    * LISTE DES FORMULAIRES DANS CHAQUE TEMPLATE
    *   DETECTER LES FORMULAIRE COMPLIQUES
            UPDATE
            UPLOAD (envoyer un fichier de son ordinateur vers le site web)
    * FAIRE LES SCENARIOS D'UTILISATION
    * FAIRE LA LISTE DES SCENARIOS NECESSAIRES POUR LA PREMIERE VERSION
    * => DONNE LES TEMPLATES A CODER POUR CETTE PREMIERE VERSION

    exemple:
    le visiteur arrive sur la page d'accueil 
        => il faut coder le template de la page d'accueil
    le visiteur peut se créer un compte
        => il faut coder le formulaire de création de compte (CREATE)
    le visiteur peut se connecter
        => il faut coder le formulaire de login (READ)
    le visiteur peut accéder à son espace membre
        => il faut coder le template de l'espace membre
    le membre peut créer une annonce
        => il faut coder le formulaire de création d'annonce 
            (CREATE MAIS AVEC UPLOAD => WARNING...)            


