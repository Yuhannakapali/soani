<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="<?php echo e(asset('./images/test.svg')); ?>" alt="AdminLTE Logo" class=" rounded elevation-3"
           style="opacity: .8">
      
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-blog"></i>
              <p>
                     Blog
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="/Blog" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View All </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/Blog/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create </p>
                </a>
              </li>
            </ul>
          </li>
           
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-pager "></i>
              <p>
                     Pages 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/ourteams" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Our team </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/clients" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Clients</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/testimonial" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Testimonial</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/portfolio" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Portfolio</p>
                </a>
              </li>
            </ul>
          </li>
            
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside><?php /**PATH C:\Users\Kuro_neko\Documents\repo\soani\resources\views/admin/layout/sidebar.blade.php ENDPATH**/ ?>