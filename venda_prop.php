<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css">
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
    <section id="venta">
        <div id="info">
                <p>Una mañana, tras un sueño intranquilo, Gregorio Samsa se despertó convertido en un monstruoso insecto. 
                Estaba echado de espaldas sobre un duro caparazón y, al alzar la cabeza, vio su vientre convexo y oscuro,
                surcado por curvadas callosidades, sobre el que casi no se aguantaba la colcha, que estaba a</p>
        </div>  
        <form action="#" method="POST">
            <div class="campo">
                <label>Nombre:</label><br>
                <input type="text" name="nombre" id="nombre">
            </div>
            <div class="campo">
                <label>Telefono:</label><br>
                <input type="tel" name="telefono" id="telefono">
            </div>
            <div class="campo">
                <label>Ciudad:</label><br>
                <input type="text" name="ciudad" id="ciudad">
            </div>
            <div class="campo">
                <label>Distrito:</label><br>
                <input type="text" name="distrito" id="distrito">
            </div>
            <div class="campo">
                <label>Nivel de urgencia</label><br>
                <input type="range" name="urgencia" id="urgencia" min="1" max="10" onchange="evalSlider()">
                <output id="sliderVal"></output>
            </div>
            <div class="campo">
                <input type="submit" name="boton" value="enviar    " id="boton">
                </div>
        </form>
    </section>
    </body>
</html>