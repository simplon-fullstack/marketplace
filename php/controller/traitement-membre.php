<?php

// JE DOIS RECUPERER LES INFOS DU FORMULAIRE

// TODO: SECURITE POUR VALIDER QUE LES INFOS SONT CORRECTES

// ET ENSUITE JE VAIS LES MEMORISER DANS LA TABLE SQL membre

$email      = $_REQUEST["email"] ?? "";
$username   = $_REQUEST["username"] ?? "";
$password   = $_REQUEST["password"] ?? "";


// COMPLETER LES INFOS MANQUANTES
// ON CREE LA DATE AU FORMAT SQL DATETIME
$dateInscription   = date("Y-m-d H:i:s");
// $level             = 0; // SUR UN VRAI SITE, IL FAUDRAIT ENVOYER UN MAIL D'ACTIVATION
$level             = 10;    // VERSION RAPIDE TEMPORAIRE

// ON VA HASHER LE MOT DE PASSE POUR LE RENDRE INACESSIBLE 
// AUX HACKERS MEME SI NOTRE SITE EST COMPROMIS
// https://www.php.net/manual/fr/function.password-hash.php
$passwordHash = password_hash($password, PASSWORD_DEFAULT); 

// AVANT D'INSERER UNE NOUVELLE LIGNE
// IL FAUT VERIFIER SI IL Y A LE MEME EMAIL
// READ FILTRE SUR L'EMAIL
// => JE PEUX UTILISER MA FONCTION lireTable
$tabLigne  = lireTable("membre", "email", $email);
$tabLigne2 = lireTable("membre", "username", $username);
// SI LE TABLEAU CONTIENT 0 ELEMENT => OK
// SI LE TABLEAU CONTIENT 1+ ELEMENTS => KO, L'EMAIL EST DEJA UTILISE

if ((count($tabLigne) == 0) && (count($tabLigne2) == 0))
{
    insererLigne("membre", [
        "email"             => $email,
        "username"          => $username,
        "password"          => $passwordHash,
        "dateInscription"   => $dateInscription,
        "level"             => $level,
    ]);
    
    // MESSAGE DE CONFIRMATION
    $confirmation = "votre compte est bien créé";
}
else
{
    // MESSAGE D'ERREUR
    // MESSAGE DE CONFIRMATION
    $confirmation = "désolé, l'email ou le username est déjà utilisé";
}


