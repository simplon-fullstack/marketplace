<?php

// JE DOIS RECUPERER 
// LA LISTE DES ARTICLES DANS LA TABLE SQL annonce
// ET JE L'AJOUTE AU TABLEAU JSON

$tabArticle = lireTable("annonce");

$tabAssoJson["tabArticle"] = $tabArticle;