<?php 
if (isset($_SESSION['permisos_acceso']) && $_SESSION['permisos_acceso'] == 'Super Admin') { ?>
<section class="content-header">
    <h1><i class="fa fa-home icon-title"></i> Inicio</h1>
    <ul class="breadcrumb">
        <li><a href="?module=start"><i class="fa fa-home"></i></a></li>
    </ul>
</section>
<section class="content">
    <div class="row">
        <div class="col-lg-12 col-xs-12">
            <div class="alert alert-info alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <p style="font-size: 15px;">
                    <i class="icon fa fa-user"></i>
                    Bienvenido/a <strong><?php echo htmlspecialchars($_SESSION['name_user']); ?></strong>
                    a la aplicación <strong>SysWeb</strong>
                </p>
            </div>
        </div>
    </div>
    <h2>Formulario de movimiento</h2>
    <div class="row">
        <div class="col-lg-4 col-xs-6">
            <div class="small-box" style="background-color:aqua; color:black;">
                <div class="inner">
                    <p><strong>Compra</strong></p>
                    <ul>
                        <li>Registrar</li>
                        <li>la compra</li>
                        <li>de productos</li>
                    </ul>
                </div>
                <div class="icon">
                    <i class="fa fa-credit-card"></i>
                </div>
                <a href="?module=ventas" class="small-box-footer" title="Registrar compras" data-toggle="tooltip">
                    <i class="fa fa-plus"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-xs-6">
            <div class="small-box" style="background-color:yellow; color:black;">
                <div class="inner">
                    <p><strong>Ventas</strong></p>
                    <ul>
                        <li>Registrar</li>
                        <li>ventas</li>
                        <li>de productos</li>
                    </ul>
                </div>
                <div class="icon">
                    <i class="fa fa-cart-plus"></i>
                </div>
                <a href="?module=compras" class="small-box-footer" title="Registrar ventas" data-toggle="tooltip">
                    <i class="fa fa-plus"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-xs-6">
            <div class="small-box" style="background-color:violet; color:black;">
                <div class="inner">
                    <p><strong>Stock</strong></p>
                    <ul>
                        <li>Visualizar</li>
                        <li>Stock</li>
                        <li>de productos</li>
                    </ul>
                </div>
                <div class="icon">
                    <i class="fa fa-area-chart"></i>
                </div>
                <a href="?module=stock" class="small-box-footer" title="Ver Stock" data-toggle="tooltip">
                    <i class="fa fa-plus"></i>
                </a>
            </div>
        </div>
    </div>
</section>
<?php } ?>
