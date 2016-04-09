<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lugares</title>
</head>
<body>
    <h4>ID, Nombre, Email, Lugar, Telefono, Descripcion, Tipo</h4>
    <?php foreach ($academics as $academic): ?>
		<p>
			<?=$academic->ID, ' ', $academic->NAME, ' ', $academic->EMAIL, ' ', $academic->PLACE,' ',$academic->PHONE,' ', $academic->DESCRIPTION,' ', $academic->TYPE?>
		
		</p>
	<?php endforeach ?>
</body>
</html>