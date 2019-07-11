<?php 
session_start();
include('config.php');
$id = $_SESSION['id_user'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>

    <div>
    <?php 
     include('header.php');
    ?>
    </div>
    <div class="container">
    <br><br><br><br>
    
    <h1 style="text-align : center;">RECAPITULATIF DE LA RESERVATION</h1> <br>

    <!-- Datatable -->

  <center>
    <table id="example" class="display table table-striped table-bordered" cellspacing="0" >
        <thead>
            <tr>
                <th>FORMULE</th>
                <th>PRESTATION SUPPLEMENTAIRE</th>
                <th>CATEGORIE VEHICULE</th>
                <th>LIEU</th>
                <th>DATE ET HEURE</th>
            </tr>
        </thead>
 
 
        <tbody>
        
            <tr>
                <td><?php echo $_POST['formule']; ?></td>
                <td><?php echo $_POST['grille']; ?></td>
                <td><?php echo $_POST['car']; ?></td>
                <td><?php echo $_POST['lieu']; ?></td>
                <td><?php echo $_POST['date_heure']; ?></td>
            </tr>

        </tbody>
    </table><br><br>


                 <!-- Form -->

                 <form action="" method="post">
    
    
    <input type="hidden" name="formule" value="<?php echo $_POST['formule']; ?>">
    <input type="hidden" name="grille" value="<?php echo $_POST['grille']; ?>">
    <input type="hidden" name="car" value="<?php echo $_POST['car']; ?>">
    <input type="hidden" name="lieu" value="<?php echo $_POST['lieu']; ?>">
    <input type="hidden" name="date_heure" value="<?php echo $_POST['date_heure']; ?>">

    <button class="btn btn-default" href="rdv">Modifier</button>
    <button class="btn btn-success" type="submit" name="valider">Valider la réservation</button>

    
    </form>
    </center>

    <?php



if(isset($_POST['valider'])){

    $id = $_SESSION['id_user'];
    
    $formule = addslashes($_POST ['formule']);
    $prestation_supp = addslashes($_POST ['grille']);
    $cat_vehicule = addslashes($_POST ['car']);
    $lieu = addslashes($_POST ['lieu']);
    $date_heure = addslashes($_POST ['date_heure']);
    
    $reservation_query = mysqli_query($conn, "INSERT INTO reservation (numero_res,formule,prestation_supp,cat_vehicule,lieu,date_heure,id_user) VALUES ('','$formule','$prestation_supp','$cat_vehicule','$lieu','$date_heure','$id')");
    


    if ($reservation_query) {
        $email = $_SESSION['email'];
        $msg = "
        
        <h1>Récapitulatif de la réservation</h1>
    
        <table id=\"example\" class=\"display table table-striped table-bordered\" cellspacing=\"0\" border=\"1\" >
        <thead>
            <tr>
                <th>FORMULE</th>
                <th>PRESTATION SUPPLEMENTAIRE</th>
                <th>CATEGORIE VEHICULE</th>
                <th>LIEU</th>
                <th>DATE ET HEURE</th>
            </tr>
        </thead>
 
 
        <tbody>
        
            <tr>
                <td>". $_POST['formule'] . "</td>
                <td>". $_POST['grille']." </td>
                <td>". $_POST['car']." </td>
                <td>". $_POST['lieu']." </td>
                <td>". $_POST['date_heure'] ."</td>
            </tr>

        </tbody>
    </table>
    <br>
        ";

        // Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        mail($email,"Ecolowash : Récapitulatif des informations de la réservation",$msg,$headers);
    } else {
        echo "Opération échouée";
    }

  }
 
?>

    
    </div>
</body>
</html>