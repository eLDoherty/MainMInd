<?php $__env->startSection('content'); ?>


<main>

    <!--Carausel-->

<section class="carausel pt-3 pb-5">
    <div class="container">
    <div class="row-md">
        <?php $__currentLoopData = $triplays; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $triplay): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($triplay->gambarone == null || $triplay->gambarone->gambar == null): ?>
        ''
    <?php elseif($triplay->gambarone->gambar ==!null): ?>
    <div class="col pt-5">
        <img src="/storage/<?php echo e($triplay->gambarone->gambar); ?>" alt="" class="d-block w-100 rounded-3" >
    </div>
    <?php endif; ?>



        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div class="col">
            <div id="carouselExampleIndicators" class="carousel slide pt-5" data-bs-ride="carousel" >
                <div class="carousel-indicators" >
                    <?php $__currentLoopData = $triplays; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $triplay): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($triplay->gambarheader == null || $triplay->gambarheader->gambar == null): ?>
                    ''
                <?php elseif($triplay->gambarheader->gambar ==!null): ?>
                <button type="button" data-bs-target="#carouselExampleIndicators"   data-bs-slide-to="<?php echo e($loop->index); ?>" class="active" aria-current="true" aria-label="Slide 1"></button>
                <?php endif; ?>

                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="carousel-inner">
                    <?php $__currentLoopData = $triplays; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $triplay): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <?php if($triplay->gambarheader == null || $triplay->gambarheader->gambar == null): ?>
                     ''
                <?php elseif($triplay->gambarheader->gambar ==!null): ?>
                <div class="carousel-item <?php if($loop->first): ?> active <?php endif; ?> " >
                    <img src="/storage/<?php echo e($triplay->gambarheader->gambar); ?>" class="d-block w-100 rounded-3" alt="..." >
                  </div>
                <?php endif; ?>


                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev" >
                  <span class="carousel-control-prev-icon" aria-hidden="true" ></span>
                  <span class="visually-hidden" >Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true" ></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>

        </div>
    </div>
</div>
</section>


<!--cards-->
<section class="cards pt-5 pb-5 ">

    <div class="container">
    <div class="row text-center pb-5">
        <div class="col text-white">
            <div>
                <h5 class="font-top" >Daftar top up voucher game online</h5>
            </div>
            <div > <h6>Banyak voucher game online tersedia di TriplayID</h6></div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row row-cols-12 row-cols-md-3 g-4 pt-5" >
        <?php $__currentLoopData = $triplays; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $triplay): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col py-3">
          <div class="card active col-md-11 rounded-3 " data-aos="zoom-in-up" data-aos-duration="1500">
            <img src="/storage/<?php echo e($triplay->gambar); ?>" class="img-fluid rounded-3 " alt="..." >
            <div class="card-body" >
              <h5 class=" fs-6 " > <?php echo e($triplay->nama); ?> <h6><p class="fs-6 font-card"><?php echo e($triplay->resource); ?></p></h6> </h5>

              <div class="d-flex justify-content-center">
              <a href="/checkout/<?php echo e($triplay->id); ?>" class="btn px-md-4 rounded-3">BELI</a>
            </div>
            </div>
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</section>

<!--Pulsa-->

<section class="pulsa pt-5 pb-5">

    <div class="container">
    <div class="row text-center">
        <div class="col text-white">
            <div>
                <h5  class="font-top" >Daftar top up pulsa dan paket data</h5>
            </div>
            <div > <h6>Tersedia juga top up pulsa di TriplayID</h6></div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row row-cols-12 row-cols-md-3 g-4 pt-5">
        <?php $__currentLoopData = $pulses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pulse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>




        <div class="col">
            <div class="card mx-auto text-white rounded-3  col-md-11 " data-aos="zoom-in-up" data-aos-duration="1500">
              <img src="/storage/<?php echo e($pulse->gambar); ?>" class="card-img-top rounded-3" alt="..."  >
              <div class="card-body ">
                <h5 class=" fs-6 " > <?php echo e($pulse->nama); ?> <h6><p class="fs-6 font-card"><?php echo e($pulse->resource); ?></p></h6> </h5>
                <div class="d-flex justify-content-center">
                    <a href="/checkout/<?php echo e($pulse->id); ?>" class="btn px-md-4 rounded-3">BELI</a>
                  </div>
              </div>
            </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</section>



<!--video-->
<section class="video pt-5">

    <div class="container">
    <div class="row text-center">
        <div class="col text-white">
            <div>
                <h5  class="font-top" >Cara top up di TriplayID</h5>
            </div>
            <div > <h6>Top up voucher game kalian dengan mudah di TriplayID</h6></div>
        </div>
    </div>
</div>


<div class="container">
<div class="row pt-5 pb-5">
    <div class="col-md-12 center">
            <div class="ratio ratio-16x9 " >
                <iframe class="embed-responsive-item" src=<?php echo e(url('https://www.youtube.com/embed/VLOXxhrEtzI')); ?> frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
    </div>
</div>


</section>



</main>

<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/TRIPLAY.ID/resources/views/index.blade.php ENDPATH**/ ?>