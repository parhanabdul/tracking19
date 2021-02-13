<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><b><?php echo e(__('Data Rw')); ?></b></center></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
            
                <div class="mb-3">
                        <label for="" class="form-label">Kelurahan</label>
                        <input type="text" name="nama_kelurahan"  value="<?php echo e($rw->kelurahan->nama_kelurahan); ?>" class="form-control" id="" readonly>
                    </div>
                    
                    <div class="mb-3">
                        <label for="" class="form-label">Rw</label>
                        <input type="text" name="nama"  value="<?php echo e($rw->nama); ?>" class="form-control" id="" readonly>
                    </div>

                    </div>
                        <div class ="form-group">
                        <a href="<?php echo e(route('rw.index')); ?>" class = "btn btn-primary btn-primary btn-block">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prakerinasli\resources\views/rw/show.blade.php ENDPATH**/ ?>