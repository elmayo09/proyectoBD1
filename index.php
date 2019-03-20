<?php 
include("header.php")
 ?>
    <div class="container mt-3">
                <div class="card">
                    <div class="card-header" align="center">
                        Insertar nuevo empleado
                    </div>
                    <div class="card-body">
                        <form action="insertar_empleado.php" class="form-group" method="post">
                            <div class="form-group">
                                <label for="cedula">Cedula*</label>
                                <input type="text" name="cedula" id="cedula" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Nombre*</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Telefono*</label>
                                <input type="text" name="telefono" id="telefono" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Fecha de nacimiento*</label>
                                <input type="date" name="fecha" id="fecha" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="">Numero de cuenta bancaria*</label>
                                <input type="text" name="cuenta_banco" id="cuenta_banco" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="">Correo</label>
                                <input type="text" name="correo" id="correo" class="form-control">
                            </div>

                            <div class="form-group">
                                <select class="custom-select" name='tipo' >
                                    <option value="Administrador">Administrador</option>

                                    <option value="Funcionario">Funcionario</option>

                                    </select>
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