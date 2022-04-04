<?php
    $servername = "localhost";
    $username = "root";
  	$password = "";
  	$dbname = "capitales";

	$con = new mysqli($servername, $username, $password, $dbname);
    if($con->connect_error){
        die("Conexión fallida: ".$con->connect_error);
    }

    $out = "";
    $result="";

    $queryQuery = "SELECT * FROM ciudades WHERE Ciudad NOT LIKE '' ORDER BY ID";

    if(isset($_POST['consulta'])) {
        $q = $con->real_escape_string($_POST['consulta']);
        $queryQuery = "SELECT ID, Ciudad, Pais, Habitantes, Superficie, Metro FROM ciudades WHERE Ciudad LIKE '%$q%' OR Pais LIKE '%$q%' ";
    }
    
    $result = $con->query($queryQuery);
    // echo $queryQuery;
    
    if ($result->num_rows>0) {
        $out.= "<table class='table table-sm table-hover text-center'>
                    <thead class=''>
                        <tr>
                            <th>ID</th>
                            <th>Ciudad</th>
                            <th>Pais</th>
                            <th>Habitantes</th>
                            <th>Superficie</th>
                            <th>Tiene Metro</th>
                            <th colspan='2'>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>";

        while ($row = $result->fetch_assoc()){
            
            $out.="<tr>
                            <td>".$row['ID']."</td>
                            <td>".$row['Ciudad']."</td>
                            <td>".$row['Pais']."</td>
                            <td>".$row['Habitantes']."</td>
                            <td>".$row['Superficie']." km<sup>2<sup></td>
                            <td >".$row['Metro']."</td>
                            <td>
                                <a class='btn btn-info' href='update.php?id=".base64_encode($row['ID'])."'>Editar</a>
                            </td>
                            <td>
                                <a class='btn btn-danger' href='../controller/controller.php?a=delete&id=".base64_encode($row['ID'])."' onclick='return confirm('¿Seguro que quiere eliminarlo?')'>Eliminar</a>

                            </td>
                        </tr>";
        }
            $out.="</tbody></table>";
        
    }else{
        $out.="La ciudad buscada no existe";
    }

    echo $out;

    $con->close();
?>