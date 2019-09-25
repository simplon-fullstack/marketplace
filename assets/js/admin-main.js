// je charge VueJS dans ma page
// et je relie le JS au HTML
// avec le sélecteur #app
var app = new Vue({
    // INITIALISATION DE VUEJS
    el: '#app',     // sélecteur pour déterminer la zone d'action de VueJS
    // LES DONNEES QUE VUEJS VA GERER
    data: {
        message: 'Hello Vue !',
        tabArticle: [
            // { titre: 'titre1', description: 'description1'},
            // { titre: 'titre2', description: 'description2'},
            // { titre: 'titre3', description: 'description3'}
        ]
      },
      // LES FONCTIONS/METHODES QU'ON VA RAJOUTER
      methods: {
        chargerListeArticle: function (){
            // debug
            console.log('tu as cliqué');

            // ON VA CHARGER LA LISTE DES ARTICLES
            // AVEC AJAX (fetch)
            formData = new FormData();
            formData.append("idFormulaire", "annonce-read-ajax");
            envoyerRequeteAjax(formData, function(objetJSON){
                 console.log(objetJSON);
                 // JE VAIS COPIER LE RESULTAT DE LA REPONSE SERVEUR
                 // DANS LA PROPRIETE tabArticle DE VUEJS
                 app.tabArticle = objetJSON.tabArticle;   
            });
        }
    }
  })

// ON VA CHARGER LA LISTE DES ARTICLES DES LE CHARGEMENT DE LA PAGE
app.chargerListeArticle();  

  