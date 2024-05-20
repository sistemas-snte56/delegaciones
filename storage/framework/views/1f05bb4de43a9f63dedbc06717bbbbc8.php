

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>ADMINISTRACIÓN DE REGIONES</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            Lista de <strong>Regiones</strong>


            <a href="<?php echo e(route('region.create')); ?>" class="btn btn-primary float-right"><i class="fa fa-sm fa-fw fa-pen"></i> Nuevo</a>

        </div>

        <div class="card-body">

            
            <?php
                $nlista = 1;
                $heads = ['ID', 'REGIÓN', 'SEDE', ['label' => 'Actions', 'no-export' => true, 'width' => 15]];

                $btnEdit = '';
                $btnDelete = '<button type="submit" class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                                <i class="fa fa-lg fa-fw fa-trash"></i>
                            </button>';
                $btnDetails = '<button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
                                <i class="fa fa-lg fa-fw fa-eye"></i>
                            </button>';

                $config = [
                    'columns' => [
                        ['type' => 'num'], 
                        ['orderable' => true], 
                        ['searchable' => true], 
                        ['orderable' => true]
                    ],
                    // 'columns' => [
                    //         // ['label' => 'ID'],
                    //         // ['name' => 'id'],
                    //         // ['orderable' => true],
                    //         // ['searchable' => true],
                    //         // ['type' => 'num'],
                    //     ],
                    'language' => [
                        'url' => '//cdn.datatables.net/plug-ins/1.13.7/i18n/es-ES.json',
                    ],
                    // 'lengthMenu' => [50,100,500],
                    'searching' => false,
                    'paging' => false,
                    'info' => false,

                ];

            ?>

            
            <?php if (isset($component)) { $__componentOriginal1f0f987500f76b1f57bfad21f77af286 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f0f987500f76b1f57bfad21f77af286 = $attributes; } ?>
<?php $component = JeroenNoten\LaravelAdminLte\View\Components\Tool\Datatable::resolve(['id' => 'table1','heads' => $heads,'config' => $config,'striped' => true,'hoverable' => true,'bordered' => true,'compressed' => true,'withButtons' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('adminlte-datatable'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(JeroenNoten\LaravelAdminLte\View\Components\Tool\Datatable::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <?php $__currentLoopData = $regiones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $region): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($nlista++); ?></td>
                        <td><?php echo e($region->region); ?></td>
                        <td><?php echo e($region->sede); ?></td>
                        <td>
                            <a href="<?php echo e(route('region.edit', $region)); ?>" class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                                <i class="fa fa-lg fa-fw fa-pen"></i>
                            </a>
                            <form action="<?php echo e(route('region.destroy', $region)); ?>" method="post" class="formEliminar" style="display: inline">
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
                        this.submit();
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

                // Swal.fire({
                //     title: '¿Estás seguro?',
                //     text: 'Eliminar esta región también eliminará todas las delegaciones asociadas. ¿Deseas continuar?',
                //     icon: 'warning',
                //     showCancelButton: true,
                //     confirmButtonColor: '#d33',
                //     cancelButtonColor: '#3085d6',
                //     confirmButtonText: 'Sí, eliminar',
                //     cancelButtonText: 'Cancelar'
                // }).then((result) => {
                //     if (result.isConfirmed) {
                //         // Realiza la acción de eliminación
                //         axios.delete(botonEliminar.href)
                //             .then(response => {
                //                 Swal.fire('Éxito', response.data.mensaje, 'success');
                //             })
                //             .catch(error => {
                //                 Swal.fire('Error', error.response.data.mensaje, 'error');
                //             });
                //     }
                // });                




            });
        </script>
    <?php endif; ?>    

    <?php if(session('error')): ?>
        <script>
            $(document).ready(function(){
                let mensaje = "<?php echo e(session('error')); ?>"
                Swal.fire({
                    icon: "error",
                    title: mensaje,
                    text: "Debido a que depende de otras delegaciones. "
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
                    timer: 1800
                });
            });
        </script>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\delegaciones\resources\views/config/regiones/index.blade.php ENDPATH**/ ?>