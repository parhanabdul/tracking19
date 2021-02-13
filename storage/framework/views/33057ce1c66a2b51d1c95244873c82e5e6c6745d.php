
<html>
<head>
    <title>Laravel Livewire Dependant Dropdown - NiceSnippets.com</title>
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <?php echo \Livewire\Livewire::styles(); ?>

</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <h3>Laravel Livewire Dependant Dropdown - NiceSnippets.com</h3>
                    </div>
                    <div class="card-body">
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('statecity')->html();
} elseif ($_instance->childHasBeenRendered('OZGJpco')) {
    $componentId = $_instance->getRenderedChildComponentId('OZGJpco');
    $componentTag = $_instance->getRenderedChildComponentTagName('OZGJpco');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('OZGJpco');
} else {
    $response = \Livewire\Livewire::mount('statecity');
    $html = $response->html();
    $_instance->logRenderedChild('OZGJpco', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo \Livewire\Livewire::scripts(); ?>

</body>
</html><?php /**PATH C:\xampp\htdocs\prakerinasli\resources\views/livewire/home.blade.php ENDPATH**/ ?>