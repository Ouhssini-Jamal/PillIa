<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'inscrire</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Ubuntu:ital,wght@1,700&display=swap"rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="shortcut icon" href="assets/images/Frame02.png"/>
</head>
<body>
@include('header')
    <form method="post">
    <meta name="csrf-token" content="{{ csrf_token() }}">

<div class="register-container">
    <div class="register-text">
        <div class="register-text-ce">
          <h1>Pillula.com, votre assistant intelligent 
            <br>   pour le bon usage des médicaments.</h1><br>
              <div class="border"></div>
        </div>
    </div>
    
    <div class="register-el">
       <div class="first-part">
         <div class="item">
            <div class="item-img"><img src="assets/images/doctor.png" alt=""></div>
            <div class="item-content">
                <h1>Pour les médecins</h1>
                <p>Facilitez et sécurisez votre activité de 
                  <br> prescription en temps réel avec Pillula pour 
                   <br>  réduire le risque iatrogène.</p>
            </div>
         </div>
         <div class="item">
            <div class="item-img"><img src="assets/images/doctor.png" alt=""></div>
            <div class="item-content">
                <h1>Pour les médecins</h1>
                <p>Facilitez et sécurisez votre activité de 
                  <br> prescription en temps réel avec Pillula pour 
                   <br>  réduire le risque iatrogène.</p>
            </div>
         </div>
         <div class="item">
            <div class="item-img"><img src="assets/images/doctor.png" alt=""></div>
            <div class="item-content">
                <h1>Pour les médecins</h1>
                <p>Facilitez et sécurisez votre activité de 
                  <br> prescription en temps réel avec Pillula pour 
                   <br>  réduire le risque iatrogène.</p>
            </div>
         </div>
       </div>
       <div class="second-part">
         <h2>Inscrivez-vous gratuitement</h2>
         <label for="" >Votre nom :</label>
         <input type="text" id="nom" required>
         <label for="">Votre prenom :</label>
         <input type="text" id="prenom" required>
         <label for="">Votre adresse mail :</label>
         <input type="text" id="email" required>
         <label for="">Créez votre mot de passe :</label>
         <input type="password" id="password" required>
         <label for="">Vous souhaitez accéder à la version :</label>
         <select  id="user_type">
            <option value="medcin">medcin</option>
            <option value="pharmacien">pharmacien</option>
            <option value="individu">individu</option>
         </select>
         <label for="">Code Partenire ( facultatif )</label>
         <input type="text" id="logo">
         <div class="check">
          
         </div>
         <button type="submit">Commencer</button>
       </div>
    </div>
</div>
</form>
@include('footer')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



<script>
  $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
    document.querySelector("form").addEventListener("submit", function (event) {
      event.preventDefault();
      let nom=$("#nom").val();
      let prenom=$("#prenom").val();
      let email=$("#email").val();
      let user_type=$("#user_type").val();
      let password=$("#password").val();
      

  
      $.ajax(
    {
        url: "api/register",
        type: 'post',
        data: {
            nom:nom,
            prenom:prenom,
            email:email,
            user_type:user_type,
            password:password,
           
        },
        success: function (data){
            window.location.href = '/login';
        }
            
    });
    });
  </script>
</body>
</html>