









<div class="card-body">
    <div class="row">
        <div class="col-md-12">
            <label for="cargo">CARTERA</label>
            <p id="region" class="with-border">{{ $maestro->secretaria->cartera_secretaria }}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="region">REGIÓN</label>
            <p id="region" class="with-border">{{ $maestro->delegacion->region->region }} &nbsp;-&nbsp; {{ $maestro->delegacion->region->sede }}</p>
        </div>
        <div class="col-md-6">
            <label for="delegacion">{{ $maestro->delegacion->delegacion_ct->deleg_ct }}</label>
            <p id="delegacion" class="with-border">
                {{ $maestro->delegacion->nomenclatura->nomenclatura}}{{ $maestro->delegacion->num_delegaciona}}&nbsp; / &nbsp;
                {{ $maestro->delegacion->nivel_delegaciona }}&nbsp; / &nbsp;
                {{ $maestro->delegacion->sede_delegaciona }}                        
            </p>
        </div>
    </div>            
</div>


<div class="card-body">

    <div class="row">
        <div class="col-md-3">
            <label for="titulo">TÍTULO</label>
            <p id="titulo" class="with-border">{{$maestro->titulo}}</p>
        </div>
        <div class="col-md-3">
            <label for="nombre">NOMBRE</label>
            <p id="nombre" class="with-border">{{$maestro->nombre}}</p>
        </div>
        <div class="col-md-3">
            <label for="apaterno">APELLIDO PATERNO</label>
            <p id="apaterno" class="with-border">{{$maestro->apaterno}}</p>
        </div>
        <div class="col-md-3">
            <label for="amaterno">APELLIDO MATERNO</label>
            <p id="amaterno" class="with-border">{{$maestro->amaterno}}</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <label for="genero">GENERO</label>
            <p id="genero" class="with-border">{{$maestro->genero->genero}}</p>
        </div>
        <div class="col-md-4">
            <label for="telefono">TELÉFONO</label>
            <p id="telefono" class="with-border">{{$maestro->telefono}}</p>
        </div>
        <div class="col-md-4">
            <label for="email">CORREO ELECTRÓNICO</label>
            <p id="email" class="with-border">{{$maestro->email}}</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <label for="direccion">DIRECCIÓN</label>
            <p id="direccion" class="with-border">{{$maestro->direccion}}</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <label for="cp">CÓDIGO POSTAL</label>
            <p id="cp" class="with-border">{{$maestro->cp}}</p>
        </div>
        <div class="col-md-4">
            <label for="ciudad">CIUDAD</label>
            <p id="ciudad" class="with-border">{{$maestro->ciudad}}</p>
        </div>
        <div class="col-md-4">
            <label for="estado">ESTADO</label>
            <p id="estado" class="with-border">{{$maestro->estado}}</p>
        </div>
    </div>




</div>