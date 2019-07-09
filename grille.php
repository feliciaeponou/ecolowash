<!DOCTYPE html>
<html>
<head>
<style>
div.gallery {
  margin-top : 5px;
  border: 1px solid #ccc;
  height : 300px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  font-size : 15px;
  font-weight : bolder;
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

</style>
</head>
<body>

<div class="responsive">
  <div class="gallery">
  <input  type="radio" name="grille" id="treize" class="input-hidden" value="non" />
<label for="treize">
<img src="images/non.png" width="600" height="400">
<div class="desc">Je ne veux pas de prestation supplémentaire</div>
</label>
    
  </div>
</div>

<div class="responsive">
  <div class="gallery">
  <input  type="radio" name="grille" id="un" class="input-hidden" value="Shampooing ciel de toit" />
<label for="un">
<img src="images/image5.jpg" width="600" height="400">
<div class="desc">Shampooing ciel de toit</div>
</label>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
  <input  type="radio" name="grille" id="deux" value="Soufflage - Nettoyage & shampooing du chassis moteur et des plastiques" class="input-hidden" />
<label for="deux">
<img src="images/image7.jpg" width="600" height="400">
<div class="desc">Soufflage - Nettoyage & shampooing du chassis moteur et des plastiques</div>
</label>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
  <input  type="radio" name="grille" id="trois" value="Shampooing des portières/contours des portes" class="input-hidden" />
<label for="trois">
<img src="images/image1.jpg" width="600" height="400">
<div class="desc">Shampooing des portières/contours des portes</div>
</label>
    
  </div>
</div>

<div class="responsive">
  <div class="gallery">
  <input  type="radio" name="grille" id="quatre" value="Shampooing des sièges tissus" class="input-hidden" />
<label for="quatre">
<img src="images/image6.jpg" width="600" height="400">
<div class="desc">Shampooing des sièges tissus</div>
</label>
    
  </div>
</div>

<div class="responsive">
  <div class="gallery">
  <input  type="radio" name="grille" id="cinq" value="Shampooing des sièges en cuir" class="input-hidden" />
<label for="cinq">
<img src="images/image6.jpg" width="600" height="400">
<div class="desc">Shampooing des sièges en cuir </div>
</label>
    
  </div>
</div>

<div class="responsive">
  <div class="gallery">
  <input  type="radio" name="grille" id="six" value="Protection hydrophobe anti-salissure de la carrosserie" class="input-hidden" />
<label for="six">
<img src="images/image2.jpg" width="600" height="400">
<div class="desc">Protection hydrophobe anti-salissure de la carrosserie</div>
</label>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
  <input  type="radio" name="grille" id="sept" value="Polissage de la carrosserie" class="input-hidden" />
<label for="sept">
<img src="images/image8.jpg" width="600" height="400">
<div class="desc">Polissage de la carrosserie</div>
</label>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
  <input  type="radio" name="grille" id="huit" value="Renovation des optiques de phare extérieur" class="input-hidden" />
<label for="huit">
<img src="images/image7.jpg" width="600" height="400">
<div class="desc">Renovation des optiques de phare extérieur</div>
</label>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
  <input  type="radio" name="grille" id="neuf" value="Nettoyage intérieur des optiques de phare" class="input-hidden" />
<label for="neuf">
<img src="images/image7.jpg" width="600" height="400">
<div class="desc">Nettoyage intérieur des optiques de phare</div>
</label>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
  <input  type="radio" name="grille" id="dix" value="Taches de goudron/Résine" class="input-hidden" />
<label for="dix">
<img src="images/image4.jpg" width="600" height="400">
<div class="desc">Taches de goudron/Résine (Dissout, désintègre les tâches de goudron et de résine sur la carrosserie des véhicules</div>
</label>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
  <input  type="radio" name="grille" id="onze" value="Désinfection du circuit de climatisation" class="input-hidden" />
<label for="onze">
<img src="images/image8.jpg" width="600" height="400">
<div class="desc">Désinfection du circuit de climatisation (élimine les mauvaises odeurs, tue les bactéries, les virus etc...)</div>
</label>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
  <input  type="radio" name="grille" id="douze" value="Désinfection de l’habitacle" class="input-hidden" />
<label for="douze">
<img src="images/image3.jpg" width="600" height="400">
<div class="desc">Désinfection de l’habitacle (élimine les bactéries, les moisisures dans l’habitacle et dans le circuit de climatisation)</div>

</label>
  </div>
</div>

<div class="clearfix"></div>

</body>
</html>
