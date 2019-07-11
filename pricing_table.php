<style>
html {
  box-sizing: border-box;
  font-family: 'Open Sans', sans-serif;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.background {
  padding: 0 25px 25px;
  position: relative;
  width: 100%;
}

.background::after {
  content: '';
  background: #28a745;
  background: -moz-linear-gradient(top, #28a745 0%, #28a745 100%);
  background: -webkit-linear-gradient(top, #28a745 0%,#28a745 100%);
  background: linear-gradient(to bottom, #28a745 0%,#28a745 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='green', endColorstr='green',GradientType=0 );
  height: 350px;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
  z-index: 1;
}

@media (min-width: 900px) {
  .background {
    padding: 0 0 25px;
  }
}

.container {
  margin: 0 auto;
  padding: 50px 0 0;
  max-width: 960px;
  width: 100%;
}

.panel {
  background-color: #fff;
  border-radius: 10px;
  padding: 15px 25px;
  position: relative;
  width: 100%;
  z-index: 10;
}

.pricing-table {
  box-shadow: 0px 10px 13px -6px rgba(0, 0, 0, 0.08), 0px 20px 31px 3px rgba(0, 0, 0, 0.09), 0px 8px 20px 7px rgba(0, 0, 0, 0.02);
  display: flex;
  flex-direction: column;
}

@media (min-width: 900px) {
  .pricing-table {
    flex-direction: row;
  }
}

.pricing-table * {
  text-align: center;
  text-transform: uppercase;
}

.pricing-plan {
  border-bottom: 1px solid green;
  padding: 25px;
}

.pricing-plan:last-child {
  border-bottom: none;
}

@media (min-width: 900px) {
  .pricing-plan {
    border-bottom: none;
    border-right: 1px solid green;
    flex-basis: 100%;
    padding: 25px 50px;
  }

  .pricing-plan:last-child {
    border-right: none;
  }
}

.pricing-img {
  margin-bottom: 25px;
  max-width: 100%;
}

.pricing-header {
  color: green;
  font-weight: 600;
  letter-spacing: 1px;
}

.pricing-features {
  color: green;
  font-weight: 600;
  letter-spacing: 1px;
  margin: 50px 0 25px;
}

.pricing-features-item {
  
  font-size: 12px;
  line-height: 1.5;
  padding: 15px 0;
}


.pricing-price {
  color: green;
  display: block;
  font-size: 32px;
  font-weight: 700;
}

.pricing-button {
  border: 1px solid green;
  border-radius: 10px;
  color: green;
  display: inline-block;
  margin: 25px 0;
  padding: 15px 35px;
  text-decoration: none;
  transition: all 150ms ease-in-out;
}


.pricing-button.is-featured {
  background-color: green;
  color: #fff;
}

.input-hidden {
  position: absolute;
  left: -9999px;
}

.pricing-table input[type=radio]:checked + label>div {
  border: 1px solid #fff;
  box-shadow: 0 0 5px 5px #090;
}

/* Stuff after this is only to make things more pretty */
input[type=radio] + label>div {
  /* transition: 500ms all; */
}


.contain {
  position: relative;
  text-align: center;
  color: white;
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

</style>

<div class="background">
  <div class="container">
    <div class="panel pricing-table">
      
      
      <div class="pricing-plan">
        <h2 class="pricing-header">Eco express <br> “45 mn”</h2>
        <ul class="pricing-features">
          <li class="pricing-features-item">Aspiration des moquettes, des tapis, sièges, du coffre</li>
          <li class="pricing-features-item"> Nettoyage des vitres intérieures</li>
          <li class="pricing-features-item">Nettoyage, Brillance, Protection de la carrosserie</li>
          <li class="pricing-features-item">Nettoyage des vitres extérieures</li>
          <li class="pricing-features-item"> Nettoyage des pneus /jantes)</li>
        </ul>
        <span class="pricing-price"></span>
        <input 
  type="radio" name="formule" value="Eco Express"
  id="eco_express" class="input-hidden" />
<label for="eco_express">
<div class="pricing-button">
  CHOISIR
</div>
</label>
      </div>
      
      
      <div class="pricing-plan">
        <h2 class="pricing-header">Intérieur complet <br> “150 mn”</h2>
        <ul class="pricing-features">
          <li class="pricing-features-item">(Dépoussiérage et aspiration de l’habitacle</li>
          <li class="pricing-features-item">Shampooing du tableau de bord & garnitures + rénovation</li>
          <li class="pricing-features-item">Shampooing des tissus/cuirs - Nettoyage, des grilles d’aération</li>
          <li class="pricing-features-item">Décontamination de l’habitacle</li>
          <li class="pricing-features-item"> Shampooing des portières/contour des portes</li>
          <li class="pricing-features-item">Shampooing des moquettes/tapis et coffre</li>
          <li class="pricing-features-item">Nettoyage du ciel de toit</li>
        </ul>
        <span class="pricing-price"></span>
        <input 
  type="radio" name="formule" value="Intérieur complet"
  id="interieur_complet" class="input-hidden" /> <label for="interieur_complet">
  <div class="pricing-button">
  CHOISIR
</div>
</label>

      </div>
      
      
      <div class="pricing-plan">
        <h2 class="pricing-header">Intégrale <br> "350 mn"</h2>
        <ul class="pricing-features">
          <li class="pricing-features-item">Formule intérieure complet</li>
          <li class="pricing-features-item">Shampooing et lustrage manuel de la carrosserie</li>
          <li class="pricing-features-item">Protection hydrophobe de la carrosserie de la carrosserie</li>
          <li class="pricing-features-item">Nettoyage des jantes et pneus</li>
          <li class="pricing-features-item">Rénovation des plastiques extérieurs, des chromes</li>
        </ul>
        <span class="pricing-price"></span>
        <input 
  type="radio" name="formule" value="Intégrale"
  id="integrale" class="input-hidden" />
<label for="integrale">
<div class="pricing-button">
  CHOISIR
</div>
</label>
      </div>
    </div>
  </div>
</div>