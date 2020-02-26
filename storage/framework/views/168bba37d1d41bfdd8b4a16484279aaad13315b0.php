<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    
     <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>

      
    </ul> 

    <!-- SEARCH FORM -->
    

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <?php echo e(Auth::user()->name); ?>

        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div href="#" class="dropdown-item">
              <h6> <?php echo e(Auth::user()->email); ?></h6>
          </div>
          <div class="dropdown-divider"></div>
          <a href="/logout" class="dropdown-item dropdown-footer">logout</a>
        </div>
      </li>
      
      
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar --><?php /**PATH C:\Users\Kuro_neko\Documents\repo\soani\resources\views/admin/layout/newdashboard/navbar.blade.php ENDPATH**/ ?>