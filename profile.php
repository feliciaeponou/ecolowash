<?php 

include('config.php');

$id = $_SESSION['id_user'];

$sql1 ="SELECT * FROM user WHERE  id_user = '$id'";
        $result = $conn->query($sql1);

      if ($result->num_rows == 1) {
        
          while($row = $result->fetch_assoc()) {
              $nom = $row['nom'];
              $prenom = $row['prenom'];
              $sexe = $row['sexe'];
              $dat_nais = $row['dat_nais'];
              $numero = $row['numero'];
              $email = $row['email'];
              $password = $row['password'];
              $ville = $row['ville'];
              $num_cni = $row['num_cni'];
        }

    }
    else {
        echo "Informations non disponibles";
    }

?>




<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <style>
.kv-avatar .krajee-default.file-preview-frame,.kv-avatar .krajee-default.file-preview-frame:hover {
    margin: 0;
    padding: 0;
    border: none;
    box-shadow: none;
    text-align: center;
}
.kv-avatar {
    display: inline-block;
}
.kv-avatar .file-input {
    display: table-cell;
    width: 213px;
}
.kv-reqd {
    color: red;
    font-family: monospace;
    font-weight: normal;
}
</style>
 
</head>


<br>


<?php 
include('header.php') ;
  ?>


<div class="container bootstrap snippet">
<form class="form" action="verif" method="post" id="registrationForm" enctype="multipart/form-data">
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
      <div class="text-center">
      <div class="kv-avatar">
                <div class="file-loading">
                    <input id="avatar-2" name="photo_user" type="file" required>
                </div>
            </div>
        <!-- <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
        <h6>Modifier la photo...</h6>
        <input type="file" class="text-center center-block file-upload"> -->
      </div></hr><br>

               
          
        </div><!--/col-3-->
    	<div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Modifier mes informations</a></li>
                <li><a data-toggle="tab" href="#reservations">Mes réservations</a></li>
                <li><a data-toggle="tab" href="#vehicule">Mon vehicule</a></li>
              </ul>

              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>Prénom</h4></label>
                              <input type="text" class="form-control" name="prenom" id="first_name" placeholder="<?php echo $prenom; ?>" >
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Nom</h4></label>
                              <input type="text" class="form-control" name="nom" id="last_name" placeholder="<?php echo $nom; ?>">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Téléphone</h4></label>
                              <input type="text" class="form-control" name="numero" id="phone" placeholder="<?php echo $numero; ?>" >
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Date de naissance</h4></label>
                              <input type="text" class="form-control" name="dat_nais" id="mobile" placeholder="<?php echo $dat_nais; ?>" >
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="<?php echo $email; ?>" >
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="sexe"><h4>Sexe</h4></label>
                              <input type="text" class="form-control" id="sexe" placeholder="<?php echo $sexe; ?>" >
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="ville"><h4>Ville</h4></label>
                              <input type="text" class="form-control" id="ville" placeholder="<?php echo $ville; ?>" >
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="num_cni"><h4>Numéro CNI/Passeport/Attestation d'identité</h4></label>
                              <input type="text" class="form-control" id="num_cni" placeholder="<?php echo $num_cni; ?>" >
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="password"><h4>Mot de passe</h4></label>
                              <input type="password" class="form-control" name="password" id="password" placeholder="<?php echo $password; ?>" title="Modifier mon mot de passe">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>Confirmer le mot de passe</h4></label>
                              <input type="password" class="form-control" name="password2" id="password2" placeholder="<?php echo $password; ?>" title="Confirmer mon mot de passe modifié">
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Enregistrer les modifications</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Annuler</button>
                            </div>
                      </div>
              	</form>
              
              <hr>
              
             </div><!--/tab-pane-->
             <div class="tab-pane" id="reservations">
               
               <h2></h2>
               
               <hr>
                 <?php

$sql1 ="SELECT * FROM reservation WHERE  id_user = '$id'";
$result = $conn->query($sql1);

if ($result->num_rows == 1) {

  while($row = $result->fetch_assoc()) {

    $nb = 0;

    echo '
    <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>FORMULE</th>
                <th>PRESTATION SUPPLEMENTAIRE</th>
                <th>CATEGORIE VEHICULE</th>
                <th>LIEU</th>
                <th>DATE ET HEURE</th>
            </tr>
        </thead>
 
        <tfoot>
            <tr>
                <th>ID</th>
                <th>FORMULE</th>
                <th>PRESTATION SUPPLEMENTAIRE</th>
                <th>CATEGORIE VEHICULE</th>
                <th>LIEU</th>
                <th>DATE ET HEURE</th>
            </tr>
        </tfoot>
 
        <tbody>
            <tr>
                <td>'.$nb.'</td>
                <td>'.$row["formule"].'</td>
                <td>'.$row["prestation_supp"].'</td>
                <td>'.$row["cat_vehicule"].'</td>
                <td>'.$row["lieu"].'</td>
                <td>'.$row["date_heure"].'</td>
            </tr>

        </tbody>
    </table

            ';

}

}
else {
echo "Informations non disponibles";
}

                 ?>



               
             </div><!--/tab-pane-->
             <div class="tab-pane" id="vehicule">
            		
               	
                  <hr>
                  <form class="form" action="##" method="post" id="registrationForm" enctype="multipart/form-data">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>First name</h4></label>
                              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Last name</h4></label>
                              <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Phone</h4></label>
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Mobile</h4></label>
                              <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Location</h4></label>
                              <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="password"><h4>Password</h4></label>
                              <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>Verify</h4></label>
                              <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success pull-right" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<!--<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>-->
                            </div>
                      </div>
              	</form>
              </div>
               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
                                                      





<script>

$(document).ready(function() {

    
var readURL = function(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.avatar').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}


$(".file-upload").on('change', function(){
    readURL(this);
});
});

</script>


<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

<script>
var btnCust = '<button type="button" class="btn btn-secondary" title="Add picture tags" ' + 
    'onclick="alert(\'Call your custom code here.\')">' +
    '<i class="glyphicon glyphicon-tag"></i>' +
    '</button>'; 
$("#avatar-2").fileinput({
    overwriteInitial: true,
    maxFileSize: 1500,
    showClose: false,
    showCaption: false,
    showBrowse: false,
    browseOnZoneClick: true,
    removeLabel: '',
    removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
    removeTitle: 'Annuler',
    elErrorContainer: '#kv-avatar-errors-2',
    msgErrorClass: 'alert alert-block alert-danger',
    defaultPreviewContent: '<img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" alt="Your Avatar"><h6 class="text-muted">Cliquez pour modifier</h6>',
    layoutTemplates: {main2: '{preview} ' +  btnCust + ' {remove} {browse}'},
    allowedFileExtensions: ["jpg", "png", "gif"]
});
</script>


<?php include('footer.php') ?>