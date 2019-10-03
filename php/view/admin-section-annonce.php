<!-- ZONE D'ACTION DE VUEJS: CONTAINER POUR VusJS -->


<div id="app">

<section>
    <h3>FORMULAIRE POUR UPLOADER UN FICHIER</h3>
    <!-- ATTENTION ON DOIT AJOUTER UN ATTRIBUT EN PLUS -->
    <!-- https://www.w3schools.com/php/php_file_upload.asp -->
    <form class="ajax" action="api-json.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="image">
        <button type="submit">UPLOADER MON IMAGE</button>
        <div class="confirmation"></div>
        <input type="hidden" name="idFormulaire" value="annonce-upload">
    </form>
    <div class="listeImage ligne">
        <img class="mini" @click="choisirImage(image)" v-for="image in tabUpload" :src="image">
    </div>
</section>


<section>
    <h3>CREATE annonce</h3>
    <form class="ajax" action="api-json.php" method="POST">
        <label>
            <span>titre</span>
            <input type="text" name="titre" required placeholder="entrez votre titre">
        </label>
        <label>
            <span>image</span>
            <input v-model="imageCreate" type="text" name="image" required placeholder="entrez votre URL d'image" value="assets/images/photo1.jpg">
            <img class="mini" v-if="imageCreate" :src="imageCreate">
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



<section  v-if="updateArticle" class="update">
    <button @click="updateArticle = null">fermer la popup</button>
    <h3>UPDATE annonce</h3>
    <form @submit.prevent="modifierAnnonceAjax($event)" class="ajax" action="api-json.php" method="POST">
        <label>
            <span>titre</span>
            <input v-model="updateArticle.titre" type="text" name="titre" required placeholder="entrez votre titre">
        </label>
        <label>
            <span>image</span>
            <input v-model="updateArticle.image" type="text" name="image" required placeholder="entrez votre URL d'image" value="assets/images/photo1.jpg">
        </label>
        <label>
            <span>description</span>
            <textarea v-model="updateArticle.description" name="description" required placeholder="entrez votre description" cols="60" rows="8"></textarea>
        </label>
        <label>
            <span>datePublication</span>
            <input v-model="updateArticle.datePublication" type="text" name="datePublication" required placeholder="entrez votre datePublication" value="<?php echo date("Y-m-d H:i:s") ?>">
        </label>
        <label>
            <span>dateFin</span>
            <input v-model="updateArticle.dateFin" type="text" name="dateFin" required placeholder="entrez votre dateFin" value="<?php echo date("Y-m-d H:i:s") ?>">
        </label>
        <label>
            <span>auteur</span>
            <input v-model="updateArticle.auteur" type="text" name="auteur" required placeholder="entrez votre auteur">
        </label>
        <label>
            <span>categorie</span>
            <input v-model="updateArticle.categorie" type="text" name="categorie" required placeholder="entrez votre categorie">
        </label>
        <label>
            <span>prix</span>
            <input v-model="updateArticle.prix" type="number" name="prix" required placeholder="entrez votre prix">
        </label>
        <label>
            <span>id</span>
            <input v-model="updateArticle.id" type="number" name="id" required placeholder="entrez votre id">
        </label>
        <button type="submit">modifier votre annonce</button>
        <!-- DANS NOTRE FRAMEWORK ON AJOUTE DES INFOS TECHNIQUES -->
        <div class="confirmation">
            <!-- ICI QU'ON VA AFFICHER LE MESSAGE DE CONFIRMATION -->
        </div>
        <!-- CETTE INFO SERA UTILE POUR DISTINGUER LES TRAITEMENTS EN PHP -->
        <input type="hidden" name="idFormulaire" value="annonce-update">
    </form>

</section>


    <button @click="chargerListeArticle">CHARGER LES ARTICLES</button>
  {{ message }}

    <section>
        <h3>LISTE DES ANNONCES ({{ tabArticle.length }})</h3>
        <div class="listeAnnonce ligne">
            <article v-for="article in tabArticle">
                <h3>{{ article.titre }}</h3>
                <p>{{ article.description }}</p>
                <button @click="supprimerLigne(article)">supprimer</button>
                <button @click="modifierLigne(article)">modifier</button>
            </article>
        </div>
    </section>

</div>
