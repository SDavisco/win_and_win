<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    </head>
    <body>
			<?php include 'layout/header.php';?>   
        <div class="Informacion">

        </div>
        <div class="info">

		</div>
		<section id="venta">
        <form action="enviar.php" method="post">
				<div class="campo">
					<label>Nombre y Apellido</label><br>
				<input type="text" name="nombre" placeholder="Nombre" class="caja-1" required>
				</div>
				<div class="campo">
					<label>Correo electronico</label><br>
				<input type="email" name="email" placeholder="Email" class="caja-1" required>
				</div>
				<div class="campo">
					<label>Telefono</label><br>
				<input type="number" name="telefono" placeholder="Teléfono" class="caja-1" required>
				</div>
				<div class="campo">
					<label>Mensaje:</label><br>
				<textarea name="texto" id="" cols="25" rows="10" class="caja-2" placeholder="Deja tu mensaje" required>				
					</textarea>
				</div>
				<div class="campo">
				<button type="submit" class="b_correo">Enviar</button>
			    </div>
		</form>
		</section>
    </body>
</html>