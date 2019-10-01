<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div id="app">
        <header>
            <h1>{{ message }}</h1>
            <nav>
                <ul>
                    <li><a @click="menuActif = 'menu1'" href="#">annonce</a></li>
                    <li><a @click="menuActif = 'menu2'" href="#">newsletter</a></li>
                    <li><a @click="menuActif = 'menu3'" href="#">contact</a></li>
                    <li><a @click="menuActif = 'menu4'" href="#">user</a></li>
                </ul>
            </nav>
            <h3>{{ menuActif }}</h3>
        </header>
        <main>
            <!-- v-if permet de détruire et re-recréer le HTML -->
            <!-- alors que v-show permet de cacher/montrer avec du CSS-->
            <!-- SPA Single Page Application -->
            <!-- Application dans Page Unique-->
            <section v-if="menuActif == 'menu1'">
                <h3>CRUD SUR annonce</h3>
                <?php require_once "php/view/admin-vuejs-annonce.php" ?>
            </section>
            <section v-if="menuActif == 'menu2'">
                <h3>CRUD SUR newsletter</h3>
                <?php require_once "php/view/admin-vuejs-newsletter.php" ?>
            </section>
            <section v-if="menuActif == 'menu3'">
                <h3>CRUD SUR contact</h3>
                <?php require_once "php/view/admin-vuejs-contact.php" ?>
            </section>
            <section v-if="menuActif == 'menu4'">
                <h3>CRUD SUR user</h3>
                <?php require_once "php/view/admin-vuejs-user.php" ?>
            </section>

        </main>
        <footer>
        </footer>
    </div>
    <!-- POUR UTILISER VUEJS IL FAUT CHARGER LA LIBRAIRIE -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
// maintenant je peux utiliser VueJS
// new EST RELIE A LA POO
// Vue() EST UNE FONCTION CONSTRUCTEUR (AUSSI RELIE A LA POO)    
/*
var paramVue = {
  el: '#app',       // obligatoire avec Vue pour associer notre container HTML id="app"
  data: {
    message: 'Hello Vue !'
  }
};
*/

// on peut ajouter des propriétés dans l'objet
// après sa création
paramVue = {};      // je crée un objet vide
    // et ensuite je le remplis
paramVue.el     = '#app';

// DATA BINDING (bind => liaison, association)
// ON RELIE DES PROPRIETES JS (DES VARIABLES) AVEC DU HTML
// MVVM Model View ViewModel
// DOUBLE DATA BINDING
// Model => data avec les propriétés et les valeurs
// View  => affichage dans la page HTML
// => SYNCHRONISATION ENTRE JS ET HTML
paramVue.data           = {};    
paramVue.data.message   = 'COUCOU CA MARCHE ?'; 
paramVue.data.menuActif = 'menu1';

// comparer avec les chemins de dossiers
// dossier/sous-dossier/sous-sous-dossier

var app = new Vue(paramVue);
    </script>
</body>
</html>