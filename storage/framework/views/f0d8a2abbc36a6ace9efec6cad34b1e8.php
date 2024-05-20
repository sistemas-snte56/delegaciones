

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>
<h1>ADMINISTRACIÓN DE MAESTROS</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        Lista de <strong>Maestros</strong>
        <a href="<?php echo e(route('maestro.create')); ?>" class="btn btn-primary float-right"><i class="fa fa-sm fa-fw fa-pen"></i> Nuevo</a>
    </div>

    <div class="card-body">

        
        <?php
            $heads = [
                'ID',
                'REGIÓN',
                'DELEGACIÓN',
                'CARGO',
                'TITULAR',
                'CIUDAD',
                ['label' => 'ACCIONES', 'no-export' => true, 'width' => 15],
            ];

            $btnEdit = '<button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                <i class="fa fa-lg fa-fw fa-pen"></i>
            </button>';
            $btnDelete = '<button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                <i class="fa fa-lg fa-fw fa-trash"></i> 
            </button>';
            $btnDetails = '<button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
                <i class="fa fa-lg fa-fw fa-eye"></i>
            </button>';

            $config = [
                'order' => [[1, 'asc']],

                'columns' => [
                    ['orderable' => false], 
                    null, 
                    ['orderable' => false], 
                    ['orderable' => false], 
                    ['orderable' => false], 
                    ['orderable' => false,'visible' => false], 
                    ['orderable' => false]
                ],
                
                'language' => [
                    'url' => '//cdn.datatables.net/plug-ins/1.13.7/i18n/es-ES.json',
                ],
                
                'lengthMenu' => [50,100,500],
            ];
        ?>

        
        <?php if (isset($component)) { $__componentOriginal1f0f987500f76b1f57bfad21f77af286 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f0f987500f76b1f57bfad21f77af286 = $attributes; } ?>
<?php $component = JeroenNoten\LaravelAdminLte\View\Components\Tool\Datatable::resolve(['id' => 'table2','heads' => $heads,'headTheme' => 'info','config' => $config,'striped' => true,'hoverable' => true,'bordered' => true,'compressed' => true,'withButtons' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('adminlte-datatable'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(JeroenNoten\LaravelAdminLte\View\Components\Tool\Datatable::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <?php $__currentLoopData = $maestros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $maestro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td> <?php echo e($maestro->id); ?> </td>
                    <td> <?php echo e($maestro->delegacion->region->region); ?> - <?php echo e($maestro->delegacion->region->sede); ?></td>
                    <td> 
                        <a href="<?php echo e(route('delegacion.show', $maestro->delegacion->id)); ?>"  class="btn btn-light" >
                            <i class="fas fa-tag"></i>&nbsp &nbsp<?php echo e($maestro->delegacion->nomenclatura->nomenclatura); ?><?php echo e($maestro->delegacion->num_delegaciona); ?>

                        </a>
                    </td>    
                    <td> <?php echo e($maestro->secretaria->cartera_secretaria); ?> </td>
                    <td> <?php echo e($maestro->titulo); ?> <?php echo e($maestro->nombre); ?> <?php echo e($maestro->apaterno); ?> <?php echo e($maestro->amaterno); ?></td>
                    <td> <?php echo e($maestro->ciudad); ?> </td>
                    <td>                        
                        <a href="<?php echo e(route('maestro.show',$maestro->id)); ?>" class="btn btn-xs btn-default text-teal mx-1 shadow" title="Mostrar">
                            <i class="fa fa-lg fa-fw fa-eye"></i>
                        </a>                            
                        <a href="#" class="btn btn-xs btn-default text-primary mx-1 shadow" title="Editar">
                            <i class="fa fa-lg fa-fw fa-pen"></i>
                        </a>
                        <form action=" <?php echo e(route('maestro.destroy', $maestro)); ?> " method="post" class="formEliminar" style="display: inline">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <?php echo $btnDelete; ?>

                        </form>
                    </td>                    
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f0f987500f76b1f57bfad21f77af286)): ?>
<?php $attributes = $__attributesOriginal1f0f987500f76b1f57bfad21f77af286; ?>
<?php unset($__attributesOriginal1f0f987500f76b1f57bfad21f77af286); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f0f987500f76b1f57bfad21f77af286)): ?>
<?php $component = $__componentOriginal1f0f987500f76b1f57bfad21f77af286; ?>
<?php unset($__componentOriginal1f0f987500f76b1f57bfad21f77af286); ?>
<?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script>
        $(document).ready(function() {
            $('.formEliminar').submit(function(e) {
                e.preventDefault();

                Swal.fire({
                    title: "Estas seguro?",
                    text: "¡No podrás revertir esto!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Si, borrarlo!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        if (result.isConfirmed) {
                            this.submit();
                        }
                    }
                });

            })
        });
    </script>
    <?php if(session('success')): ?>
        <script>
            $(document).ready(function(e){
                let mensaje = "<?php echo e(session('success')); ?>"
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: mensaje,
                    showConfirmButton: false,
                    timer: 1900
                });
            });
        </script>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\delegaciones\resources\views/config/maestros/index.blade.php ENDPATH**/ ?>