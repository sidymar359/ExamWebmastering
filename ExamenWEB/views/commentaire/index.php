<?php

require_once('../../libs/Router.php');
   $router=new Router();
   //controller/methode=>UC
   $router->getRoute();
?>
   <!doctype html>
   <html lang="en">
     <head>
       <title>Title</title>
       <!-- Required meta tags -->
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
       <!-- Bootstrap CSS -->
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     </head>
     <body>
         
     <div class="card m-5">

<div class="card-body">
    <h4 class="card-title text-center">Ajouter un commentaire</h4>
    <p class="card-text ">
          <div class="col-3"></div>
          <div class="col-6 pl-5">
          <form action="" method="post">

              <div>
                  <h5 class="text-center">Contact</h5>
                  <div class="form-group">
                      <label for="">Nom *</label>
                      <input type="text" class="form-control" name="nbre1" id="" aria-describedby="helpId" placeholder="">
                      <small id="helpId" class="form-text text-muted"></small>
                  </div>

                  <div class="form-group">
                      <label for="">Portable</label>
                      <input type="text" class="form-control" name="nbre2" id="" aria-describedby="helpId" placeholder="">
                      <small id="helpId" class="form-text text-muted"></small>
                  </div> 


                  <div class="form-group">
                  <label for="">Email</label>
                  <input type="text" class="form-control" name="nbre2" id="" aria-describedby="helpId" placeholder="">
                  <small id="helpId" class="form-text text-muted">Le contenu de ce champ ne sera pas montré publiquement</small>
                  </div>

                  
              </div>

              <div>
              <h5 class="text-center">Informations Personnelles</h5>
              <div class="form-group">
                      <label for="">Age</label>
                      <input type="text" class="form-control" name="nbre2" id="" aria-describedby="helpId" placeholder="">
                      <small id="helpId" class="form-text text-muted"></small>
                  </div> 

                  <div class="form-group">
                  <label for="">Sexe</label>
                  <select class="form-control" name="op" id="">
                      <option value="">Selectionner votre sexe</option>
                      <option value="+">Femme</option>
                      <option value="/">Homme</option>
                  </select>
                  </div>   
                  

                    
                    <div class="col-8">
                    <label for="textarea" class="col-4 col-form-label">Pourquoi voulez-vous vous impliquer</label>
                          <textarea id="textarea" name="textarea" cols="40" rows="5" class="form-control"></textarea>
                    </div>
              </div>
              <div>
                  <h5 class="text-center">Choisissez vos binets Favoris</h5>
                  <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="checkbox1" id="checkbox1_2" type="checkbox" class="custom-control-input" value="fish"> 
                        <label for="checkbox1_2" class="custom-control-label">Chat Noir</label>
                  </div>
                  <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="checkbox1" id="checkbox1_2" type="checkbox" class="custom-control-input" value="fish"> 
                        <label for="checkbox1_2" class="custom-control-label">Oenologie</label>
                  </div>
                  <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="checkbox1" id="checkbox1_2" type="checkbox" class="custom-control-input" value="fish"> 
                        <label for="checkbox1_2" class="custom-control-label">Bôbar</label>
                  </div>
                  <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="checkbox1" id="checkbox1_2" type="checkbox" class="custom-control-input" value="fish"> 
                        <label for="checkbox1_2" class="custom-control-label">X-Para</label>
                  </div>
              </div>
              <div>
              <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="checkbox1" id="checkbox1_2" type="checkbox" class="custom-control-input" value="fish"> 
                        <label for="checkbox1_2" class="custom-control-label">Khomiss</label>
                  </div>
                  <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="checkbox1" id="checkbox1_2" type="checkbox" class="custom-control-input" value="fish"> 
                        <label for="checkbox1_2" class="custom-control-label">PolitiX</label>
                  </div>
                  <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="checkbox1" id="checkbox1_2" type="checkbox" class="custom-control-input" value="fish"> 
                        <label for="checkbox1_2" class="custom-control-label">Binet Raid</label>
                  </div>
                  <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="checkbox1" id="checkbox1_2" type="checkbox" class="custom-control-input" value="fish"> 
                        <label for="checkbox1_2" class="custom-control-label">X-soirées</label>
                  </div>
              </div>
                  <div class="row">
                      <div class="col-12">
                          <button type="submit" value="envoie" name="btn_submit" class="btn btn-primary float-right">Soumettre</button>
                      </div>
                  </div>

                  </form>

          </div>
          <div class="col-3"></div>
    </p>
</div>
</div>

       <!-- Optional JavaScript -->
       <!-- jQuery first, then Popper.js, then Bootstrap JS -->
       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     </body>
   </html>