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
                    <h1>Dashboard Prudenza</h1>
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
    <section class="content">

        <?php  if($_SESSION['nivel'] == 1): ?>
        <h5 class="mt-4 mb-2">Estado de seguros </h5>

        <div class="container-fluid">

            <div class="row">

                <div class="col-md-6">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Seguros</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>

                            </div>
                        </div>
                        <div class="card-body" style="height: 230px ; background-image: url('img/line.png');">


                        </div>
                        <!-- /.card-body -->
                    </div>

                </div>

                <div class="col-md-6">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Tipos de seguro obtenidos</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>

                            </div>
                        </div>
                        <div class="card-body" style="height: 230px ; background-image: url('img/pie.png');">


                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>

        <?php
                    endif;
                  ?>

        <h5 class="mt-4 mb-2">Estado de clientes </h5>

        <div class="row">
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box bg-warning">
                    <span class="info-box-icon"><i class="fas fa-user-plus"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Nuevos usuarios</span>
                        <span class="info-box-number">3</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 20%"></div>
                        </div>
                        <span class="progress-description">
                            incremento del 20%
                        </span>
                        <span class="info-box-number ">Potenciales:</span>

                        <span class="info-box-text"> <a class="bg-warning color-palette" href="">Alessandro Neyra</a>
                        </span>
                        <span class="info-box-text"> <a href="" class="bg-warning color-palette">Pedro martinez</a>
                        </span>
                        <span class="info-box-text"> <a href="" class="bg-warning color-palette">Jimena Guevara</a>
                        </span>

                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-12">

                <div class="info-box bg-info">
                    <span class="info-box-icon"><i class="far fa-bookmark"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Ofertas activas</span>
                        <span class="info-box-number">4</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 50%"></div>
                        </div>
                        <span class="progress-description">
                            (4 de 8) Meta semanal
                        </span>
                        <span class="info-box-number ">Ofertas:</span>
                        <span class="info-box-text"> <a href="" class="bg-info color-palette">Mapfre "viva
                                Salud"</a> </span>
                        <span class="info-box-text"> <a href="" class="bg-info color-palette">Pasifico "hogar Flex"</a>
                        </span>
                        <span class="info-box-text"> <a href="" class="bg-info color-palette">Mapfre "convida Oro"</a>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box bg-success">
                    <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Ofertas aceptadas</span>
                        <span class="info-box-number">2</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 50%"></div>
                        </div>
                        <span class="progress-description">
                            (2 de 4) activas semanal
                        </span>
                        <span class="info-box-number ">Adquiridas:</span>
                        <span class="info-box-text"> <a href="" class="bg-success color-palette">Mapfre "convida
                                Oro"</a>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>

            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box bg-danger">
                    <span class="info-box-icon"><i class="fas fa-money-check-alt"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Pendiente de pago</span>
                        <span class="info-box-number">2</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 20%"></div>
                        </div>
                        <span class="progress-description">
                            20% de tus relaciones
                        </span>
                        <span class="info-box-number ">Clientes:</span>
                        <span class="info-box-text"> <a href="" class="bg-danger color-palette">javier Perez"</a>
                        </span>
                        <span class="info-box-text"> <a href="" class="bg-danger color-palette">Ines Garcia"</a>
                        </span>
                        <span class="info-box-text"> <a href="" class="bg-danger color-palette">Alejandro Palomino</a>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>

        <?php  if($_SESSION['nivel'] == 1 && 2  ): ?>

        <h5 class="mt-4 mb-2">Estado de campañas </h5>

        <div class="row">
            <div class="card">
                <div class="card-header border-transparent">
                    <h3 class="card-title">Latest Orders</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table m-0">
                            <thead>
                                <tr>
                                    <th>ID campaña</th>
                                    <th>nombre</th>
                                    <th>Estado</th>
                                    <th>Conversion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="pages/examples/invoice.html">PRU9842</a></td>
                                    <td>tu carro ideal</td>
                                    <td><span class="badge badge-success">Lanzada</span></td>
                                    <td>
                                        <div class="sparkbar" data-color="#00a65a" data-height="20">
                                            30%</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="pages/examples/invoice.html">PRU1848</a></td>
                                    <td>plan ahorro</td>
                                    <td><span class="badge badge-warning">Coordinacion</span></td>
                                    <td>
                                        <div class="sparkbar" data-color="#f39c12" data-height="20">
                                            5%</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="pages/examples/invoice.html">PRU7429</a></td>
                                    <td>ahorra con prudenza</td>
                                    <td><span class="badge badge-danger">detenida</span></td>
                                    <td>
                                        <div class="sparkbar" data-color="#f56954" data-height="20">
                                            80%</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="pages/examples/invoice.html">PRU7429</a></td>
                                    <td>los riezgos en conciertos</td>
                                    <td><span class="badge badge-info">contacto</span></td>
                                    <td>
                                        <div class="sparkbar" data-color="#00c0ef" data-height="20">
                                            5%</div>
                                    </td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">

                    <a href="javascript:void(0)" class="btn btn-sm btn-info  float-right">Editar estado</a>
                </div>
                <!-- /.card-footer -->
            </div>



        </div>

        <?php
                    endif;
                  ?>





    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->



<?php
    include_once 'templates/footer.php';
    
?>



<!-- /.control-sidebar -->