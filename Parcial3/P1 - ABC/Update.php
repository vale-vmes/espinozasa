<?php
    include "Conexion.php";
    $conection->query("SET NAMES 'UTF8'");
    $id=$_GET['id'];
    $querySelectID = "SELECT * FROM PRODUCTO WHERE ID_PRODUCTO='$id'";
    $ejecutarSelectID = $conection->prepare($querySelectID);
    $ejecutarSelectID->execute();

    $ejecutarSelectID->setFetchMode(PDO::FETCH_ASSOC);
    $resultado = $ejecutarSelectID->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-5"> 
        <form action="Update_script.php" method="POST">
                        <!--//Value: . 
                        //Name: lo que va a capturar php
                        //Class: clase de bootstrap
                        //Type: Submit va a tomar todos los campos, los llevará a ACTION y enviará la información al método
                        //Es el ID directo de la bd-->
                        
                       <input type="hidden"name="id" value="<?php echo $resultado['ID_PRODUCTO'] ?>" class="mb-3">

                      Nombre:  <input type="text" name="nombre" value="<?php echo $resultado['NOMBRE']?>" class="form-control mb-3"> <!--mb-3: margin button 3-->
                      Categoria:  <input type="text" name="categoria" value="<?php echo $resultado['CATEGORIA']?>" class="form-control mb-3">
                      Marca: <input type="text" name="marca" value="<?php echo $resultado['MARCA']?>" class="form-control mb-3">
                      Precio:  <input type="text" name="precio" value="<?php echo $resultado['PRECIO']?>" class="form-control mb-3">
                      Despcripción:  <input type="text" name="descripcion" value="<?php echo $resultado['DESCRIPCION']?>" class="form-control mb-3">
                        
                      <input type="submit" class="btn btn-primary"  value="Updates"><br>
                      <a href="Formulario.php">Regresar</a>  
        </form>
    </div>
</body>
</html>