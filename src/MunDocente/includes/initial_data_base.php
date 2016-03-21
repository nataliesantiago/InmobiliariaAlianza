<?php
$server_name = 'localhost';
$user_db = 'munDocente';
$password_db = 'munDocente';
$data_base = 'mundocente';
//CONEXIÓN DE LA BASE DE DATOS
$connection = mysqli_connect($server_name,$user_db,$password_db);
//COMPROBAMOS LA CONEXIÓN
if(!$connection){
	die('No se ha podido establecer conexión con la base de datos. ' . mysqli_connect_error());
} else {
	echo 'Conexión exitosa... <br/>';
}

//CREACIÓN DE LA BASE DE DATOS **OJO: CREARLA MANUALMENTE CON EL NOMBRE DE mundocente Y COTEJAMIENTO utf8-unicode-ci
//$sql = 'CREATE or REPLACE DATABASE mundocente ';
//if( (mysqli_query($connection, $sql))){
//	echo 'Creación exitoso de la base de datos <br/>';
//} else {
//	echo 'Error en la creación de la base de datos' . mysqli_error($connection);
//}

//SELECIONAMOS LA BASE DE DATOS
$database = mysqli_select_db($connection, $data_base);
if(!$database){
	die('No se ha podido selecionar la base de datos '. $data_base);
} else {
	echo 'Seleccionada correctamente la base de datos... <br/>';
}
//PROBLEMA SOLUCIONADO DE TILDES Y DEMÁS CARACTERES
mysqli_query($connection,"SET NAMES 'utf8'");
//PARA NO TENER PROBLEMAS CON LAS LLAVES FORANEAS
mysqli_query($connection,"SET_FOREIGN_KEY_CHECKS=0");


//CREAMOS LA TABLA TIPO DE LUGAR
$sql = explode(";", file_get_contents('data_base/create_type_of_place.sql')); //abrimos el archivo
foreach ($sql as $sql2) {
	if($connection->query($sql2)){
		echo 'Tabla TIPO DE LUGAR creada <br/> ';
		break;
	}else{
		echo $connection->error;
		break;
	}	
}

$fill = 0;

//LLENAMOS LA TABLA TIPO DE LUGAR
$sql = explode(";", file_get_contents('data_base/fill_type_of_place.sql')); //abrimos el archivo
foreach ($sql as $sql2) {//recorremos todas las consultas
	if(!empty($sql2)){
		if($connection->query($sql2)){
				$fill++;		
		}else{
			break;
		}	
	} else {
		break;
	}
}
echo 'insertadas '.$fill.' filas en la tabla tipo de lugar <br/>';




//CREAMOS LA TABLA LUGAR
$sql = explode(";", file_get_contents('data_base/create_place.sql')); //abrimos el archivo
foreach ($sql as $sql2) {
	if($connection->query($sql2)){
		echo 'Tabla LUGAR creada <br/> ';
		break;
	}else{
		echo $connection->error;
		break;
	}	
}

$fill = 0;

//LLENAMOS LA TABLA DE LUGAR
$sql = explode(";", file_get_contents('data_base/fill_place.sql')); //abrimos el archivo
foreach ($sql as $sql2) {//recorremos todas las consultas
	if(!empty($sql2)){
		if($connection->query($sql2)){
			$fill++;
		}else{
			break;
		}	
	} else {
		break;
	}
}

echo 'insertadas '.$fill.' filas en la tabla lugar <br/>';


//CREAMOS LA TABLA TIPO DE INSTITUCIÓN ACADEMICA
$sql = explode(";", file_get_contents('data_base/create_type_of_academic_institution.sql')); //abrimos el archivo
foreach ($sql as $sql2) {
	if($connection->query($sql2)){
		echo 'Tabla TYPE OF ACADEMIC INSTITUION creada <br/> ';
		break;
	}else{
		echo $connection->error;
		break;
	}	
}


$fill = 0;

//LLENAMOS LA TABLA TIPO DE INSTITUCIÓN ACADEMICA
$sql = explode(";", file_get_contents('data_base/fill_type_of_academic_institution.sql')); //abrimos el archivo
foreach ($sql as $sql2) {//recorremos todas las consultas
	if(!empty($sql2)){
		if($connection->query($sql2)){
			$fill++;
		}else{
			break;
		}	
	} else {
		break;
	}
}

echo 'insertadas '.$fill.' filas en la tabla tipo de institución academica <br/>';


//CREAMOS LA TABLA INSTITUCIÓN ACADEMICA
$sql = explode(";", file_get_contents('data_base/create_academic_institution.sql')); //abrimos el archivo
foreach ($sql as $sql2) {
	if($connection->query($sql2)){
		echo 'Tabla INSTITUCIÓN ACADEMICA creada <br/> ';
		break;
	}else{
		echo $connection->error;
		break;
	}	
}

$fill = 0;

//LLENAMOS LA TABLA INSTITUCIÓN ACADEMICA
$sql = explode(";", file_get_contents('data_base/fill_academic_institution.sql')); //abrimos el archivo
foreach ($sql as $sql2) {//recorremos todas las consultas
	if(!empty($sql2)){
		if($connection->query($sql2)){
			$fill++;		
		}else{
			break;
		}	
	} else {
		break;
	}
}

echo 'insertadas '.$fill.' filas en la tabla institución academica <br/>';


//CREAMOS LA TABLA AREA
$sql = explode(";", file_get_contents('data_base/create_area.sql')); //abrimos el archivo
foreach ($sql as $sql2) {
	if($connection->query($sql2)){
		echo 'Tabla AREA creada <br/> ';
		break;
	}else{
		echo $connection->error;
		break;
	}	
}

$fill = 0;

//LLENAMOS LA TABLA AREA
$sql = explode(";", file_get_contents('data_base/fill_area.sql')); //abrimos el archivo
foreach ($sql as $sql2) {//recorremos todas las consultas
	if(!empty($sql2)){
		if($connection->query($sql2)){
			$fill++;		
		}else{
			break;
		}	
	} else {
		break;
	}
}

echo 'insertadas '.$fill.' filas en la tabla area <br/>';


//CREAMOS LA TABLA TIPO DE USUARIO
$sql = explode(";", file_get_contents('data_base/create_type_of_user.sql')); //abrimos el archivo
foreach ($sql as $sql2) {
	if($connection->query($sql2)){
		echo 'Tabla TIPO DE USUARIO creada <br/> ';
		break;
	}else{
		echo $connection->error;
		break;
	}	
}


$fill = 0;

//LLENAMOS LA TABLA TIPO DE USUARIO
$sql = explode(";", file_get_contents('data_base/fill_type_of_user.sql')); //abrimos el archivo
foreach ($sql as $sql2) {//recorremos todas las consultas
	if(!empty($sql2)){
		if($connection->query($sql2)){
			$fill++;	
		}else{
			break;
		}	
	} else {
		break;
	}
}

echo 'insertadas '.$fill.' filas en la tabla tipo de usuario <br/>';


//CREAMOS LA TABLA USUARIO
$sql = explode(";", file_get_contents('data_base/create_user.sql')); //abrimos el archivo
foreach ($sql as $sql2) {
	if($connection->query($sql2)){
		echo 'Tabla USUARIO creada <br/> ';
		break;
	}else{
		echo $connection->error;
		break;
	}	
}

$fill = 0;

//LLENAMOS LA TABLA USUARIO
$sql = explode(";", file_get_contents('data_base/fill_user.sql')); //abrimos el archivo
foreach ($sql as $sql2) {//recorremos todas las consultas
	if(!empty($sql2)){
		if($connection->query($sql2)){
			$fill++;		
		}else{
			break;
		}	
	} else {
		break;
	}
}

echo 'insertadas '.$fill.' filas en la tabla user <br/>';


//CREAMOS LA TABLA ENROLL
$sql = explode(";", file_get_contents('data_base/create_enroll.sql')); //abrimos el archivo
foreach ($sql as $sql2) {
	if($connection->query($sql2)){
		echo 'Tabla ENROLL creada <br/> ';
		break;
	}else{
		echo $connection->error;
		break;
	}	
}

//CREAMOS LA TABLA TIPO DE PUBLICATIÓN
$sql = explode(";", file_get_contents('data_base/create_type_of_publication.sql')); //abrimos el archivo
foreach ($sql as $sql2) {
	if($connection->query($sql2)){
		echo 'Tabla TIPO DE PUBLICACIÓN creada <br/> ';
		break;
	}else{
		echo $connection->error;
		break;
	}	
}

$fill = 0;

//LLENAMOS LA TABLA TIPO DE PUBLICACIÓN
$sql = explode(";", file_get_contents('data_base/fill_type_of_publication.sql')); //abrimos el archivo
foreach ($sql as $sql2) {//recorremos todas las consultas
	if(!empty($sql2)){
		if($connection->query($sql2)){
			$fill++;		
		}else{
			echo $connection->error;
			break;
		}	
	} else {
		break;
	}
}

echo 'insertadas '.$fill.' filas en la tabla tipo de publicación <br/>';


//CREAMOS LA TABLA TIPO DE REVISTAS CIENTIFICA
$sql = explode(";", file_get_contents('data_base/create_type_of_scientific_magazine.sql')); //abrimos el archivo
foreach ($sql as $sql2) {
	if($connection->query($sql2)){
		echo 'Tabla TIPO DE REVISTA CIENTIFICAS creada <br/> ';
		break;
	}else{
		echo $connection->error;
		break;
	}	
}

$fill = 0;

//LLENAMOS LA TABLA TIPO DE REVISTAS CIENTIFICAS
$sql = explode(";", file_get_contents('data_base/fill_type_of_scientific_magazine.sql')); //abrimos el archivo
foreach ($sql as $sql2) {//recorremos todas las consultas
	if(!empty($sql2)){
		if($connection->query($sql2)){
			$fill++;		
		}else{
			echo $connection->error;
			break;
		}	
	} else {
		break;
	}
}
echo 'insertadas '.$fill.' filas en la tabla tipo de revistas cientificas<br/>';


//CREAMOS LA TABLA PUBLICACIÓN
$sql = explode(";", file_get_contents('data_base/create_publication.sql')); //abrimos el archivo
foreach ($sql as $sql2) {
	if($connection->query($sql2)){
		echo 'Tabla PUBLICACIÓN creada <br/> ';
		break;
	}else{
		echo $connection->error;
		break;
	}	
}

$fill = 0;

//LLENAMOS LA TABLA PUBLICACIÓN
$sql = explode(";", file_get_contents('data_base/fill_publication.sql')); //abrimos el archivo
foreach ($sql as $sql2) {//recorremos todas las consultas
	if(!empty($sql2)){
		if($connection->query($sql2)){
			$fill++;		
		}else{
			echo $connection->error;
			break;
		}	
	} else {
		break;
	}
}
echo 'insertadas '.$fill.' filas en la tabla tipo pulicación<br/>';



//CREAMOS LA TABLA REGISTRO
$sql = explode(";", file_get_contents('data_base/create_register.sql')); //abrimos el archivo
foreach ($sql as $sql2) {
	if($connection->query($sql2)){
		echo 'Tabla REGISTRO creada <br/> ';
		break;
	}else{
		echo $connection->error;
		break;
	}	
}

//CREAMOS LA TABLA ADMINISTRADOR
$sql = explode(";", file_get_contents('data_base/create_administrator.sql')); //abrimos el archivo
foreach ($sql as $sql2) {
	if($connection->query($sql2)){
		echo 'Tabla ADMINISTRADOR creada <br/> ';
		break;
	}else{
		echo $connection->error;
		break;
	}	
}

//CERRANDO LA CONEXIÓN ESTABLECIDA
mysqli_close($connection);
?>