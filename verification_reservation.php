<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <div class="container">
    
    <form action="" method="post">
    <h1>Récapitulatif de la réservation</h1>
    
    <label >Formule</label><br>
    <label><?php echo $_POST['formule']; ?> </label><br>
    <input type="hidden" name="formule" value="<?php echo $_POST['formule']; ?>">
    <label >Prestation supplémentaire</label><br>
    <label><?php echo $_POST['grille']; ?> </label><br>
    <input type="hidden" name="grille" value="<?php echo $_POST['grille']; ?>">
    <label >Catégorie de véhicule</label><br>
    <label><?php echo $_POST['car']; ?> </label><br>
    <input type="hidden" name="car" value="<?php echo $_POST['car']; ?>">
    <label >Lieu</label><br>
    <label><?php echo $_POST['lieu']; ?> </label><br>
    <input type="hidden" name="lieu" value="<?php echo $_POST['lieu']; ?>">
    <label >La date et l'heure </label><br>
    <label><?php echo $_POST['date_heure']; ?> </label><br>
    <input type="hidden" name="date_heure" value="<?php echo $_POST['date_heure']; ?>">

    <a href="rdv">Modifier</a>
    <button type="submit" name="valider">Valider la réservation</button>

    
    </form>


    <?php

include 'config.php';

if(isset($_POST['valider'])){

    $id = $_SESSION['id_user'];
    
    $formule = addslashes($_POST ['formule']);
    $prestation_supp = addslashes($_POST ['grille']);
    $cat_vehicule = addslashes($_POST ['car']);
    $lieu = addslashes($_POST ['lieu']);
    $date_heure = addslashes($_POST ['date_heure']);
    
    $reservation_query = mysqli_query($conn, "INSERT INTO reservation (numero_res,formule,prestation_supp,cat_vehicule,lieu,date_heure,id_user) VALUES ('','$formule','$prestation_supp','$cat_vehicule','$lieu','$date_heure','$id')");
    //---- Send Email---------------------------
        /*
    // the message
    $msg = "Welcome to phpTest: \n Your login informations : \n Email = ".$email." Password = ".$password." \n Now you can log into your account. ";
    // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,70);
    // send email
    mail($email,"Welcome to phpTest",$msg);
    //-------End sending Email-----------------
    */
    if ($reservation_query) {
        $email = $_SESSION['email'];
        $msg = '
        
        <h1>Récapitulatif de la réservation</h1>
    
    <label >Formule</label><br>
    <label><?php echo $_POST["formule"]; ?> </label><br>
    <label >Prestation supplémentaire</label><br>
    <label><?php echo $_POST["grille"]; ?> </label><br>
    <label >Catégorie de véhicule</label><br>
    <label><?php echo $_POST["car"]; ?> </label><br>
    <label >Lieu</label><br>
    <label><?php echo $_POST["lieu"]; ?> </label><br>
    <label >La date et l\'heure </label><br>
    <label><?php echo $_POST["date_heure"]; ?> </label><br>
        ';

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