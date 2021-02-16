<?php


    include_once 'funciones/sessiones.php';

    include_once 'templates/header.php';
    $id = $_GET['id'];
    if(!filter_var($id, FILTER_VALIDATE_INT)){
      die("error");
    };
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
                    <h1>Busqueda de seguros</h1>
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


        <?php

                    
include("funciones/conexion.php");                        
$cn = fnconexion();
$sql = "SELECT id_seguro, nombre_comercial, nombre, ramo_prudenza, ramo ";
$sql .= " FROM seguros  ";
$sql .= " INNER JOIN  compania ";
$sql .= " ON seguros.id_compania=compania.id_compania ";
$resultado = $cn->query($sql);
$admin = $resultado->fetch_assoc();








?>




        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header ">
                        <h5 class="card-title white"><?php  echo $admin['ramo_prudenza'];?></h5>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <div class="btn-group">
                                <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                                    <i class="fas fa-wrench"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                    <a href="#" class="dropdown-item">Action</a>
                                    <a href="#" class="dropdown-item">Another action</a>
                                    <a href="#" class="dropdown-item">Something else here</a>
                                    <a class="dropdown-divider"></a>
                                    <a href="#" class="dropdown-item">Separated link</a>
                                </div>
                            </div>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-3">

                            <!-- Profile Image -->
                            <div class="card card-primary">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img class=" img-fluid " src="img/<?php  echo $admin['ramo'];?>.png"
                                            alt="User profile picture">
                                    </div>

                                    <h3 class="profile-username text-center"><?php  echo $admin['nombre_comercial']; ?>
                                    </h3>

                                    <p class="text-muted text-center"><?php  echo $admin['nombre']; ?></p>

                                    <ul class="list-group list-group-unbordered mb-3">


                                        <br>
                                        <strong><i class="fas fa-users-medical mr-1"></i> Tasa de aceptacion</strong>

                                        <p class="text-muted">
                                            <span class="badge bg-success">55%</span>
                                        </p>

                                        <hr>

                                        <strong><i class="fad fa-users-medical mr-1"></i> Polizas activas</strong>

                                        <p class="text-muted"> <span class="badge bg-danger">2</span>

                                            <hr>

                                            <strong><i class="fas fa-heart mr-1"></i> Valoracion</strong>

                                        <p class="text-muted">
                                            <style>
                                            #form {
                                                width: 250px;
                                                margin: 0 auto;
                                                height: 50px;
                                            }

                                            #form p {
                                                text-align: center;
                                            }

                                            #form label {
                                                font-size: 20px;
                                            }

                                            input[type="radio"] {
                                                display: none;
                                            }

                                            label {
                                                color: grey;
                                            }

                                            .clasificacion {
                                                direction: rtl;
                                                unicode-bidi: bidi-override;
                                            }

                                            label:hover,
                                            label:hover~label {
                                                color: orange;
                                            }

                                            input[type="radio"]:checked~label {
                                                color: orange;
                                            }
                                            </style>
                                        <form>
                                            <p class="clasificacion">
                                                <input id="radio1" type="radio" name="estrellas" value="5">

                                                <label for="radio1">★</label>

                                                <input id="radio2" type="radio" name="estrellas" value="4">

                                                <label for="radio2">★</label>

                                                <input id="radio3" type="radio" name="estrellas" value="3">

                                                <label for="radio3">★</label>

                                                <input id="radio4" type="radio" name="estrellas" value="2">

                                                <label for="radio4">★</label>

                                                <input id="radio5" type="radio" name="estrellas" value="1">

                                                <label for="radio5">★</label>
                                            </p>
                                        </form>





                                        <hr>

                                        <strong><i class="far fa-file-alt mr-1"></i> Comentarios</strong>

                                        <p class="text-muted"><span class="badge bg-success">25</span>
                                        </p>
                                    </ul>



                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                            <!-- About Me Box -->

                            <!-- /.card -->
                        </div>
                        <div class="col-md-9">
                            <div class="card p-2">
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-home" type="button" role="tab"
                                            aria-controls="pills-home" aria-selected="true">Cobertura</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-profile" type="button" role="tab"
                                            aria-controls="pills-profile" aria-selected="false">Beneficios</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-profilee-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-profilee" type="button" role="tab"
                                            aria-controls="pills-profilee" aria-selected="false">historia</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-contact" type="button" role="tab"
                                            aria-controls="pills-contact" aria-selected="false">Comentarios</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                        aria-labelledby="pills-home-tab">



                                        <!-- /.card-header -->
                                        <div class="card-body p-0">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 10px">#</th>
                                                        <th>Coberturas</th>

                                                        <th style="width: 60px">valor maximo</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1.</td>
                                                        <td>Robo de vehiculo o autopartes</td>

                                                        <td><span class="badge bg-danger">s/50.000,00</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2.</td>
                                                        <td>Auxilio frente a acidentes o problemas mecanicos</td>

                                                        <td><span class="badge bg-danger">5 veces</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>3.</td>
                                                        <td>Choques, desastres naturales o vandalismo</td>

                                                        <td><span class="badge bg-danger">s/10.000,00</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>4.</td>
                                                        <td>cobertura para los heridos</td>

                                                        <td><span class="badge bg-danger">10.000,00</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>4.</td>
                                                        <td>Asistencia para tramites legales y validacion de daños
                                                        </td>

                                                        <td><span class="badge bg-success">completo</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.card-body -->


                                    </div>
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                        aria-labelledby="pills-profile-tab">
                                        <div class="card-body p-0">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 10px">#</th>
                                                        <th>Beneficios</th>

                                                        <th style="width: 60px">valor maximo</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1.</td>
                                                        <td>Tienes cubierta tu bicicleta, moto y scooter GRATIS.s</td>

                                                        <td><span class="badge bg-danger">s/50.000,00</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2.</td>
                                                        <td>40% de dscto. en baterías ETNA + S/.40 adicionales
                                                            entregando tu batería antigua.</td>

                                                        <td><span class="badge bg-danger">1 veces</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>3.</td>
                                                        <td>10% de descuento de gasolina en Repsol.o</td>

                                                        <td><span class="badge bg-danger">max s/10.000,00</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>4.</td>
                                                        <td>Chofer de reemplazo, grúa y auxilio mecánico.</td>

                                                        <td><span class="badge bg-danger">3 veces</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>4.</td>
                                                        <td>Asistencia médica telefónica ILIMITADA.
                                                        </td>

                                                        <td><span class="badge bg-success">completo</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>4.</td>
                                                        <td>Ambulancia 24 horas.
                                                        </td>

                                                        <td><span class="badge bg-success">completo</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>






                                    </div>
                                    <div class="tab-pane fade" id="pills-profilee" role="tabpanel">
                                        <div class="card-body">
                                            <div class="tab-content">

                                                <!-- /.tab-pane -->
                                                <div class="tab-pane active" id="timeline">
                                                    <!-- The timeline -->
                                                    <div class="timeline timeline-inverse">
                                                        <!-- timeline time label -->
                                                        <div class="time-label">
                                                            <span class="bg-success">
                                                                10 Feb. 2020
                                                            </span>
                                                        </div>
                                                        <!-- /.timeline-label -->
                                                        <!-- timeline item -->
                                                        <div>
                                                            <i class="fas fa-audio-description bg-primary"></i>

                                                            <div class="timeline-item">
                                                                <span class="time"><i class="far fa-clock"></i>
                                                                    12:05</span>

                                                                <h3 class="timeline-header"><a href="#">Rimac
                                                                        Seguros</a>
                                                                    Lanza al mercado</h3>

                                                                <div class="timeline-body">
                                                                    Etsy doostang zoodles disqus groupon greplin oooj
                                                                    voxy zoodles, weebly ning heekya handango imeem

                                                                </div>
                                                                <div class="timeline-footer">
                                                                    <a href="#" class="btn btn-primary btn-sm">link</a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <i class="fas fa-audio-description bg-primary"></i>

                                                            <div class="timeline-item">
                                                                <span class="time"><i class="far fa-clock"></i>
                                                                    12:05</span>

                                                                <h3 class="timeline-header"><a href="#">Prudenza
                                                                        seguros</a>
                                                                    sube la poliza a su sistema</h3>

                                                                <div class="timeline-body">
                                                                    se realiza el uppload de la poliza

                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- END timeline item -->
                                                        <!-- timeline item -->
                                                        <div class="time-label">
                                                            <span class="bg-success">
                                                                3 Jan. 2020
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <i class="fas fa-user bg-info"></i>

                                                            <div class="timeline-item">
                                                                <span class="time"><i class="far fa-clock"></i> 5 mins
                                                                    ago</span>

                                                                <h3 class="timeline-header border-0"><a href="#">Sarah
                                                                        Young</a> adquiere la poliza
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <i class="fas fa-user bg-info"></i>

                                                            <div class="timeline-item">
                                                                <span class="time"><i class="far fa-clock"></i> 5 mins
                                                                    ago</span>

                                                                <h3 class="timeline-header border-0"><a
                                                                        href="#">Alessandro neyra</a> adquiere la poliza
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <!-- END timeline item -->
                                                        <!-- timeline item -->
                                                        <div>
                                                            <i class="fas fa-comments bg-warning"></i>

                                                            <div class="timeline-item">
                                                                <span class="time"><i class="far fa-clock"></i> 27 mins
                                                                    ago</span>

                                                                <h3 class="timeline-header"><a href="#">Jay White
                                                                        (asesor prudenza)</a>
                                                                    realiza un comentario</h3>

                                                                <div class="timeline-body">
                                                                    Take me to your leader!
                                                                    Switzerland is small and neutral!
                                                                    We are more like Germany, ambitious and
                                                                    misunderstood!
                                                                </div>
                                                                <div class="timeline-footer">
                                                                    <a href="#"
                                                                        class="btn btn-warning btn-flat btn-sm">View
                                                                        comment</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- END timeline item -->
                                                        <!-- timeline time label -->
                                                        <div class="time-label">
                                                            <span class="bg-success">
                                                                3 Jan. 2014
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <i class="fas fa-user bg-info"></i>

                                                            <div class="timeline-item">
                                                                <span class="time"><i class="fas fa-trash-alt"></i> 5
                                                                    mins
                                                                    ago</span>

                                                                <h3 class="timeline-header border-0"><a
                                                                        href="#">Alessandro neyra</a> Da de baja
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <!-- /.timeline-label -->
                                                        <!-- timeline item -->


                                                        <!-- END timeline item -->
                                                        <div>
                                                            <i class="far fa-clock bg-gray"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.tab-pane -->

                                                <div class="tab-pane" id="settings">
                                                    <form class="form-horizontal">
                                                        <div class="form-group row">
                                                            <label for="inputName"
                                                                class="col-sm-2 col-form-label">Name</label>
                                                            <div class="col-sm-10">
                                                                <input type="email" class="form-control" id="inputName"
                                                                    placeholder="Name">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail"
                                                                class="col-sm-2 col-form-label">Email</label>
                                                            <div class="col-sm-10">
                                                                <input type="email" class="form-control" id="inputEmail"
                                                                    placeholder="Email">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputName2"
                                                                class="col-sm-2 col-form-label">Name</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="inputName2"
                                                                    placeholder="Name">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputExperience"
                                                                class="col-sm-2 col-form-label">Experience</label>
                                                            <div class="col-sm-10">
                                                                <textarea class="form-control" id="inputExperience"
                                                                    placeholder="Experience"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputSkills"
                                                                class="col-sm-2 col-form-label">Skills</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="inputSkills"
                                                                    placeholder="Skills">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="offset-sm-2 col-sm-10">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox"> I agree to the <a
                                                                            href="#">terms and conditions</a>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="offset-sm-2 col-sm-10">
                                                                <button type="submit"
                                                                    class="btn btn-danger">Submit</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <!-- /.tab-pane -->
                                            </div>
                                            <!-- /.tab-content -->
                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                        aria-labelledby="pills-contact-tab">
                                        <div class="card-body">
                                            <div class="tab-content">
                                                <div class="tab-pane" id="activity">
                                                    <!-- Post -->
                                                    <div class="post">
                                                        <div class="user-block">
                                                            <img class="img-circle img-bordered-sm"
                                                                src="../../dist/img/user1-128x128.jpg" alt="user image">
                                                            <span class="username">
                                                                <a href="#">Jonathan Burke Jr.</a>
                                                                <a href="#" class="float-right btn-tool"><i
                                                                        class="fas fa-times"></i></a>
                                                            </span>
                                                            <span class="description">Shared publicly - 7:30 PM
                                                                today</span>
                                                        </div>
                                                        <!-- /.user-block -->
                                                        <p>
                                                            Lorem ipsum represents a long-held tradition for designers,
                                                            typographers and the like. Some people hate it and argue for
                                                            its demise, but others ignore the hate as they create
                                                            awesome
                                                            tools to help create filler text for everyone from bacon
                                                            lovers
                                                            to Charlie Sheen fans.
                                                        </p>

                                                        <p>
                                                            <a href="#" class="link-black text-sm mr-2"><i
                                                                    class="fas fa-share mr-1"></i> Share</a>
                                                            <a href="#" class="link-black text-sm"><i
                                                                    class="far fa-thumbs-up mr-1"></i> Like</a>
                                                            <span class="float-right">
                                                                <a href="#" class="link-black text-sm">
                                                                    <i class="far fa-comments mr-1"></i> Comments (5)
                                                                </a>
                                                            </span>
                                                        </p>

                                                        <input class="form-control form-control-sm" type="text"
                                                            placeholder="Type a comment">
                                                    </div>
                                                    <!-- /.post -->

                                                    <!-- Post -->
                                                    <div class="post clearfix">
                                                        <div class="user-block">
                                                            <img class="img-circle img-bordered-sm"
                                                                src="../../dist/img/user7-128x128.jpg" alt="User Image">
                                                            <span class="username">
                                                                <a href="#">Sarah Ross</a>
                                                                <a href="#" class="float-right btn-tool"><i
                                                                        class="fas fa-times"></i></a>
                                                            </span>
                                                            <span class="description">Sent you a message - 3 days
                                                                ago</span>
                                                        </div>
                                                        <!-- /.user-block -->
                                                        <p>
                                                            Lorem ipsum represents a long-held tradition for designers,
                                                            typographers and the like. Some people hate it and argue for
                                                            its demise, but others ignore the hate as they create
                                                            awesome
                                                            tools to help create filler text for everyone from bacon
                                                            lovers
                                                            to Charlie Sheen fans.
                                                        </p>

                                                        <form class="form-horizontal">
                                                            <div class="input-group input-group-sm mb-0">
                                                                <input class="form-control form-control-sm"
                                                                    placeholder="Response">
                                                                <div class="input-group-append">
                                                                    <button type="submit"
                                                                        class="btn btn-danger">Send</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- /.post -->

                                                    <!-- Post -->
                                                    <div class="post">
                                                        <div class="user-block">
                                                            <img class="img-circle img-bordered-sm"
                                                                src="../../dist/img/user6-128x128.jpg" alt="User Image">
                                                            <span class="username">
                                                                <a href="#">Adam Jones</a>
                                                                <a href="#" class="float-right btn-tool"><i
                                                                        class="fas fa-times"></i></a>
                                                            </span>
                                                            <span class="description">Posted 5 photos - 5 days
                                                                ago</span>
                                                        </div>
                                                        <!-- /.user-block -->
                                                        <div class="row mb-3">
                                                            <div class="col-sm-6">
                                                                <img class="img-fluid" src="../../dist/img/photo1.png"
                                                                    alt="Photo">
                                                            </div>
                                                            <!-- /.col -->
                                                            <div class="col-sm-6">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <img class="img-fluid mb-3"
                                                                            src="../../dist/img/photo2.png" alt="Photo">
                                                                        <img class="img-fluid"
                                                                            src="../../dist/img/photo3.jpg" alt="Photo">
                                                                    </div>
                                                                    <!-- /.col -->
                                                                    <div class="col-sm-6">
                                                                        <img class="img-fluid mb-3"
                                                                            src="../../dist/img/photo4.jpg" alt="Photo">
                                                                        <img class="img-fluid"
                                                                            src="../../dist/img/photo1.png" alt="Photo">
                                                                    </div>
                                                                    <!-- /.col -->
                                                                </div>
                                                                <!-- /.row -->
                                                            </div>
                                                            <!-- /.col -->
                                                        </div>
                                                        <!-- /.row -->

                                                        <p>
                                                            <a href="#" class="link-black text-sm mr-2"><i
                                                                    class="fas fa-share mr-1"></i> Share</a>
                                                            <a href="#" class="link-black text-sm"><i
                                                                    class="far fa-thumbs-up mr-1"></i> Like</a>
                                                            <span class="float-right">
                                                                <a href="#" class="link-black text-sm">
                                                                    <i class="far fa-comments mr-1"></i> Comments (5)
                                                                </a>
                                                            </span>
                                                        </p>

                                                        <input class="form-control form-control-sm" type="text"
                                                            placeholder="Type a comment">
                                                    </div>
                                                    <!-- /.post -->
                                                </div>
                                                <!-- /.tab-pane -->
                                                <div class="tab-pane" id="timeline">
                                                    <!-- The timeline -->
                                                    <div class="timeline timeline-inverse">
                                                        <!-- timeline time label -->
                                                        <div class="time-label">
                                                            <span class="bg-danger">
                                                                10 Feb. 2014
                                                            </span>
                                                        </div>
                                                        <!-- /.timeline-label -->
                                                        <!-- timeline item -->
                                                        <div>
                                                            <i class="fas fa-envelope bg-primary"></i>

                                                            <div class="timeline-item">
                                                                <span class="time"><i class="far fa-clock"></i>
                                                                    12:05</span>

                                                                <h3 class="timeline-header"><a href="#">Support Team</a>
                                                                    sent you an email</h3>

                                                                <div class="timeline-body">
                                                                    Etsy doostang zoodles disqus groupon greplin oooj
                                                                    voxy zoodles,
                                                                    weebly ning heekya handango imeem plugg dopplr
                                                                    jibjab, movity
                                                                    jajah plickers sifteo edmodo ifttt zimbra. Babblely
                                                                    odeo kaboodle
                                                                    quora plaxo ideeli hulu weebly balihoo...
                                                                </div>
                                                                <div class="timeline-footer">
                                                                    <a href="#" class="btn btn-primary btn-sm">Read
                                                                        more</a>
                                                                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- END timeline item -->
                                                        <!-- timeline item -->
                                                        <div>
                                                            <i class="fas fa-user bg-info"></i>

                                                            <div class="timeline-item">
                                                                <span class="time"><i class="far fa-clock"></i> 5 mins
                                                                    ago</span>

                                                                <h3 class="timeline-header border-0"><a href="#">Sarah
                                                                        Young</a> accepted your friend request
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <!-- END timeline item -->
                                                        <!-- timeline item -->
                                                        <div>
                                                            <i class="fas fa-comments bg-warning"></i>

                                                            <div class="timeline-item">
                                                                <span class="time"><i class="far fa-clock"></i> 27 mins
                                                                    ago</span>

                                                                <h3 class="timeline-header"><a href="#">Jay White</a>
                                                                    commented on your post</h3>

                                                                <div class="timeline-body">
                                                                    Take me to your leader!
                                                                    Switzerland is small and neutral!
                                                                    We are more like Germany, ambitious and
                                                                    misunderstood!
                                                                </div>
                                                                <div class="timeline-footer">
                                                                    <a href="#"
                                                                        class="btn btn-warning btn-flat btn-sm">View
                                                                        comment</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- END timeline item -->
                                                        <!-- timeline time label -->
                                                        <div class="time-label">
                                                            <span class="bg-success">
                                                                3 Jan. 2014
                                                            </span>
                                                        </div>
                                                        <!-- /.timeline-label -->
                                                        <!-- timeline item -->
                                                        <div>
                                                            <i class="fas fa-camera bg-purple"></i>

                                                            <div class="timeline-item">
                                                                <span class="time"><i class="far fa-clock"></i> 2 days
                                                                    ago</span>

                                                                <h3 class="timeline-header"><a href="#">Mina Lee</a>
                                                                    uploaded new photos</h3>

                                                                <div class="timeline-body">
                                                                    <img src="https://placehold.it/150x100" alt="...">
                                                                    <img src="https://placehold.it/150x100" alt="...">
                                                                    <img src="https://placehold.it/150x100" alt="...">
                                                                    <img src="https://placehold.it/150x100" alt="...">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- END timeline item -->
                                                        <div>
                                                            <i class="far fa-clock bg-gray"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.tab-pane -->

                                                <div class="tab-pane active" id="settings">
                                                    <form class="form-horizontal">
                                                        <div class="form-group row">
                                                            <label for="inputName"
                                                                class="col-sm-2 col-form-label">Name</label>
                                                            <div class="col-sm-10">
                                                                <input type="email" class="form-control" id="inputName"
                                                                    placeholder="Name">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail"
                                                                class="col-sm-2 col-form-label">Email</label>
                                                            <div class="col-sm-10">
                                                                <input type="email" class="form-control" id="inputEmail"
                                                                    placeholder="Email">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputName2"
                                                                class="col-sm-2 col-form-label">Name</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="inputName2"
                                                                    placeholder="Name">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputExperience"
                                                                class="col-sm-2 col-form-label">Experience</label>
                                                            <div class="col-sm-10">
                                                                <textarea class="form-control" id="inputExperience"
                                                                    placeholder="Experience"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputSkills"
                                                                class="col-sm-2 col-form-label">Skills</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="inputSkills"
                                                                    placeholder="Skills">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="offset-sm-2 col-sm-10">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox"> I agree to the <a
                                                                            href="#">terms and conditions</a>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="offset-sm-2 col-sm-10">
                                                                <button type="submit"
                                                                    class="btn btn-danger">Submit</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <!-- /.tab-pane -->
                                            </div>
                                            <!-- /.tab-content -->
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- /.card -->
                        </div>

                    </div>








                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>






    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->



<?php
    include_once 'templates/footer.php';
    
?>



<!-- /.control-sidebar -->