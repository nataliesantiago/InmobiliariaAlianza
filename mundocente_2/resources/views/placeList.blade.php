<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lugares</title>
</head>
<body>
    <h4>ID, Nombre, tipo, padre</h4>
    <?php foreach ($places as $place): ?>
		<p>
			<?=$place->ID, ' ', $place->NAME, ' ', $place->TYPE, ' ', $place->PARENT?>
		
		</p>
	<?php endforeach ?>
</body>
</html>