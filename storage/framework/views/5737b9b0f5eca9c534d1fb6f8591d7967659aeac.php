<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><b><?php echo e(__('Data Kota')); ?></b></center></div>

                <div class="card-body">
                <form action="<?php echo e(route('kecamatan.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
            
                <div class="mb-3">
                        <label for="" class="form-label">Kota</label>
                       <select name="id_kota" class="form-control" id="">
                       <?php $__currentLoopData = $kota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <option value="<?php echo e($data->id); ?>"><?php echo e($data->nama_kota); ?></option>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Kode Kecamatan</label>
                        <input type="text" name="kode_kecamatan" class="form-control" id="">
                    <?php if($errors->has('kode_kecamatan')): ?>
                        <span class="text-danger"><?php echo e($errors->first('kode_kecamatan')); ?></span>
                    <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Kecamatan</label>
                        <input type="text" name="nama_kecamatan" class="form-control" id="">
                    <?php if($errors->has('nama_kecamatan')): ?>
                        <span class="text-danger"><?php echo e($errors->first('nama_kecamatan')); ?></span>
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prakerinasli\resources\views/kecamatan/create.blade.php ENDPATH**/ ?>