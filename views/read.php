<?php require_once '../Models/city.php'; 
      $buscar_text ="";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css">
    <link href="../css/style.css" rel="stylesheet" type="text/css"/>
    
    <title>CRUD - Ciudades</title>
</head>
<body class="backgr">

    <header>
        <div class="pt-4 pb-3 text-center text-light font-weight-bolder bg-dark">
            CRUD o ABML - Ciudades
        </div>
    </header>

    <!-- NAVBAR -->

    <nav class="navbar sticky-top navbar-expand-sm navbar-dark bg-dark mb-1">
        <a class="navbar-brand active text-decoration-none text-white" href="../index.html">Home </a>    |        
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav mr-auto ">
                <li class="nav-item">
                    <a class="nav-link" href="#">Tabla Completa</a>          
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="5read.php">6 por Tabla</a>          
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="create.php">Nueva Ciudad </a>          
                </li>
            </ul>
            <div class="form-inline">
                <input class="form-control-sm" type="text" name="busqueda" id="busqueda" placeholder="Buscar"></input>
            </div>
        </div>
    </nav>
    <div class="container mx-auto " style="width: 100%;">
        <div class="table-responsive-md"  id="datos"></div>
    </div>

    <!-- TABLE -->
<!-- 
    <div class="container mx-auto " style="width: 100%;">
        <section>
            <div class="table-responsive-md" >
                <table class="table text-center table-sm table-hover">
                    <thead class="">
                        <tr>
                            <th>ID</th>
                            <th>Ciudad</th>
                            <th>Pais</th>
                            <th>Habitantes</th>
                            <th>Superficie</th>
                            <th>Tiene Metro</th>
                            <th colspan="2">Acciones</th>
                        </tr>
                    </thead>
                    <?php
                        foreach (city::show() as $row){
                    ?>
                    <tbody>
                        <tr>
                            <td class="text-center"><?= $row[0] ?></td>
                            <td><?= $row[1] ?></td>
                            <td><?= $row[2] ?></td>
                            <td><?= $row[3] ?></td>
                            <td><?= $row[4] ?> km<sup>2<sup></td>
                            <td class="text-center"><?= $row[5] ?></td>
                            <td class="text-center">
                                <a class="btn btn-info" href="update.php?id=<?=base64_encode($row[0])?>">Editar</a>
                            </td>
                            <td class="text-center">
                                <a class="btn btn-danger" href="../controller/controller.php?a=delete&id=<?=base64_encode($row[0])?>" onclick="return confirm('¿Seguro que quiere eliminarlo?')">Eliminar</a>
                            </td>
                        </tr>
                    </tbody>
                    <?php
                        }
                    ?>
                </table>
            </div>
        </section>
    </div> -->

    
    <footer>
        <div class="text-right font-weight-lighter container-fluid">
            <p>By Tomás Gabriel Cardozo</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>

</body>
</html>