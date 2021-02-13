<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-20">
            <div class="card">
                <div class="card-header"><center><b><?php echo e(__('Data Kasus Local')); ?></b></center></div>

                <div class="card-body">
                <a href="<?php echo e(route('kasus2.create')); ?>"class="btn btn-primary float-right"><b>Tambah Data+</b></a>
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                  <table id="example1" class="table table-bordered table-striped">
                  <thead>
                      <tr class="bg-info">
                        <th scope="col">No</th>
                          <th scope="col"><center>Lokasi</center></th>
                          <th scope="col"><center>Nama Rw</center></th>
                          <th scope="col"><center>Jumlah Positif</center></th>
                          <th scope="col"><center>Jumlah Meninggal</center></th>
                          <th scope="col"><center>Jumlah Sembuh</center></th>
                          <th scope="col"><center>Tanggal</center></th>
                          <th scope="col"><center>Action</center></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1; ?>
                    <?php $__currentLoopData = $kasus2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <th scope="row"><?php echo e($no++); ?></th>
                        <td>
                    <center>
                      Provinsi : <?php echo e($data->rw->kelurahan->kecamatan->kota->provinsi->nama_provinsi); ?><br>
                      Kota : <?php echo e($data->rw->kelurahan->kecamatan->kota->nama_kota); ?><br>
                      Kecamatan : <?php echo e($data->rw->kelurahan->kecamatan->nama_kecamatan); ?><br>
                      Kelurahan : <?php echo e($data->rw->kelurahan->nama_kelurahan); ?><br>
                    </center>
                      </td>
                          <td><?php echo e($data->rw->nama); ?></td>
                          <td><?php echo e($data->jumlah_positif); ?></td>
                          <td><?php echo e($data->jumlah_meninggal); ?></td>
                          <td><?php echo e($data->jumlah_sembuh); ?></td>
                          <td><?php echo e($data->tanggal); ?></td>
                        <form action="<?php echo e(route('kasus2.destroy', $data->id)); ?>" method="post">
                              <?php echo csrf_field(); ?>
                              <?php echo method_field('DELETE'); ?>
                              <td>
                               <a class="btn btn-success btn-sm" href="<?php echo e(route('kasus2.show', $data->id)); ?>">Show</a>
                               <a class="btn btn-warning btn-sm" href="<?php echo e(route('kasus2.edit', $data->id)); ?>"> Edit</a>
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prakerinasli\resources\views/kasus2/index.blade.php ENDPATH**/ ?>