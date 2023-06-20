<aside class="main-sidebar sidebar-light-warning elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link navbar-orange">
      <img src="views/assets/plugins/adminlte/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"> Psychology 1.0</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="views/assets/plugins/adminlte/img/persona.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $_SESSION['username'] ?> </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
            <a href="./login" class="nav-link <?php if ($routesArray[2] == "login"): ?> active <?php endif ?>">
              <i class="nav-icon far fa-user"></i>
              <p>
                Home
              </p>
            </a>
          </li>
            
               <li class="nav-item">
            <a href="./alquilar" class="nav-link <?php if ($routesArray[2] == "alquilar"): ?> active <?php endif ?>">
              <i class="nav-icon far fa-user"></i>
              <p>
                Alquilar
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="./devolver" class="nav-link <?php if ($routesArray[2] == "devolver"): ?> active <?php endif ?>">
              <i class="nav-icon far fa-user"></i>
              <p>
                Devolver
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="./obras" class="nav-link <?php if ($routesArray[2] == "obras"): ?> active <?php endif ?>">
              <i class="nav-icon far fa-user"></i>
              <p>
                Obras
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="./constructoras" class="nav-link <?php if ($routesArray[2] == "constructoras"): ?> active <?php endif ?>">
              <i class="nav-icon far fa-user"></i>
              <p>
                Constructoras
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="./inventario" class="nav-link <?php if ($routesArray[2] == "inventario"): ?> active <?php endif ?>">
              <i class="nav-icon far fa-user"></i>
              <p>
                Inventario
              </p>
            </a>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>