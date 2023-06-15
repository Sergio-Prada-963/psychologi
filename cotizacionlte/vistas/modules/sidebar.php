<aside class="main-sidebar sidebar-dark-orange elevation-4">
    <!-- Brand Logo -->
    <a class="brand-link brand-link navbar-orange">
      <img src="https://cdn-icons-png.flaticon.com/512/4445/4445668.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Alquilartemis</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="./../assets/img/perfil.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Sergio Prada</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item"> 
            <a href="/SkylAb-145/Proyects/psychologi/cotizacionlte/home" class="nav-link <?php if($urlArray[5]=='home') : ?>active<?php endif; ?>">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Home
              </p>
            </a>
          </li>
          <li class="nav-item"> 
            <a href="/SkylAb-145/Proyects/psychologi/cotizacionlte/clientes" class="nav-link <?php if($urlArray[5]=='clientes') : ?>active<?php endif; ?>">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Clientes
              </p>
            </a>
          </li>
          <li class="nav-item"> 
            <a href="/SkylAb-145/Proyects/psychologi/cotizacionlte/empleados" class="nav-link <?php if($urlArray[5]=='empleados') : ?>active<?php endif; ?>">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Empleados
              </p>
            </a>
          </li>
          <li class="nav-item"> 
            <a href="/SkylAb-145/Proyects/psychologi/cotizacionlte/productos" class="nav-link <?php if($urlArray[5]=='productos') : ?>active<?php endif; ?>">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Productos
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/SkylAb-145/Proyects/psychologi/cotizacionlte/cotizaciones" class="nav-link <?php if($urlArray[5]=='cotizaciones') : ?>active<?php endif; ?>">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Cotizaciones
              </p>
            </a>
            
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
