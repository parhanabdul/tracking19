<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><center><b><?php echo e(__('Data Kelurahan')); ?></b></center></div>

                <div class="card-body">
                <a href="<?php echo e(route('kelurahan.create')); ?>"class="btn btn-primary float-right"><b>Tambah Data+</b></a><br></br>
                <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        
                          </div>

                    <?php endif; ?>
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr class="bg-info">
                        <th scope="col">No</th>
                        <th scope="col">Kecamatan</th>
                        <th scope="col">Kode Kelurahan</th>
                        <th scope="col">Nama Kelurahan</th>
                        <th scope="col"><center>Action</center></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1; ?>
                    <?php $__currentLoopData = $kelurahan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <th scope="row"><?php echo e($no++); ?></th>
                        <td><center><?php echo e($data->kecamatan->nama_kecamatan); ?></center></td>
                        <td><center><?php echo e($data->kode_kelurahan); ?></center></td>
                        <td><center><?php echo e($data->nama_kelurahan); ?><center></td>
                        <form action="<?php echo e(route('kelurahan.destroy', $data->id)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                              <td>
                              <a href="<?php echo e(route('kelurahan.show', $data->id)); ?>" class="btn btn-success">Show</a>
                              <a href="<?php echo e(route('kelurahan.edit', $data->id)); ?>" class="btn btn-warning">Edit</a>
                              <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ?')">Hapus</button>
                        </td>
                      </tr>
                          </form>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prakerinasli\resources\views/kelurahan/index.blade.php ENDPATH**/ ?>