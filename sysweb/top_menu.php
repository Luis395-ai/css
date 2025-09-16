<?php
include 'config/database.php';
if (!isset($_SESSION['id_user'])) {
    header("Location: index.php?alert=4");
    exit;
}

$query = "SELECT id_user, name_user, permisos_acceso, foto 
          FROM usuarios 
          WHERE id_user = $1";
$result = pg_query_params($conn, $query, [$_SESSION['id_user']]) 
          or die("Error en la consulta: " . pg_last_error($conn));

$data = pg_fetch_assoc($result);
?>

<li class="dropdown user user-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <?php if (empty($data['foto'])) { ?>
            <img src="images/user/user-default.png" class="user-image" alt="Imagen de usuario"/>
        <?php } else { ?>
            <img src="images/user/<?php echo $data['foto']; ?>" class="user-image" alt="Imagen de usuario"/>
        <?php } ?>
        <span class="hidden-xs">
            <?php echo $data['name_user']; ?>
            <i style="margin-left:5px;" class="fa fa-caret-down"></i>
        </span>
    </a>
    <ul class="dropdown-menu">
        <li class="user-header">
            <?php if (empty($data['foto'])) { ?>
                <img src="images/user/user-default.png" class="img-circle" alt="Imagen de usuario"/>
            <?php } else { ?>
                <img src="images/user/<?php echo $data['foto']; ?>" class="img-circle" alt="Imagen de usuario"/>
            <?php } ?>
            <p><?php echo $data['name_user']; ?></p>
        </li>
        <li class="user-footer">
            <div class="pull-left">
                <a href="?module=profile" style="width:80px" class="btn btn-default btn-flat">Perfil</a>
            </div>
            <div class="pull-right">
                <a href="#logout" data-toggle="modal" class="btn btn-default btn-flat">Cerrar sesión</a>
            </div>
        </li>
    </ul>
</li>
