<?php $__env->startSection('content'); ?>


<div class="container">
    <div class="row ">
        <div class="col-sm-6">
            <form action="/admin/triplay/addPrice" method="post">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    
            <div class="mb-3">


                    


                <label for="triplay_id" class="form-label">triplay_id</label>
                <input type="text" class="form-control" id="triplay_id" placeholder="Wajib di isi sesuai id Admin TriplayID" name="triplay_id" value="<?php echo e(old('triplay_id')); ?>">
                <?php $__errorArgs = ['triplay_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback">
                    <?php echo e($message); ?>

                  </div>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
               </div>
               <div class="mb-3">
                <label for="harga1" class="form-label">Harga1</label>
                <input type="text" class="form-control" id="harga1" placeholder="Masukkan " name="harga1" value="<?php echo e(old('harga1')); ?>">
                <?php $__errorArgs = ['harga1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback">
                    <?php echo e($message); ?>

                  </div>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              <div class="mb-3">
                <label for="harga2" class="form-label">Harga2</label>
                <input type="text" class="form-control" id="harga2" placeholder="Masukkan " name="harga2" value="<?php echo e(old('harga2')); ?>">
                <?php $__errorArgs = ['harga2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback">
                    <?php echo e($message); ?>

                  </div>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              <div class="mb-3">
                <label for="harga3" class="form-label">Harga3</label>
                <input type="text" class="form-control" id="harga3" placeholder="Masukkan " name="harga3" value="<?php echo e(old('harga3')); ?>">
                <?php $__errorArgs = ['harga3'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback">
                    <?php echo e($message); ?>

                  </div>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              <div class="mb-3">
                <label for="harga4" class="form-label">Harga4</label>
                <input type="text" class="form-control" id="harga4" placeholder="Masukkan " name="harga4" value="<?php echo e(old('harga4')); ?>">
                <?php $__errorArgs = ['harga4'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback">
                    <?php echo e($message); ?>

                  </div>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              <div class="mb-3">
                <label for="harga5" class="form-label">Harga5</label>
                <input type="text" class="form-control" id="harga5" placeholder="Masukkan " name="harga5" value="<?php echo e(old('harga5')); ?>">
                <?php $__errorArgs = ['harga5'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback">
                    <?php echo e($message); ?>

                  </div>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              <div class="mb-3">
                <label for="harga6" class="form-label">Harga6</label>
                <input type="text" class="form-control" id="harga6" placeholder="Masukkan " name="harga6" value="<?php echo e(old('harga6')); ?>">
                <?php $__errorArgs = ['harga6'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback">
                    <?php echo e($message); ?>

                  </div>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              <div class="mb-3">
                <label for="harga7" class="form-label">Harga7</label>
                <input type="text" class="form-control" id="harga7" placeholder="Masukkan " name="harga7" value="<?php echo e(old('harga7')); ?>">
                <?php $__errorArgs = ['harga7'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback">
                    <?php echo e($message); ?>

                  </div>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              <div class="mb-3">
                <label for="harga8" class="form-label">Harga8</label>
                <input type="text" class="form-control" id="harga8" placeholder="Masukkan " name="harga8" value="<?php echo e(old('harga8')); ?>">
                <?php $__errorArgs = ['harga8'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback">
                    <?php echo e($message); ?>

                  </div>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              <div class="mb-3">
                <label for="harga9" class="form-label">Harga9</label>
                <input type="text" class="form-control" id="harga9" placeholder="Masukkan " name="harga9" value="<?php echo e(old('harga9')); ?>">
                <?php $__errorArgs = ['harga9'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback">
                    <?php echo e($message); ?>

                  </div>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              <div class="mb-3">
                <label for="harga10" class="form-label">Harga10</label>
                <input type="text" class="form-control" id="harga10" placeholder="Masukkan " name="harga10" value="<?php echo e(old('harga10')); ?>">
                <?php $__errorArgs = ['harga10'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback">
                    <?php echo e($message); ?>

                  </div>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              <div class="mb-3">
                <label for="harga11" class="form-label">Harga11</label>
                <input type="text" class="form-control" id="harga11" placeholder="Masukkan " name="harga11" value="<?php echo e(old('harga11')); ?>">
                <?php $__errorArgs = ['harga11'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback">
                    <?php echo e($message); ?>

                  </div>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              <div class="mb-3">
                <label for="harga12" class="form-label">Harga12</label>
                <input type="text" class="form-control" id="harga12" placeholder="Masukkan " name="harga12" value="<?php echo e(old('harga12')); ?>">
                <?php $__errorArgs = ['harga12'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback">
                    <?php echo e($message); ?>

                  </div>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
        </div>
        <div class="col-sm-6">
            <div class="mb-3">
                <label for="triplay_id" class="form-label">triplay_id</label>
                <input type="text" class="form-control" id="triplay_id" placeholder="Wajib di isi sesuai id Admin TriplayID " name="triplay_id" value="<?php echo e(old('triplay_id')); ?>">
                <?php $__errorArgs = ['triplay_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback">
                    <?php echo e($message); ?>

                  </div>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
            <div class="mb-3">
                <label for="voucher1" class="form-label">Voucher1</label>
                <input type="text" class="form-control" id="voucher1" placeholder="Masukkan Nama" name="voucher1" value="<?php echo e(old('voucher1')); ?>">

              </div>
              <div class="mb-3">
                <label for="voucher2" class="form-label">Voucher2</label>
                <input type="text" class="form-control" id="voucher2" placeholder="Masukkan " name="voucher2" value="<?php echo e(old('voucher2')); ?>">

              </div>
              <div class="mb-3">
                <label for="voucher3" class="form-label">Voucher3</label>
                <input type="text" class="form-control" id="voucher3" placeholder="Masukkan " name="voucher3" value="<?php echo e(old('voucher3')); ?>">

              </div>
              <div class="mb-3">
                <label for="voucher4" class="form-label">Voucher4</label>
                <input type="text" class="form-control" id="voucher4" placeholder="Masukkan " name="voucher4" value="<?php echo e(old('voucher4')); ?>">

              </div>
              <div class="mb-3">
                <label for="voucher5" class="form-label">Voucher5</label>
                <input type="text" class="form-control" id="voucher5" placeholder="Masukkan " name="voucher5" value="<?php echo e(old('voucher5')); ?>">

              </div>
              <div class="mb-3">
                <label for="voucher6" class="form-label">Voucher6</label>
                <input type="text" class="form-control" id="voucher6" placeholder="Masukkan " name="voucher6" value="<?php echo e(old('voucher6')); ?>">

              </div>
              <div class="mb-3">
                <label for="voucher7" class="form-label">Voucher7</label>
                <input type="text" class="form-control" id="voucher7" placeholder="Masukkan " name="voucher7" value="<?php echo e(old('voucher7')); ?>">

              </div>
              <div class="mb-3">
                <label for="voucher8" class="form-label">Voucher8</label>
                <input type="text" class="form-control" id="voucher8" placeholder="Masukkan " name="voucher8" value="<?php echo e(old('voucher8')); ?>">

              </div>
              <div class="mb-3">
                <label for="voucher9" class="form-label">Voucher9</label>
                <input type="text" class="form-control" id="voucher9" placeholder="Masukkan " name="voucher9" value="<?php echo e(old('voucher9')); ?>">

              </div>
              <div class="mb-3">
                <label for="voucher10" class="form-label">Voucher0</label>
                <input type="text" class="form-control" id="voucher10" placeholder="Masukkan " name="voucher10" value="<?php echo e(old('voucher10')); ?>">

              </div>
              <div class="mb-3">
                <label for="voucher11" class="form-label">Voucher11</label>
                <input type="text" class="form-control" id="voucher11" placeholder="Masukkan " name="voucher11" value="<?php echo e(old('voucher11')); ?>">

              </div>
              <div class="mb-3">
                <label for="voucher12" class="form-label">Voucher12</label>
                <input type="text" class="form-control" id="voucher12" placeholder="Masukkan " name="voucher12" value="<?php echo e(old('voucher12')); ?>">


                <button type="submit" class="btn btn-primary mt-3">Tambah Data</button>
              </div>
            </form>

              <div class="row">


              </div>
        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/TRIPLAY.ID/resources/views/admin/addPrice.blade.php ENDPATH**/ ?>