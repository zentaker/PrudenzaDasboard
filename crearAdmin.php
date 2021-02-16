<?php
    include_once 'funciones/sessiones.php';
    include_once 'funciones/conexion.php';
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
                    <h1>Crear Usuario</h1>
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Ingresa un nuevo usuario</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form name="guardar-registro" id="guardar-registro" method="post"
                        action="funciones/modelo-admin.php">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="usuario">Usuario</label>
                                <input type="text" class="form-control" id="usuario" name="usuario"
                                    placeholder="Ingresa un usuario">
                            </div>
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre"
                                    placeholder="Ingresa tu nombre">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="repetir_password">Password</label>
                                <input type="password" class="form-control" id="repetir_password"
                                    name="repetir_password" placeholder="Password">
                                <span id="resultado_password" class="help-block"></span>
                            </div>



                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <input type="hidden" name="registro" value="nuevo">
                            <button type="submit" id="crear_registro" class="btn btn-primary">Añadir</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>

















    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<?php
    include_once 'templates/footer.php';
    
?>



<!-- /.control-sidebar -->