
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin TriplayID</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset('../AdminLTE/plugins/fontawesome-free/css/all.min.css')); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('../AdminLTE/dist/css/adminlte.min.css')); ?>">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light bg-dark ">
    <!-- Left navbar links -->
    <ul class="navbar-nav ">
      <li class="nav-item ">
        <a class="nav-link text-white" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo e(url('/')); ?>" class="nav-link text-white">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link text-white">Promo</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link text-white">About</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link text-white">More</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="post" class=" my-3">
            <?php echo csrf_field(); ?>
            <button class="btn  btn-secondary btn-sm" type="submit">Log Out</button>
        </form>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex ">
        <span class="brand-text text-white font-weight-light ">Admin TriplayID</span>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo e(url('/admin/triplay')); ?>" class="nav-link">
                <i class="fas fa-circle nav-icon"></i>
              <p>
               Triplay

              </p>
            </a>
          <li class="nav-item">
            <a href="<?php echo e(url('/pulsa/pulses')); ?>" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Pulsa</p>
            </a>
          </li>

              </li>
          <li class="nav-item">
            <a href="<?php echo e(url('/gambarheaders')); ?>" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Gambar Header</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo e(url('/gambarones')); ?>" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Gambar Utama</p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php echo $__env->yieldContent('content'); ?>
          </div>

      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo e(asset('../AdminLTE/plugins/jquery/jquery.min.js')); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(asset('../AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('../AdminLTE/dist/js/adminlte.min.js')); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(asset('../AdminLTE/dist/js/demo.js')); ?>"></script>
</body>
</html>













<?php /**PATH /opt/lampp/htdocs/TRIPLAY.ID/resources/views/admin/index.blade.php ENDPATH**/ ?>