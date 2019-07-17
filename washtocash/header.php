<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/header1.css">
<script src="assets/js/header.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<nav class="navbar navbar-expand-md navbar-dark fixed-top" id="banner" >
	
  <!-- Brand -->
  <a class="navbar-brand center_frame" href="#">
  <img src="assets/img/logo_header.png" alt="" width="250"  >
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
      <li class="nav-item">
        <a class="nav-link" href="#presentation" >Présentation</a>
      </li>
      <li class="nav-item ">
      <a class="nav-link "  href="#client/ecolocom" id="navbardrop">
        Client / Ecolocom
      </a>
     
    </li>
      <li class="nav-item">
      <a class="nav-link " href="#plan_marketing" id="navbardrop" >
        Plan Marketing
      </a>
      
    </li>
      <li class="nav-item">
        <a class="nav-link" href="#inscription" >Inscription</a>
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
