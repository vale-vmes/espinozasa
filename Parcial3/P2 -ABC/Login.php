<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href='https://use.fontawesome.com/releases/v5.8.1/css/all.css' rel='stylesheet'>
	<title>Login - 18100168</title>
	
	<link rel="stylesheet" href="css/sweetalert.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css"> <!--Valeria Espinoza 18100168-->

	<script src="js/jquery.min.js"></script>
	<script src="js/sweetalert.js"></script>
	<script src="js/script.js"></script>
	
</head>
 
<body>

	<body class="fondo" background="css/1.jpg">
	<div class="container-fluid">
        <div class="row">
                <div class="col-md-4">
                </div>
                
                <div class="col-md-4 border shadow-sm text-center " style="margin-top:8%;padding:10px;background-color:rgb(219,206,128)">
                    <label>
                        <h1>
                           Iniciar sesión
                        </h1>
                        <h5><a href="SignUp.php"> o crear una cuenta </a></h5>
                    </label>
                    <div class="col-md-12">

                    <!--FORMULARIO LOGIN-->
                    <form role="form" action="iniciar_sesion.php" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">
                                Usuario: <br> 
							</label>

                            <input type="text" name="usuario" id="User" placeholder="Usuario">
                        </div>
                        <div class="form-group">
                            
                            <label for="exampleInputPassword1">
                                Contraseña: <br> 
                            </label>
                            <input type="password" name="password" id="Password" placeholder="Contraseña">
                        </div>
						<input type="submit" value="Ingresar" href="#" style="color: rgb(0,0,0);background-color: rgb(255, 255, 255);">
                    </form>
                    <!---->
                    
                </div> 
                <div class="col-md-4">
                
            </div>

        </div>
    </div>

</body>
</html>