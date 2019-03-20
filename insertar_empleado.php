<?php 
require("header.php");
require("conn.php");
$cedula = $_POST["cedula"];
$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$fecha_nacimiento = $_POST["fecha"];
$cuenta_banco= $_POST["cuenta_banco"];
$correo= $_POST["correo"];
$tipo= $_POST["tipo"];

if($cedula<0){
	echo '<div class="alert alert-danger" role="alert">
  Cedula negativa!
</div>';
}

else{
	$query="INSERT INTO `empleado`
 	VALUES ('$cedula','$telefono','$correo','$nombre','$cuenta_banco','$fecha_nacimiento','$tipo','a','0')";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

 	if($result){
        header ("Location: index.php");
        
         
 	}else{
 		echo "Ha ocurrido un error al crear la persona";
 	}
 }
?>