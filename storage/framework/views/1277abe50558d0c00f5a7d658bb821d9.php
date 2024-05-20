<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($delegacion->nomenclatura->nomenclatura); ?><?php echo e($delegacion->num_delegaciona); ?></title>
</head>
<body>

    <div class="element">
        <p class="s5" style="padding-left: 5pt;text-indent: 0pt;text-align: left;"><?php echo e($delegacion->region->region); ?> - <?php echo e($delegacion->region->sede); ?></p>
        <p style="text-indent: 0pt;text-align: left;"><br /></p>
        <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;"><?php echo e($delegacion->delegacion_ct->deleg_ct); ?> <?php echo e($delegacion->nomenclatura->nomenclatura); ?><?php echo e($delegacion->num_delegaciona); ?></p>
        <p class="s5" style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;text-align: left;"><?php echo e($delegacion->nivel_delegaciona); ?></p>
        <p class="s5" style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;"><?php echo e($delegacion->sede_delegaciona); ?></p>
        <p style="text-indent: 0pt;text-align: left;"><br /></p>
    
        <?php if($delegacion->maestros->count()>0): ?>
            <?php $__currentLoopData = $delegacion->maestros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $maestro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p><?php echo e($maestro->secretaria->cartera_secretaria); ?></p>
                <p class="s6"><?php echo e($maestro->titulo); ?> <?php echo e($maestro->nombre); ?> <?php echo e($maestro->apaterno); ?> <?php echo e($maestro->amaterno); ?></p>
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">&nbsp;</p>
                <p class="s6" style="padding-top: 4pt;padding-left: 40pt;text-indent: 0pt;text-align: left;">No hay maestros asociados a esta delegación.</p>
                <p style="text-indent: 0pt;text-align: left;"><br /></p>    
        <?php endif; ?>
    
    </div>
    
    <footer>
        <?php echo e($delegacion->direccion_delegaciona); ?>, 
        C.P. <?php echo e($delegacion->cp_delegaciona); ?>,
        <?php echo e($delegacion->ciudad_delegaciona); ?>,
        <?php echo e($delegacion->estado_delegaciona); ?>

    </footer>

</body>


<style type="text/css">
    /* * {
        margin: 8px;
        padding: 0;
        text-indent: 0;
    } */

    @page{
        margin: 0.5cm;
        padding: 0;
        text-indent: 0;        
    }

    .element {
        width: 6.5cm;
        margin-top: 140px;
    }


    footer {
        color: black;
        padding: 0px;
        position: fixed; /* Cambia a 'absolute' si prefieres que sea relativo al documento */
        left: 0;
        bottom: 28;
        width: 60%;
        font-family: Arial, sans-serif;
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
        font-size: 6pt;
        padding-left: 35pt;
        text-indent: 0pt;
        text-align:center;
    }



    .s5 {
        color: black;
        font-family: Arial, sans-serif;
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
        font-size: 6pt;
    }

    p {
        color: black;
        font-family: Arial, sans-serif;
        font-style: normal;
        font-weight: bold;
        text-decoration: none;
        font-size: 6.4pt;
        margin: 0pt;
        padding-left: 5pt;
        text-indent: 0pt;
        text-align: left;
    }

    .s6 {
        color: #3F3F3F;
        font-family: Arial, sans-serif;
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
        font-size: 6pt;
        padding-top: 4pt;
        /* padding-left: 40pt; */
        padding-right: 5pt;
        text-indent: 0pt;
        text-align:right;
    }

    .s7 {
        color: black;
        font-family: Arial, sans-serif;
        font-style: normal;
        font-weight: bold;
        text-decoration: none;
        font-size: 6pt;
    }

    .s8 {
        color: #3F3F3F;
        font-family: Arial, sans-serif;
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
        font-size: 6pt;
    }
</style>
</html><?php /**PATH C:\laragon\www\delegaciones\resources\views/config/delegaciones/print.blade.php ENDPATH**/ ?>