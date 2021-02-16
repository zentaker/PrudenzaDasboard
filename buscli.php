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
                    <h1>Busqueda de clientes</h1>
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


        <h5 class="mt-4 mb-2">busqueda de clientes</h5>
        <div class="input-group">
            <input type="search" class="form-control form-control-lg" placeholder="Type your keywords here">
            <div class="input-group-append">
                <button type="submit" class="btn btn-lg btn-default">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>

        <br>



        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Cliente</h5>

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
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid img-circle" src="img/user4-128x128.jpg"
                                            alt="User profile picture">
                                    </div>

                                    <h3 class="profile-username text-center">Jimena Perez</h3>

                                    <p class="text-muted text-center">Estudiante</p>

                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b>Familiares</b> <a class="float-right">4</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Bienes</b> <a class="float-right">3</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>seguros</b> <a class="float-right">2</a>
                                        </li>
                                    </ul>


                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                            <!-- About Me Box -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Perfil</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <strong><i class="fas fa-book mr-1"></i> Ingresos y profesion</strong>

                                    <p class="text-muted">
                                        S/5000 soles mensuales <br> Universidad Esan
                                    </p>

                                    <hr>

                                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Blogs y medios</strong>

                                    <p class="text-muted"> gestion <br> medium <br> +gamer</p>

                                    <hr>

                                    <strong><i class="fas fa-pencil-alt mr-1"></i> hobbies</strong>

                                    <p class="text-muted">

                                        <span class="tag tag-success">Coding</span> <br>
                                        <span class="tag tag-info">call of deauty</span>

                                    </p>

                                    <hr>

                                    <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                                    <p class="text-muted">muy amable con los demas. su mayor sueño ire a europa</p>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <div class="col-md-9">
                            <div class="card p-2">
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-home" type="button" role="tab"
                                            aria-controls="pills-home" aria-selected="true">Linea de tiempo</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-profile" type="button" role="tab"
                                            aria-controls="pills-profile" aria-selected="false">Seguros</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-profilee-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-profilee" type="button" role="tab"
                                            aria-controls="pills-profilee" aria-selected="false">Cronograma de
                                            pagos</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-contact" type="button" role="tab"
                                            aria-controls="pills-contact" aria-selected="false">Editar</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                        aria-labelledby="pills-home-tab">
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
                                                <div class="tab-pane active" id="timeline">
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
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                        aria-labelledby="pills-profile-tab">
                                        <style>
                                        #wallet {
                                            height: 200px;
                                            background-color: #F7CB94;
                                            align-items: center;

                                        }

                                        #ii {
                                            color: #EC8423;
                                            font-size: 93px;
                                            margin-right: 20px;
                                        }


                                        ;
                                        </style>

                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne">

                                                    <button id="wallet" class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                        <i id="ii" class="fas fa-car"></i>
                                                        <div>
                                                            <p>RIP34543</p> <br>
                                                            <p>RimacVehicular</p>
                                                        </div>
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show"
                                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>This is the first item's accordion body.</strong> It is
                                                        hidden by default, until the collapse plugin adds the
                                                        appropriate classes that we use to style each element. These
                                                        classes control the overall appearance, as well as the showing
                                                        and hiding via CSS transitions. You can modify any of this with
                                                        custom CSS or overriding our default variables. It's also worth
                                                        noting that just about any HTML can go within the
                                                        <code>.accordion-body</code>, though the transition does limit
                                                        overflow.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                        Accordion Item #2
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse"
                                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>This is the second item's accordion body.</strong> It is
                                                        hidden by default, until the collapse plugin adds the
                                                        appropriate classes that we use to style each element. These
                                                        classes control the overall appearance, as well as the showing
                                                        and hiding via CSS transitions. You can modify any of this with
                                                        custom CSS or overriding our default variables. It's also worth
                                                        noting that just about any HTML can go within the
                                                        <code>.accordion-body</code>, though the transition does limit
                                                        overflow.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingThree">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                        aria-expanded="false" aria-controls="collapseThree">
                                                        Accordion Item #3
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse"
                                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>This is the third item's accordion body.</strong> It is
                                                        hidden by default, until the collapse plugin adds the
                                                        appropriate classes that we use to style each element. These
                                                        classes control the overall appearance, as well as the showing
                                                        and hiding via CSS transitions. You can modify any of this with
                                                        custom CSS or overriding our default variables. It's also worth
                                                        noting that just about any HTML can go within the
                                                        <code>.accordion-body</code>, though the transition does limit
                                                        overflow.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>




                                    </div>
                                    <div class="tab-pane fade" id="pills-profilee" role="tabpanel">
                                        <div class="card-body">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 10px">#</th>
                                                        <th>Task</th>
                                                        <th>Progress</th>
                                                        <th style="width: 40px">Label</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1.</td>
                                                        <td>Update software</td>
                                                        <td>
                                                            <div class="progress progress-xs">
                                                                <div class="progress-bar progress-bar-danger"
                                                                    style="width: 55%"></div>
                                                            </div>
                                                        </td>
                                                        <td><span class="badge bg-danger">55%</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2.</td>
                                                        <td>Clean database</td>
                                                        <td>
                                                            <div class="progress progress-xs">
                                                                <div class="progress-bar bg-warning" style="width: 70%">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class="badge bg-warning">70%</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>3.</td>
                                                        <td>Cron job running</td>
                                                        <td>
                                                            <div class="progress progress-xs progress-striped active">
                                                                <div class="progress-bar bg-primary" style="width: 30%">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class="badge bg-primary">30%</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>4.</td>
                                                        <td>Fix and squish bugs</td>
                                                        <td>
                                                            <div class="progress progress-xs progress-striped active">
                                                                <div class="progress-bar bg-success" style="width: 90%">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class="badge bg-success">90%</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
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