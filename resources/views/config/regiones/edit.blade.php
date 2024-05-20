@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>ADMINISTRACIÓN DE REGIONES</h1>
@stop

@section('content')

    <form action=" {{route('region.update', $region)}} " method="post">
        <div class="card">
            @csrf
            @method('PUT')
            <div class="card-header">
                Actualiza la información de las <strong>Regiones</strong>.
            </div>

            <div class="card-body">
                {{-- With prepend slot --}}
                <x-adminlte-input type="text" name="region" id="region" label="Región" label-class="text-orange" value="{{ $region->region}}" >
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-cogs text-orange"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>    
                <x-adminlte-input type="text" name="sede" id="sede" label="Sede" label-class="text-orange" value="{{$region->sede}}" >
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-location-arrow text-orange"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>    
            </div>
                
            <div class="card-footer text-muted">
                <x-adminlte-button type="submit" label="Actualizar" theme="warning" icon="fa fa-save" class="btnGuardar"/>
            </div>
            
        </div>
            
    </form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>    
@stop