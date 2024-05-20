@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>ADMINISTRACIÓN DE MAESTROS</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        Lista de <strong>Maestros</strong>
        <a href="{{ route('maestro.create') }}" class="btn btn-primary float-right"><i class="fa fa-sm fa-fw fa-pen"></i> Nuevo</a>
    </div>

    <div class="card-body">

        {{-- Setup data for datatables --}}
        @php
            $heads = [
                'ID',
                'REGIÓN',
                'DELEGACIÓN',
                'CARGO',
                'TITULAR',
                'CIUDAD',
                ['label' => 'ACCIONES', 'no-export' => true, 'width' => 15],
            ];

            $btnEdit = '<button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                <i class="fa fa-lg fa-fw fa-pen"></i>
            </button>';
            $btnDelete = '<button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                <i class="fa fa-lg fa-fw fa-trash"></i> 
            </button>';
            $btnDetails = '<button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
                <i class="fa fa-lg fa-fw fa-eye"></i>
            </button>';

            $config = [
                'order' => [[1, 'asc']],

                'columns' => [
                    ['orderable' => false], 
                    null, 
                    ['orderable' => false], 
                    ['orderable' => false], 
                    ['orderable' => false], 
                    ['orderable' => false,'visible' => false], 
                    ['orderable' => false]
                ],
                
                'language' => [
                    'url' => '//cdn.datatables.net/plug-ins/1.13.7/i18n/es-ES.json',
                ],
                
                'lengthMenu' => [50,100,500],
            ];
        @endphp

        {{-- Compressed with style options / fill data using the plugin config --}}
        <x-adminlte-datatable id="table2" :heads="$heads" head-theme="info" :config="$config" striped hoverable bordered compressed  with-buttons>
        @foreach ($maestros as $maestro)
                <tr>
                    <td> {{ $maestro->id}} </td>
                    <td> {{ $maestro->delegacion->region->region }} - {{ $maestro->delegacion->region->sede }}</td>
                    <td> 
                        <a href="{{route('delegacion.show', $maestro->delegacion->id)}}"  class="btn btn-light" >
                            <i class="fas fa-tag"></i>&nbsp &nbsp{{ $maestro->delegacion->nomenclatura->nomenclatura }}{{ $maestro->delegacion->num_delegaciona }}
                        </a>
                    </td>    
                    <td> {{ $maestro->secretaria->cartera_secretaria }} </td>
                    <td> {{ $maestro->titulo }} {{ $maestro->nombre }} {{ $maestro->apaterno }} {{ $maestro->amaterno }}</td>
                    <td> {{ $maestro->ciudad }} </td>
                    <td>                        
                        <a href="{{route('maestro.show',$maestro->id)}}" class="btn btn-xs btn-default text-teal mx-1 shadow" title="Mostrar">
                            <i class="fa fa-lg fa-fw fa-eye"></i>
                        </a>                            
                        <a href="#" class="btn btn-xs btn-default text-primary mx-1 shadow" title="Editar">
                            <i class="fa fa-lg fa-fw fa-pen"></i>
                        </a>
                        <form action=" {{ route('maestro.destroy', $maestro) }} " method="post" class="formEliminar" style="display: inline">
                            @csrf
                            @method('DELETE')
                            {!! $btnDelete !!}
                        </form>
                    </td>                    
                </tr>
            @endforeach
        </x-adminlte-datatable>
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        $(document).ready(function() {
            $('.formEliminar').submit(function(e) {
                e.preventDefault();

                Swal.fire({
                    title: "Estas seguro?",
                    text: "¡No podrás revertir esto!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Si, borrarlo!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        if (result.isConfirmed) {
                            this.submit();
                        }
                    }
                });

            })
        });
    </script>
    @if(session('success'))
        <script>
            $(document).ready(function(e){
                let mensaje = "{{ session('success') }}"
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: mensaje,
                    showConfirmButton: false,
                    timer: 1900
                });
            });
        </script>
    @endif
@stop