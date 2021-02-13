<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><b><?php echo e(__('Data Kota')); ?></b></center></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
            
                <div class="mb-3">
                        <label for="" class="form-label">Provinsi</label>
                        <input type="text" name="nama_provinsi"  value="<?php echo e($kota->provinsi->nama_provinsi); ?>" class="form-control" id="" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Kode Kota</label>
                        <input type="text" name="kode_kota"  value="<?php echo e($kota->kode_kota); ?>" class="form-control" id="" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Kota</label>
                        <input type="text" name="nama_kota"  value="<?php echo e($kota->nama_kota); ?>" class="form-control" id="" readonly>
                    </div>

                    </div>
                        <div class ="form-group">
                        <a href="<?php echo e(route('kota.index')); ?>" class = "btn btn-primary btn-primary btn-block">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prakerinasli\resources\views/kota/show.blade.php ENDPATH**/ ?>