<?php
include ("header.php");
session_start();
?>


		<!-- banner -->
		<div class="banner-w3l">
			<div class="container">
				<div class="banner-left-wthree">
					
					<h5 class="mt-3 mb-lg-6 mb-sm-4 mb-3 text-black font-weight-bold">VOUS OFFRIR LA MEILLEURE QUALITE DE SERVICES </h5>
					<p></p>
				<!--	<a href="contact" class="btn btn-success">Contactez-nous</a>-->
				<form action="" method="post">
				<button name="rdv" type="submit" class="btn btn-success" >Prendre un rendez-vous</button>
				</form>
					<?php
						if (isset($_POST['rdv'])) {
							if(isset($_SESSION['nom'])){
								 header('location:rdv');
								}
								else {
									header('location:connexion');
								}
						}
					?>

				</div>
			</div>
		</div>
		<!-- //banner -->

		<!-- Modal -->
		<div class="modal" id="exampleModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Type de rendez-vous</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <div class="row">
	  <div class="col-md-6">
	  <a href="domicile" name="rdv" type="button" class="btn btn-success" >Rendez-vous à domicile</a>
	  </div>
	  <div class="col-md-6">
	  <a href="centre" name="rdv" type="button" class="btn btn-success" >Rendez-vous en centre</a>
	  </div>
	  </div>
				
				
				</div>
    </div>
  </div>
</div>

	<!-- Stats-->
	<div class="stats-w3layouts py-5" id="about">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="tittle text-center font-weight-bold text-uppercase mb-sm-5 mb-4">
				<span class="font-weight-bold text-center"></span>Chiffres clés</h3>
			<div class="stats-info numscroller">
				<div class="row">
					<div class="col-4 stats-grid-w3-agile text-center border-right">
						<div class='numscroller font-weight-bold' data-slno='1' data-min='0' data-max='2' data-delay='.5' data-increment="1">2</div>
						<p class="text-capitalize">Centres esthétiques auto</p>
					</div>
					<div class="col-8 right-text-about pl-sm-5 pl-3 mt-lg-3">
						<p>
							<i class="fas fa-quote-left text-dark mr-2"></i>Pour vous offrir le meilleur
							<i class="fas fa-quote-right  text-dark ml-2"></i>
						</p>
					</div>
				</div>
				<div class="row my-4">
						<div class="col-4 stats-grid-w3-agile text-center border-right">
						<div class='numscroller font-weight-bold' data-slno='1' data-min='0' data-max='1' data-delay='.5' data-increment="1">1</div>
						<p class="text-capitalize">Centre mobile</p>
					</div>
					<div class="col-8 right-text-about pl-sm-5 pl-3 mt-lg-3">
						<p>
							<i class="fas fa-quote-left text-dark mr-2"></i>Pour etre de plus en plus proche de vous
							<i class="fas fa-quote-right  text-dark ml-2"></i>
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-4 stats-grid-w3-agile text-center border-right">
						<div class='numscroller font-weight-bold' data-slno='1' data-min='0' data-max='8080' data-delay='.5' data-increment="1">8080</div>
						<p class="text-capitalize">Litres d’eau économisée</p>
					</div>
					<div class="col-8 right-text-about pl-sm-5 pl-3 mt-lg-3">
						<p>
							<i class="fas fa-quote-left text-dark mr-2"></i>La protection de l'environnement est notre motivation
							<i class="fas fa-quote-right  text-dark ml-2"></i>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //Stats -->

	<!-- middle section -->
	<div class="middle-w3l text-center py-sm-5 py-4">
		<div class="container py-xl-5 py-lg-3">
			<p class="text-white mx-auto font-weight-bold">Nous connaissons vos besoins, c'est pourquoi nous adaptons un service adéquat basé sur des innovations technologiques et écologiques.</p>
		</div>
	</div>
	<!-- //middle section -->

	<!-- Services -->
	<div class="serives-agile py-5" id="services">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="tittle text-center font-weight-bold text-uppercase mb-sm-5 mb-4">
				<span class="font-weight-bold text-center"></span>Nos Services</h3>
			<div class="row welcome-bottom">
				<div class="col-sm-4 welcome-grid">
					
					<h4 class="my-3">Préparation de véhicules neufs et d'occasion</h4>
					<p>Vous êtes un profesionnel de l’automobile et vous souhaitez externaliser l'entretien de votre flotte automobile pour une meilleure gestion et plus de souplesse ?</p>
				</div>
				<div class="col-sm-4 welcome-grid my-sm-0 my-4">
					
				<h4 class="my-3">Prestation de lavage express sans eau de basket</h4>
					<p>Parce vous n’avez pas le temps de faire la ver vos basket, nous vous proposons un service express de lavage de vos basket à travers les stations de lavage Ecolowash</p>
				</div>
	
	<div class="col-sm-4 welcome-grid mt-sm">
					
					<h4 class="my-3">Services complémentaires</h4>
					<p>Désinfection du circuit de climatisation - Désinfection de l’habitacle  -  Nettoyage, des grilles et du circuit d’aération  - Protection Carrosserie longue Durée  - Protection de pare-brise - Taches de goudron/Résine  § </p>
				</div>
			
			</div>
			<div class="row welcome-bottom">
				
		
				<div class="col-sm-4 welcome-grid mt-sm-5 mt-4">
				
				<h4 class="my-3">Du nettoyage de votre véhicule à la préparation à la vente</h4>
					<p>Vous pouvez bénéfiez de prestations de hautes qualitées dans nos centres esthétique et de lavage auto Ecolowash.</p>
				</div>
				
				<div class="col-sm-4 welcome-grid mt-sm-5 mt-4">
				
				<h4 class="my-3">Externalisation du nettoyage de votre flotte automobile</h4>
					<p>Gestionnaire de flotte automobile ? Grâce à Ecolowash valorisez l'image de votre entreprise en ayant des véhicules toujours propres.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- Services -->

	<!-- team -->
	<div style="background:url(images/shella1.jpg); background-size:cover;min-height:440px;">

   <div class="container" style="padding:150px; color:#fff; font-size:40px;text-align:center; text-shadow:1px 1px 10px #333;">
Votre lavage <b style="color:#49ef16;">Ecolowash</b><br>
Station Shell Abidjan 2 Plateaux Aghien disponible
	<p><a href="centres" class="btn btn-lg btn-success">S'Y RENDRE!</a></p>
		
	</div>
		
	</div>
	<!-- //team -->

	<!-- projects
	<div class="gallery py-5" id="projects">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="tittle text-center font-weight-bold text-uppercase mb-sm-5 mb-4">
				<span class="font-weight-bold text-center"></span>WASH TO CASH</h3>
			<div class="gallery-info">
				<div class="row">
					<div class="col-sm-10 gallery-grids">
							<p></p>
							<div class="gallery-text-agile  text-center p-2">
								<h3><a href="essai.pdf">En Savoir Plus</a></h3>
							</div>
						</a>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	//projects -->

	<div class="video-w3l py-5" data-vide-bg="video/1">
		<div class="container-fluid py-lg-5 py-md-4">
			<div class="row py-xl-3">
				<div class="col-lg-9 ">
					<h2 class="video-agile text-capitalize text-white mb-2"><h1>WASH TO CASH</h1>lavez vos véhicules et gagnez de l'argent Rejoignez notre réseau!</h2>
					<p>Wash to cash est un condensé d'avantages et de services innovants qui viennent accroitre votre niveau de ressources</p>
					<p>
						Avec notre Offre WASHTOCASH rejoignez une forte communaute et gagner de l'argent en lavant votre voiture
					</p>
				</div>
				<div class="col-lg-3">
					<a href="essai.pdf" class="btn btn-succes">En savoir Plus</a>
				</div>
			</div>
		</div>
	</div>


	<!-- map -->
	<div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1986.0994372837836!2d-4.000501199999986!3d5.386630000000055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sci!4v1499171494252" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
	
	</div>
	<!-- //map -->

<?php
include ("footer.php");
?>