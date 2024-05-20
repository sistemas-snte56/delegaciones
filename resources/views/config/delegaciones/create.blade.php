@extends('adminlte::page')

@section('title', 'Nueva Delegación')

@section('content_header')
<h1>ADMINISTRACIÓN DE DELEGACIONES</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        Nueva <strong>Delegacio</strong>
    </div>

    <div class="card-body">

        <h4>
       
        </h4>
        <form action="{{ route('delegacion.store') }}" method="post">
            @csrf

            <div class="row">
                <x-adminlte-select name="select_region" label="SELECCIONA REGIÓN" fgroup-class="col-md-6">
                    <x-adminlte-options :options="$regiones" :selected="old('select_region')" empty-option="SELECCIONA" />
                </x-adminlte-select>


                @php
                $config = ['format' => 'DD-MM-YYYY'];
                @endphp
                <x-adminlte-input-date name="fecha_inicio" :config="$config" placeholder="SELECCIONA INICIO DEL COMITE" label="PERIODO INICIAL" fgroup-class="col-md-3" :value="old('fecha_inicio')">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-gradient-info">
                            <i class="fas fa-calendar-day"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input-date>

                <x-adminlte-input-date name="fecha_final" :config="$config" placeholder="SELECCIONA FINAL DEL COMITE" label="PERIODO FINAL" fgroup-class="col-md-3" :value="old('fecha_final')">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-gradient-info">
                            <i class="fas fa-calendar-day"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input-date>    

            </div>


            <livewire:selector-delegacion>

            <div class="row">
            
                <x-adminlte-input name="sede_delegacional" label="SEDE" placeholder="CUAL ES LA SEDE"  type="text" fgroup-class="col-md-4" value="{{old('sede_delegacional')}}"/>
                <x-adminlte-input name="domicilio_delegacional" label="DIRECCIÓN" placeholder="INGRESA LA DIRECCIÓN"  type="text" fgroup-class="col-md-6" value="{{old('domicilio_delegacional')}}"/>
                <x-adminlte-input name="cp_delegacional" label="CÓDIGO POSTAL" placeholder="C.P."  type="text" fgroup-class="col-md-2" value="{{old('cp_delegacional')}}"/>

            </div>
            
            <div class="row">
                <x-adminlte-input name="ciudad_delegacional" label="CIUDAD" placeholder="INGRESA EL CIUDAD"  type="text" fgroup-class="col-md-6" value="{{old('ciudad_delegacional')}}"/>
                <x-adminlte-input name="estado_delegacional" label="ESTADO" placeholder="INGRESA EL ESTADO"  type="text" fgroup-class="col-md-6" value="{{old('estado_delegacional')}}"/>            
            </div>

                <x-adminlte-button class="button" label="Guardar" theme="primary" icon="fas fa-save" type="submit"/>



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

