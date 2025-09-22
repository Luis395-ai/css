<section class="content-header">
  <h1>
    <i class="fa fa-user icon-title"></i> Gestión de Usuarios

    <a class="btn btn-primary btn-social pull-right" href="?module=form_user&form=add" title="Agregar" data-toggle="tooltip">
      <i class="fa fa-plus"></i> Agregar
    </a>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">

    <?php  
    if (empty($_GET['alert'])) {
      echo "";
    } 
    elseif ($_GET['alert'] == 1) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check-circle'></i> Éxito!</h4>
              Los nuevos datos de usuario se han registrado correctamente.
            </div>";
    }
    elseif ($_GET['alert'] == 2) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check-circle'></i> Éxito!</h4>
              Los datos del usuario han sido cambiados satisfactoriamente.
            </div>";
    }
    elseif ($_GET['alert'] == 3) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check-circle'></i> Éxito!</h4>
              El usuario ha sido activado correctamente.
            </div>";
    }
    elseif ($_GET['alert'] == 4) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check-circle'></i> Éxito!</h4>
              El usuario se bloqueó con éxito.
            </div>";
    }
    elseif ($_GET['alert'] == 5) {
      echo "<div class='alert alert-danger alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-times-circle'></i> Error!</h4>
              Asegúrese de que el archivo que se sube es correcto.
            </div>";
    }
    elseif ($_GET['alert'] == 6) {
      echo "<div class='alert alert-danger alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-times-circle'></i> Error!</h4>
              Asegúrese de que la imagen no es más de 1 MB.
            </div>";
    }
    elseif ($_GET['alert'] == 7) {
      echo "<div class='alert alert-danger alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-times-circle'></i> Error!</h4>
              Asegúrese de que el tipo de archivo subido sea *.JPG, *.JPEG, *.PNG.
            </div>";
    }
    ?>

      <div class="box box-primary">
        <div class="box-body">
          <table id="dataTables1" class="table table-bordered table-striped table-hover">
            <thead>
              <tr>
                <th class="center">No.</th>
                <th class="center">Foto</th>
                <th class="center">Nombre de usuario</th>
                <th class="center">Nombre</th>
                <th class="center">Permisos de acceso</th>
                <th class="center">Status</th>
                <th class="center">Acciones</th>
              </tr>
            </thead>

            <tbody>
            <?php  
            include "config/database.php";

            $nro = 1;
            $query = pg_query($conn, "SELECT * FROM usuarios ORDER BY id_user DESC");
            if (!$query) {
              die("Error en la consulta: " . pg_last_error($conn));
            }

            while ($data = pg_fetch_assoc($query)) { 
              echo "<tr>
                      <td width='50' class='center'>$nro</td>";

              if (empty($data['foto'])) { 
                echo "<td class='center'><img class='img-user' src='images/user/user-default.png' width='45'></td>";
              } else { 
                echo "<td class='center'><img class='img-user' src='images/user/".$data['foto']."' width='45'></td>";
              }

              echo "<td>".htmlspecialchars($data['username'] ?? '')."</td>
                    <td>".htmlspecialchars($data['name_user'] ?? '')."</td>
                    <td>".htmlspecialchars($data['permisos_acceso'] ?? '')."</td>
                    <td class='center'>".htmlspecialchars($data['status'] ?? '')."</td>
                    <td class='center' width='120'>
                      <div class='btn-group pull-right'>";

              if ($data['status']=='activo') { 
                echo "<a data-toggle='tooltip' data-placement='top' title='Bloquear' style='margin-right:5px' class='btn btn-warning btn-sm' href='modules/user/proses.php?act=off&id=".$data['id_user']."'>
                        <i style='color:#fff' class='glyphicon glyphicon-off'></i>
                      </a>";
              } else { 
                echo "<a data-toggle='tooltip' data-placement='top' title='Activar' style='margin-right:5px' class='btn btn-success btn-sm' href='modules/user/proses.php?act=on&id=".$data['id_user']."'>
                        <i style='color:#fff' class='glyphicon glyphicon-ok'></i>
                      </a>";
              }

              echo "<a data-toggle='tooltip' data-placement='top' title='Modificar' class='btn btn-primary btn-sm' href='?module=form_user&form=edit&id=".$data['id_user']."'>
                      <i style='color:#fff' class='glyphicon glyphicon-edit'></i>
                    </a>
                    </div>
                  </td>
                </tr>";
              $nro++;
            }
            ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>