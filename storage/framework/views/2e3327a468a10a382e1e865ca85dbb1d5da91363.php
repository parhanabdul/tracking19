<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><b><?php echo e(__('Data Provinsi')); ?></b></center></div>

                <div class="card-body">
                <form action="<?php echo e(route('provinsi.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <div class="mb-3">
                        <label for="" class="form-label">Kode Provinsi</label>
                        <input type="text" name="kode_provinsi" class="form-control" id="">
                    <?php if($errors->has('kode_provinsi')): ?>
                        <span class="text-danger"><?php echo e($errors->first('kode_provinsi')); ?></span>
                    <?php endif; ?>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Nama Provinsi</label>
                        <input type="text" name="nama_provinsi" class="form-control" id="">
                    <?php if($errors->has('nama_provinsi')): ?>
                        <span class="text-danger"><?php echo e($errors->first('nama_provinsi')); ?></span>
                    <?php endif; ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                     </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prakerinasli\resources\views/provinsi/create.blade.php ENDPATH**/ ?>