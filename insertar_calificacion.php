<?php 
require("header.php");
require("conn.php");
$cedula_creador = $_POST["cedula_creador"];
$cedula_asignatario = $_POST["cedula_asignatario"];
$puntuacion = $_POST["puntuacion"];
$comentario= $_POST["comentario"];
$categoria= $_POST["categoria"];
$codigo= $_POST["codigo"];

///$fecha_actual = strtotime(date("Y-m-d",time()));
if($cedula_creador<0){
	echo '<div class="alert alert-danger" role="alert">
  Cedula negativa!
</div>';
}

else if($cedula_asignatario<0){
	echo '<div class="alert alert-danger" role="alert">
  Cedula negativa!
</div>';
}/*
else if(true){
	$p=strtotime("01 January 2006");
	echo $p;
}*/
else if($cedula_creador == $cedula_asignatario){
	echo '<div class="alert alert-danger" role="alert">
  No te puedes calificar a ti mismo!
</div>';
} else if($codigo<0){
	echo '<div class="alert alert-danger" role="alert">
  Codigo negativo!
</div>';
}

else{
	$query="INSERT INTO `calificacion`(`codigo`,`creador`,`asignatario`,`puntuacion`,`comentario`,`categoria`)
 	VALUES ('$codigo','$cedula_creador','$cedula_asignatario','$puntuacion','$comentario','$categoria')";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

 	if($result){
        echo '<div class="alert alert-primary" role="alert">
  			Creacion de calificacion exitosa!
			</div>';
        
         
 	}else{
 		echo "Ha ocurrido un error al crear la calificacion";
 	}
 }
 mysqli_close($conn);
?>