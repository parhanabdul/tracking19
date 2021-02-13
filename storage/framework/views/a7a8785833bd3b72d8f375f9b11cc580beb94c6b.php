<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><b><?php echo e(__('Data Kelurahan')); ?></b></center></div>

                <div class="card-body">
                <form action="<?php echo e(route('kelurahan.update', $kelurahan->id)); ?>" method="POST">
                 <input type="hidden" name="_method" value="PUT">
                <?php echo csrf_field(); ?>
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
            
                <div class="mb-3">
                        <label for="" class="form-label">Kelurahan</label>
                       <select name="id_kecamatan" class="form-control" id="">
                       <?php $__currentLoopData = $kecamatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <option value="<?php echo e($data->id); ?>" <?php echo e($data->id == $kelurahan->id_kecamatan ? 'selected' : ''); ?>  > <?php echo e($data->nama_kecamatan); ?></option>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Kode Kelurahan</label>
                        <input type="text" name="kode_kelurahan"  value="<?php echo e($kelurahan->kode_kelurahan); ?>" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Kelurahan</label>
                        <input type="text" name="nama_kelurahan"  value="<?php echo e($kelurahan->nama_kelurahan); ?>" class="form-control" id="">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prakerinasli\resources\views/kelurahan/edit.blade.php ENDPATH**/ ?>