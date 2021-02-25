<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><center><b><?php echo e(__('Data Kasus Negara')); ?></b></center></div>

                <div class="card-body">
                <a href="<?php echo e(route('kasus.create')); ?>"class="btn btn-outline-success float-right"><b>Tambah Data(+)</b></a>
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Negara</th>
                        <th scope="col">Jumlah Positif</th>
                        <th scope="col">Jumlah Meninggal</th>
                        <th scope="col">Jumlah Sembuh</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1; ?>
                    <?php $__currentLoopData = $kasus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <th scope="row"><?php echo e($no++); ?></th>
                        <td><?php echo e($data->negara->nama_negara); ?></td>
                        <td><?php echo e($data->jumlah_positif); ?></td>
                        <td><?php echo e($data->jumlah_meninggal); ?></td>
                        <td><?php echo e($data->jumlah_sembuh); ?></td>
                        <td><?php echo e($data->tanggal); ?></td>
                        <form action="<?php echo e(route('kasus.destroy', $data->id)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <td><a class="btn btn-primary btn-sm" href="<?php echo e(route('kasus.show', $data->id)); ?>">Show</a>|
                                <a class="btn btn-warning btn-sm" href="<?php echo e(route('kasus.edit', $data->id)); ?>">Edit</a>|
                                <button type="submit" class="btn btn-danger " onclick="return confirm('Apakah anda yakin ?')">Hapus</button>
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prakerinasli\resources\views/kasus/index.blade.php ENDPATH**/ ?>