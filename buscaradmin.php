<?php


    include_once 'funciones/sessiones.php';

    include_once 'templates/header.php';
    include_once 'templates/barra.php';
    include_once 'templates/sidebar.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Lista de usuario</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <div class="content">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <section class="content">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Prudenza seguros </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="dt-buttons btn-group flex-wrap">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example1"
                                    class="table table-bordered table-striped dataTable dtr-inline collapsed"
                                    role="grid" aria-describedby="example1_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="Usuario: activate to sort column ascending">
                                                Usuario</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="Nombre: activate to sort column ascending">
                                                Nombre</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="Nombre: activate to sort column ascending">
                                                Autorizacion</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="Acciones: activate to sort column descending"
                                                aria-sort="ascending">Acciones</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        try {
                                            include("funciones/conexion.php");
                                            $cn = fnconexion();
                                            $sql = "SELECT id_admin, usuario, nombre, nivel FROM admins";
                                            $resultado = $cn->query($sql);

                                        } catch (Exception $e) {
                                            $error = $e->getMessage();
                                            echo $error;
                                        }
                                        while ($admin = $resultado->fetch_assoc()) { ?>

                                        <tr>
                                            <td><?php  echo $admin['usuario'] ; ?></td>
                                            <td><?php  echo $admin['nombre'] ; ?></td>
                                            <td><?php  echo $admin['nivel'] ; ?></td>
                                            <td><a href="editar-admin.php?id=<?php  echo $admin['id_admin']; ?>"
                                                    class="btn bg-orange btn-flat margin"> <i
                                                        class="fas fa-pencil"></i></a>
                                                <a href="#" data-id="<?php  echo $admin['id_admin']; ?>"
                                                    data-tipo="admin"
                                                    class="btn bg-maroon btn-flat margin borrar_registro">
                                                    <i class="fa fa-trash"></i></a>

                                            </td>
                                        </tr>



                                        <?php }

                                  




                                        ?>

                                    </tbody>

                                </table>
                            </div>
                        </div>
                        <div class="row">


                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>

            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->



<?php
    include_once 'templates/footer.php';
    
?>



<!-- /.control-sidebar -->