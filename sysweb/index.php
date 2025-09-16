<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="sysweb">
    <meta name="author" content="Luis">
    <title>Sysweb - Login</title>

    <link rel="shortcut icon" href="assets/img/favicon.ico" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/font-awesome-4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/AdminLTE.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo" style="color:antiquewhite;">
            <img src="assets/img/favicon.ico" alt="SysWeb" style="margin-top:15px; height:50px;">
            <br><b>Sysweb</b>
        </div>

        <div class="login-box-body">
            <?php
            $alert = isset($_GET['alert']) ? (int) $_GET['alert'] : 0;
            if ($alert === 1) {
                echo '<div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Cerrar"><span aria-hidden="true">&times;</span></button>
                        <h4><i class="icon fa fa-times-circle"></i> Error!</h4>
                        Usuario o contraseña incorrecta, vuelva a ingresar los datos.
                      </div>';
            } elseif ($alert === 2) {
                echo '<div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Cerrar"><span aria-hidden="true">&times;</span></button>
                        <h4><i class="icon fa fa-check-circle"></i> Éxito!</h4>
                        Has cerrado tu sesión correctamente.
                      </div>';
            }
            ?>

            <p class="login-box-msg">
                <i class="fa fa-user icon-title"></i> Por favor inicie sesión
            </p>

            <form action="login.check.php" method="post" autocomplete="off">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="username" placeholder="Usuario" required>
                    <span class="glyphicon glyphicon-user form-control-feedback" aria-hidden="true"></span>
                </div>

                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" placeholder="Contraseña" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback" aria-hidden="true"></span>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat" name="login">Ingresar</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
    <?php echo "hola mundo" ?>
    <script src="assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js" type="text"></script>
    
</body>
</html>
