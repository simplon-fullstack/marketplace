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
        ],
        updateArticle: null, // variable qui contient l'article à modifier
      },
      // LES FONCTIONS/METHODES QU'ON VA RAJOUTER
      methods: {
        modifierAnnonceAjax: function(event) {
          // debug
          console.log('modifierAnnonceAjax');
          console.log(event.target);

          // envoyer une requête AJAX
          // pour modifier l'annonce
          // REMPLIR LE FormData AVEC LE FORMULAIRE HTML
          formData = new FormData(event.target);

          envoyerRequeteAjax(formData, function(objetJSON){
               console.log(objetJSON);
               // JE VAIS COPIER LE RESULTAT DE LA REPONSE SERVEUR
               // DANS LA PROPRIETE tabArticle DE VUEJS
               app.tabArticle = objetJSON.tabArticle;   
          });

        },
        modifierLigne: function (article) {
          // debug
          console.log("modifier");
          console.log(article);
          // je vais mémoriser cet article dans une propriété pour VueJS
          this.updateArticle = article;
        },
        supprimerLigne: function (article) {
            // debug 
            console.log('suppression');
            console.log(article);

            // envoyer une requête AJAX
            // pour supprimer la ligne dans la table SQL annonce
            // ON VA CHARGER LA LISTE DES ARTICLES
            // AVEC AJAX (fetch)
            formData = new FormData();
            formData.append("idFormulaire", "annonce-delete");
            formData.append("nomTable", "annonce");
            formData.append("id", article.id);

            envoyerRequeteAjax(formData, function(objetJSON){
                 console.log(objetJSON);
                 // JE VAIS COPIER LE RESULTAT DE LA REPONSE SERVEUR
                 // DANS LA PROPRIETE tabArticle DE VUEJS
                 app.tabArticle = objetJSON.tabArticle;   
            });

        },
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

  