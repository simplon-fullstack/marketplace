console.log("CODE JS CHARGE");

// CREER DES FONCTIONS POUR SE SIMPLIFIER LA VIE
// utilisation
// ajouterAction('button.delete', 'click', function(){ });
function ajouterAction (selecteurCSS, evenement, fonctionCallback)
{
    // recuperer la liste des balises à sélectionner
    // ajouter pour chaque balise un event listener
    var listeBalise = document.querySelectorAll(selecteurCSS);
    listeBalise.forEach(function(balise, indice){
        balise.addEventListener(evenement, fonctionCallback);
    });
}

// on peut créer une fonction qui va prendre en paramètre un objet formData
// et qui va envoyer une requête ajax
// et qui va appeler une fonction de callback pour gérer un objet JSON
function envoyerRequeteAjax (formData, fonctionCallback)
{
    fetch('api-json.php', {
        method: 'POST',
        body: formData
    })
    .then(function(reponseServeur) { 
        return reponseServeur.json();
    })
    .then(fonctionCallback);
}


function envoyerFormulaireAjax (event)
{
    // this
    // => une variable spéciale de JS
    // => elle a comme valeur this = element

    // bloque le formulaire
    event.preventDefault();
    // console.log('formulaire bloqué');

    // cool: je ne change plus de page
    // pas cool: je n'envoie plus les informations
    // => on va ajouter un appel à fetch
    // => permet d'envoyer un requête AJAX sans changer de page

    // avant d'envoyer la requête ajax
    // on va récuperer les infos remplies dans le formulaire
    console.log(this);
    // aspire les infos du formulaire
    var formData = new FormData(this);  // Programmation Orientée Objet
    // on va envoyer ces infos avec le fetch

    envoyerRequeteAjax(formData, (objetJS) => {
        // en utilisant une fonction fléchée
        // => avantage: je garde le this d'avant
        // cool: je peux manipuler un objet JS
        console.log(objetJS);
        if (objetJS.confirmation)
        {
            // je vais copier la valeur dans la balise div.confirmation
            console.log(this); // balise form     
            // dans ma balise form je vais chercher la balise div.confirmation
            this.querySelector(".confirmation").innerHTML = objetJS.confirmation;
        }

        if (objetJS.tabBlog)
        {
            // la fonction va créer le HTML pour afficher les articles
            creerHtmlBlog(objetJS.tabBlog);
        }
    });

}

ajouterAction('form.ajax', 'submit', envoyerFormulaireAjax);

