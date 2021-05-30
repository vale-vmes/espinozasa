<?php
    include "Conexion.php";

    $usuario = $_POST["usuario"];
    $password = $_POST["password"];
    $password = md5($password);

    $cadenaInsertar = "INSERT INTO USUARIOS (user, CONTRASENA) VALUES('$usuario', '$password')";
    $ejecutarInsertar = $conection->prepare($cadenaInsertar);
    $ejecutarInsertar->execute();
    $conection=null;

    if ($ejecutarInsertar) {
        echo '<script>
        window.location = "Login.php";
        alert("Usuario insertado con exito!");
        </script>';;
    }
?>