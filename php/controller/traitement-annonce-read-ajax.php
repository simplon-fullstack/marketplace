<?php

// JE DOIS RECUPERER 
// LA LISTE DES ARTICLES DANS LA TABLE SQL annonce
// ET JE L'AJOUTE AU TABLEAU JSON

$tabArticle = lireTable("annonce");

$tabAssoJson["tabArticle"] = $tabArticle;

// JE VAIS RENVOYER DANS UN TABLEAU LA LISTE DES IMAGES DISPONIBLES DANS LE DOSSIER
// assets/upload/
// https://www.php.net/manual/fr/function.glob.php
$tabFichier = glob("assets/upload/*");
// JE VAIS LE RAJOUTER A LA REPONSE JSON
$tabAssoJson["tabUpload"] = $tabFichier;