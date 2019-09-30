<?php

// ICI JE VAIS RAJOUTER LE CODE POUR TRAITER LE FORMULAIRE DE NEWSLETTER
// JE DOIS RECUPERER LES INFOS 
// ET ENSUITE JE DOIS COMPLETER LES INFOS MANQUANTES
// ET ENFIN, JE VAIS AJOUTER UNE NOUVELLE LIGNE 
// DANS LA TABLE SQL annonce
// JE PEUX AUSSI ENVOYER UN MAIL A L'ADMIN POUR LE PREVENIR
// ET ON VA DONNER UN MESSAGE DE CONFIRMATION

$id              = $_REQUEST["id"] ?? "";

// securite: id est un nombre
// https://www.php.net/manual/fr/function.intval.php
$id = intval($id);

// JE PEUX APPELER LA FONCTION insererLigne 
// (LE CODE DE LA FONCTION A ETE CHARGE AVANT DANS api-json.php)
supprimerLigne("annonce", $id);


$confirmation = "annonce supprimée ($id)";

// JE DOIS RECUPERER 
// LA LISTE DES ARTICLES DANS LA TABLE SQL annonce
// ET JE L'AJOUTE AU TABLEAU JSON

$tabArticle = lireTable("annonce");

$tabAssoJson["tabArticle"] = $tabArticle;