<div class="row">
    <div class="form-group col-md-2">
        <label for="tipo_delegacion">SELECCIONA EL TIPO</label>
        <select name="select_tipo_delegacion" id="select_tipo_delegacion" class="form-control" wire:model="select_tipo_delegacion">
            <option value="">SELECCIONA...</option>
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $tipo_delegaciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $tipo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($id); ?>"><?php echo e($tipo); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
        </select>
        <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['select_tipo_delegacion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
            <p style="font-size:14px; color:#ff0000"><strong><em><?php echo e($message); ?></em></strong></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->
    </div>
    
    <div class="form-group col-md-2">
        <label for="select_region">SELECCIONA REGIÓN</label>
        <select name="select_region" id="select_region" class="form-control" wire:model.live="select_region" >
            <option value="">SELECCIONA...</option>
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $regiones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $region): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($region->id); ?>"> <?php echo e($region->region); ?>&ensp;-&ensp;<?php echo e($region->sede); ?>  </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
        </select>
        <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['select_region'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
            <p style="font-size:14px; color:#ff0000"><strong><em><?php echo e($message); ?></em></strong></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->
    </div>
    <div class="form-group col-md-4">
        <label for="select_delegacion">SELECCIONA DELEGACIÓN</label>
        <select name="select_delegacion" id="select_delegacion" class="form-control" wire:model="select_delegacion">
            <option value="">SELECCIONA...</option>
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $delegaciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $delegacion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($delegacion->id); ?>" <?php if(old('select_secretaria') ==  $id): ?> selected <?php endif; ?> >
                    <?php echo e($delegacion->nomenclatura->nomenclatura); ?><?php echo e($delegacion->num_delegaciona); ?>&ensp;
                    <?php echo e($delegacion->nivel_delegaciona); ?> &ensp;
                    <?php echo e($delegacion->sede_delegaciona); ?>

                </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->            
        </select>
        <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['select_delegacion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
            <p style="font-size:14px; color:#ff0000"><strong><em><?php echo e($message); ?></em></strong></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->        
    </div>

    <div class="form-group col-md-4">
        <label for="select_secretaria">SELECCIONA CARTERA</label>
        <select name="select_secretaria" id="select_secretaria" class="form-control" wire:model="select_secretaria">
            <option value="">SELECCIONA...</option>
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $secretarias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $secretaria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($secretaria->id); ?>" <?php if(old('select_secretaria') ==  $id): ?> selected <?php endif; ?>> <?php echo e($secretaria->cartera_secretaria); ?>  </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
        </select>
        <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['select_secretaria'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
            <p style="font-size:14px; color:#ff0000"><strong><em><?php echo e($message); ?></em></strong></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->          
    </div>

    <div class="form-group col-md-2">
        <label for="titulo">TITULO</label>
        <select name="select_titulo" id="select_titulo" class="form-control">
            <option value="">SELECIONA...</option>
            <option value="PROF.">PROF.</option>
            <option value="PROFA.">PROFA.</option>
            <option value="C.">C.</option>
        </select>
        <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['select_titulo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
            <p style="font-size:14px; color:#ff0000"><strong><em><?php echo e($message); ?></em></strong></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->         
    </div>

    <div class="form-group col-md-3">
        <label for="nombre">NOMBRE</label>
        <input type="text" name="nombre" id="nombre"  class="form-control" placeholder="NOMBRE COMPLETO" value="<?php echo e(old('nombre')); ?>">
        <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['nombre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
            <p style="font-size:14px; color:#ff0000"><strong><em><?php echo e($message); ?></em></strong></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->     </div>

    <div class="form-group col-md-3">
        <label for="apaterno">APELLIDO PATERNO</label>
        <input type="text" name="apaterno" id="apaterno" class="form-control" placeholder="PRIMER APELLIDO" value="<?php echo e(old('apaterno')); ?>">
        <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['apaterno'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
            <p style="font-size:14px; color:#ff0000"><strong><em><?php echo e($message); ?></em></strong></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->     
    </div>

    <div class="form-group col-md-3">
        <label for="amterno">APELLIDO MATERNO</label>
        <input type="text" name="amterno" id="amterno" class="form-control" placeholder="SEGUNDO APELLIDO" value="<?php echo e(old('amterno')); ?>">
    </div>

    <div class="form-group col-md-1">
        <label for="select_genero">GENERO</label>
        <select name="select_genero" id="select_genero" class="form-control">
            <option value="">SELECIONA...</option>
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $genero; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($id); ?>" <?php if(old('select_genero') == $id): ?> selected <?php endif; ?>> <?php echo e($item); ?> </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
        </select>
        <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['select_genero'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
            <p style="font-size:14px; color:#ff0000"><strong><em><?php echo e($message); ?></em></strong></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->  
    </div>

    <div class="form-group col-md-2">
        <label for="email">CORREO</label>
        <input type="text" name="email" id="email" class="form-control" placeholder="EMAIL" value="<?php echo e(old('email')); ?>">
        <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
            <p style="font-size:14px; color:#ff0000"><strong><em><?php echo e($message); ?></em></strong></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->          
    </div>

    <div class="form-group col-md-2">
        <label for="telefono">TELÉFONO</label>
        <input type="text" name="telefono" id="telefono" class="form-control" placeholder="MOVIL"value="<?php echo e(old('telefono')); ?>" >
        <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['telefono'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
            <p style="font-size:14px; color:#ff0000"><strong><em><?php echo e($message); ?></em></strong></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->          
    </div>

    <div class="form-group col-md-6">
        <label for="direccion">DIRECCIÓN</label>
        <input type="text" name="direccion" id="direccion" class="form-control" placeholder="CALLE Y NÚMERO INTERIOR O EXTERIOR" value="<?php echo e(old('direccion')); ?>">
        <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['direccion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
            <p style="font-size:14px; color:#ff0000"><strong><em><?php echo e($message); ?></em></strong></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->          
    </div>
    
    <div class="form-group col-md-2">
        <label for="cp">CÓDIGO POSTAL</label>
        <input type="text" name="cp" id="cp" class="form-control" placeholder="C.P."  value="<?php echo e(old('cp')); ?>">
        <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['cp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
            <p style="font-size:14px; color:#ff0000"><strong><em><?php echo e($message); ?></em></strong></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->          
    </div>

    <div class="form-group col-md-4">
        <label for="ciudad">CIUDAD</label>
        <input type="text" name="ciudad" id="ciudad" class="form-control" placeholder="CIUDAD" value="<?php echo e(old('ciudad')); ?>" >
        <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['ciudad'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
            <p style="font-size:14px; color:#ff0000"><strong><em><?php echo e($message); ?></em></strong></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->          
    </div>

    <div class="form-group col-md-4">
        <label for="estado">ESTADO</label>
        <input type="text" name="estado" id="estado" class="form-control" placeholder="ESTADO"  value="<?php echo e(old('estado')); ?>">
        <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['estado'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
            <p style="font-size:14px; color:#ff0000"><strong><em><?php echo e($message); ?></em></strong></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->          
    </div>

    <div class="form-group col-md-12">
        <label for=""> &nbsp; </label>
        <button class="btn btn-primary  float-right" type="submit">
            <i class="fas fa-lg fa-fw fa-save"></i> Guardar
        </button>
    </div>

</div><?php /**PATH C:\laragon\www\delegaciones\resources\views/livewire/region-delegacion.blade.php ENDPATH**/ ?>