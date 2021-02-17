  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="admin.php" class="brand-link">
          <img src="img/pru.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light"><b>Prudenza</b> Seguros</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="img/<?php echo $_SESSION['usuario'];  ?>.png" class="img-circle elevation-2"
                      alt="User Image">
              </div>
              <div class="info">


                  <a href="#" class="d-block"> <?php echo $_SESSION['nombre'];  ?></a>
              </div>
          </div>

          <!-- SidebarSearch Form -->


          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                  <li class="nav-item">
                      <a href="admin.php" class="nav-link">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Dasboard
                              <span class="right badge badge-danger">New</span>
                          </p>
                      </a>
                  </li>

                  <li class="nav-item menu-is-opening menu-open">
                      <a href="clientes.php" class="nav-link">
                          <i class="nav-icon fas fa-user"></i>
                          <p>
                              Clientes
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview" style="display: block;">
                          <li class="nav-item">
                              <a href="buscli.php" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Lista Clientes</p>
                              </a>
                          </li>

                          <li class="nav-item">
                              <a href="gruint.php" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Perfiles de clientes</p>
                              </a>
                          </li>

                          <li class="nav-item">
                              <a href="asignacion.php" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Asignacion de Polizas</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="../forms/editors.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Asignacion de oferta</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="../forms/editors.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Renovacion de poliza</p>
                              </a>
                          </li>

                      </ul>
                  </li>
                  <li class="nav-item menu-is-opening menu-open">
                      <a href="clientes.php" class="nav-link">
                          <i class="nav-icon fas fa-shield-alt"></i>
                          <p>
                              Seguros
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview" style="display: block;">
                          <li class="nav-item">
                              <a href="lista-seguro.php" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Lista Seguros</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="seguros.php" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Data</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="../forms/editors.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Comparador</p>
                              </a>
                          </li>

                          <li class="nav-item">
                              <a href="agregarseguro.php" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Agregar Seguro</p>
                              </a>
                          </li>


                      </ul>
                  </li>
                  <li class="nav-item menu-is-opening menu-open">
                      <a href="clientes.php" class="nav-link">
                          <i class="nav-icon fas fa-user"></i>
                          <p>
                              Aseguradoras
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview" style="display: block;">
                          <li class="nav-item">
                              <a href="buscli.php" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Lista Aseguradoras</p>
                              </a>
                          </li>
                          <ul class="nav nav-treeview" style="display: block;">
                              <li class="nav-item">
                                  <a href="buscli.php" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>Ejecutivos</p>
                                  </a>
                              </li>



                          </ul>



                      </ul>
                  </li>



                  <li class="nav-item">
                      <a href="../widgets.html" class="nav-link">
                          <i class="nav-icon fad fa-user-cog"></i>
                          <p>
                              Asesores

                          </p>
                      </a>
                  </li>



                  <?php if ($_SESSION['nivel'] == 1) : ?>

                  <li class="nav-item menu-is-opening menu-open">
                      <a href="clientes.php" class="nav-link">
                          <i class="nav-icon fas fa-user"></i>
                          <p>
                              Cuentas
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview" style="display: block;">
                          <li class="nav-item">
                              <a href="crearAdmin.php" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Crear Usuario</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="buscaradmin.php" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Gestion de Usuarios</p>
                              </a>
                          </li>



                      </ul>
                  </li>

                  <?php
                    endif;
                    ?>



                  <?php if ($_SESSION['nivel'] == 1 &&  2) : ?>

                  <li class="nav-header">Administrativo</li>
                  <li class="nav-item">
                      <a href="../calendar.html" class="nav-link">
                          <i class="nav-icon far fa-calendar-alt"></i>
                          <p>
                              Perfilamiento
                              <span class="badge badge-info right">5</span>
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="../calendar.html" class="nav-link">
                          <i class="nav-icon far fa-calendar-alt"></i>
                          <p>
                              campañas
                              <span class="badge badge-info right">2</span>
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="../calendar.html" class="nav-link">
                          <i class="nav-icon far fa-calendar-alt"></i>
                          <p>
                              Calendario

                          </p>
                      </a>
                  </li>
                  <?php
                    endif;
                    ?>




                  <li class="nav-header">Opciones</li>
                  <li class="nav-item">
                      <a href="editar-usuario.php?id=<?php echo $_SESSION['id']; ?> " class="nav-link ">
                          <i class="nav-icon   fas fa-user-edit"></i>
                          <p>
                              Editar Usuario
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="login.php?cerrar_sesion=true" class="nav-link ">
                          <i class="nav-icon  rounded-pill  bg-danger fas fa-power-off" style="padding:4px"></i>
                          <p>
                              Cerrar session
                          </p>
                      </a>
                  </li>








              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>