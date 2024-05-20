<div>
    <div class="row">
        <?php if (isset($component)) { $__componentOriginal377f5828c1076ae12e071b1688061877 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal377f5828c1076ae12e071b1688061877 = $attributes; } ?>
<?php $component = JeroenNoten\LaravelAdminLte\View\Components\Form\Select::resolve(['name' => 'TipoDelegacionId','label' => 'SELECCIONA EL TIPO DE DELEGACIÓN','fgroupClass' => 'col-md-3'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('adminlte-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(JeroenNoten\LaravelAdminLte\View\Components\Form\Select::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.live' => 'TipoDelegacionId']); ?>
            <?php if (isset($component)) { $__componentOriginal1e9af52466c1670f554542c6e6d1a065 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1e9af52466c1670f554542c6e6d1a065 = $attributes; } ?>
<?php $component = JeroenNoten\LaravelAdminLte\View\Components\Form\Options::resolve(['options' => $tipoDelegaciones,'emptyOption' => 'SELECCIONA TIPO'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('adminlte-options'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(JeroenNoten\LaravelAdminLte\View\Components\Form\Options::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['select' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('TipoDelegacionId'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1e9af52466c1670f554542c6e6d1a065)): ?>
<?php $attributes = $__attributesOriginal1e9af52466c1670f554542c6e6d1a065; ?>
<?php unset($__attributesOriginal1e9af52466c1670f554542c6e6d1a065); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1e9af52466c1670f554542c6e6d1a065)): ?>
<?php $component = $__componentOriginal1e9af52466c1670f554542c6e6d1a065; ?>
<?php unset($__componentOriginal1e9af52466c1670f554542c6e6d1a065); ?>
<?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal377f5828c1076ae12e071b1688061877)): ?>
<?php $attributes = $__attributesOriginal377f5828c1076ae12e071b1688061877; ?>
<?php unset($__attributesOriginal377f5828c1076ae12e071b1688061877); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal377f5828c1076ae12e071b1688061877)): ?>
<?php $component = $__componentOriginal377f5828c1076ae12e071b1688061877; ?>
<?php unset($__componentOriginal377f5828c1076ae12e071b1688061877); ?>
<?php endif; ?>

        <div class="col-md-3">
            <label for="nomenclatura" class="form-label">SELECCIONA LA NOMENCLATURA</label>
            <select name="nomenclatura" id="" class="form-control" wire:model="id_nomenclatura">
                <!--[if BLOCK]><![endif]--><?php if($nomenclaturas->count() == 0): ?>
                    <option value="">SELECCIONA SU NOMENCLATURA</option>
                <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $nomenclaturas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nomenclatura): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value=" <?php echo e($nomenclatura->id); ?> "><?php echo e($nomenclatura->nomenclatura); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
            </select>
        </div>

        <?php if (isset($component)) { $__componentOriginale5d826ae10df3aa87f8449f474c11664 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale5d826ae10df3aa87f8449f474c11664 = $attributes; } ?>
<?php $component = JeroenNoten\LaravelAdminLte\View\Components\Form\Input::resolve(['name' => 'num_delegacional','label' => 'NUMERO DELEGACIONAL','fgroupClass' => 'col-md-2'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('adminlte-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(JeroenNoten\LaravelAdminLte\View\Components\Form\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['placeholder' => 'INGRESA NÚMERO','type' => 'number','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($NumDelegacional)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale5d826ae10df3aa87f8449f474c11664)): ?>
<?php $attributes = $__attributesOriginale5d826ae10df3aa87f8449f474c11664; ?>
<?php unset($__attributesOriginale5d826ae10df3aa87f8449f474c11664); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale5d826ae10df3aa87f8449f474c11664)): ?>
<?php $component = $__componentOriginale5d826ae10df3aa87f8449f474c11664; ?>
<?php unset($__componentOriginale5d826ae10df3aa87f8449f474c11664); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginale5d826ae10df3aa87f8449f474c11664 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale5d826ae10df3aa87f8449f474c11664 = $attributes; } ?>
<?php $component = JeroenNoten\LaravelAdminLte\View\Components\Form\Input::resolve(['name' => 'nivel_delegacional','label' => 'NIVEL EDUCATIVO DELEGACIONAL','fgroupClass' => 'col-md-4'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('adminlte-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(JeroenNoten\LaravelAdminLte\View\Components\Form\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['placeholder' => 'NIVEL','type' => 'text','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($NivelDelegacional)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale5d826ae10df3aa87f8449f474c11664)): ?>
<?php $attributes = $__attributesOriginale5d826ae10df3aa87f8449f474c11664; ?>
<?php unset($__attributesOriginale5d826ae10df3aa87f8449f474c11664); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale5d826ae10df3aa87f8449f474c11664)): ?>
<?php $component = $__componentOriginale5d826ae10df3aa87f8449f474c11664; ?>
<?php unset($__componentOriginale5d826ae10df3aa87f8449f474c11664); ?>
<?php endif; ?>
        
    </div>
</div><?php /**PATH C:\laragon\www\delegaciones\resources\views/livewire/selector-delegacion.blade.php ENDPATH**/ ?>