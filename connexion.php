<?php
include ("header.php");
session_start();
?>
<div class="container-fluid h-100">
		<div class="row justify-content-center alig-items-center h-100" style="padding-top: 100px;" >
			<div class="col col-sm-6 col-md-6 col-lg-4 col-xm-3">
				<div class="card">
					<div class="card-header" align="center">
						<strong><h3>Connectez-vous</h3></strong>
					</div>
					<div class="card-body">
						<div id="obligatoire">* Champs Obligatoires</div>
	                    						<form action="verif" method="POST">
							
							<div class="form-group">
								<input required type="email" class="form-control" name="email"  placeholder="Entrer votre email *" >
							</div>
							
							<div class="form-group">
								<input required type="password" class="form-control" name="password"  placeholder="Entrez votre mot de passe" >
							</div>
							<div class="btn-group" align="center">
								<button type="submit" name="connexion" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Se connecter</button><br>
                                <p>Pas encore de compte ? <a href="register" class="btn btn-danger">Inscription</a></p>
								
							</div>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr>
<?php
include ("footer.php");
?>