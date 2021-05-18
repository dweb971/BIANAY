<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
   
  <div class="container">
      <div class="row">
          <div class="col-4">

          </div>

          <div class="col-4">

<form method="POST" action="traitement.php" class="needs-validation" novalidate>        
  <form>

  <div class="form-group row">
          
                <!-- début form row -->
                <select name="civ" class="custom-select" name="civ" required>
                    <option selected value="">Choisir civilité</option>
                    <option value="1">Monsieur</option>
                    <option value="2">Madame</option>
                </select>
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">
                    Merci de choisir votre civilite !!!
                </div>
                </div>
          




          <div class="form-group">
    <label for="exampleInputname">Nom:<span class="obj">(*)</span></label>
    <input name="nom"  style="text-transform: uppercase"type="text" class="form-control" id="" aria-describedby="nameHelp" required maxlength="100" minlength="1">
    <div class="valid-feedback">Looks good!</div>
  <div class="invalid-feedback">Indiquer votre NOM!!!</div>
    <small id="" class="form-text text-muted">Écrire son nom </small>
  
  </div>

  <div class="form-group">
    <label for="exampleInputprenom">Prénom<span class="obj">(*)</span></label>
   <input  name="prenom"  style="text-transform: capitalize"  type="text" class="form-control" id="" aria-describedby="prenomlHelp" required maxlength="55" minlength="1002">
   <div class="valid-feedback">Looks good!</div>
  <div class="invalid-feedback">Indiquer votre Prénom!!!</div>
    <small id="" class="form-text text-muted">Écrire son prénom.</small>
    
  </div>
  

  <div class="form-group">
    <label for="exampleInputEmail1"> Adresse Email<span class="obj">(*)</span></label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required maxlength="5977"minlength="7">
    <div class="valid-feedback">Looks good!</div>
  <div class="invalid-feedback">Indiquer votre Email!!!</div>
    <small id="emailHelp" class="form-text text-muted">Renseigner votre Email.</small>
  </div>
  
  

  <div class="form-group">
    <label for="Inputadress">Adresse</label>
    <input name="adresse" type="text" class="form-control" id="" aria-describedby="adressHelp" maxlength="100" minlength="3">

  </div>
  
   <div class="form-group">
    <label for="Inputadress2"> Complémentaire adresse</label>
    <input name="adresse2" type="text" class="form-control " id="" aria-describedby="adressHelp" >
  </div>

  <div class="form-group">
    <label for="Inputcodepostal"> Code postal</label>
    <input name="codepostal" type="text" class="form-control " id="" aria-describedby="codepostalHelp"  maxlength="5">
   
  </div>
  
  <div class="form-group">
    <label for="Inputville">Ville</label>
    <input name="ville" type="text" class="form-control" id="" aria-describedby="adressHelp"  maxlength="40" minlength=4>

  </div>
  
  <div class="form-group">
  <label for="inputState">Pays </label>
                    <select name="pays" id="liste" class="form-control" required>
                        <option selected></option>
                        <option value="guadeloupe">Guadeloupe</option>
                        <option value="martinique">Martinique</option>
                        <option value="guyane">Guyane</option>
                      
                    </select>
  </div>

  <div class="form-group">
    <label for="Inputtel">Téléphone<span class="obj">(*)</span></label>
    <input name="tel" type="text" class="form-control " id="" aria-describedby="tel"  required pattern="[0-9]{15}">
    <div class="valid-feedback">Looks good!</div>
  <div class="invalid-feedback">Indiquer votre Téléphone!!!</div>
<small id="" class="form-text text-muted">.</small>
  </div>
  

  <div class="form-group">
    <label for="exampleInputPassword1">Mot de passe </label>
    <input name="motdepasse"type="password" class="form-control" id="password"  maxlength="10" minlength="5">
    <input type="checkbox" onclick="Afficher()"> Afficher le mot de passe
  
  </div>
  
                         
 
  <button type="submit" class="btn btn-primary">Validé</button>
</form>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
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
         
          <div class="col-4">

          </div>
      </div>
  </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->

    <!-- Include Google Maps JS API -->
<script type="text/javascript"  src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAraGf7ZP7ADPHL0f40_RHVNaaRTpGOc2Y"></script>

<!-- Custom JS code to bind to Autocomplete API -->
<!-- find it here: https://github.com/lewagon/google-place-autocomplete/blob/gh-pages/autocomplete.js -->
<!-- We'll detail this file in the article -->
<script type="text/javascript" src="autocomplete.js"></script>
<script>
function Afficher(){ 
let input = document.getElementById("password"); 
if (input.type === "password")
{ 
input.type = "text"; 
} 
else
{ 
input.type = "password"; 
} 
} 
</script>
  </body>
</html>
