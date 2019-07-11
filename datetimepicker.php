<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="css/datetimepicker.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.0/moment-with-locales.min.js"></script>
    <script type="text/javascript" src="js/datetimepicker.js"></script>
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    
    <script type="text/javascript">
    $(document).ready( function () {
        $('#picker').dateTimePicker({
            locale: 'fr',
            defaultDate: today,
            dateFormat: 'DD/MM/YYYY H:mm:ss',
            sideBySide: true,
            minDate: today,
            title: "Choisir la date et l'heure",
            buttonTitle: "Choisir" 
            });
    })
    </script>
    <title></title>
</head>
<body>
   
<div style="width: 250px; margin: 50px auto;">
    <div id="picker"> </div>
    <input name="date_heure" type="hidden" id="result" value="" />
</div>

</body>
</html>
