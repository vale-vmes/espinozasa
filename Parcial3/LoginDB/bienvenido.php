<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WELCOME</title>
</head>
<body>
    <?php
    session_start();
    if (isset($_SESSION['usuario'])) {
        echo 'Bienvenid@ '.$_SESSION['usuario'];
    }
    ?>
    <br>
    <a href="Login.php">Cerrar sesión</a>
</body>
</html>