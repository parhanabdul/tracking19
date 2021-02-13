<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><b><?php echo e(__('Edit Data Kasus Local')); ?></b></center></div>

                <div class="card-body">
                <form action="<?php echo e(route('kasus2.update', $kasus2->id)); ?>" method="POST">
                 <input type="hidden" name="_method" value="PUT">
                <?php echo csrf_field(); ?>

                <?php echo \Livewire\Livewire::styles(); ?>

                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('statecity')->html();
} elseif ($_instance->childHasBeenRendered('ks9kT10')) {
    $componentId = $_instance->getRenderedChildComponentId('ks9kT10');
    $componentTag = $_instance->getRenderedChildComponentTagName('ks9kT10');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ks9kT10');
} else {
    $response = \Livewire\Livewire::mount('statecity');
    $html = $response->html();
    $_instance->logRenderedChild('ks9kT10', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php echo \Livewire\Livewire::scripts(); ?>


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
                        <label for="" class="form-label">Jumalah Positif</label>
                        <input type="number" name="jumlah_positif"  value="<?php echo e($kasus2->jumlah_positif); ?>" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Jumalah Meninggal</label>
                        <input type="number" name="jumlah_meninggal"  value="<?php echo e($kasus2->jumlah_meninggal); ?>" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Jumalah Sembuh</label>
                        <input type="number" name="jumlah_sembuh"  value="<?php echo e($kasus2->jumlah_sembuh); ?>" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Tanggal</label>
                        <input type="date" name="tanggal"  value="<?php echo e($kasus2->tanggal); ?>" class="form-control" id="">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prakerinasli\resources\views/kasus2/edit.blade.php ENDPATH**/ ?>