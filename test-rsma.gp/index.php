
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Inscription Test RSMA</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Henny+Penny&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <div class="container" id="first">
        <!--début container first -->
        <div class="row">
            <!-- début div row-->
            <div class="col-md-9">
                <!--début col-9-->
                <a href="https://www.rsma.gp/">
                <img src="img/logo.png" alt="logo-rsma" width="300px">
                </a>
            </div>
            <!--fin div 9-->
            <div class="col-md-1">
                <a href="https://fr-fr.facebook.com/RSMAGuadeloupe/">
                    <img class="logos" src="img/facebook.jpg" alt="logo-facebook" width="80px">
                </a>
            </div>
            <!--fin div -->
            <div class="col-md-1">
                <a href="https://twitter.com/rsma_guadeloupe">
                    <img class="logos" src="img/twitter.png" alt="logo-twitter" width="70px">
                </a>
            </div>
            <!--fin div 1-->
            <div class="col-md-1">
                <a href="https://www.instagram.com/rsma_guadeloupe/?hl=fr">
                    <img class="logos" src="img/instagram.jpeg" alt="logo" width="50px">
                </a>
            </div>
            <!--fin div 1-->
        </div>
        <!--fin row -->
    </div>
    <!--fincontainer  -->
    <div class="container" id="second">
        <!-- début container second -->
        <div class="row">
            <!-- début row -->
            <div class="col-md-12" id="titre">
                <!-- début col-12-->
                <B>INSCRIPTION TEST.</B>
            </div>
            <!--FIN div col-12-->
        </div>
        <!--FIN row -->
        <div class="row">
            <!-- début row -->
            <div class="col-md-12" id="texte">
                <!-- début col-12-->
                <p><B>Bienvenue sur la page du test de recrutement du RSMA. <br>
                        Pour y accéder, veuillez remplir les champs de saisie afin de recevoir votre lien pour effectue
                        votre test. </B></p>
            </div>
            <!--fin div.12-->
        </div>
        <!--fin row -->
       <div class="row">
           <div class="col-12">
        <form method="POST" action="traitement.php" class="needs-validation" novalidate>
            <div class="form-group row">
            <div class="form-group col-md-12">
                <!-- début form row -->
                <select class="custom-select" name="civ" required>
                    <option selected value="">Choisir civilité</option>
                    <option value="1">Monsieur</option>
                    <option value="2">Madame</option>
                </select>
                <div class="invalid-feedback">
                    Merci de choisir votre civilite !!!
                </div>
                </div>
            </div>
            <!--fin form group -row-->
            <div class="form-row">
                <!-- début form row -->
                <div class="form-group col-md-6">
                    <!--début col-md-6-->
                    <label for="exampleInputname">Nom: <span class="obj">(*)</span></label>
                    <input name="nom" style="text-transform: uppercase" type="text" class="form-control" id=""
                        aria-describedby="nameHelp" required maxlength="1000" minlength="1" placeholder="DORE">
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">Indiquez votre NOM!!!</div>
                    <small id="" class="form-text text-muted"> Veuillez écrire votre nom </small>
                </div>
                <!--fin div col-md-6-->
                <div class="form-group col-md-6">
                    <!--début col-md-6-->
                    <label for="exampleInputprenom">Prénom: <span class="obj">(*)</span></label>
                    <input name="prenom" style="text-transform: capitalize" type="text" class="form-control" id=""
                        aria-describedby="prenomlHelp" required maxlength="1984" minlength="02" placeholder="thierry">
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">Indiquez votre Prénom!!!</div>
                    <small id="" class="form-text text-muted"> Veuillez écrire votre prénom.</small>
                </div>
                <!--FIN col-md-6-->
            </div>
            <!--fin div row-->
            <div class="form-group row ">
            <div class="form-group col-md-12">
                <!--début form group-->
                <label for="inputAddress">Adresse</label>
                <input name="adresse" type="text" class="form-control" id="inputAddress"
                    placeholder="Rue,Appartement,Bâtiment,Secteur" required maxlength="100" minlength="3">
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Indiquez votre Adresse!!!</div>
                <small id="" class="form-text text-muted"> Veuillez écrire votre adresse.</small>
                </div>
            </div>
            <!--FIN div form group row-->
            <div class="form-group row ">
            <div class="form-group col-md-12">
                <label for="inputAddress2">Adresse 2</label>
                <input name="adresse2" type="text" class="form-control" id="inputAddress2"
                    placeholder="Rue,Appartement,Bâtiment,Secteur" maxlength="100" minlength="3">
                <small id="" class="form-text text-muted"> Veuillez écrire votre adresse.</small>
            </div>
            </div>
            <!--fin form group tow-->
            <div class="form-row">
                <!-- début form row-->
                <div class="form-group col-md-8">
                    <!--début col-8-->
                    <label for="inputville">Ville : <span class="obj">(*)</span></label>
                    <input name="ville" type="text" style="text-transform: uppercase" class="form-control"
                        id="inputCity" placeholder="BAIE-MAHAULT" required maxlength="50" minlength=4>
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">Veuillez Indiquez votre Ville!!!</div>
                    <small id="" class="form-text text-muted">Écrire votre ville.</small>
                </div>
                <!--fin col-8-->
                <div class="form-group col-md-4">
                    <!--debut col-4-->
                    <label for="inputZip"> Code postal:<span class="obj">(*)</span></label>
                    <input name="code_postal" type="tel" class="form-control" id="inputZip" placeholder="Code postal: 97139"
                        required pattern="[0-9]{5}">
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">Veuillez Indiquez votre Code Postal!!!</div>
                    <small id="" class="form-text text-muted">Inscrivez votre code postal.</small>
                </div>
</div>
           
                <div class="form-group row">
                <!--début form group row-->
                <div class="form-group col-md-6">
                <label for="inputmetier">Quelle formation souhaitez-vous faire (choix 1)? </label>
                <input name="metier" type="text" class="form-control" id="" placeholder="menuisier/plombier........"
                    required maxlength="25">
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Indiquez votre choix!!!</div>
                <small id="" class="form-text text-muted"> Veuillez écrire la la formation de votre choix.</small>
            </div>
            <div class="form-group col-md-6">
                <label for="inputmetier">Quelle formation souhaitez-vous faire (choix 2)? </label>
                <input name="metier2" type="text" class="form-control" id="" placeholder="menuisier/plombier........"
                    required maxlength="25">
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Indiquez votre choix!!!</div>
                <small id="" class="form-text text-muted"> Veuillez écrire la la formation de votre choix.</small>
            </div>
            </div>
            <!--fin form group-->
            <div class="form-group row ">
                <!--début form group row-->
                <div class="form-group col-md-12">
                <label for="inputmetier">Possédez-vous un dîplome? (Si oui lequel?): <span
                        class="obj">(*)</span></label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="niveau" id="niveau" value="oui" required>
                    <label class="form-check-label" for="">Oui </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="    </div>form-check-input" type="radio" name="niveau" id="niveau2" value="non" required>
                    <label class="form-check-label" for="">Non </label>
                </div>
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Indiquez votre réponse!!!</div>
                <small id="" class="form-text text-muted"> Sélectionnez votre réponse.</small>
                <div class="form-group" id="niveauD" style="display:none">
                    <input name="niveauD" type="text" class="form-control" id="nD" aria-describedby=""
                        placeholder="Ecrire informations complémentaires">
                </div>
                </div>
            </div>
            <!--fin group form-->
            <div class="form-group row">
                <!--début form group-->
                <div class="form-group col-md-12">
                <label for="inputmetier">JDC effectuée: <span class="obj">(*)</span></label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jdc" id="journeeD" value="oui" required>
                    <label class="form-check-label" for="">Oui </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jdc" id="journeeD2" value="non">
                    <label class="form-check-label" for="">Non </label>
                </div>
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Indiquez votre réponse!!!</div>
                <small id="" class="form-text text-muted"> Sélectionnez un réponse.</small>
                </div>
            </div>
            <!--fin form group-->
            <div class="form-group row ">
            <div class="form-group col-md-8">
                <label for="lieu_naissnace">Lieu de naissance: <span class="obj">(*)</span></label>
                <input name="lieu_naissance" type="text" style="text-transform: uppercase" class="form-control"
                    id="villenaissance" placeholder="BASSE-TERRE"  maxlength="50" minlength=4 required >
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback"> Indiquez votre lieux de naissance!!!</div>
                <small id="" class="form-text text-muted">Écrire votre lieu de naissance.</small>
                </div>

                <div class="form-group col-md-4">
                    <div id="naissance">
                        <label for="start">Sélectionner votre date de naissance: <span class="obj">(*)</span></label>
                        <input type="date" id="select" name="date" value="00-00-0000" min="01-01-1995" max=" 31-12-2004"
                            required>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Veuillez Indiquez votre date de Naissance!!!</div>
                        <small id="" class="form-text text-muted">jj/mm/aaaa.</small>
                    </div>
                </div>
            </div>
            <!--fin form group-->
            <!--FIN div -->
            <div class="form-row">
                <div class="form-group col-md-8">
                    <label for="exampleInputEmail1"> Adresse Email: <span class="obj">(*)</span></label>
                    <input name="email" style="text-transform:lowercase" type="email" class="form-control"
                        id="exampleInputEmail1" aria-describedby="emailHelp" required maxlength="5977" minlength="7"
                        placeholder="thierrydore@gmail.com">
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">Indiquez votre Email!!!</div>
                    <small id="emailHelp" class="form-text text-muted">Veuillez renseigner votre Email.</small>
                </div>
                <div class="form-group col-md-4">
                    <!--debut col-4-->
                    <label for="inputState">Où avez-vous connue le RSMA? : <span class="obj">(*)</span></label>
                    <select name="question" id="liste" class="form-control" required>
                        <option selected></option>
                        <option value="jdc">Par la JDC</option>
                        <option value="mission">Par la mission local: laquelle?</option>
                        <option value="pole">Par Pôle Emploie</option>
                        <option value="infos">Par une information au sein d'un établissement scolaire </option>
                        <option value="reseaux">Réseau Sociaux</option>
                        <option value="publicite">Publicité</option>
                        <option value="entourage">Entourage</option>
                        <option value="television">Télévision</option>
                        <option value="association">Par une association: laquelle?</option>
                        <option value="autres">Autres</option>
                    </select>
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">Veuillez sélectionner votre réponses!!!</div>
                    <small id="" class="form-text text-muted">Séléctionnez votre réponse</small>
                    <div class="form-group" id="infoAutre" style="display:none">
                        <input name="infoAutre" type="text" class="form-control" id="oA" aria-describedby=""
                            placeholder="Ecrire informations complémentaires">
                    </div>


            </div>
            <!--fin div-->
          
</div>
                <!--fin form group row-->
                <script>
                //script pour activer le bloc de réponses
                let liste = document.getElementById("liste");
                liste.addEventListener("change", function() {
                    if (liste.value == 'mission' || liste.value == 'association' || liste.value ==
                        'autres') {
                        console.log(liste.value);
                        document.getElementById("infoAutre").style.display = 'block';
                    } else {
                        document.getElementById("infoAutre").style.display = 'none';
                    }
                });
                let cochez = document.getElementById("niveau");
                cochez.addEventListener("change", function() {
                    if (cochez.value == 'oui') {
                        document.getElementById("niveauD").style.display = 'block';
                        console.log(cochez.value);
                    }
                });
                let choix2 = document.getElementById("niveau2");
                choix2.addEventListener("change", function() {
                    if (choix2.value == 'non') {
                        document.getElementById("niveauD").style.display = 'none';
                        console.log(choix2.value);
                    }
                });
                </script>
                <div class="form-check">
                    <input name="rgpd" class="form-check-input" type="checkbox" value="1" id="defaultCheck1" required>
                    <label class="form-check-label" for="oui">
                        Acceptez-vous le RGPD? <a href="rgpd.php">lien vers le RGPD</a>
                    </label>
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">Pour continuer sur notre site, Veuillez cocher les conditions
                        d'utilisation!!!</div>
                    <small id="" class="form-text text-muted"> Pour le respect de votre vie privée et vos données
                        personnelles, cochez les conditions d'utilisation.</small>
                </div>
                
                    <button id=boutton class="btn btn-primary" type="submit">Validé</button>
                </div>
                <!--fin div-->
                </form>
        <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields (champs de validation)
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
        </script>
</div>
</div>
  
    <!--fin du container -->
    <footer id="trois">
        <div class="image">
            <img  src="img/sengager.png" alt="logo engagement" width="120px">
            <img  src="img/drapeaueurope.png" alt="" width="110px">
        </div>
    </footer> 
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>
</html>