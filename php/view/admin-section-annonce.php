

<section>
    <h3>CREATE annonce</h3>
    <form class="ajax" action="api-json.php" method="POST">
        <label>
            <span>titre</span>
            <input type="text" name="titre" required placeholder="entrez votre titre">
        </label>
        <label>
            <span>image</span>
            <input type="text" name="image" required placeholder="entrez votre URL d'image" value="assets/images/photo1.jpg">
        </label>
        <label>
            <span>description</span>
            <textarea name="description" required placeholder="entrez votre description" cols="60" rows="8"></textarea>
        </label>
        <label>
            <span>datePublication</span>
            <input type="text" name="datePublication" required placeholder="entrez votre datePublication" value="<?php echo date("Y-m-d H:i:s") ?>">
        </label>
        <label>
            <span>dateFin</span>
            <input type="text" name="dateFin" required placeholder="entrez votre dateFin" value="<?php echo date("Y-m-d H:i:s") ?>">
        </label>
        <label>
            <span>auteur</span>
            <input type="text" name="auteur" required placeholder="entrez votre auteur">
        </label>
        <label>
            <span>categorie</span>
            <input type="text" name="categorie" required placeholder="entrez votre categorie">
        </label>
        <label>
            <span>prix</span>
            <input type="number" name="prix" required placeholder="entrez votre prix">
        </label>
        <button type="submit">publier votre annonce</button>
        <!-- DANS NOTRE FRAMEWORK ON AJOUTE DES INFOS TECHNIQUES -->
        <div class="confirmation">
            <!-- ICI QU'ON VA AFFICHER LE MESSAGE DE CONFIRMATION -->
        </div>
        <!-- CETTE INFO SERA UTILE POUR DISTINGUER LES TRAITEMENTS EN PHP -->
        <input type="hidden" name="idFormulaire" value="annonce-create">
    </form>

</section>


<!-- ZONE D'ACTION DE VUEJS -->
<div id="app">
    <button @click="chargerListeArticle">CHARGER LES ARTICLES</button>
  {{ message }}

    <section>
        <h3>LISTE DES ANNONCES ({{ tabArticle.length }})</h3>
        <div class="listeAnnonce ligne">
            <article v-for="article in tabArticle">
                <h3>{{ article.titre }}</h3>
                <p>{{ article.description }}</p>
            </article>
        </div>
    </section>

</div>
