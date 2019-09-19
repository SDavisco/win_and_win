<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    </head>
    <body>
        <div class="Informacion">

        </div>
        <div class="datos">

        </div>
        <form action="enviar.php" method="post">
				<div class="row">
				<input type="text" name="nombre" placeholder="Nombre" class="caja-1" required>
				</div>
				<div class="row">
				<input type="email" name="email" placeholder="Email" class="caja-1" required>
				</div>
				<div class="row">
				<input type="number" name="telefono" placeholder="Teléfono" class="caja-1" required>
				</div>
				<textarea name="texto" id="" cols="25" rows="10" class="caja-2" placeholder="Deja tu mensaje" required>				
					</textarea>
				<button type="submit" class="b_correo">Enviar</button>
		</form>
    </body>
</html>