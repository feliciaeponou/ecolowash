<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/header3.css">
<script src="assets/js/header.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<nav class="navbar navbar-expand-md navbar-dark fixed-top" id="banner" >
	
  <!-- Brand -->
  <a class="navbar-brand center_frame" href="#">
  <img src="assets/img/logo.png" alt="" width="250"  >
  </a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
  <i class="fa fa-bars" style="font-size:36px;color:#158443"></i>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Accueil </a>
      </li>
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle"  href="#nos_expertises" id="navbardrop" data-toggle="dropdown">
        A Propos De Nous
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#nos_expertises" >Contexte</a>
        <a class="dropdown-item" href="#nos_expertises">Nos services</a>
        <a class="dropdown-item" href="#nos_expertises" >Notre objectif</a>
        <a class="dropdown-item" href="#nos_expertises" >Notre engagement</a>
        <a class="dropdown-item" href="#nos_expertises" >Action sociale solidaire</a>
      </div>
    </li>
     
      <li class="nav-item">
        <a class="nav-link" href="#inscription" >Préinscription</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="#contacts">Contacts</a>
      </li> 
    </ul>
  </div>
	
</nav>

<script>

$(document).on("scroll", function(){
		if
      ($(document).scrollTop() > 86){
		  $("#banner").addClass("shrink");
		}
		else
		{
			$("#banner").removeClass("shrink");
		}
	});
</script>

