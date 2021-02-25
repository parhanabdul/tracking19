<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><b><?php echo e(__('Edit Data Provinsi')); ?></b></center></div>

                <div class="card-body">
                <form action="<?php echo e(route('provinsi.update', $provinsi->id)); ?>" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <?php echo csrf_field(); ?>
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <div class="mb-3">
                        <label for="" class="form-label">Kode Provinsi</label>
                        <input type="text" name="kode_provinsi" value="<?php echo e($provinsi->kode_provinsi); ?>" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Nama Provinsi</label>
                        <input type="text" name="nama_provinsi" value="<?php echo e($provinsi->nama_provinsi); ?>" class="form-control" id="">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prakerinasli\resources\views/provinsi/edit.blade.php ENDPATH**/ ?>