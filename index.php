<?php

include_once('./Controladores/controladorLogin.php');

$alert = '';
session_start();
if(!empty($_SESSION['active'])){
    header('location: ./Paginas/principal.php');
}
else{
    if(!empty($_POST)){
        if(empty($_POST['usuario']) || empty($_POST['clave'])){
            $alert = 'Ingrese su nombre y su usuario';
        }
        else{
            $user = $_POST['usuario'];
            $pass = $_POST['clave'];

            $datos = iniciarSesion($user, $pass);

            if(sizeof($datos) > 0){
                $_SESSION['active'] = true;
                $_SESSION['idUsuario'] = $datos[0]['IdUsuario'];
                $_SESSION['nombreUsuario'] = $datos[0]['NombreUsuario'];

                header('location: ./Paginas/principal.php');
            }
            else{
                $alert = 'El usuario o la clave son incorrectos';
                session_destroy();
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="./Plantilla/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="./Plantilla/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9 mt-5">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"><img src="./Plantilla/img/bannerSupermercado.jpg" alt="banner" width="100%"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">¡Iniciar sesión!</h1>
                                    </div>
                                    <form class="user" action="" method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="usuario" name="usuario" placeholder="Ingresa tu nombre de usuario">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="clave" name="clave" placeholder="Contraseña">
                                        </div>
                                        <div class="alert text-danger">
                                            <?php echo isset($alert) ? $alert : ''; ?>
                                        </div>
                                        <div class="form-group">
                                        </div>
                                        <input type="submit" class="btn btn-primary btn-user btn-block" value="Ingresar">
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="./Plantilla/vendor/jquery/jquery.min.js"></script>
    <script src="./Plantilla/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="./Plantilla/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="./Plantilla/js/sb-admin-2.min.js"></script>

</body>

</html>