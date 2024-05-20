

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>
<h1>ADMINISTRACIÓN DE MAESTROS</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        Nuevo <strong>Maestro</strong>
    </div>

    <div class="card-body">
        <form action="<?php echo e(route('maestro.store')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('region-delegacion', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3468654595-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
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
                    icon: "error",
                    title: mensaje,
                    text: "Ya hay un registro en esa secretaría",
                    denyButtonText: "Don't save"
                });                
            });
        </script>
    <?php endif; ?>  
<?php $__env->stopSection(); ?>


<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\delegaciones\resources\views/config/maestros/create.blade.php ENDPATH**/ ?>