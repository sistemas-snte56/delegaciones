@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h3>CONFIGURACIÓN DE LOS DATOS DEL USUARIO</h3>
@stop

@section('content')

    <form action=" {{route('maestro.update',$maestro)}} " method="post">

        @csrf
        @method('PUT')




        <div class="card">
            <div class="card-body">
                <strong>
                    EDITAR LA INFORMACIÓN DE: &ensp;   
                </strong>
                    {{ $maestro->nombre }} {{ $maestro->apaterno }}

                <div class="dt-buttons btn-group flex-wrap float-right">  
                    <a href="{{route('maestro.show',$maestro)}}" class="btn buttons-html5 btn-default text-secundary" title="REGRESAR A LA PÁGINA ANTERIOR">
                        <i class="fas fa-lg fa-fw fa-undo-alt"></i>
                        <b>
                            CANCELAR
                        </b>
                    </a> 

                    <button type="submit" class="btn buttons-html5 btn-default text-success ">
                        <i class="fa fa-lg fa-fw fa-save"></i>
                        <b>ACTUALIZAR</b>
                    </button>                   
                
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
                    <x-adminlte-select name="titulo"  label="TÍTULO"  fgroup-class="col-md-3">
                        <option value="{{$maestro->titulo}}" selected> {{$maestro->titulo}} </option>
                        <option value="PROF."> PROF. </option>
                        <option value="PROFA."> PROFA. </option>
                        <option value="C."> C. </option>
                    </x-adminlte-select>                    
                    <x-adminlte-input name="nombre" label="NOMBRE" type="text" fgroup-class="col-md-3" :value="$maestro->nombre"/>
                    <x-adminlte-input name="apaterno" label="APELLIDO PATERNO" type="text" fgroup-class="col-md-3" :value="$maestro->apaterno"/>
                    <x-adminlte-input name="amaterno" label="APELLIDO MATERNO" type="text" fgroup-class="col-md-3" :value="$maestro->amaterno"/>
                </div>

                <div class="row">
                    <x-adminlte-select name="genero" id="genero" label="GENERO" fgroup-class="col-md-4">
                        <option value="{{$maestro->genero->id}}" selected>{{$maestro->genero->genero}}</option>
                        <option value="1"> HOMBRE </option>
                        <option value="2"> MUJER </option>
                    </x-adminlte-select>
                    <x-adminlte-input name="telefono" label="TELÉFONO" type="text" fgroup-class="col-md-4" :value="$maestro->telefono"/>
                    <x-adminlte-input name="email" label="CORREO ELECTRÓNICO" type="text" fgroup-class="col-md-4" :value="$maestro->email"/>
                </div>
                <div class="row">
                    <x-adminlte-input name="direccion" label="DOMICILIO" type="text" fgroup-class="col-md-12" :value="$maestro->direccion"/>
                </div>
                <div class="row">
                    <x-adminlte-input name="cp" label="CÓDIGO POSTAL" type="text" fgroup-class="col-md-4" :value="$maestro->cp"/>
                    <x-adminlte-input name="ciudad" label="CIUDAD" type="text" fgroup-class="col-md-4" :value="$maestro->ciudad"/>
                    <x-adminlte-input name="estado" label="ESTADO" type="text" fgroup-class="col-md-4" :value="$maestro->estado"/>
                </div>
            </div>
        </div>
    </form>

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

@stop
