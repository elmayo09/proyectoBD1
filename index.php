<<?php 
include("header.php")
 ?>
    <div class="container mt-3">
                <div class="card">
                    <div class="card-header" align="center">
                        Insertar Nuevo empleado
                    </div>
                    <div class="card-body">
                        <form action="insertar_usuario.php" class="form-group" method="post">
                            <div class="form-group">
                                <label for="cedula">Cedula</label>
                                <input type="text" name="cedula" id="cedula" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Nombre</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Direccion</label>
                                <input type="text" name="direccion" id="direccion" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Telefono</label>
                                <input type="text" name="telefono" id="telefono" class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="insertar">
                            </div>

                        </form>

            </div>
        </div>


    </div>




</body>

</html>