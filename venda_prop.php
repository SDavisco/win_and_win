<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <script>
        function evalSlider()
        {
            var sliderValue = document.getElementById('urgencia').value;
            document.getElementById('sliderVal').innerHTML = sliderValue;
        }
    </script>
    </head>
    <body>
    <?php include 'layout/header.php';?>
    <div>
        <form action="#" method="POST">
            <div class="campo">
                <label>Nombre:</label>
                <input type="text" name="nombre" id="nombre">
            </div>
            <div class="campo">
                <label>Telefono:</label>
                <input type="tel" name="telefono" id="telefono">
            </div>
            <div class="campo">
                <label>Ciudad:</label>
                <input type="text" name="ciudad" id="ciudad">
            </div>
            <div class="campo">
                <label>Distrito:</label>
                <input type="text" name="distrito" id="distrito">
            </div>
                <label>Nivel de urgencia</label>
                <input type="range" name="urgencia" id="urgencia" min="1" max="10" onchange="evalSlider()">
                <output id="sliderVal"></output>
            <div class="campo"></div>
            
        </form>
    </div>
    </body>
</html>