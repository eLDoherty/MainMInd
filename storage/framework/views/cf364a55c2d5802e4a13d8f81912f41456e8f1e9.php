<?php $__env->startSection('content'); ?>

<div class="container ">
    <div class="row ">
        <div class="col-10">
            <h1>Admin TriplayID</h1>
            <div class="d-flex">
            <a href="/admin/create" class="btn btn-primary my-3 mx-2">Tambah Data</a>

            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="post" class=" my-3">
                <?php echo csrf_field(); ?>
                <button class="btn btn-danger" type="submit">Log Out</button>
            </form>
            <a href="/admin/triplay/addPrice" class="btn btn-primary my-3 mx-2">Tambah Harga</a>

        </div>

            <?php if(session('status')): ?>
                <div class="alert alert-success">
                  <?php echo e(session('status')); ?>

                </div>
             <?php endif; ?>

            <table class="table align-middle">
                <div class="table-responsive">
                <thead class="table-dark">
                <tr>
                  <th scope="col">nmr</th>
                  <th scope="col" style="width:10rem;">Gambar</th>
                  <th scope="col">Id</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Resource</th>
                  <th scope="col" >Deskripsi</th>
                  <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $triplays; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $triplay): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <th scope="row"><?php echo e($loop->iteration); ?></th>
                      <td><img src="/storage/<?php echo e($triplay->gambar); ?>" alt="" class="img-fluid" ></td>
                      <td><b>[<?php echo e($triplay -> id); ?>]</b></td>
                        <td><?php echo e($triplay -> nama); ?></td>
                        <td><?php echo e($triplay -> resource); ?></td>
                        <td ><div class="mb-3 ">
                            <label for="exampleFormControlTextarea1" class="form-label"></label>
                            <textarea class="form-control form-control-sm col" id="exampleFormControlTextarea1" rows="3" disabled><?php echo e($triplay -> deskripsi); ?></textarea>
                          </div></td>
                        <td class=" justify-content-center">
                            <a href="/admin/triplay/<?php echo e($triplay->id); ?>/edit" class="btn btn-success d-inline btn-sm  my-3" >Edit</a>
                            <form action="/admin/triplay/<?php echo e($triplay -> id); ?>" method="post"  class="d-inline">
                                <?php echo method_field('delete'); ?>
                                <?php echo csrf_field(); ?>
                            <button class="btn btn-danger btn-sm  my-3" type="submit">Delete</button>
                        </form>
                        <a href="/admin/<?php echo e($triplay->id); ?>/price" class="btn btn-primary my-3 btn-sm">Harga</a>
                        </td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </div>
              </table>

        </div>
    </div>
</div>





<?php $__env->stopSection(); ?>


<?php echo $__env->make('/admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/TRIPLAY.ID/resources/views//admin/triplay.blade.php ENDPATH**/ ?>