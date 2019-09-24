
        <section>
            <h3>Annonces</h3>
            <div class="ligne">
<?php
// ON VA ALLER CHERCHER LES ANNONCES DANS LA BASE DE DONNEES
// DANS LA TABLE SQL annonce
// ET ENSUITE, ON VA CREER LE CODE HTML POUR LES AFFICHER

// JE CHARGE LE CODE DE MES FONCTIONS
require_once "php/mes-fonctions.php";

// JE PEUX APPELER LA FONCTION lireTable
$tabAnnonce = lireTable("annonce");
// PARCOURIR LE TABLEAU AVEC UNE BOUCLE
foreach($tabAnnonce as $annonce)
{
    // ATTENTION $annonce EST UN TABLEAU ASSOCIATIF
    $titre = $annonce["titre"];
    $image = $annonce["image"];
    $description = $annonce["description"];

    // CREER LE CODE HTML POUR CHAQUE ANNONCE
    $codeHTML =
<<<CODEHTML
            <article>
                <h3>$titre</h3>
                <img src="$image" alt="$image">
                <p>$description</p>
            </article>

CODEHTML;

    // AFFICHER LE HTML
    echo $codeHTML;

}

?>
<!--
                    <article>
                    <h3>annonce1</h3>
                    <img src="assets/images/photo1.jpg" alt="photo1.jpg">
                    <p>description de l'annonce 1</p>
                </article>
                <article>
                    <h3>annonce2</h3>
                    <img src="assets/images/photo2.jpg" alt="photo2.jpg">
                    <p>description de l'annonce 2</p>
                </article>
                <article>
                    <h3>annonce3</h3>
                    <img src="assets/images/photo3.jpg" alt="photo3.jpg">
                    <p>description de l'annonce 3</p>
                </article>
                <article>
                    <h3>annonce4</h3>
                    <img src="assets/images/photo4.jpg" alt="photo4.jpg">
                    <p>description de l'annonce 4</p>
                </article>
                <article>
                    <h3>annonce5</h3>
                    <img src="assets/images/photo5.jpg" alt="photo5.jpg">
                    <p>description de l'annonce 5</p>
                </article>
                <article>
                    <h3>annonce6</h3>
                    <img src="assets/images/photo6.jpg" alt="photo6.jpg">
                    <p>description de l'annonce 6</p>
                </article>
-->                
            </div>
        </section>
