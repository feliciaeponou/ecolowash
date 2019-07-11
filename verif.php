<?php
if(!isset($_POST['connexion'])&&!isset($_POST['inscription'])){
    header('location:./');
  }else{
  include 'config.php';
//--- if User Login ----------------------------------
if(isset($_POST['connexion'])){
    
    $email = addslashes($_POST ['email']);
    $password = md5($_POST ['password']);
    $query = mysqli_query($conn, "SELECT * FROM user WHERE password='$password' AND email ='$email'");
        $rows = mysqli_num_rows($query);
        if($rows==1){
        $array = $query->fetch_assoc();
        session_start();
        $_SESSION['logged_in']= true;
        $_SESSION['id_user'] = $array['id_user'];
        $_SESSION['nom'] = $array['nom'];
        $_SESSION['email'] = $array['email'];
        header('location:./');
        }else{
        echo "<font color = 'red'>";
	      echo "Addresse mail ou mot de passe incorrect, Cliquez";
        echo "</font>";
        echo "<br>";
        echo "<font color = 'green'><b>";
        echo "<a href = 'forget'>";
        echo "ici";
        echo "</a>";
        echo "</b></font>";
        echo "<font color = 'red'>";
        echo " pour obtenir un nouveau mot de passe .";
        echo "</font>";
        }
        echo "</center>";
}
//--------------- If user Sign Up-------------------------
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
    $inscription_query = mysqli_query($conn, "INSERT INTO user (id_user,nom,prenom,sexe,numero,email,password,pays,ville,datesignup) VALUES ('','$nom','$prenom','$sexe','$numero','$email','$password','$pays','$ville','$datepost')");
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
    if ($inscription_query) {
        header('location:connexion');
    } else {
        echo "Inscription échouée";
    }
    
    }else{
	      echo "L'addresse mail existe déjà, vous ne pouvez vous inscrire deux fois. Cliquez";
        echo "<br><b>";
        echo "<font color = 'green'>";
        echo "<a href = 'connexion'>";
        echo "ici";
        echo "</b></a>";
        echo "</font>";
        echo " pour vous connecter.";
    }
  }


//   ---------------- Enregistrement d'une voiture -------------------

if (isset($_POST['enregistrer '])) {

    $cat_vehicule = addslashes($_POST ['cat_vehicule']);
    $imm_vehicule = addslashes($_POST ['imm_vehicule']);
    $mar_vehicule = addslashes($_POST ['mar_vehicule']);
    $modl = addslashes($_POST ['numero']);
    $pays = addslashes($_POST ['pays']);
    $ville = addslashes($_POST ['ville']);
    $email = addslashes($_POST ['email']);
    $password = md5($_POST ['password']);
    $name = addslashes($_POST ['name']);
    $query = mysqli_query($conn, "SELECT * FROM user WHERE email ='$email'");
    $rows = mysqli_num_rows($query);
    if($rows!=1){
    $array = $query->fetch_assoc();
    $inscription_query = mysqli_query($conn, "INSERT INTO user (id_user,nom,prenom,sexe,numero,email,password,pays,ville,datesignup) VALUES ('','$nom','$prenom','$sexe','$numero','$email','$password','$pays','$ville','$datepost')");
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
    if ($inscription_query) {
        header('location:connexion');
    } else {
        echo "Inscription échouée";
    }
    
    }else{
	      echo "L'addresse mail existe déjà, vous ne pouvez vous inscrire deux fois. Cliquez";
        echo "<br><b>";
        echo "<font color = 'green'>";
        echo "<a href = 'connexion'>";
        echo "ici";
        echo "</b></a>";
        echo "</font>";
        echo " pour vous connecter.";
    }
}
  echo "</center>";
}
?>
<?php
mysqli_close($conn);
?>