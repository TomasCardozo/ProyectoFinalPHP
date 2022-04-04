<?php require_once '../Models/city.php'; ?>
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

<?php
    $pagina = isset ( $_GET['pagina']) ? $_GET['pagina'] : null ;
    if (!$pagina) {
        $inicio = 0;
        $pagina=1;
    }else {
        $inicio = ($pagina - 1) * 6;
    }
?>

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
                    <a class="nav-link" href="read.php">Tabla Completa</a>          
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">6 por Tabla</a>          
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="create.php">Nueva Ciudad </a>          
                </li>
            </ul>
        </div>
    </nav>

    <!-- TABLE -->

    <div class="container mx-auto " style="width: 100%;">

        <section>
            <div class="table-responsive-md" >
                <table class="table table-sm table-hover text-center">
                    <thead">
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
                        foreach (city::show6($inicio, $pagina) as $row){
                    ?>
                    <tbody>
                        <tr>
                            <td><?= $row[0] ?></td>
                            <td><?= $row[1] ?></td>
                            <td><?= $row[2] ?></td>
                            <td><?= $row[3] ?></td>
                            <td><?= $row[4] ?> km<sup>2<sup></td>
                            <td><?= $row[5] ?></td>
                            <td>
                                <a class="btn btn-info" href="update.php?id=<?=base64_encode($row[0])?>">Editar</a>
                            </td>
                            <td>
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

    </div>
    <div class="container text-center font-weight-bolder border-top text-dark ">
    
    <?php

        $total_city = 0;
        foreach (city::show() as $row){
            $total_city++;
        }
        $total_paginas = ceil($total_city/6);
        
        if ($total_paginas > 1){
            for ($i=1;$i<=$total_paginas;$i++){
                if ($pagina == $i){
                    //si muestro el índice de la página actual, no coloco enlace
                    echo  " $pagina";
                }else{
                    //si la página no es la actual, coloco el enlace para ir a esa página
                    echo "<a href='5read.php?pagina=" . $i ." ' > " . $i . "</a> ";
                }
            }
        }
        ?>
    </div>
    <div class="container ">
        <?php
            echo "<br>Se muestran paginas de " . 6 . " registros cada una<br>";
            echo "Numero de ciudades registradas: " . $total_city . "<br>";
            echo "Mostrando la pagina " . $pagina . " de " . $total_paginas . "<p>";
        ?>
    </div>
    <footer>
        <div class="text-right font-weight-lighter container-fluid">
            <p>By Tomás Gabriel Cardozo</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>
</html>