<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('/css/main.css'); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo asset('/js/checkout.js'); ?>"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>



    <!--  AOS lybrary  -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


    <!-- Local css-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/triplay.css')); ?>"


    <title><?php echo $__env->yieldContent('title'); ?></title>
  </head>
  <body>

    <!--Navbar-->

<header>
            <nav class="navbar navbar-expand-lg navbar-dark  fixed-top " id="mainNav">
        <div class="container">
          <a class="navbar-brand text-white" href="#">TriplayID</a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarNav">
              <div class="mx-auto"></div>
            <ul class="navbar-nav">
              <li class="nav-item mx-4 ">
                <a class="nav-link active text-white" aria-current="page" href="<?php echo e(url('/')); ?>">Home</a>
              </li>
              <li class="nav-item  mx-4">
                <a class="nav-link text-white" href="#">Promo</a>
              </li>
              <li class="nav-item  mx-4">
                <a class="nav-link text-white" href="#">About</a>
              </li>
              <li class="nav-item  mx-4">
                <a class="nav-link text-white" href="<?php echo e(url('/admin')); ?>">More</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
</header>


<?php echo $__env->yieldContent('container'); ?>

<!--Footer-->
<section class="bg-dark">
    <div class="footer bg-dark py-5">
      <div class="container">
      <div class="row text-center align-items-center text-white">
        <div class="col-md my-2 ">
      <div>&copy2020 TriplayID All Reserved</div>
    </div>
    <div class="col-md my-2">
      <div class=""> <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1 rounded-pill" href="#!" role="button"
          ><i class="fab fa-facebook-f"></i
        ></a>
        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1 rounded-pill" href="#!" role="button"
          ><i class="fab fa-instagram"></i
        ></a>
        <!-- Linkedin -->
            <a class="btn btn-outline-light btn-floating m-1 rounded-pill" href="#!" role="button"
              ><i class="fab fa-linkedin-in"></i
            ></a>
    </div>
    </div>
    <div class="col-md my-2 ">
      <div >Trems Of Police   Privacy Police</div>
    </div>
    </div>
    </div>
    </div>
</section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->

    <!--AOS-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  </body>
</html>
<?php /**PATH /opt/lampp/htdocs/TRIPLAY.ID/resources/views/layout/main.blade.php ENDPATH**/ ?>