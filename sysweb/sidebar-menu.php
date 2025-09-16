<ul class="sidebar-menu">
    <li class="header">Menú</li>

    <?php 
    $active_home = (isset($_GET['module']) && $_GET['module'] == 'start') ? "active" : "";
    ?>
    <li class="<?php echo $active_home; ?>">
        <a href="?module=start">
            <i class="fa fa-home"></i> <span>Inicio</span>
        </a>
    </li>
    <li class="treeview">
        <a href="javascript:void(0)">
            <i class="fa fa-file-text"></i> <span>Referenciales generales</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>    
        <ul class="treeview-menu">
            <li><a href="?module=ciudad"><i class="fa fa-circle-o"></i> Ciudad</a></li>
            <li><a href="?module=deposito"><i class="fa fa-circle-o"></i> Depósito</a></li>
        </ul>
    </li>
</ul>
