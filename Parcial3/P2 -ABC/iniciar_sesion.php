<?php
     include "conexion.php";
     session_start();
 
     $usuario = $_POST["usuario"];
     $password = $_POST["password"];
     $password = md5($password);
 
     $cadenaSelect = "SELECT * FROM USUARIOS WHERE user = '$usuario' AND CONTRASENA = '$password'";
     $ejecutarSelect = $conection->prepare($cadenaSelect);
     $ejecutarSelect->execute();
 
     if ($ejecutarSelect->rowCount() > 0)
     {
         $_SESSION['usuario'] = $usuario;
         header("Location: Formulario.php");
         exit;
     }else 
     {
         echo '
             <script>
             alert("Datos incorrectos");
             window.location = "Login.php";
             </script>
             ';
             exit;
     }



?>