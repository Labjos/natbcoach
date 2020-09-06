<?php 
$nombre_form=$_POST['nombre'];
$apellido_form=$_POST['apellido'];
$email_form=$_POST['email'];
$telefono_form=$_POST['telefono'];
$emprendimiento_form=$_POST['emprendimiento'];
$consulta_form=$_POST['consulta'];

$cuerpo=$nombre_form.$apellido_form.$telefono_form.$email_form.$password_form.$confpassword_form;
mail("info@nataliabcoach.com.ar","Consulta desde la WEB", $cuerpo);

include ('conexion.php');

mysqli_query ($datos_bd, "INSERT INTO consultas VALUES (DEFAULT, '$nombre_form', '$apellido_form','$email_form', $telefono_form, '$emprendimiento_form', '$consulta_form')"); 

header("Location: index.php?e=ok#plantilla");

?>