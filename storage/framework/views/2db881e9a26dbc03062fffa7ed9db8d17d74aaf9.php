<link rel="stylesheet" type="text/css" href="<?php echo asset('/css/confirm.css'); ?>">
<?php $__env->startSection('title', 'Konfirmasi Pembayaran'); ?>


<?php $__env->startSection('container'); ?>

<section class="mt-3" style="background-color: #010128;">

<br><br>
<div class="container-sm mt-4">
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Anda akan membeli item <?php echo e($item); ?> , dengan harga Rp <?php echo e($ammount); ?> ,-</h4>
  <p style="COLOR:RED;">Tolong di check lagi data di bawah ini agar cepat kami proses ^^</p>
  <hr>
  <h3>Terimakasih sudah belanja di TRIPLAY.ID !</h3>
</div>
<br><br>
<form method="post" action="">
  <div class="mb-3">
    <label for="ammount"  class="form-label">Username</label>
    <input type="text" name="ammount" class="form-control" readonly value="<?php echo e($username); ?>" id="ammount">
  </div>
  <div class="mb-3">
    <label for="gameID" class="form-label">ID Game</label>
    <input type="text" name="serverID" class="form-control" id="gameID" value="<?php echo e($id .'  ( '. $server .' )'); ?>">
  </div>
  <div class="mb-3">
    <label for="username" class="form-label">Nama Game</label>
    <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp" value=<?php echo e($gameName); ?>>
  </div>
  <div class="container button">
  <button type="button" class="btn btn-success"><a href="https://app.sandbox.midtrans.com/snap/v2/vtweb/<?php echo e($snapToken); ?>">BELI</a></button>
  </div>
</form>

</div>
<br>


</section>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/TRIPLAY.ID/resources/views//confirm.blade.php ENDPATH**/ ?>