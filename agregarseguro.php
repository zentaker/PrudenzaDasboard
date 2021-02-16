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
                    <h1>Agregar seguro</h1>
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



        <div class="row">

            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Seguro</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form name="insertar-seguro" id="insertar-seguro" method="post"
                            action="funciones/insertarseguro.php">
                            <div class="form-group">
                                <label for="inputName">Codigo</label>
                                <input type="text" id="codigo-seguro" name="codigo-seguro" class="form-control"
                                    value="PRU123">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Nombre comercial del seguro</label>
                                <input type="text" id="nombre-seguro" name="nombre-seguro" class="form-control"
                                    value="Vehicular todo riezgo">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Ramo</label>
                                <input type="text" id="ramo-seguro" name="ramo-seguro" class="form-control"
                                    value="vehicular">
                            </div>

                            <div class="form-group">
                                <label for="inputStatus">Agencia de seguros</label>
                                <select id="inputStatus" name="compania-seguro" id="compania-seguro"
                                    name="compania-seguro" class="form-control custom-select">
                                    <option disabled="">Selecciona uno</option>
                                    <?php

                                            include("funciones/conexion.php");
                                            $cn = fnconexion();
                                            $sqlselect="select * from compania";
                                            $rs = mysqli_query($cn,  $sqlselect);

                                            echo "<b>". "id " . " descripcion " . " precio " . " img " . "<br>" . "</b>";

                                            while ($row = mysqli_fetch_row($rs)) {?>
                                    <option value=" <?php echo $row[0] ; ?>"> <?php echo $row[1];?></option>
                                    <?php }



                                            ?>



                                </select>
                            </div>

                            <div class="form-group">
                                <label for="inputName">valor asegurado</label>
                                <input type="number" id="valor-asegurado" name="valor-asegurado" class="form-control"
                                    value="">
                            </div>
                            <div class="form-group">
                                <label>Fecha de lanzamiento al mercado</label>
                                <div class="input-group date" id="fecha-lanzamiento" data-target-input="nearest">
                                    <input type="date" id="fecha-lanzamiento" name="fecha-lanzamiento"
                                        class="form-control datetimepicker-input" data-target="#reservationdate">

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputDescription">Comentario del seguro</label>
                                <textarea id="comentarios-seguro" name="comentarios-seguro" class="form-control"
                                    rows="4">Descripcion del experto sobre el seguro</textarea>
                            </div>
                            <div class="form-group">
                                <label for="inputStatus">Estado</label>
                                <select id="inputStatus" name="estado-seguro" class="form-control custom-select">
                                    <option disabled="">Selecciona</option>
                                    <option>Activo</option>
                                    <option>cancelada</option>
                                    <option>Inactiva</option>
                                </select>
                            </div>

                            <button type="submit" id="enviar" value="consultar" class="btn btn-info">Agregar
                                seguro</button>
                        </form>

                    </div>
                    <!-- /.card-body -->
                </div>


            </div>

            <div class="col-md-6">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Coberuras</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form name="add_namee" id="add_namee">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dynamic_fieldd">
                                    <label for="inputEstimatedBudget">Cobertura asociada</label>

                                    <input type="text" name="namee[]" placeholder="Beneficio"
                                        class="form-control name_list" />
                                    <br>



                                    <label for="inputEstimatedBudget">Maximo de la cobertura</label>
                                    <input type="text" name="namee[]" placeholder="Maximo"
                                        class="form-control name_list" />
                                    <hr>





                                </table>
                                <button type="button" name="add" id="addd" class="btn btn-success">Agregar
                                    Más</button>

                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title">Beneficios</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">


                        <form name="add_name" id="add_name">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dynamic_field">
                                    <label for="inputEstimatedBudget">Benefico asociado</label>

                                    <input type="text" name="name[]" placeholder="Beneficio"
                                        class="form-control name_list" />
                                    <br>



                                    <label for="inputEstimatedBudget">Maximo de uso del beneficio</label>
                                    <input type="text" name="name[]" placeholder="Maximo"
                                        class="form-control name_list" />
                                    <hr>





                                </table>
                                <button type="button" name="add" id="add" class="btn btn-success">Agregar
                                    Más</button>

                            </div>
                        </form>

                    </div>
                    <!-- /.card-body -->
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