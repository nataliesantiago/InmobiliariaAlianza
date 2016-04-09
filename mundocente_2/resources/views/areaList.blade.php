<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Todos las areas</title>
</head>
<body>
	<?php foreach ($areas as $area): ?>
		<p>
			<?=$area->ID, ' ', $area->NAME, ' ', $area->DESCRIPTION?>
		
		</p>
	<?php endforeach ?>
</body>
</html>