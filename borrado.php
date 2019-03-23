<?php 
require("header.php");

?>

<div class="container mt-3">
    <div class="card">

        <div class="card-body">
        	
            <form action="borrado_sql.php" class="form-group" method="post">
                <div class="form-group">
                    <label for="cedula_empleado">Borrar empleado </label><br>

                        <label>
            	           cedula del empleado:
                       </label>
                       <input type="text" name="cedula_empleado" id="cedula_empleado" class="form-control" required="true"><br> 
                       <input type="submit" class="btn btn-primary" value="Eliminar empleado" name="consulta">

                </div>

            </form>
        </div>

	</div>
</div>

<div class="container mt-3">
    <div class="card">

        <div class="card-body">
            
            <form action="borrado_sql.php" class="form-group" method="post">
                <div class="form-group">
                    <label for="calificacion">Borrar calificacion</label><br>

                        <label>
                           codigo calificacion a borrar:
                       </label>
                       <input type="text" name="codigo_calificacion" id="codigo_calificacion" class="form-control" required><br> 
                       <input type="submit" class="btn btn-primary" value="Eliminar calificacion" name="consulta">
                    
                </div>

            </form>
        </div>

    </div>
</div>