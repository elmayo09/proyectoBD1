<!DOCTYPE HTML>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>SuPropiedadRaiz</title>
</head>

<body class="p-3 mb-2 bg-secondary text-white>


   
    <!-- Nav tabs -->
    <nav class="navbar navbar-default" role="navigation">
    <ul class="nav nav-tabs" id="navId">
        <li class="nav-bar">
            <a href="index.php" class="nav-link active">Nuevo empleado</a>
        </li>
        <li class="nav-bar">
            <a href="nueva_calificacion.php" class="nav-link active">Nueva calificacion</a>
        </li>
        <li class="nav-bar">
            <a href="borrado.php" class="nav-link active">Borrado</a>
        </li>
        <li class="nav-bar">
            <a href="consultas.php" class="nav-link active">Consultas</a>
        </li>
        <li class="nav-bar">
            <a href="busquedas.php" class="nav-link active">Búsquedas</a>
        </li>
    </ul>
    
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane fade show active" id="tab1Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab2Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab3Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab4Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab5Id" role="tabpanel"></div>
    </div>
    
    <script>
        $('#navId a').click(e => {
            e.preventDefault();
            $(this).tab('show');
        });
    </script>
</nav>