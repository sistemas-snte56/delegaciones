

<?php $__env->startSection('title', 'Nueva Delegación'); ?>

<?php $__env->startSection('content_header'); ?>
<h1>ADMINISTRACIÓN DE DELEGACIONES</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        Nueva <strong>Delegacio</strong>
    </div>

    <div class="card-body">

        <h4>
       
        </h4>
        <form action="<?php echo e(route('delegacion.store')); ?>" method="post">
            <?php echo csrf_field(); ?>

            <div class="row">
                <?php if (isset($component)) { $__componentOriginal377f5828c1076ae12e071b1688061877 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal377f5828c1076ae12e071b1688061877 = $attributes; } ?>
<?php $component = JeroenNoten\LaravelAdminLte\View\Components\Form\Select::resolve(['name' => 'select_region','label' => 'SELECCIONA REGIÓN','fgroupClass' => 'col-md-6'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('adminlte-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(JeroenNoten\LaravelAdminLte\View\Components\Form\Select::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    <?php if (isset($component)) { $__componentOriginal1e9af52466c1670f554542c6e6d1a065 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1e9af52466c1670f554542c6e6d1a065 = $attributes; } ?>
<?php $component = JeroenNoten\LaravelAdminLte\View\Components\Form\Options::resolve(['options' => $regiones,'selected' => old('select_region'),'emptyOption' => 'SELECCIONA'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('adminlte-options'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(JeroenNoten\LaravelAdminLte\View\Components\Form\Options::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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


                <?php
                $config = ['format' => 'DD-MM-YYYY'];
                ?>
                <?php if (isset($component)) { $__componentOriginalc8dc1514386dad8f66b5b18640b397fe = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc8dc1514386dad8f66b5b18640b397fe = $attributes; } ?>
<?php $component = JeroenNoten\LaravelAdminLte\View\Components\Form\InputDate::resolve(['name' => 'fecha_inicio','config' => $config,'label' => 'PERIODO INICIAL','fgroupClass' => 'col-md-3'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('adminlte-input-date'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(JeroenNoten\LaravelAdminLte\View\Components\Form\InputDate::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['placeholder' => 'SELECCIONA INICIO DEL COMITE','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('fecha_inicio'))]); ?>
                     <?php $__env->slot('prependSlot', null, []); ?> 
                        <div class="input-group-text bg-gradient-info">
                            <i class="fas fa-calendar-day"></i>
                        </div>
                     <?php $__env->endSlot(); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc8dc1514386dad8f66b5b18640b397fe)): ?>
<?php $attributes = $__attributesOriginalc8dc1514386dad8f66b5b18640b397fe; ?>
<?php unset($__attributesOriginalc8dc1514386dad8f66b5b18640b397fe); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc8dc1514386dad8f66b5b18640b397fe)): ?>
<?php $component = $__componentOriginalc8dc1514386dad8f66b5b18640b397fe; ?>
<?php unset($__componentOriginalc8dc1514386dad8f66b5b18640b397fe); ?>
<?php endif; ?>

                <?php if (isset($component)) { $__componentOriginalc8dc1514386dad8f66b5b18640b397fe = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc8dc1514386dad8f66b5b18640b397fe = $attributes; } ?>
<?php $component = JeroenNoten\LaravelAdminLte\View\Components\Form\InputDate::resolve(['name' => 'fecha_final','config' => $config,'label' => 'PERIODO FINAL','fgroupClass' => 'col-md-3'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('adminlte-input-date'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(JeroenNoten\LaravelAdminLte\View\Components\Form\InputDate::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['placeholder' => 'SELECCIONA FINAL DEL COMITE','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('fecha_final'))]); ?>
                     <?php $__env->slot('prependSlot', null, []); ?> 
                        <div class="input-group-text bg-gradient-info">
                            <i class="fas fa-calendar-day"></i>
                        </div>
                     <?php $__env->endSlot(); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc8dc1514386dad8f66b5b18640b397fe)): ?>
<?php $attributes = $__attributesOriginalc8dc1514386dad8f66b5b18640b397fe; ?>
<?php unset($__attributesOriginalc8dc1514386dad8f66b5b18640b397fe); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc8dc1514386dad8f66b5b18640b397fe)): ?>
<?php $component = $__componentOriginalc8dc1514386dad8f66b5b18640b397fe; ?>
<?php unset($__componentOriginalc8dc1514386dad8f66b5b18640b397fe); ?>
<?php endif; ?>    

            </div>


            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('selector-delegacion', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1808760693-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

            <div class="row">
            
                <?php if (isset($component)) { $__componentOriginale5d826ae10df3aa87f8449f474c11664 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale5d826ae10df3aa87f8449f474c11664 = $attributes; } ?>
<?php $component = JeroenNoten\LaravelAdminLte\View\Components\Form\Input::resolve(['name' => 'sede_delegacional','label' => 'SEDE','fgroupClass' => 'col-md-4'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('adminlte-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(JeroenNoten\LaravelAdminLte\View\Components\Form\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['placeholder' => 'CUAL ES LA SEDE','type' => 'text','value' => ''.e(old('sede_delegacional')).'']); ?>
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
<?php $component = JeroenNoten\LaravelAdminLte\View\Components\Form\Input::resolve(['name' => 'domicilio_delegacional','label' => 'DIRECCIÓN','fgroupClass' => 'col-md-6'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('adminlte-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(JeroenNoten\LaravelAdminLte\View\Components\Form\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['placeholder' => 'INGRESA LA DIRECCIÓN','type' => 'text','value' => ''.e(old('domicilio_delegacional')).'']); ?>
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
<?php $component = JeroenNoten\LaravelAdminLte\View\Components\Form\Input::resolve(['name' => 'cp_delegacional','label' => 'CÓDIGO POSTAL','fgroupClass' => 'col-md-2'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('adminlte-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(JeroenNoten\LaravelAdminLte\View\Components\Form\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['placeholder' => 'C.P.','type' => 'text','value' => ''.e(old('cp_delegacional')).'']); ?>
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
            
            <div class="row">
                <?php if (isset($component)) { $__componentOriginale5d826ae10df3aa87f8449f474c11664 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale5d826ae10df3aa87f8449f474c11664 = $attributes; } ?>
<?php $component = JeroenNoten\LaravelAdminLte\View\Components\Form\Input::resolve(['name' => 'ciudad_delegacional','label' => 'CIUDAD','fgroupClass' => 'col-md-6'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('adminlte-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(JeroenNoten\LaravelAdminLte\View\Components\Form\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['placeholder' => 'INGRESA EL CIUDAD','type' => 'text','value' => ''.e(old('ciudad_delegacional')).'']); ?>
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
<?php $component = JeroenNoten\LaravelAdminLte\View\Components\Form\Input::resolve(['name' => 'estado_delegacional','label' => 'ESTADO','fgroupClass' => 'col-md-6'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('adminlte-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(JeroenNoten\LaravelAdminLte\View\Components\Form\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['placeholder' => 'INGRESA EL ESTADO','type' => 'text','value' => ''.e(old('estado_delegacional')).'']); ?>
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

                <?php if (isset($component)) { $__componentOriginal84b78d66d5203b43b9d8c22236838526 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal84b78d66d5203b43b9d8c22236838526 = $attributes; } ?>
<?php $component = JeroenNoten\LaravelAdminLte\View\Components\Form\Button::resolve(['label' => 'Guardar','theme' => 'primary','icon' => 'fas fa-save','type' => 'submit'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('adminlte-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(JeroenNoten\LaravelAdminLte\View\Components\Form\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'button']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal84b78d66d5203b43b9d8c22236838526)): ?>
<?php $attributes = $__attributesOriginal84b78d66d5203b43b9d8c22236838526; ?>
<?php unset($__attributesOriginal84b78d66d5203b43b9d8c22236838526); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal84b78d66d5203b43b9d8c22236838526)): ?>
<?php $component = $__componentOriginal84b78d66d5203b43b9d8c22236838526; ?>
<?php unset($__componentOriginal84b78d66d5203b43b9d8c22236838526); ?>
<?php endif; ?>



        </form>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <?php if(session('warning')): ?>
        <script>
            $(document).ready(function(){
                let mensaje = "<?php echo e(session('warning')); ?>"
                Swal.fire({
                    position: 'top-end',
                    icon: 'warning',
                    title: mensaje,
                    showConfirmButton: false,
                    timer: 1800
                });
            });
        </script>
    <?php endif; ?>  
<?php $__env->stopSection(); ?>


<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\delegaciones\resources\views/config/delegaciones/create.blade.php ENDPATH**/ ?>