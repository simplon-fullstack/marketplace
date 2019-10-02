<?php

// ON CREE UNE CLASSE ApiJson
// POUR RANGER NOTRE CODE
class ApiJson
{
    // AJOUTER MES METHODES
    function traiterFormulaire ()
    {
        // CHARGER MES FONCTIONS POUR POUVOIR LES UTILISER ENSUITE
        require_once "php/mes-fonctions.php";

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


        // ICI ON VA EFFECTUER LE TRAITEMENT DES FORMULAIRES
        // POUR SAVOIR QUEL FORMULAIRE DOIT ETRE TRAITE
        // JE VAIS M'AIDER DE L'INFO idFormulaire
        $idFormulaire = $_REQUEST["idFormulaire"] ?? "";
        if ($idFormulaire != "")
        {
            $fichierTraitement = "php/controller/traitement-$idFormulaire.php";
            // SI LE FICHIER EXISTE ALORS JE CHARGE SON CODE AVEC require_once
            // ON N'A PLUS BESOIN DE RAJOUTER UN BLOC DE if A CHAQUE NOUVEAU FORMULAIRE
            if (file_exists($fichierTraitement))
            {
                require_once $fichierTraitement;
            }
        }

        // ON AJOUTE LE MESSAGE DE CONFIRMATION POUR LE RENVOYER AU VISITEUR
        $tabAssoJson["confirmation"] = $confirmation ?? "";

        // je vais le renvoyer au navigateur
        $texteJson = json_encode($tabAssoJson, JSON_PRETTY_PRINT);

        // on affiche le code JSON pour le navigateur
        echo $texteJson;

    }
}