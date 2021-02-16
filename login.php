<?php

    session_start();
    error_reporting(0);
    $cerrar_sesion = $_GET['cerrar_sesion'];
    if($cerrar_sesion ) {
      session_destroy();
    };


    include_once 'templates/header.php';

?>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="#" class="h1"><b>Prudenza</b>Seguros</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Inicia session</p>


                <form name="login-admin-form" id="login-admin" method="post" action="funciones/login-admin.php">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="usuario" placeholder="Usuario">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">

                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <input type="hidden" name="login-admin" value="1">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>


                <!-- /.social-auth-links -->


            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="js/pages/admin-ajax.js"></script>

    <!-- AdminLTE App -->
    <script src="js/adminlte.min.js"></script>
</body>

</html>