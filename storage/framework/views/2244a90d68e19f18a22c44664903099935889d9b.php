<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header"><center><b><?php echo e(__('Data Kota')); ?></b></center></div>

                <div class="card-body">
                <a href="<?php echo e(route('kota.create')); ?>"class="btn btn-primary float-right"><b>Tambah Data+</b></a>
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                  <?php endif; ?>
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr class="bg-info">
                        <th scope="col">No</th>
                        <th scope="col"><center>Provinsi</center></th>
                        <th scope="col"><center>Kode Kota</center></th>
                        <th scope="col"><center>Nama Kota</center></th>
                        <th scope="col"><center>Action</center></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1; ?>
                    <?php $__currentLoopData = $kota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <th scope="row"><?php echo e($no++); ?></th>
                        <td><center><?php echo e($data->provinsi->nama_provinsi); ?></center></td>
                        <td><center><?php echo e($data->kode_kota); ?></center></td>
                        <td><center><?php echo e($data->nama_kota); ?></center></td>
                      <form action="<?php echo e(route('kota.destroy', $data->id)); ?>" method="post">
                       <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                      <td>
                        <center>
                          <a href="<?php echo e(route('kota.show', $data->id)); ?>" class="btn btn-success">Show</a>
                          <a href="<?php echo e(route('kota.edit', $data->id)); ?>" class="btn btn-warning">Edit</a>
                          <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ?')">Hapus</button>
                        </center>
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prakerinasli\resources\views/kota/index.blade.php ENDPATH**/ ?>