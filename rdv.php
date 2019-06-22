<?php
include ("header.php");
?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
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
  border-left: 6px solid #090;
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
</style>
<body>

<form name="myForm" id="regForm" action="verif">
  <h1>RESERVATION</h1>
  <!-- One "tab" for each step in the form: -->
  <div class="tab"> 
    <br><br> 
    <h2> 1 - Choisissez une formule </h2> <br>
    <?php include('pricing_table.php'); ?>
  </div>
  <div class="tab">
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
  <br>
  <br>
  <h2>4 - </h2><br> 

<label>Voulez une prestation à domicile ou en centre ?</label> <br>

<input type="radio" name="lieu" value="domicile" id="domicile">
<label for="domicile">A Domicile</label><br>
<input type="radio" name="lieu" value="centre" id="centre"> 
<label for="centre">En centre</label><br>

<label >Quel jour voulez vous passer ?</label><br>

<p><input type="date" id="datepicker"></p><br>
<label >A quelle heure voulez-vous passer ?</label><br>
<input type="datetime" name="heure"><br>


<button name="payer" class="btn btn-default btn-block"> Payez par <img src="images/logo_yup.jpg" width="50" alt="YUP" ></button>

    
  </div>

  <div class="tab">Birthday:
    <p><input placeholder="dd" oninput="this.className = ''" name="dd"></p>
    <p><input placeholder="mm" oninput="this.className = ''" name="nn"></p>
    <p><input placeholder="yyyy" oninput="this.className = ''" name="yyyy"></p>
  </div>
  <div class="tab">Login Info:
    <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
    <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
  </div> <br><br>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
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
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
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
    
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if ( y[i].value == "bonjour" )  {
      alert('invalid');
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
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

<script>
// Get today's date
var today = new Date();

$("#datepicker").datepicker({
    changeMonth: true,
    changeYear: true,
    minDate: today // set the minDate to the today's date
    // you can add other options here
});
</script>

</body>
</html>
