<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="assets\css\acceuil.css" rel="stylesheet">
    <link rel="stylesheet" href="https://kit.fontawesome.com/3bce00c912.css" crossorigin="anonymous">
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/3bce00c912.js" crossorigin="anonymous"></script>
    <title>Medecin Interface!</title>
  </head>
  <body>
    
    
    <!-- As a link -->
    <nav class="navbar " style="height: 80px !important;">
        <a class="navbar-brand" href="#" style=" color: white;  text-decoration-line: underline  ">Logo</a>
        <a class="navbar-brand" href="" style=" color: white;   text-decoration: underline solid #93E3A9 50%;  ">Analyse de perscription</a>
        <a class="navbar-brand" href="#" style=" color: white;">Monographies de medicaments</a>
        <a><i class="bi bi-person" style="font-size: 60px; color: rgb(253, 253, 252);"></i></a>
      

    </nav>
    
    
    <div class="p-4" >
        <div class="row m-1 ">
            <div class="col-8">
            
                <div class="card" style="height: 100% !important; ">
                    
                    <div class="input-group card-header border-0 bg-white" id="search">
                        <div class="searchInput">
                            <span class="input-group-text border-0  bg-white "><i class="bi bi-search-heart"></i></i></span>
                            <input class="form-control mr-2 rounded "  type="text" placeholder="Rechercher des medicaments" >
                            <button class="btn bg-white border rounded"><i class="bi bi-camera"></i></button>
                            <div class="resultBox">
                            <!-- here list are inserted from javascript -->
                            </div>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <div class="container">
                            <p class="card-text text-center" style=" margin-top: 30vh;">Votre ordonnance Rx est vide.<br>Veuillez ajouter un médicament à partir de la barre de recherche</p>
                        </div>
                    </div>
                    
                    <div class="card-footer bg-white">
                     <label for="inputGroupSelect01">Vos ordonnances enregistrées :</label>
                     <div class="d-flex justify-content-between">
                        <div class=" m-1 " style="width: 30% ;">
                            <select class="custom-select" id="inputGroupSelect01">
                                <option selected>Aucun</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div >
                            <button class="btn"><i class="bi bi-printer mr-1"></i>Imprimer</button>
                            <button class="btn"><i class="bi bi-download mr-1"></i>Sauvgarder</button>
                            <button class="btn"><i class="bi bi-archive mr-1"></i>Degager</button>
                        </div>
                     </div>
                     
                    </div>

                  </div>
            </div>

            <div class="col-4 border-0 rounded mr-0 ">
                <div class="card" >
                    <div class="card-header  bg-white border-0">
                        <h5 class="text-center" style="color:#003735">PROFIL CLINIQUE</h3>
                        <hr>
                    </div>

                    <div class="card-body container ">
                        <div class=" d-flex justify-content-between">
                            <div class="btn-group btn-group-toggle mr-1 " data-toggle="buttons">
                                <label class="btn active">
                                  <input type="radio" name="options" id="male" autocomplete="off" checked> <i class="bi bi-gender-male"></i> Male
                                </label>
                                <label class="btn ">
                                  <input type="radio" name="options" id="female" autocomplete="off"><i class="bi bi-gender-female"></i> Female
                                </label>
                            </div>
                            <input id="startDate" class="form-control" type="date" />
                        </div>

                        <div class="mt-2  d-flex">
                            <div class="input-group m-1">
                                <input type="number" class="form-control border-right-0" placeholder="Masse">
                                <span class="input-group-text bg-white">kg</span>
                            </div>
                            <div class="input-group m-1">
                                <input type="number" class="form-control border-right-0" placeholder="Hauteur">
                                <span class="input-group-text bg-white">cm</span>
                            </div>
                        </div>

                        <div class="mt-2 border border-light rounded-2 bg-white d-flex justify-content-between " >

                            <p class="m-1"><i class="bi bi-lungs" ></i> Dommages rénaux</p>
                            <div class=" btn-group-toggle m-1 " data-toggle="buttons">
                                <label class="btn btn-sm active">
                                  <input type="radio" name="options" id="oui" autocomplete="off" checked>  Non
                                </label>
                                <label class="btn btn-sm">
                                  <input type="radio" name="options" id="non" autocomplete="off">    Oui
                                </label>
                            </div>

                        </div>
                        <div class="mt-2 border border-light rounded-2 bg-white d-flex justify-content-between " >

                            <p class="m-1"><i class="bi bi-lungs"></i> Lésions hépatiques</p>
                            <div class=" btn-group-toggle m-1 " data-toggle="buttons">
                                <label class="btn btn-sm active">
                                  <input type="radio" name="options" id="oui" autocomplete="off" checked>  Non
                                </label>
                                <label class="btn btn-sm">
                                  <input type="radio" name="options" id="non" autocomplete="off">    Oui
                                </label>
                            </div>

                        </div>
                        <div class="mt-2 border border-light rounded-2 bg-white d-flex justify-content-between " >

                            <p class="m-1"><i class="bi bi-lungs"></i> Dommages cardiaques</p>
                            <div class=" btn-group-toggle m-1 " data-toggle="buttons">
                                <label class="btn btn-sm active">
                                  <input type="radio" name="options" id="oui" autocomplete="off" checked>  Non
                                </label>
                                <label class="btn btn-sm">
                                  <input type="radio" name="options" id="non" autocomplete="off">    Oui
                                </label>
                            </div>

                        </div>
                        <div class="mt-2 border border-light rounded-2 bg-white d-flex justify-content-between " >

                            <p class="m-1"><i class="bi bi-lungs"></i> Dommages cardiaques</p>
                            <div class=" btn-group-toggle m-1 " data-toggle="buttons">
                                <label class="btn btn-sm active">
                                  <input type="radio" name="options" id="oui" autocomplete="off" checked>  Non
                                </label>
                                <label class="btn btn-sm">
                                  <input type="radio" name="options" id="non" autocomplete="off">    Oui
                                </label>
                            </div>

                        </div>
                    
                        <div class="mt-2 border border-light rounded-2 bg-white d-flex justify-content-between " >

                            <p class="m-1"><i class="bi bi-lungs"></i> Dommages pulmonaires</p>
                            <div class=" btn-group-toggle m-1 " data-toggle="buttons">
                                <label class="btn btn-sm active">
                                  <input type="radio" name="options" id="oui" autocomplete="off" checked>  Non
                                </label>
                                <label class="btn btn-sm">
                                  <input type="radio" name="options" id="non" autocomplete="off">    Oui
                                </label>
                            </div>

                        </div>

                        <div class="card mt-2" >
                            <div class="card-header">
                                <i class="bi bi-plus-circle"> Autres Comobidités</i>
                            </div>
                            <div class="card-body">
                                <div class="input-group m-1 rounded-2">
                                    <span class="input-group-text bg-white border-right-0"><i class="bi bi-search"></i></span>
                                    <input type="text" class="form-control  border-left-0" placeholder="Asthme, mysthénie, dialyse..."><br>
                                </div>
                                <div class="input-group m-1 rounded-2">
                                    <input  type="radio" name="options" id="pas">
                                    <span class="ml-1">Pas d’autres comorbidités</span>
                                
                                </div>
                             
                            </div>
                        </div>
                        <div class="card mt-2" >
                            <div class="card-header">
                                <i class="bi bi-plus-circle"> Allergeis médicamenteuses</i>
                            </div>
                            <div class="card-body">
                                <div class="input-group m-1 rounded-2">
                                    <span class="input-group-text bg-white border-right-0"><i class="bi bi-search"></i></span>
                                    <input type="text" class="form-control  border-left-0" placeholder="Amoxicilline..."><br>
                                </div>
                                <div class="input-group m-1 rounded-2">
                                    <input  type="radio" name="options" id="pas">
                                    <span class="ml-1">Aucune allergie connue</span>
                                
                                </div>
                             
                            </div>
                        </div>
                    
                    </div>
                </div>
            
            </div>
        </div>
    </div>

    <div class="container d-flex justify-content-between">
        <button class="btn shadow-lg p-3 mb-5 bg-body rounded">Interactions</button>
        <button class="btn shadow-lg p-3 mb-5 bg-body rounded">Etat clinique</button>
        <button class="btn shadow-lg p-3 mb-5 bg-body rounded">Critéres STOP</button>
        <button class="btn shadow-lg p-3 mb-5 bg-body rounded">Critéres de DEMARRAGE</button>
        <button class="btn shadow-lg p-3 mb-5 bg-body rounded">Effets indésirables</button>
    </div>



    <div class="card text-center">
        <div class="card-header" style="background-color: #FFFFFF;">
       <h4 style="color:#003735;">Analyse des Interactions </h4>
       <br>
       <p>Remarque : les résultats que vous obtenez dépendent des informations que vous saisissez (médicaments et profil du patient)</p>
        </div>
        <div class="card-body">
          
          <p class="card-text" style="text-align:centre;"><img src="assets\images\verified.png" width=10% height=10% style="margin-top: 10vh;" style="margin-bottom: 30vh;">.</p>
          <p>Entrer au moins deux medicaments!!</p>
          <br>
          <p>             </p>
          <br>
          <p>             </p>
          <br>
          
        </div>
      </div>
      
      <script>
                  
                  $.ajaxSetup({
                      headers: {
                          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      }
                  });
              
                  $("#search").keyup(function(e){
                  const searchInput = document.querySelector(".searchInput");
                  const resultBox = searchInput.querySelector(".resultBox");
                  const results = document.querySelector("#results");
                  const nom = e.target.value;
                  if(nom == '')  searchInput.classList.remove("active");
                  else{
                    $(resultBox).empty();
                       $.ajax({
                          type:'GET',
                          url:'/api/search/'+nom,
                          data:{nom : nom},
                           success:function(response){
                              console.log(response.medicaments);
                              if (response.medicaments.length){
                                  searchInput.classList.add("active");
                                  for (let i = 0; i < response.medicaments.length; i++){
                                    console.log(response.medicaments.length);
                                      $(resultBox).append('<li onclick="addinputmed(event)" id ="'+response.medicaments[i].nom_comercial+'">'+response.medicaments[i].nom_comercial+'('+response.medicaments[i].nom_molecule+')<li>');
                                  }
                              }
                      }
                });
              }
              });
              $(".logout").click(function(e){
                event.preventDefault();
                       $.ajax({
                          type:'Post',
                          url:'/api/logout',
                           success:function(response){
                            window.localStorage.setItem('user',null);
                            window.location.href = '/';
                          }
                });
              });
              $(".verifier").click(function(e){
                event.preventDefault();
                var meds = $('input[name="meds"]').map(function(){ 
                                  return this.value; 
                              }).get();
                    console.log(meds);
                       $.ajax({
                          type:'get',
                          url:'/api/check',
                          data: {
                             meds :meds,
                            },
                           success:function(response){
                            console.log(response.interactions);
                          }
                });
              });
              function addinputmed(e){
                  const searchInput = document.querySelector(".searchInput");
                  $('#search').val('');
                  searchInput.classList.remove("active");
                  const selected_meds = document.querySelector(".selected_meds");
                  const med = e.target.id;
                  $(selected_meds).append('<div class="alert mx-auto w-50 mt-3 text-center alert-success alert-block" id='+med+'><span>'+med+'</span><input type="hidden" class="med" value="'+med+'" name="meds"><div onclick="delet(event)" class="ml-1 delete">X<div></div>');
              }
              function delet(e){
                 e.target.parentElement.remove();
              }
              document.addEventListener('click', function(event) {
                const searchInput = document.querySelector(".searchInput");
                if (!searchInput.contains(event.target)) {
                  searchInput.classList.remove("active");
                }
                else if($('#search').val()){
                  searchInput.classList.add("active");
                }
              });
              function userinit(){
                const userspan = document.querySelector("#user");
                var user = JSON.parse(window.localStorage.getItem('user'));
                if(!user) {
                  window.location.replace('/login');
                }
                $("#user").append('<span>'+user.nom+'</span>');
              }
              window.addEventListener('load', function() {
                userinit();
              });
              </script>
</body>
</html>