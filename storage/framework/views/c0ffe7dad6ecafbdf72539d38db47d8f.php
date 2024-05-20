

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>DELEGACIÓN O CENTRO DE TRABAJO</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            Lista de <strong>Opciones</strong>
        </div>

        <div class="card-body">

            
            <?php
                $nlista = 1;
                $heads = ['ID', 'TIPO DE DELEGACIÓN', ['label' => 'Actions', 'no-export' => true, 'width' => 15]];

                $btnEdit = '';
                $btnDelete = '<button type="submit" class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                                <i class="fa fa-lg fa-fw fa-trash"></i>
                            </button>';
                $btnDetails = '<button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
                                <i class="fa fa-lg fa-fw fa-eye"></i>
                            </button>';

                $config = [
                    // 'data' => [
                    //     [22, 'John Bender', '+02 (123) 123456789', '<nobr>'.$btnEdit.$btnDelete.$btnDetails.'</nobr>'],
                    //     [19, 'Sophia Clemens', '+99 (987) 987654321', '<nobr>'.$btnEdit.$btnDelete.$btnDetails.'</nobr>'],
                    //     [3, 'Peter Sousa', '+69 (555) 12367345243', '<nobr>'.$btnEdit.$btnDelete.$btnDetails.'</nobr>'],
                    // ],
                    // 'order' => [[1, 'asc']],
                    // 'columns' => [null, null, null, ['orderable' => true]],
                    'columns' => [false, false, false, false],
                    'language' => [
                        'url' => '//cdn.datatables.net/plug-ins/1.13.7/i18n/es-ES.json',
                    ],
                    'paging' => true,
                    'lengthMenu' => [50,100,500],
                ];

            ?>

            
            <?php if (isset($component)) { $__componentOriginal1f0f987500f76b1f57bfad21f77af286 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f0f987500f76b1f57bfad21f77af286 = $attributes; } ?>
<?php $component = JeroenNoten\LaravelAdminLte\View\Components\Tool\Datatable::resolve(['id' => 'table1','heads' => $heads,'config' => $config] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('adminlte-datatable'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(JeroenNoten\LaravelAdminLte\View\Components\Tool\Datatable::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <?php $__currentLoopData = $delegacionCt; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deleg_ct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($nlista++); ?></td>
                        <td><?php echo e($deleg_ct->deleg_ct); ?></td>
                        <td>
                            <a href="" class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                                <i class="fa fa-lg fa-fw fa-pen"></i>
                            </a>
                            <form action="" method="post" class="formEliminar" style="display: inline">
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


<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\delegaciones\resources\views/config/deleg_ct/index.blade.php ENDPATH**/ ?>