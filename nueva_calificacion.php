<?php 
require("header.php");
require("select_empleados.php");
?>
    <div class="container mt-3">
                <div class="card">
                    <div class="card-header" align="center">
                        Crear nueva calificacion
                    </div>

                    

                    <div class="card-body">
                    	
                        <form action="insertar_calificacion.php" class="form-group" method="post">
                            <div class="form-group">
                                <label for="">Codigo*</label>
                                <input type="text" name="codigo" id="codigo" class="form-control" required> 
                    </div>
                        	<div class="form-group">
                            <label for="cedula_empleado">Tu cédula*</label>
                                <select class="custom-select" name='cedula_creador' >
                                	<?php
                    	if($result){
                            foreach ($result as $fila){
                        ?>

                                    <option value=<?=$fila['cedula'];?>><?=$fila['cedula'];?></option>

                            <?php                    

                                }
                            }
                            
                            ?>

                                </select>
                    </div>
                            <div class="form-group">
                                <label for="comentario">Comentario*</label>
                                <textarea rows="5" cols="30" name="comentario" id="comentario" required class="form-control"></textarea>
                            </div>
                            

                            <div class="form-group">
                            	<label for="categoria">Categoría*</label>
                                <select class="custom-select" name='categoria' >

                                    <option value="responsabilidad">Responsabilidad</option>

                                    <option value="calidad del trabajo">Calidad del trabajo</option>

                                    <option value="conocimiento del trabajo">Conocimiento del trabajo</option>

                                    <option value="cooperacion">Cooperación</option>

                                    </select>
                            </div>

                            <div class="form-group">
                            	<label for="puntuacion">Puntuación*</label>
                                <select class="custom-select" name='puntuacion' >

                                    <option value=0>0</option>

                                    <option value=1>1</option>

                                    <option value=2>2</option>

                                    <option value=3>3</option>

                                    <option value=4>4</option>

                                    <option value=5>5</option>

                                    </select>
                            </div>

                            <div class="form-group">
                            <label for="cedula_empleado">Cédula del empleado al que vas a calificar*</label>
                                <select class="custom-select" name='cedula_asignatario' >
                                	<?php
                    	if($result){
                            foreach ($result as $fila){
                        ?>

                                    <option value=<?=$fila['cedula'];?>><?=$fila['cedula'];?></option>

                            <?php                    

                                }
                            }
                            
                            ?>

                                </select>
                    </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Calificar">
                            </div>

                        </form>

            </div>
        </div>


    </div>
