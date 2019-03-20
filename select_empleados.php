<?php
require("conn.php");

//query
$query="SELECT * FROM empleado";
$result = mysqli_query($conn, $query) or 
die(mysqli_error($conn));
 

 
mysqli_close($conn);
?>