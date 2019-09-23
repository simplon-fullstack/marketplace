<?php

// CE FICHIER PHP SERA LE DESTINATAIRE DES FORMULAIRES HTML
// ON VA RENVOYER DU JSON
// AVEC PHP, JE PEUX UTILISER UN TABLEAU ASSOCIATIF ET LE CONVERTIR EN TEXTE JSON
$tabAssoJson = [];

// debug
// je recopie ce que j'ai reçu
$tabAssoJson["date"]    = date("Y-m-d H:i:s"); // FORMAT datetime SQL

// IL Y A AUSSI $_GET ET $_POST
// $_GET NE RECOIT QUE LES INFOS ENVOYEES EN GET    (LECTURE EN PRINCIPE)
// $_POST NE RECOIT QUE LES INFOS ENVOYEES EN POST  (ECRITURE EN PRINCIPE)
// $_REQUEST RECOIT LES 2
$tabAssoJson["request"] = $_REQUEST;

// je vais le renvoyer au navigateur
$texteJson = json_encode($tabAssoJson, JSON_PRETTY_PRINT);

// on affiche le code JSON pour le navigateur
echo $texteJson;