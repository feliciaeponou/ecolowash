<!DOCTYPE html>
<html lang="en">
<head> 
	<title></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main2.css">
	
<!--===============================================================================================-->


<style>
.navbar-nav .nav-item .nav-link{
	padding: 1.1em 1em!important;
	font-size: 100%;
    font-weight: 1000;
    letter-spacing: 1px;
	color: #46ba79; 
   font-family: 'Gothic A1', sans-serif;
}

.navbar-nav .nav-item .nav-link:hover{
	padding: 1.1em 1em!important;
	font-size: 100%;
    font-weight: 1000;
    letter-spacing: 1px;
	color: #46ba79; 
   font-family: 'Gothic A1', sans-serif;
}

.navbar-nav .nav-item .nav-link:active {
	color: #46ba79; 
}

</style>
</head>
<body>

<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="post" action="">
				<span class="contact100-form-title">
					Mes informations personnelles
				</span>

				<div class="wrap-input100 validate-input" data-validate="Le nom est requis">
					<span class="label-input100">Nom</span>
					<input class="input100" type="text" name="nom" placeholder="Entrez Votre Nom">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Au moins un prénom est requis">
					<span class="label-input100">Prénoms</span>
					<input class="input100" type="text" name="prenom" placeholder="Entrez Votre Prénom">
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 validate-input" >
					<span class="label-input100">Genre</span> <br>
					Homme <input class="" type="radio" name="sexe" value="M" > 
					Femme <input class="" type="radio" name="sexe" value="F" > 
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Veuillez entrer un mail de la forme : ex@abc.xyz">
					<span class="label-input100">Email</span>
					<input class="input100" type="text" name="email" placeholder="Entrez Votre Adresse mail">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Veuillez entrer un numéro de téléphone">
					<span class="label-input100">Numéro De Téléphone</span>
					<input class="input100" type="text" name="numero" placeholder="Entrez Votre Numéro De Téléphone">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "">
					<span class="label-input100"> Nom et Prénoms Du Parrain</span>
					<input class="input100" type="text" name="" placeholder="Entrez le Nom et Prénoms De Votre Parrain" >
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "">
					<span class="label-input100">Numéro De Téléphone Du Parrain</span>
					<input class="input100" type="text" name="" placeholder="Entrez le Numéro De Téléphone De Votre Parrain">
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" type="submit" name="terminer">
							<span>
								Terminer
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

				</div>
			</form>
		</div>
	</div>
</div>


	


<?php 

include('config.php');

if(isset($_POST['inscription'])){
    
    $nom = addslashes($_POST ['nom']);
    $prenom = addslashes($_POST ['prenom']);
    $sexe = addslashes($_POST ['sexe']);
    $numero = addslashes($_POST ['numero']);
    $pays = addslashes($_POST ['pays']);
    $ville = addslashes($_POST ['ville']);
    $email = addslashes($_POST ['email']);
    $password = md5($_POST ['password']);
    $name = addslashes($_POST ['name']);
    $query = mysqli_query($conn, "SELECT * FROM user WHERE email ='$email'");
    $rows = mysqli_num_rows($query);
    if($rows!=1){
    $array = $query->fetch_assoc();
    $inscription_query = mysqli_query($conn, "INSERT INTO user (id_user,nom,prenom,sexe,numero,email,datesignup) VALUES ('','$nom','$prenom','$sexe','$numero','$email','$datepost')");
    
    
    if ($inscription_query) {
        //---- Send Email---------------------------
        
    // the message
    $msg = "Votre inscription a bien été éffectuée ";
    // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,70);
    // send email
    mail($email,"Ecolowash Africa",$msg,"-f ecolowash.africa@gmail.com");
    //-------End sending Email-----------------
    } else {
        echo "Inscription échouée";
    }
    
    }else{
	      echo "L'addresse mail existe déjà, vous ne pouvez vous inscrire deux fois";
        
    }
  }

  ?>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
	

<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>


</body>
</html>
