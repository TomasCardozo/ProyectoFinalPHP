<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css">
    <link href="../css/style.css" rel="stylesheet" type="text/css"/>
    
    <title>CRUD - Ciudades</title>
</head>
<body class="backgr py-5">

    <section>

        <div class="mx-auto" style="width: 200px;">

            <form action="../controller/controller.php" method="post">

                <div class="form-group">
                    <label for="city">Ciudad:</label>
                    <input class="form-control" type="text" placeholder="Ej: Cordoba" name="city" maxlength="50" autofocus required>
                </div>

                <div class="form-group">
                    <label for="country">Pais:</label>
                    <input class="form-control" type="text" name="country" maxlength="50" required>
                </div>

                <div class="form-group">
                    <label for="population">Habitantes:</label>
                    <input class="form-control" type="number" name="population" min="0" required>
                </div>

                <div class="form-group">
                    <label class="text-left" for="surface">Superficie:</label>
                    <input class="form-control" type="number" placeholder="km2" name="surface" min="0" required>
                </div>

                <div class="form-group">
                        
                    <label for="subway">Tiene Metro:</label>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="radio"  name="subway" value="Si" required>
                            </div>
                        </div>
                        <label class="form-control" >Si</label>

                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="radio"  name="subway" value="No" required>
                            </div>
                        </div>
                        <label class="form-control" >No</label>
                    </div>
                    
                </div>

                <div class="form-group">
                    <a class="btn btn-danger " href="read.php">Cancelar</a>
                    <input class="btn btn-success ml-4" id="Ingresar" name="a" type="submit" value="Ingresar" />
                </div>

                
            </form>
        </div>

    </section>
</body>
</html>