<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Ubuntu:ital,wght@1,700&display=swap"rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="shortcut icon" href="assets/images/Frame02.png"/>

</head>
<body>
    <form action="post">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('header')
<div class="login-container">
  
    <div class="login-box">
        <img src="assets/images/Logo.png" alt="">
        <input type="text" id="email" placeholder="Adresse E-mail">
        <input type="password" id="password" placeholder="Le mot de passe">
        <a href="">mot de passe oublié ?</a>
        <button type="submit">Connexion</button>
    </div>
    <div>
      <p>pas encore de compte <a href="/register">m'inscrire</a></p>
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
    let email=$("#email").val();
    let password=$("#password").val();
$.ajax({
    url: 'api/login',
    type: 'POST',
    data: {
        email:email,
        password:password,},

    success: function(response) {
        console.log(response);
        window.localStorage.setItem('user', JSON.stringify(response.user));
        window.location.href = '/Accueil';
    
    },
    error: function(failed) {
      alert('These credentials do not match our records.');
    }
  });
});
</script>
</body>
</html>