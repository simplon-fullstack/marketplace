<?php

// ICI JE VAIS RAJOUTER LE CODE POUR TRAITER LE FORMULAIRE DE NEWSLETTER
// JE DOIS RECUPERER LES INFOS 
// nom
// email
// ET ENSUITE JE DOIS COMPLETER LES INFOS MANQUANTES
// dateInscription
// ET ENFIN, JE VAIS AJOUTER UNE NOUVELLE LIGNE 
// DANS LA TABLE SQL nwesletter
// JE PEUX AUSSI ENVOYER UN MAIL A L'ADMIN POUR LE PREVENIR
// ET ON VA DONNER UN MESSAGE DE CONFIRMATION

$nom    = $_REQUEST["nom"] ?? "";
$email  = $_REQUEST["email"] ?? "";

$dateInscription = date("Y-m-d H:i:s");     // FORMAT SQL DATETIME

// JE PEUX APPELER LA FONCTION insererLigne 
// (LE CODE DE LA FONCTION A ETE CHARGE AVANT DANS api-json.php)
insererLigne("newsletter", [
    "nom"               => $nom,
    "email"             => $email,
    "dateInscription"   => $dateInscription,
]);


$confirmation = "merci de votre inscription";
