<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header"><center><b><?php echo e(__('Data Kasus Local')); ?></b></center></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <div class="mb-3">
                        <label for="" class="form-label">Jumlah Reaktif</label>
                        <input type="number" name="jumlah_reaktif" value="<?php echo e($kasus2->jumlah_reaktif); ?>"  class="form-control" id="">
                    </div>
              
                    <div class="mb-3">
                        <label for="" class="form-label">Jumlah Positif</label>
                        <input type="text" name="jumlah_positif"  value="<?php echo e($kasus2->jumlah_positif); ?>" class="form-control" id="" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Jumlah Meninggal</label>
                        <input type="text" name="jumlah_meninggal"  value="<?php echo e($kasus2->jumlah_meninggal); ?>" class="form-control" id="" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Jumlah Sembuh</label>
                        <input type="text" name="jumlah_sembuh"  value="<?php echo e($kasus2->jumlah_sembuh); ?>" class="form-control" id="" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Tanggal</label>
                        <input type="date" name="tanggal"  value="<?php echo e($kasus2->tanggal); ?>" class="form-control" id="" readonly>
                    </div>
                         <div class ="form-group">
                            <a href="<?php echo e(route('provinsi.index')); ?>" class = "btn btn-primary btn-primary btn-block">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prakerinasli\resources\views/kasus2/show.blade.php ENDPATH**/ ?>