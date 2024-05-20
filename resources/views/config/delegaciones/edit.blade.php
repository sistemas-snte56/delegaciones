@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>ADMINISTRACIÓN DE DELEGACIONES</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        Actualizar <strong>Delegación</strong>
    </div>

    <div class="card-body">

        
        <form action="{{route('delegacion.update',$delegacion)}}" method="post">
            @csrf
            @method('PUT')

            <div class="row">
                <x-adminlte-select name="select_region" label="REGIÓN" fgroup-class="col-md-6">
                    <option value="{{$delegacion->region->id}}" selected>{{$delegacion->region->region}} - {{$delegacion->region->sede}}</option>
                    @foreach ($regiones as $id => $region)
                        <option value="{{$id}}">{{$region}}</option>
                    @endforeach
                </x-adminlte-select>


                @php
                $config = ['format' => 'YYYY-MM-DD'];
                @endphp
                <x-adminlte-input-date name="fecha_inicio" :config="$config" placeholder="INICIO DEL COMITE" label="PERIODO INICIAL" fgroup-class="col-md-3" :value="$delegacion->fecha_inicio_delegaciona">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-gradient-info">
                            <i class="fas fa-calendar-day"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input-date>

                <x-adminlte-input-date name="fecha_final" :config="$config" placeholder="FINAL DEL COMITE" label="PERIODO FINAL" fgroup-class="col-md-3" :value="$delegacion->fecha_final_delegaciona">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-gradient-info">
                            <i class="fas fa-calendar-day"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input-date>    

            </div>

            <div class="row">



            
                <x-adminlte-select name="tipodelegacion" id="tipodelegacion" label="TIPO DE DELEGACIÓN" fgroup-class="col-md-3">
                    <x-adminlte-options :options="$tipo_delegaciones" display="tipo" value="id" selected="{{ $delegacion->tipo_delegacion->id }}" />
                </x-adminlte-select>

                <x-adminlte-select name="nomenclatura" id="nomenclatura" label="NOMENCLARUTA" fgroup-class="col-md-3">
                    <x-adminlte-options :options="$nomenclaturas" display="nomenclatura" value="id" selected="{{ $delegacion->nomenclatura->id }}" />
                </x-adminlte-select>





                <x-adminlte-input name="num_delegacional" label="NUMERO DELEGACIONAL" placeholder="INGRESA NÚMERO"  type="number" fgroup-class="col-md-2" :value="$delegacion->num_delegaciona"/>
                <x-adminlte-input name="nivel_delegacional" label="NIVEL EDUCATIVO DELEGACIONAL" placeholder="NIVEL"  type="text" fgroup-class="col-md-4" :value="$delegacion->nivel_delegaciona"/>



            </div>

            <div class="row">
            
                <x-adminlte-input name="sede_delegacional" label="SEDE" placeholder="CUAL ES LA SEDE"  type="text" fgroup-class="col-md-4" :value="$delegacion->sede_delegaciona"/>
                <x-adminlte-input name="domicilio_delegacional" label="DIRECCIÓN" placeholder="INGRESA LA DIRECCIÓN"  type="text" fgroup-class="col-md-6" :value="$delegacion->direccion_delegaciona"/>
                <x-adminlte-input name="cp_delegacional" label="CÓDIGO POSTAL" placeholder="C.P."  type="text" fgroup-class="col-md-2" :value="$delegacion->cp_delegaciona"/>

            </div>
            
            <div class="row">
                <x-adminlte-input name="ciudad_delegacional" label="CIUDAD" placeholder="INGRESA EL CIUDAD"  type="text" fgroup-class="col-md-6" :value="$delegacion->ciudad_delegaciona"/>
                <x-adminlte-input name="estado_delegacional" label="ESTADO" placeholder="INGRESA EL ESTADO"  type="text" fgroup-class="col-md-6" :value="$delegacion->estado_delegaciona"/>            
            </div>

            <div class="row">
                <x-adminlte-button class="button" label="Guardar" theme="primary" icon="fas fa-save" type="submit"/>
            </div>
        </form>

    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    @if(session('warning'))
        <script>
            $(document).ready(function(){
                let mensaje = "{{session('warning')}}"
                Swal.fire({
                    position: 'top-end',
                    icon: 'warning',
                    title: mensaje,
                    showConfirmButton: false,
                    timer: 1800
                });
            });
        </script>
    @endif  
@stop

