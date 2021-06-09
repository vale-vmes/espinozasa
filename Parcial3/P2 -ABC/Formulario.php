<?php
    include "Conexion.php";
    $conection->query("SET NAMES 'UTF8'");
    $querySelect = "SELECT * FROM PRODUCTO";
    $ejecutarSelect = $conection->prepare($querySelect);
    $ejecutarSelect->execute();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Dulcería</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css"> <!--Valeria Espinoza 18100168-->
</head>
<body>
    <body class="fondo" background="css/5.jpg">
    <!--<div class="titulo"><h3>DULCERÍA ARCOÍRIS</h3></div>-->
    <!--mantiene espacios a los lados-->
    <div class="container  mt-5">
    
        <div class="row">
            
            <!--4 columnas-->
            <div class="col-md-3">
                <form action="Insert.php" method="POST">
                    <!--//Placeholder: qué ingresar. 
                    //Name: lo que va a capturar php
                    //Class: clase de bootstrap
                    //Type: Submit va a tomar todos los campos, los llevará a ACTION y enviará la información al método-->
                    <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-3"> <!--mb-3: margin button 3-->
                    <input type="text" name="categoria" placeholder="Categoría" class="form-control mb-3">
                    <input type="text" name="marca" placeholder="Marca" class="form-control mb-3">
                    <input type="text" name="precio" placeholder="Precio" class="form-control mb-3">
                    <input type="text" name="descripcion" placeholder="Descripción" class="form-control mb-3">
                    
                    <input type="submit" class="btn btn-primary" ><br>
                </form>
            </div>
            <!--8 columnas-->
            <div class="table-wrapper-scroll-y my-custom-scrollbar col-md-9"> 
                <table class="table table-hover  table-striped">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Categoría</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Acciones</th>
                        <th></th>
                      <!-- <th scope="col">Fecha de Ingreso</th>-->
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                        $ejecutarSelect->setFetchMode(PDO::FETCH_ASSOC);
                        while ($resultado = $ejecutarSelect->fetch()) {
                    ?>
                    <tr>
                        <td><?php echo $resultado['ID_PRODUCTO'] ?></td>
                        <td><?php echo $resultado['NOMBRE'] ?></td>
                        <td><?php echo $resultado['CATEGORIA'] ?></td>
                        <td><?php echo $resultado['MARCA'] ?></td>
                        <td><?php echo $resultado['PRECIO'] ?></td>
                        <td><?php echo $resultado['DESCRIPCION'] ?></td>
                        <!--Envia al formulario "Update" con la variable "$resultado" teniendo el parametro del ID_PRODUCTO-->
                        <td><a href="Update.php?id=<?php echo $resultado ['ID_PRODUCTO']?>" class="btn btn-info">Editar</a></td>
                        <td><a href="Delete_script.php?id=<?php echo $resultado ['ID_PRODUCTO']?>" class="btn btn-danger">Eliminar</a></td>
                    </tr>
                    <?php } ?>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</body>
</html>