<body onload="getRandomImage()">
<div id="randImage"></div>


<script type="text/javascript">
    ImageArray = new Array();
    ImageArray[0] = 'image1.jpg';
    ImageArray[1] = 'image2.jpg';
    ImageArray[2] = 'image3.jpg';
    ImageArray[3] = 'image4.jpg';
    ImageArray[4] = 'image5.jpg';
    ImageArray[5] = 'image6.jpg';
    ImageArray[6] = 'image7.jpg';


function getRandomImage() {
    var num = Math.floor( Math.random() * 7);
    var img = ImageArray[num];
    document.getElementById("randImage").innerHTML = ('<img src="' + 'images/grille/' + img + '" width="250px">')

}
</script>
</body>