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
        tabUpload: [],
        imageCreate: '',
        updateArticle: null, // variable qui contient l'article à modifier
      },
      mounted: function() {
          ajouterAction('form.ajax', 'submit', envoyerFormulaireAjax);
      },
      // LES FONCTIONS/METHODES QU'ON VA RAJOUTER
      methods: {
        choisirImage: function(image) {
          console.log(image);
          // ON MET A JOUR L'IMAGE SELECTIONNEE
          this.imageCreate = image;
        },
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

               if (app.tabUpload && objetJSON.tabUpload)
               {
                 console.log('ici');
                  // mettre a jour les images   
                  app.tabUpload = objetJSON.tabUpload;   

               }
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
                 // on charge aussi les images
                 if (app.tabUpload && objetJSON.tabUpload)
                 {
                   console.log('ici');
                    // mettre a jour les images   
                    app.tabUpload = objetJSON.tabUpload;   
  
                 }
              });
        }
    }
  })

// ON VA CHARGER LA LISTE DES ARTICLES DES LE CHARGEMENT DE LA PAGE
app.chargerListeArticle();  

  