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

///$fecha_actual = strtotime(date("Y-m-d",time()));
if($cedula<0){
	echo '<div class="alert alert-danger" role="alert">
  Cedula negativa!
</div>';
}/*
else if(true){
	$p=strtotime("01 January 2006");
	echo $p;
}*/
else if(strtotime($fecha_nacimiento)>strtotime("01 January 2001")){
	echo '<div class="alert alert-danger" role="alert">
  debe ser mayor de edad
</div>';
}

else{
	$query="INSERT INTO `empleado`(`cedula`,`nombre`,`telefono`,`correo`,`cuenta_banco`,`fecha_nacimiento`,`tipo`,`direccion`,`reputacion`)
 	VALUES ('$cedula','$nombre','$telefono','$correo','$cuenta_banco','$fecha_nacimiento','$tipo',Null,Null)";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

 	if($result){
        echo '<div class="alert alert-primary" role="alert">
  			Creacion de empleado exitoso!
			</div>';
        
         
 	}else{
 		echo "Ha ocurrido un error al crear la persona";
 	}
 }
 mysqli_close($conn);
?>