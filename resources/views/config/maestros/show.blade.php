@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h3>CONFIGURACIÓN DE LOS DATOS DEL USUARIO</h3>
@stop

@section('content')


    <div class="card">

        
        
        <div class="card-body">
            <strong>
                MOSTRANDO LA INFORMACIÓN DE: &ensp;   
            </strong>
                {{ $maestro->nombre }} {{ $maestro->apaterno }} {{ $maestro->amaterno }}
            
            <div class="dt-buttons btn-group flex-wrap float-right">  
                <a href="{{route('delegacion.show',$maestro->delegacion->id)}}" class="btn buttons-html5 btn-default text-secundary" title="REGRESAR A LA PÁGINA ANTERIOR">
                    <i class="fas fa-lg fa-fw fa-undo-alt"></i>
                    <b>REGRESAR</b>
                </a>                              
                <a href="{{route('maestro.edit',$maestro)}}" class="btn buttons-html5 btn-default text-success" title="REGRESAR A LA PÁGINA ANTERIOR">
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
    </div>


    <div class="card">
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

    </div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
        .with-border {
            background-color: #F4F6F9;
            border: 1px solid #e6e6e6; 
            padding: 0.3em;
        }
    </style>
@stop 


@section('js')
    @if(session('update'))
        <script>
            $(document).ready(function(){
                let mensaje = "{{ session ('update') }}"
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: mensaje,
                    showConfirmButton: false,
                    timer: 2000
                });
            });
        </script>
    @endif
@stop
