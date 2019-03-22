<?php

include("header.php");

?>

<div class="container mt-3">
    <div class="card">

        <div class="card-body">
        	
            <form action="nueva_busqueda.php" class="form-group" method="post">
                <div class="form-group">
                    <label for="cedula_empleado">Buscar calificaciones realizadas por empleado </label><br>

                        <label>
            	           cedula del empleado:
                       </label>
                       <input type="text" name="cedula_empleado" id="cedula_empleado" class="form-control"><br> 
                       <input type="submit" class="btn btn-primary" value="Buscar calificaciones" name="consulta">

                </div>

            </form>
        </div>

	</div>
</div>

<div class="container mt-3">
    <div class="card">

        <div class="card-body">
            
            <form action="nueva_busqueda.php" class="form-group" method="post">
                <div class="form-group">
                    <label for="cedula_empleado">Buscar empleados de la misma categoria del codigo</label><br>

                        <label>
                           codigo calificacion:
                       </label>
                       <input type="text" name="codigo_calificacion" id="codigo_calificacion" class="form-control"><br> 
                       <input type="submit" class="btn btn-primary" value="Buscar" name="consulta">
                    
                </div>

            </form>
        </div>

    </div>
</div>
