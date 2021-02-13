<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><b><?php echo e(__('Data Kasus Local')); ?></b></center></div>

                <div class="card-body">
                <form action="<?php echo e(route('kasus2.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
    <?php echo \Livewire\Livewire::styles(); ?>

                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('statecity')->html();
} elseif ($_instance->childHasBeenRendered('f5P8jSt')) {
    $componentId = $_instance->getRenderedChildComponentId('f5P8jSt');
    $componentTag = $_instance->getRenderedChildComponentTagName('f5P8jSt');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('f5P8jSt');
} else {
    $response = \Livewire\Livewire::mount('statecity');
    $html = $response->html();
    $_instance->logRenderedChild('f5P8jSt', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
                        <label for="" class="form-label">Jumlah Positif</label>
                        <input type="number" name="jumlah_positif" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Jumlah Meninggal</label>
                        <input type="number" name="jumlah_meninggal" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Jumlah Sembuh</label>
                        <input type="number" name="jumlah_sembuh" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" id="">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prakerinasli\resources\views/kasus2/create.blade.php ENDPATH**/ ?>