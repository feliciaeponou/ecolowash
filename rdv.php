<?php
include ("header.php");
?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>
<link rel="stylesheet"
  href="https://rawgit.com/Eonasdan/bootstrap-datetimepicker/master/build/css/bootstrap-datetimepicker.min.css">
<script src="https://rawgit.com/Eonasdan/bootstrap-datetimepicker/master/build/js/bootstrap-datetimepicker.min.js"></script>
<script>
// Get today's date
var today = new Date();

$('#datetimepicker1').datetimepicker({
    defaultDate: today,
    format: 'DD/MM/YYYY H:mm:ss',
    sideBySide: true,
    minDate: today
});
</script>

<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1,h2 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}

/* Radio Button animation when checked */

.input-hidden {
  position: absolute;
  left: -9999px;
}
input[type=radio]:checked + label>img {
  /* border-left: 6px solid #090; */
  box-shadow: 0 0 5px 5px #090;
}

/* Stuff after this is only to make things more pretty */
input[type=radio] + label>img {
 
  transition: 500ms all;
}


/*
 | //lea.verou.me/css3patterns
 | Because white bgs are boring.
*/
html {
  background-color: #fff;
  background-size: 100% 1.2em;
  background-image: 
    linear-gradient(
      90deg, 
      transparent 79px, 
      #abced4 79px, 
      #abced4 81px, 
      transparent 81px
    ),
    linear-gradient(
      #eee .1em, 
      transparent .1em
    );
}

.center {
  display : block;
  margin : auto;
}

hr {
  color : #333;
}
</style>
<body>

<form method="post" name="myForm" id="regForm" action="verification_reservation">
  <h1>RESERVATION</h1><hr>
  <!-- One "tab" for each step in the form: -->
  <div class="tab">
    <br><br> 
    <h2> 1 - Choisissez une formule </h2> <br>
    <?php include('pricing_table.php'); ?>
  </div>
  <div class="tab grille">
  <br>
  <br>
  <h2>2 - Souhaitez vous une prestation supplémentaire ?</h2><br>
  <?php include('grille.php'); ?>
  </div>
  <div class="tab">
  <br>
  <br>
  <h2>3 - Choisissez la catégorie de votre véhicule</h2><br>

<?php include('car_choosing.php'); ?>
    
  </div>

  <div class="tab">
  <center>
  <br>
  <br>

<h3>Voulez une prestation à domicile ou en centre ?</h3> <br>

<div class="row">
<div class="col-md-3"></div>
<div class="col-md-3">
<input 
  type="radio" name="lieu" 
  id="domicile" class="input-hidden" value="domicile" />
<label for="domicile">
<img class="center" src="images/domicile.png" width="100"><br>
A domicile
</label>
</div>
<div class="col-md-3">
<input 
  type="radio" name="lieu" 
  id="centre" class="input-hidden" value="centre" />
<label for="centre">
<img class="center" src="images/centre.png" width="100"><br>
En centre
</label>
</div>
<div class="col-md-3"></div>
</div>
<br><br><hr>
<h3 >Date et heure  </h3>

    <?php include('datetimepicker.php'); ?>

<br><hr>
<h3>Méthode de paiement</h3><br>
<a name="payer" > <img src="images/paiementYup.png" width="100" alt="YUP" ></a>

    </center>
  </div>

 <br><br>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Précédent</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Suivant</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Réserver";
  } else {
    document.getElementById("nextBtn").innerHTML = "Suivant";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");


 if (x[currentTab] == x[0]) {
  var formules = document.getElementsByName("formule");
   
    if (formules[0].checked || formules[1].checked || formules[2].checked) {
        valid = true;
    } else {
      valid = false;
    }

 } 
  if (x[currentTab] == x[1]) {
  var grilles = document.getElementsByName("grille");
    
    if (grilles[0].checked || grilles[1].checked || grilles[2].checked || grilles[3].checked || grilles[4].checked || grilles[5].checked || grilles[6].checked || grilles[7].checked || grilles[8].checked || grilles[9].checked || grilles[10].checked || grilles[11].checked || grilles[12].checked) {
        valid = true;
    } else {
      valid = false;
    }

  } 
   if (x[currentTab] == x[2]) {
    var cars = document.getElementsByName("car");
    
    if (cars[0].checked || cars[1].checked || cars[2].checked) {
        valid = true;
    } else {
      valid = false;
    }

  } 

  if (x[currentTab] == x[3]) {
    var lieux = document.getElementsByName("lieu");
    var date_heure = document.getElementsByName("date_heure");
    
    if (lieux[0].checked || lieux[1].checked || date_heure.value == "") {
        valid = true;
    } else {
      valid = false;
    }

  } 
    
  
  
  
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>



</body>
</html>
