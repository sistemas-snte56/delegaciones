

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>
    <h3>CONFIGURACIÓN DE LOS DATOS DEL USUARIO</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


    <div class="card">

        
        
        <div class="card-body">
            <strong>
                MOSTRANDO LA INFORMACIÓN DE: &ensp;   
            </strong>
                <?php echo e($maestro->nombre); ?> <?php echo e($maestro->apaterno); ?> <?php echo e($maestro->amaterno); ?>

            
            <div class="dt-buttons btn-group flex-wrap float-right">  
                <a href="<?php echo e(route('delegacion.show',$maestro->delegacion->id)); ?>" class="btn buttons-html5 btn-default text-secundary" title="REGRESAR A LA PÁGINA ANTERIOR">
                    <i class="fas fa-lg fa-fw fa-undo-alt"></i>
                    <b>REGRESAR</b>
                </a>                              
                <a href="<?php echo e(route('maestro.edit',$maestro)); ?>" class="btn buttons-html5 btn-default text-success" title="REGRESAR A LA PÁGINA ANTERIOR">
                    <i class="fas fa-lg fa-fw fa-pen"></i>
                    <b>EDITAR</b>
                </a> 
            </div>

        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <label for="cargo">CARTERA</label>
                    <p id="region" class="with-border"><?php echo e($maestro->secretaria->cartera_secretaria); ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="region">REGIÓN</label>
                    <p id="region" class="with-border"><?php echo e($maestro->delegacion->region->region); ?> &nbsp;-&nbsp; <?php echo e($maestro->delegacion->region->sede); ?></p>
                </div>
                <div class="col-md-6">
                    <label for="delegacion"><?php echo e($maestro->delegacion->delegacion_ct->deleg_ct); ?></label>
                    <p id="delegacion" class="with-border">
                        <?php echo e($maestro->delegacion->nomenclatura->nomenclatura); ?><?php echo e($maestro->delegacion->num_delegaciona); ?>&nbsp; / &nbsp;
                        <?php echo e($maestro->delegacion->nivel_delegaciona); ?>&nbsp; / &nbsp;
                        <?php echo e($maestro->delegacion->sede_delegaciona); ?>                        
                    </p>
                </div>
            </div>            
        </div>
    </div>


    <div class="card">
        <div class="card-body">

            <div class="row">
                <div class="col-md-3">
                    <label for="titulo">TÍTULO</label>
                    <p id="titulo" class="with-border"><?php echo e($maestro->titulo); ?></p>
                </div>
                <div class="col-md-3">
                    <label for="nombre">NOMBRE</label>
                    <p id="nombre" class="with-border"><?php echo e($maestro->nombre); ?></p>
                </div>
                <div class="col-md-3">
                    <label for="apaterno">APELLIDO PATERNO</label>
                    <p id="apaterno" class="with-border"><?php echo e($maestro->apaterno); ?></p>
                </div>
                <div class="col-md-3">
                    <label for="amaterno">APELLIDO MATERNO</label>
                    <p id="amaterno" class="with-border"><?php echo e($maestro->amaterno); ?></p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <label for="genero">GENERO</label>
                    <p id="genero" class="with-border"><?php echo e($maestro->genero->genero); ?></p>
                </div>
                <div class="col-md-4">
                    <label for="telefono">TELÉFONO</label>
                    <p id="telefono" class="with-border"><?php echo e($maestro->telefono); ?></p>
                </div>
                <div class="col-md-4">
                    <label for="email">CORREO ELECTRÓNICO</label>
                    <p id="email" class="with-border"><?php echo e($maestro->email); ?></p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <label for="direccion">DIRECCIÓN</label>
                    <p id="direccion" class="with-border"><?php echo e($maestro->direccion); ?></p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <label for="cp">CÓDIGO POSTAL</label>
                    <p id="cp" class="with-border"><?php echo e($maestro->cp); ?></p>
                </div>
                <div class="col-md-4">
                    <label for="ciudad">CIUDAD</label>
                    <p id="ciudad" class="with-border"><?php echo e($maestro->ciudad); ?></p>
                </div>
                <div class="col-md-4">
                    <label for="estado">ESTADO</label>
                    <p id="estado" class="with-border"><?php echo e($maestro->estado); ?></p>
                </div>
            </div>




        </div>

    </div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
        .with-border {
            background-color: #F4F6F9;
            border: 1px solid #e6e6e6; 
            padding: 0.3em;
        }
    </style>
<?php $__env->stopSection(); ?> 


<?php $__env->startSection('js'); ?>
    <?php if(session('update')): ?>
        <script>
            $(document).ready(function(){
                let mensaje = "<?php echo e(session ('update')); ?>"
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: mensaje,
                    showConfirmButton: false,
                    timer: 2000
                });
            });
        </script>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\delegaciones\resources\views/config/maestros/show.blade.php ENDPATH**/ ?>