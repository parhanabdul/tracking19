<div>
    <div class="form-group row">
        <label for="provinsi" class="col-md-4 col-form-label text-md-right">Provinsi</label>

        <div class="col-md-6">
            <select wire:model="selectedState" class="form-control">
                <option value="" selected>Pilih Provinsi</option>
                <?php $__currentLoopData = $provinsi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($data->id); ?>"><?php echo e($data->nama_provinsi); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </div>

    <?php if(!is_null($selectedState)): ?>
        <div class="form-group row">
            <label for="kota" class="col-md-4 col-form-label text-md-right">Kota</label>

            <div class="col-md-6">
                <select wire:model="selectedState2" class="form-control" name="id_kota">
                    <option value="" selected>Pilih Kota</option>
                    <?php $__currentLoopData = $kota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($data2->id); ?>"><?php echo e($data2->nama_kota); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
    <?php endif; ?>
    <?php if(!is_null($selectedState2)): ?>
        <div class="form-group row">
            <label for="kecamatan" class="col-md-4 col-form-label text-md-right">Kecamatan</label>

            <div class="col-md-6">
                <select wire:model="selectedState3" class="form-control" name="id_kecamatan">
                    <option value="" selected>Pilih Kecamatan</option>
                    <?php $__currentLoopData = $kecamatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($data3->id); ?>"><?php echo e($data3->nama_kecamatan); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
    <?php endif; ?>
    <?php if(!is_null($selectedState3)): ?>
        <div class="form-group row">
            <label for="kelurahan" class="col-md-4 col-form-label text-md-right">Kelurahan</label>

            <div class="col-md-6">
                <select wire:model="selectedState4" class="form-control" name="id_kelurahan">
                    <option value="" selected>Pilih Kelurahan</option>
                    <?php $__currentLoopData = $kelurahan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data4): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($data4->id); ?>"><?php echo e($data4->nama_kelurahan); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
    <?php endif; ?>
    <?php if(!is_null($selectedState4)): ?>
        <div class="form-group row">
            <label for="rw" class="col-md-4 col-form-label text-md-right">Rw</label>

            <div class="col-md-6">
                <select wire:model="selectedState5" class="form-control" name="id_rw">
                    <option value="" selected>Pilih Rw</option>
                    <?php $__currentLoopData = $rw; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data5): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($data5->id); ?>"><?php echo e($data5->nama); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
    <?php endif; ?>




</div><?php /**PATH C:\xampp\htdocs\prakerinasli\resources\views/livewire/statecity.blade.php ENDPATH**/ ?>