<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/style.css') }}" />
    <link rel="shortcut icon" href="assets/images/Frame02.png"/>
    <title>Page Title</title>
</head>
<body onload="userinit()">

  <header>
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
  </header>
<div id="user"></div>
  <div>
    <div class="searchInput_container">
        <div class="searchInput">
            <input type="text" placeholder="Saisir un medicament.." id="search">
            <div class="resultBox">
            <!-- here list are inserted from javascript -->
            </div>
            <div class="icon_searchInput"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></i></div>
        </div>
    </div>
 </div>
 <form action="get">
 <meta name="csrf-token" content="{{ csrf_token() }}">
 <div class="selected_meds">
            <!-- here list are inserted from javascript -->
 </div>
 <button class="btn btn-primary verifier" type="submit">verifier</button>
 </form>
 <form action="post">
 <meta name="csrf-token" content="{{ csrf_token() }}">
  <button class="btn btn-primary logout" type="submit">logout</button>
</form>
  <footer>
    <p>Copyright &copy; 2023</p>
  </footer>
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
              console.log(response);
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
    window.location.href = '/login';
  }
  $("#user").append('<span>'+user.nom+'</span>');
}

</script>
</body>
</html>