<link rel="stylesheet" type="text/css" href="<?php echo asset('/css/checkout.css'); ?>">



<?php $__env->startSection('title', 'checkout'); ?>

<?php $__env->startSection('container'); ?>
<section class="mt-3">
<div class="container">
  <div class="row mt-3">
    <div class="col-sm-12 col-lg-6 col-md-6 mt-5 img-desk">
    <img src="/storage/<?php echo e($triplay->gambar); ?>" alt="<?php echo e($triplay->nama); ?>"  class="img-fluid border border-white" > 
    <br>
    <div class="conatiner mt-3">
    <a href="#" style="text-decoration: none; vertical-align:middle; border-radius:5px; font-weight:bold; background-color:#ff9e0a; padding:3px; margin:10px; color:white;">Garena</a>
    <a href="#" style="text-decoration: none; vertical-align:middle; border-radius:5px; font-weight:bold; background-color:mediumslateblue; padding:3px; margin:10px; color:white;">Multiplayer</a>
    <a href="#" style="text-decoration: none; vertical-align:middle; border-radius:5px; font-weight:bold; background-color:crimson; padding:3px; margin:10px; color:white">Action</a>
    </div>
    </div>
    <div class="col-sm-12 col-lg-6 col-md-6 mt-5 mb-5">
    <h2 style="color: antiquewhite; "><?php echo e($triplay->nama); ?></h2>
    <i class="far fa-eye" style="color: antiquewhite;"> 2000</i>
    <i class="fas fa-share-alt" style="margin-left: 20px; color:antiquewhite;"> 40</i>
    <h4 style="color:rgb(255, 136, 0);" class="mt-2">Top Up Voucher AOV Di Triplay Murah </h4>
  <h5 style="color: antiquewhite;">Cara Mudah Top Up Voicher di triplay.id :</h5><br>
  <p style="color: antiquewhite;">1. Masuk ke game arena of valor</p>
  <p style="color: antiquewhite;">2. Klik pengaturan di open ID</p>
  <p style="color: antiquewhite;">3. Copy ID game aov kamu</p>
  <p style="color: antiquewhite;">4. Kirim ke admin</p>
  <p style="color: antiquewhite;">5. Selesai tunggu diamond masuk</p>
  <button type="button" class="btn btn-warning">TONTON PANDUAN</button>
</div>
    
    </div>
  </div>
</section>
<section>

  <div class="container">
  <div class="container" id="summary">
<div class="row">
    <!-- Form jadi satu (email & nickname) -->  

    <?php if($errors->any()): ?>
<h4 style="color:red; margin-top:50px"><?php echo e($errors->first()); ?></h4>
<?php endif; ?>
<br>
    <div class="col-12">
    <form action="<?php echo e(url("/confirm")); ?>" method='post' class='allForm'>
    <?php echo csrf_field(); ?>   
    <input type="hidden" value="<?php echo e($triplay->nama); ?>" name="gameName">
   <div class="mb-3" style="margin-top:30px;">
    <label for="username" class="form-label" style="color: antiquewhite; float:left;"><span class="num">1</span>Username</label>
    <br><br>
    <input type="text" name="username" class="form-control" id="username"  style="text-align: center; font-weight:bold;" require>
  </div>
  <br>
  <label for="gameID" style="color:white; float:left; margin-bottom:20px;"><span class="num">2</span>Masukkan ID</label>
  <label for="server"class="server"style="color: antiquewhite;"><span class="num">3</span>Server</label>
  <div class="input-group mb-3">
  
  <input type="text" name="gameID" id="gameID" class="form-control" placeholder="ID Game" aria-label="ID Game" require>
  
  <input type="text" name="server" id="server" class="form-control" placeholder="Optional" aria-label="Server">
</div>
  
<!-- </form> -->
<br><br>
    </div>
    
  </div>

</div>
<br>
  <div class="row">
    <div class="col-md-8 col-lg-8 col-sm-12">
    <div class="container " id="option">
    <h3 class="mt-3" style="color:white;"><span class="num">4</span>Pilih Jumlah Paket Voucher :</h3><br>
    <div class="container mb-4" id="button-voucher">
    <div class="container" style="text-align: center !important;">
  <div class="row row-cols-auto">
    <div class="col">
    <button id="v1" type="button"class="btn btn-outline-warning" value="<?php echo e($triplay->price->harga1); ?>"><?php echo e($triplay->voucher->voucher1); ?></button>
    </div>
    <div class="col">
    <button id="v2" type="button"class="btn btn-outline-warning" value="<?php echo e($triplay->price->harga2); ?>"><?php echo e($triplay->voucher->voucher2); ?></button>
    </div>
    <div class="col">
    <button id="v3" type="button"class="btn btn-outline-warning" value="<?php echo e($triplay->price->harga3); ?>"><?php echo e($triplay->voucher->voucher3); ?></button>
    </div>
    <div class="col">
    <button id="v4" type="button"class="btn btn-outline-warning" value="<?php echo e($triplay->price->harga4); ?>"><?php echo e($triplay->voucher->voucher4); ?></button>
    </div>
    <div class="col">
    <button id="v5" type="button"class="btn btn-outline-warning" value="<?php echo e($triplay->price->harga1); ?>"><?php echo e($triplay->voucher->voucher5); ?></button>
    </div>
    <div class="col">
    <button id="v6" type="button"class="btn btn-outline-warning" value="<?php echo e($triplay->price->harga2); ?>"><?php echo e($triplay->voucher->voucher6); ?></button>
    </div>
    <div class="col">
    <button id="v7" type="button"class="btn btn-outline-warning" value="<?php echo e($triplay->price->harga3); ?>"><?php echo e($triplay->voucher->voucher7); ?></button>
    </div>
    <div class="col">
    <button id="v8" type="button"class="btn btn-outline-warning" value="<?php echo e($triplay->price->harga4); ?>"><?php echo e($triplay->voucher->voucher8); ?></button>
    </div>
  
  
  </div>
</div>
    
    </div>
    <br><br>
    </div>
    </div>
    <div class="col-md-4 col-lg-4 col-sm-12">
    <div class="container" id="summary" >
    <h3 class="mt-3" style="color: whitesmoke;"><span class="num">5</span>Item Summary :</h3>
    <br>
      <!-- <form action="<?php echo e(url("/confirm")); ?>" method='post' class='allForm'> -->
      <?php echo csrf_field(); ?>
          <div class="mb-3">
            <label for="item" class="form-label" style="color: antiquewhite;" >Item</label>
            <input type="text" name="item" class="form-control"  id="item" style="text-align: center; font-weight:bold;" readonly required>
          </div>
          <div class="mb-3">
            <label for="ammount" class="form-label" style="color: antiquewhite;">Harga</label>
            <input type="text" name="ammount" class="form-control" id="ammount" readonly value="" style="text-align: center; font-weight:bold;" require>
          </div>
          <button type="submit" id="send" name="send" class="btn btn-primary" onclick="location.href='/confirm'">Submit</button>
       </form>

    <br>
    <br>


    </div>
    </div>
  </div>
</div> <!--Container row div-->

<br>
<br>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/TRIPLAY.ID/resources/views//checkout.blade.php ENDPATH**/ ?>