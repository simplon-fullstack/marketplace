<?php

// ICI JE VAIS RAJOUTER LE CODE POUR TRAITER LE FORMULAIRE DE NEWSLETTER
// JE DOIS RECUPERER LES INFOS 
// ET ENSUITE JE DOIS COMPLETER LES INFOS MANQUANTES
// ET ENFIN, JE VAIS AJOUTER UNE NOUVELLE LIGNE 
// DANS LA TABLE SQL annonce
// JE PEUX AUSSI ENVOYER UN MAIL A L'ADMIN POUR LE PREVENIR
// ET ON VA DONNER UN MESSAGE DE CONFIRMATION

// IMPORTANT: id DONNE LA LIGNE A MODIFIER
$id                 = $_REQUEST["id"] ?? "";
// SECURITE: CONVERTIR EN NOMBRE
$id = intval($id);

$titre              = $_REQUEST["titre"] ?? "";
$image              = $_REQUEST["image"] ?? "";
$description        = $_REQUEST["description"] ?? "";
$datePublication    = $_REQUEST["datePublication"] ?? "";
$dateFin            = $_REQUEST["dateFin"] ?? "";
$auteur             = $_REQUEST["auteur"] ?? "";
$categorie          = $_REQUEST["categorie"] ?? "";
$prix               = $_REQUEST["prix"] ?? "";

// JE PEUX APPELER LA FONCTION insererLigne 
// (LE CODE DE LA FONCTION A ETE CHARGE AVANT DANS api-json.php)
modifierLigne("annonce", $id, [
    "titre"             => $titre,
    "image"             => $image,
    "description"       => $description,
    "datePublication"   => $datePublication,
    "dateFin"           => $dateFin,
    "auteur"            => $auteur,
    "categorie"         => $categorie,
    "prix"              => $prix,
]);


$confirmation = "annonce modifiée ($id)";

// JE DOIS RECUPERER 
// LA LISTE DES ARTICLES DANS LA TABLE SQL annonce
// ET JE L'AJOUTE AU TABLEAU JSON

$tabArticle = lireTable("annonce");

$tabAssoJson["tabArticle"] = $tabArticle;