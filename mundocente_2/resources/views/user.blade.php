<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Usuarios</title>
</head>
<body>
    <h4>nombre usuario, contraseña, nombre completo, email, Telefono, contacto,insitucion acedemica, Tipo</h4>
    <?php foreach ($users as $user): ?>
		<p>
			<?=$user->USERNAME, ' ', $user->PASSWORD, ' ', $user->FULLNAME, ' ', $user->EMAIL,' ',$user->PHONE,' ', $user->CONTACT,' ', $user->ACADEMIC_INSTITUTION, ' ', $user->TYPE?>
		
		</p>
	<?php endforeach ?>
</body>
</html>