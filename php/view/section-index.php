
        <section>
            <h3>Accueil</h3>
            <div class="ligne">
                <div>COLONNE1</div>
                <div>COLONNE2</div>
                <div>COLONNE3</div>
                <div>COLONNE4</div>
                <div>COLONNE5</div>
                <div>COLONNE6</div>
                <div>COLONNE7</div>
            </div>
        </section>

        <section>
            <h3>Formulaire d'inscription à la newsletter</h3>
            <!-- 
                attribut action="api-json.php"
                => URL destinataire des infos du formulaire 
                détermine la cible qui va recevoir les informations du formulaire

                astuce: réutiliser dans l'attribut name les noms des colonnes SQL

                note: je ne laisse pas le visiteur décider de dateInscription
                => IL FAUDRA LE COMPLETER DANS LE CODE PHP DE TRAITEMENT DU FORMULAIRE
            -->
            <form class="ajax" action="api-json.php" method="POST">
                <label>
                    <span>nom</span>
                    <input type="text" name="nom" required placeholder="entrez votre nom">
                </label>
                <label>
                    <span>email</span>
                    <input type="email" name="email" required placeholder="entrez votre email">
                </label>
                <button type="submit">inscription</button>
                <!-- DANS NOTRE FRAMEWORK ON AJOUTE DES INFOS TECHNIQUES -->
                <div class="confirmation">
                    <!-- ICI QU'ON VA AFFICHER LE MESSAGE DE CONFIRMATION -->
                </div>
                <!-- CETTE INFO SERA UTILE POUR DISTINGUER LES TRAITEMENTS EN PHP -->
                <input type="hidden" name="idFormulaire" value="newsletter">
            </form>
        </section>
