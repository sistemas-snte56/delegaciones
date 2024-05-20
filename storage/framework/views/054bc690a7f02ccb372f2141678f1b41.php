

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>ADMINISTRACIÓN DE DELEGACIONES</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            Lista de <strong>Delegaciones</strong>
            <a href="<?php echo e(route('delegacion.create')); ?>" class="btn btn-primary float-right"><i class="fa fa-sm fa-fw fa-pen"></i> Nuevo</a>
        
        </div>



















        <div class="card-body">
            
            <?php
                $heads = [
                    // ['label'=>'NO'],
                    // ['label'=>'ID', 'no-export' => false], 
                    'NO',
                    'ID',
                    'REGIÓN', 
                    'DELEGACION', 
                    'NIVEL', 
                    'SEDE', 
                    ['label' => 'ACCIONES', 'no-export' => true, 'width' => 5]
                ];

                $btnEdit = '';
                $btnDelete = '<button type="submit" class="btn btn-xs btn-default text-danger mx-1 shadow" title="Eliminar">
                                <i class="fa fa-lg fa-fw fa-trash"></i>
                            </button>';
                $btnDetails = '';

                $config = [
                    // 'order' => [[0, 'asc'],  [4 , 'asc']],
                    'order' => [4 , 'asc'],
                    'columns' => [
                        ['orderable' => false,'visible' => true, 'type' => 'num'],
                        ['orderable' => false,'visible' => true, 'type' => 'num'],
                        ['orderable' => false,'visible' => true], 
                        ['orderable' => true,'visible' => true, 'type' => 'text'], 
                        ['orderable' => false,'visible' => true], 
                        ['orderable' => false,'visible' => true], 
                        ['orderable' => false,'visible' => true], 
                    ],

                    'language' => [
                        'url' => '//cdn.datatables.net/plug-ins/1.13.7/i18n/es-ES.json',
                    ],
                    'order' => [[4, 'asc']],
                    'lengthMenu' => [50,100,500],
                    'searching' => true,
                    'paging' => true,
                    'info' => true,

                    /*'columnsDefs' => [
                        // ['type' => 'num', 'target' => 0],
                        ['visible' => false, 'target' => 0],
                    ],*/
                    

                ];

                

            ?>
            <?php if (isset($component)) { $__componentOriginal1f0f987500f76b1f57bfad21f77af286 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f0f987500f76b1f57bfad21f77af286 = $attributes; } ?>
<?php $component = JeroenNoten\LaravelAdminLte\View\Components\Tool\Datatable::resolve(['id' => 'delegaciones','heads' => $heads,'config' => $config,'striped' => true,'hoverable' => true,'bordered' => true,'compressed' => true,'withButtons' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('adminlte-datatable'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(JeroenNoten\LaravelAdminLte\View\Components\Tool\Datatable::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <?php $contador = 1; ?>
                <?php $__currentLoopData = $delegaciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $delegacion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($contador++); ?></td>
                        <td><?php echo e($delegacion->id); ?></td>
                        <td><?php echo e($delegacion->region->region); ?> - <?php echo e($delegacion->region->sede); ?> </td>
                        <td><?php echo e($delegacion->nomenclatura->nomenclatura); ?><?php echo e($delegacion->num_delegaciona); ?>  </td>
                        <td><?php echo e($delegacion->nivel_delegaciona); ?></td>
                        <td><?php echo e($delegacion->sede_delegaciona); ?></td>
                        <td>
                            <?php echo e($btnDetails); ?>

                            <a href="<?php echo e(route('delegacion.show', $delegacion)); ?>" class="btn btn-xs btn-default text-teal mx-1 shadow" title="Mostrar">
                                <i class="fa fa-lg fa-fw fa-eye"></i>
                            </a>                            
                            <a href="<?php echo e(route('delegacion.edit',$delegacion)); ?>" class="btn btn-xs btn-default text-primary mx-1 shadow" title="Editar">
                                <i class="fa fa-lg fa-fw fa-pen"></i>
                            </a>
                            <form action="<?php echo e(route('delegacion.destroy',$delegacion)); ?>" method="post" class="formEliminar" style="display: inline">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <?php echo $btnDelete; ?>

                            </form>

                            <a href="<?php echo e(route('delegacion.print', $delegacion)); ?>" target="_blank" class="btn btn-xs buttons-print btn-default  mx-1 " title="Imprimir hoja">
                                <i class="fas fa-fw fa-lg fa-print"></i>
                            </a>                            

                            <a href="<?php echo e(route('delegacion.date', $delegacion)); ?>" target="_blank" class="btn btn-xs buttons-print btn-default  mx-1 " title="Imprimir hoja">
                                <i class="fas fa-fw fa-lg fa-edit"></i>
                            </a>                            



 







                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $numeroLista = 0;
                ?>
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
    <?php if(session('update')): ?>
        <script>
            $(document).ready(function(){
                let mensaje = "<?php echo e(session ('update')); ?>"
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: mensaje,
                    showConfirmButton: false,
                    timer: 1800
                });
            });
        </script>
    <?php endif; ?>

    <?php if(session('delete')): ?>
        <script>
            $(document).ready(function(){
                let mensaje = "<?php echo e(session('delete')); ?>"
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: mensaje,
                    showConfirmButton: false,
                    timer: 1800
                });
            });
        </script>
    <?php endif; ?>    

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


<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\delegaciones\resources\views/config/delegaciones/index.blade.php ENDPATH**/ ?>