


<?php $__env->startSection('title', $delegacion->nomenclatura->nomenclatura . ' ' . $delegacion->num_delegaciona); ?>


<?php $__env->startSection('content_header'); ?>
    <h1>ADMINISTRACIÓN DE DELEGACIONES</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <h3><?php echo e($delegacion->tipo_delegacion->tipo); ?></h3>
            <h5>

                <?php echo e($delegacion->delegacion_ct->deleg_ct); ?> <br> <strong><?php echo e($delegacion->nomenclatura->nomenclatura); ?><?php echo e($delegacion->num_delegaciona); ?> | <?php echo e($delegacion->nivel_delegaciona); ?> - <?php echo e($delegacion->sede_delegaciona); ?></strong>
            </h5>
            
            <div class="dt-buttons btn-group flex-wrap float-right">  
                <a href="<?php echo e(route('delegacion.edit', $delegacion)); ?>" class="btn buttons-html5 btn-default text-primary" >
                    <i class="fas fa-fw fa-pen "></i> <b>EDITAR</b>
                </a>
                <a href="<?php echo e(route('delegacion.date', $delegacion)); ?>" class="btn buttons-html5 btn-default text-success" >
                    <i class="fas fa-fw fa-lg fa-file"></i>
                    <b>DIRECTORIO</b>
                </a>
                <button type="button" class="btn buttons-html5 btn-default" onclick="abrirPagina()">
                    <i class="fas fa-fw fa-lg fa-print"></i>
                    <b>MEMBRETADO</b>
                </button>
            </div>
        </div>

        <div class="card-body">
            
            <div class="row">
                <?php
                    $config = ['format' => 'DD/MM/YYYY HH:mm'];
                ?>

                <?php if (isset($component)) { $__componentOriginalc8dc1514386dad8f66b5b18640b397fe = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc8dc1514386dad8f66b5b18640b397fe = $attributes; } ?>
<?php $component = JeroenNoten\LaravelAdminLte\View\Components\Form\InputDate::resolve(['name' => 'region','label' => 'REGIÓN','fgroupClass' => 'col-md-4'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('adminlte-input-date'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(JeroenNoten\LaravelAdminLte\View\Components\Form\InputDate::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e($delegacion->region->region).' - '.e($delegacion->region->sede).'','disabled' => true]); ?>
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
<?php $component = JeroenNoten\LaravelAdminLte\View\Components\Form\InputDate::resolve(['name' => 'fecha_inicio','label' => 'FECHA DE INICIO DEL COMITÉ','fgroupClass' => 'col-md-4','config' => $config] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('adminlte-input-date'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(JeroenNoten\LaravelAdminLte\View\Components\Form\InputDate::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e($delegacion->fecha_inicio_delegaciona).'','disabled' => true]); ?>
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
<?php $component = JeroenNoten\LaravelAdminLte\View\Components\Form\InputDate::resolve(['name' => 'fecha_final','label' => 'FECHA FINAL DEL COMITÉ','fgroupClass' => 'col-md-4','config' => $config] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('adminlte-input-date'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(JeroenNoten\LaravelAdminLte\View\Components\Form\InputDate::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e($delegacion->fecha_final_delegaciona).'','disabled' => true]); ?>
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

            <div class="row">
                <?php if (isset($component)) { $__componentOriginale5d826ae10df3aa87f8449f474c11664 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale5d826ae10df3aa87f8449f474c11664 = $attributes; } ?>
<?php $component = JeroenNoten\LaravelAdminLte\View\Components\Form\Input::resolve(['name' => 'delegacion','label' => ''.e($delegacion->delegacion_ct->deleg_ct).'','fgroupClass' => 'col-md-2'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('adminlte-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(JeroenNoten\LaravelAdminLte\View\Components\Form\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e($delegacion->nomenclatura->nomenclatura).''.e($delegacion->num_delegaciona).'','disabled' => true]); ?>
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
<?php $component = JeroenNoten\LaravelAdminLte\View\Components\Form\Input::resolve(['name' => 'delegacion','label' => 'NIVEL EDUCATIVO','fgroupClass' => 'col-md-5'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('adminlte-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(JeroenNoten\LaravelAdminLte\View\Components\Form\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e($delegacion->nivel_delegaciona).'','disabled' => true]); ?>
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
<?php $component = JeroenNoten\LaravelAdminLte\View\Components\Form\Input::resolve(['name' => 'delegacion','label' => 'SEDE','fgroupClass' => 'col-md-5'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('adminlte-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(JeroenNoten\LaravelAdminLte\View\Components\Form\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e($delegacion->sede_delegaciona).'','disabled' => true]); ?>
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
<?php $component = JeroenNoten\LaravelAdminLte\View\Components\Form\Input::resolve(['name' => 'delegacion','label' => 'DIRECCIÓN','fgroupClass' => 'col-md-5'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('adminlte-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(JeroenNoten\LaravelAdminLte\View\Components\Form\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e($delegacion->direccion_delegaciona).'','disabled-feedback' => true,'readonly' => true]); ?>
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
<?php $component = JeroenNoten\LaravelAdminLte\View\Components\Form\Input::resolve(['name' => 'delegacion','label' => 'CÓDIGO POSTAL','fgroupClass' => 'col-md-2'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('adminlte-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(JeroenNoten\LaravelAdminLte\View\Components\Form\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e($delegacion->cp_delegaciona).'','disabled' => true]); ?>
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
<?php $component = JeroenNoten\LaravelAdminLte\View\Components\Form\Input::resolve(['name' => 'delegacion','label' => 'MUNICIPIO','fgroupClass' => 'col-md-3'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('adminlte-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(JeroenNoten\LaravelAdminLte\View\Components\Form\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e($delegacion->ciudad_delegaciona).'','disabled' => true]); ?>
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
<?php $component = JeroenNoten\LaravelAdminLte\View\Components\Form\Input::resolve(['name' => 'delegacion','label' => 'ESTADO','fgroupClass' => 'col-md-2'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('adminlte-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(JeroenNoten\LaravelAdminLte\View\Components\Form\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e($delegacion->estado_delegaciona).'','disabled' => true]); ?>
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


            



           
            <?php
                
                $heads = ['ID','CARGO', 'TITULAR', 'GENERO', 'EMAIL', 'TELÉFONO', ['label' => 'ACCIONES', 'no-export' => true, 'width' => 8]];

                $btnDelete = '<button type="submit" class="btn btn-xs btn-default text-danger mx-1 shadow" title="Eliminar">
                                <i class="fa fa-lg fa-fw fa-trash"></i> BORRAR
                            </button>';
                $btnDetails = '';

                $config = [
                    // 'data' => [
                    //     [22, 'John Bender', '+02 (123) 123456789', '<nobr>'.$btnEdit.$btnDelete.$btnDetails.'</nobr>'],
                    //     [19, 'Sophia Clemens', '+99 (987) 987654321', '<nobr>'.$btnEdit.$btnDelete.$btnDetails.'</nobr>'],
                    //     [3, 'Peter Sousa', '+69 (555) 12367345243', '<nobr>'.$btnEdit.$btnDelete.$btnDetails.'</nobr>'],
                    // ],

                    'order' => [[0, 'asc']],
                    'columns' => [ 
                        ['visible' => false], 
                        null, 
                        null, 
                        ['visible' => false], 
                        null, 
                        null, 
                        null 
                    ],

                    'buttons' => ['copy', 'csv', 'excel', 'pdf', 'print'],
                    
                    'language' => [
                        'url' => '//cdn.datatables.net/plug-ins/1.13.7/i18n/es-ES.json',
                    ],

                    'paging' => false,
                    'lengthMenu' => false,
                    'searching' => false,
                    'info' => false,
                    //'hideColumns' => [0], // Ocultar la primera columna (ID)

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
                <?php if($delegacion->maestros->count()>0): ?>
                    <?php $__currentLoopData = $delegacion->maestros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $maestro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($maestro->id); ?></td>
                            <td><?php echo e($maestro->secretaria->cartera_secretaria); ?></td>
                            <td><?php echo e($maestro->titulo); ?> <?php echo e($maestro->nombre); ?> <?php echo e($maestro->apaterno); ?> <?php echo e($maestro->amaterno); ?></td>
                            <td><?php echo e($maestro->genero->genero); ?> </td>
                            <td><?php echo e($maestro->email); ?> </td>
                            <td><?php echo e($maestro->telefono); ?> </td>
                            <td>
                                <a href="<?php echo e(route('maestro.show',$maestro)); ?>" class="btn btn-sm btn-default text-success mx-1 shadow" title="MOSTRAR LOS DATOS DE <?php echo e($maestro->nombre); ?> <?php echo e($maestro->apaterno); ?>">
                                    <i class="fa fa-lg fa-fw fa-eye"></i>  
                                </a>                            
                                <a href="<?php echo e(route('maestro.edit',$maestro)); ?>" class="btn btn-sm btn-default text-success mx-1 shadow" title="EDITAR A <?php echo e($maestro->nombre); ?> <?php echo e($maestro->apaterno); ?>">
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
                <?php else: ?>
                    <p>No hay maestros asociados a esta delegación.</p>
                <?php endif; ?>
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
<script>
    function abrirPagina() {
        var anchoVentana = window.innerWidth * 0.7;
        var altoVentana = window.innerHeight * 0.7;
        var left = (window.innerWidth - anchoVentana) / 2;
        var top = (window.innerHeight - altoVentana) / 2;

        window.open("<?php echo e(route('delegacion.print', $delegacion)); ?>", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=" + top + ",left=" + left + ",width=" + anchoVentana + ",height=" + altoVentana + ",titlebar=no,location=no");
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\delegaciones\resources\views/config/delegaciones/show.blade.php ENDPATH**/ ?>