<?php 
session_start();
?>
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
    <link href="assets/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/datepicker/datepicker.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/chosen/css/chosen.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/skins/skin-blue.min.css" rel="stylesheet" type="text/css"/>
</head>
<body class="skin-blue fixed">
    <div class="wrapper">
        <header class="main-header">  
            <a href="assets/img/log.png" class="logo">
                <img src="assets/img/log.png" alt="logo SysWeb" >
            </a>
            <nav class="navbar navbar-static-top" role="navigation">
                <a href="assets/img/log.png" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only"></span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <?php include 'top_menu.php'; ?>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="main-sidebar">
             <section class="sidebar">
                <?php include 'sidebar-menu.php'; ?>
            </section>

        </aside>
        <div class="content-wrapper">
            <?php //include 'content.php'; ?>
          <div class="modal fade" id="logout">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="fa fa-sing-out">Cerrar sesión</i></h4>
            </div>
            <div class="modal-body">
                <p>¿Está seguro que desea cerrar sesión?</p>
</div>
<div class="modal-footer">
    <a type="button" class="btn btn-danger" href="logout.php">si, salir</a>
    <button type="button" class="btn btn-default" data-dismiss="modal">No, cancelar</button>
          </div>
    <footer class="main-footer"> 
        <strong> Copyright &copy<?php echo date('Y')?> <a href="#" target="_blank">Desarollado por luis  </a> </strong>
    </footer>
         
    </div>
   <script src="assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/plugins/datepicker/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <script src="assets/plugins/chosen/js/chosen.jquery.min.js" ></script>
    <script src="assets/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="assets/plugins/slimScroll/jquery.slimscroll.js" type="text/javascript"></script>
      <script src="assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
  <script src="assets/js/jquery.maskMoney.min.js" type="text/javascript"></script>
  <script src="assets/js/app.js" type="text/javascript"></script>
</body>
</html>

