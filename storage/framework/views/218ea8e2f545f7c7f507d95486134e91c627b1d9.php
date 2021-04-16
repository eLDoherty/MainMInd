<?php $__env->startSection('content'); ?>

<?php if($triplay->price == null || $triplay->price == null): ?>
<h1 style="color:red; display:flex; justify-content:center; padding-top:25%;">ERROR</h1>
                   <h4 style="color:red; display:flex; justify-content:center;">Tolong Tambah Harga Terlebih Dahulu lalu Isikan triplay_id Didalam Tambah Harga Sesuai Dengan Id Table Triplay</h4>
                <?php elseif($triplay->price->id ==!null): ?>
<div class="container">
    <div class="row  ">
        <div class="col-sm-6">
            <div class="mb-3">



                <form action="/admin/price/<?php echo e($triplay->id); ?>" method="post">
                    <?php echo method_field('patch'); ?>
                    <?php echo csrf_field(); ?>
                    
                    
                <label for="harga1" class="form-label">Harga1</label>
                <input type="text" class="form-control" id="harga1" placeholder="Masukkan Nama" name="harga1" value="<?php echo e($triplay->price->harga1); ?>">

              </div>
              <div class="mb-3">
                <label for="harga2" class="form-label">Harga2</label>
                <input type="text" class="form-control" id="harga2" placeholder="Masukkan " name="harga2" value="<?php echo e($triplay->price->harga2); ?>">

              </div>
              <div class="mb-3">
                <label for="harga3" class="form-label">Harga3</label>
                <input type="text" class="form-control" id="harga3" placeholder="Masukkan " name="harga3" value="<?php echo e($triplay->price->harga3); ?>">

              </div>
              <div class="mb-3">
                <label for="harga4" class="form-label">Harga4</label>
                <input type="text" class="form-control" id="harga4" placeholder="Masukkan " name="harga4" value="<?php echo e($triplay->price->harga4); ?>">

              </div>
              <div class="mb-3">
                <label for="harga5" class="form-label">Harga5</label>
                <input type="text" class="form-control" id="harga5" placeholder="Masukkan " name="harga5" value="<?php echo e($triplay->price->harga5); ?>">

              </div>
              <div class="mb-3">
                <label for="harga6" class="form-label">Harga6</label>
                <input type="text" class="form-control" id="harga6" placeholder="Masukkan " name="harga6" value="<?php echo e($triplay->price->harga6); ?>">

              </div>
              <div class="mb-3">
                <label for="harga7" class="form-label">Harga7</label>
                <input type="text" class="form-control" id="harga7" placeholder="Masukkan " name="harga7" value="<?php echo e($triplay->price->harga7); ?>">

              </div>
              <div class="mb-3">
                <label for="harga8" class="form-label">Harga8</label>
                <input type="text" class="form-control" id="harga8" placeholder="Masukkan " name="harga8" value="<?php echo e($triplay->price->harga8); ?>">

              </div>
              <div class="mb-3">
                <label for="harga9" class="form-label">Harga9</label>
                <input type="text" class="form-control" id="harga9" placeholder="Masukkan " name="harga9" value="<?php echo e($triplay->price->harga9); ?>">

              </div>
              <div class="mb-3">
                <label for="harga10" class="form-label">Harga0</label>
                <input type="text" class="form-control" id="harga10" placeholder="Masukkan " name="harga10" value="<?php echo e($triplay->price->harga10); ?>">

              </div>
              <div class="mb-3">
                <label for="harga11" class="form-label">Harga11</label>
                <input type="text" class="form-control" id="harga11" placeholder="Masukkan " name="harga11" value="<?php echo e($triplay->price->harga11); ?>">

              </div>
              <div class="mb-3">
                <label for="harga12" class="form-label">Harga12</label>
                <input type="text" class="form-control" id="harga12" placeholder="Masukkan " name="harga12" value="<?php echo e($triplay->price->harga12); ?>">

              </div>
        </div>
        <div class="col-sm-6">
            <div class="mb-3">
                <label for="voucher1" class="form-label">Voucher1</label>
                <input type="text" class="form-control" id="voucher1" placeholder="Masukkan Nama" name="voucher1" value="<?php echo e($triplay->voucher->voucher1); ?>">

              </div>
              <div class="mb-3">
                <label for="voucher2" class="form-label">Voucher2</label>
                <input type="text" class="form-control" id="voucher2" placeholder="Masukkan " name="voucher2" value="<?php echo e($triplay->voucher->voucher2); ?>">

              </div>
              <div class="mb-3">
                <label for="voucher3" class="form-label">Voucher3</label>
                <input type="text" class="form-control" id="voucher3" placeholder="Masukkan " name="voucher3" value="<?php echo e($triplay->voucher->voucher3); ?>">

              </div>
              <div class="mb-3">
                <label for="voucher4" class="form-label">Voucher4</label>
                <input type="text" class="form-control" id="voucher4" placeholder="Masukkan " name="voucher4" value="<?php echo e($triplay->voucher->voucher4); ?>">

              </div>
              <div class="mb-3">
                <label for="voucher5" class="form-label">Voucher5</label>
                <input type="text" class="form-control" id="voucher5" placeholder="Masukkan " name="voucher5" value="<?php echo e($triplay->voucher->voucher5); ?>">

              </div>
              <div class="mb-3">
                <label for="voucher6" class="form-label">Voucher6</label>
                <input type="text" class="form-control" id="voucher6" placeholder="Masukkan " name="voucher6" value="<?php echo e($triplay->voucher->voucher6); ?>">

              </div>
              <div class="mb-3">
                <label for="voucher7" class="form-label">Voucher7</label>
                <input type="text" class="form-control" id="voucher7" placeholder="Masukkan " name="voucher7" value="<?php echo e($triplay->voucher->voucher7); ?>">

              </div>
              <div class="mb-3">
                <label for="voucher8" class="form-label">Voucher8</label>
                <input type="text" class="form-control" id="voucher8" placeholder="Masukkan " name="voucher8" value="<?php echo e($triplay->voucher->voucher8); ?>">

              </div>
              <div class="mb-3">
                <label for="voucher9" class="form-label">Voucher9</label>
                <input type="text" class="form-control" id="voucher9" placeholder="Masukkan " name="voucher9" value="<?php echo e($triplay->voucher->voucher9); ?>">

              </div>
              <div class="mb-3">
                <label for="voucher10" class="form-label">Voucher0</label>
                <input type="text" class="form-control" id="voucher10" placeholder="Masukkan " name="voucher10" value="<?php echo e($triplay->voucher->voucher10); ?>">

              </div>
              <div class="mb-3">
                <label for="voucher11" class="form-label">Voucher11</label>
                <input type="text" class="form-control" id="voucher11" placeholder="Masukkan " name="voucher11" value="<?php echo e($triplay->voucher->voucher11); ?>">

              </div>
              <div class="mb-3">
                <label for="voucher12" class="form-label">Voucher12</label>
                <input type="text" class="form-control" id="voucher12" placeholder="Masukkan " name="voucher12" value="<?php echo e($triplay->voucher->voucher12); ?>">


                <button type="submit" class="btn btn-primary mt-3">Ubah Data</button>

            </form>

              </div>
        </div>
    </div>
</div>


<?php endif; ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin/index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/TRIPLAY.ID/resources/views//admin/price.blade.php ENDPATH**/ ?>