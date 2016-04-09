<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Publicaciones</title>
</head>
<body>
    <h4>id, nombre, fecha publicacion, tipo, lugar, url, fecha inicio, fecha fin, categoria, posicion, descripcion, contacto, nombre usuario</h4>
    <?php foreach ($publications as $publication): ?>
		<p>
			<?=$publication->ID, ' ', $publication->NAME, ' ', $publication->DATE_PUBLICATION, ' ', $publication->TYPE,' ',$publication->PLACE,' ', $publication->URL,' ', $publication->START_DATE, ' ', $publication->END_DATE, ' ', $publication->CATEGORY, ' ',$publication->POSITION,' ',$publication->CONTACT,' ',$publication->USERNAME?>
		
		</p>
	<?php endforeach ?>
</body>
</html>