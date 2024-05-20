@extends('adminlte::page')


@section('title', $delegacion->nomenclatura->nomenclatura . ' ' . $delegacion->num_delegaciona)


@section('content_header')
    <h1>ADMINISTRACIÓN DE DELEGACIONES</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>{{$delegacion->tipo_delegacion->tipo}}</h3>
            <h5>

                {{$delegacion->delegacion_ct->deleg_ct}} <br> <strong>{{ $delegacion->nomenclatura->nomenclatura}}{{$delegacion->num_delegaciona}} | {{ $delegacion->nivel_delegaciona }} - {{$delegacion->sede_delegaciona}}</strong>
            </h5>
            
            <div class="dt-buttons btn-group flex-wrap float-right">  
                <a href="{{route('delegacion.edit', $delegacion)}}" class="btn buttons-html5 btn-default text-primary" >
                    <i class="fas fa-fw fa-pen "></i> <b>EDITAR</b>
                </a>
                <a href="{{route('delegacion.date', $delegacion)}}" class="btn buttons-html5 btn-default text-success" >
                    <i class="fas fa-fw fa-lg fa-file"></i>
                    <b>DIRECTORIO</b>
                </a>
                <button type="button" class="btn buttons-html5 btn-default" onclick="abrirPagina()">
                    <i class="fas fa-fw fa-lg fa-print"></i>
                    <b>MEMBRETADO</b>
                </button>
            </div>
        </div>

        <div class="card-body">
            {{-- With label, invalid feedback disabled and form group class --}}
            <div class="row">
                @php
                    $config = ['format' => 'DD/MM/YYYY HH:mm'];
                @endphp

                <x-adminlte-input-date name="region" label="REGIÓN" fgroup-class="col-md-4" value="{{$delegacion->region->region}} - {{$delegacion->region->sede}}" disabled/>
                <x-adminlte-input-date name="fecha_inicio" label="FECHA DE INICIO DEL COMITÉ" fgroup-class="col-md-4"  value="{{$delegacion->fecha_inicio_delegaciona}}"  :config="$config" disabled/>
                <x-adminlte-input-date name="fecha_final"  label="FECHA FINAL DEL COMITÉ"     fgroup-class="col-md-4"  value="{{$delegacion->fecha_final_delegaciona}}"  :config="$config" disabled/>
            </div>

            <div class="row">
                <x-adminlte-input name="delegacion" label="{{$delegacion->delegacion_ct->deleg_ct}}" 
                    fgroup-class="col-md-2" value="{{ $delegacion->nomenclatura->nomenclatura}}{{$delegacion->num_delegaciona}}" disabled/>
                <x-adminlte-input name="delegacion" label="NIVEL EDUCATIVO" 
                    fgroup-class="col-md-5" value="{{ $delegacion->nivel_delegaciona}}" disabled/>
                <x-adminlte-input name="delegacion" label="SEDE" 
                    fgroup-class="col-md-5" value="{{ $delegacion->sede_delegaciona}}" disabled/>
            </div>

            <div class="row">
                <x-adminlte-input name="delegacion" label="DIRECCIÓN" 
                    fgroup-class="col-md-5" value="{{ $delegacion->direccion_delegaciona}}" disabled-feedback readonly/>
                <x-adminlte-input name="delegacion" label="CÓDIGO POSTAL" 
                    fgroup-class="col-md-2" value="{{ $delegacion->cp_delegaciona}}" disabled/>
                <x-adminlte-input name="delegacion" label="MUNICIPIO" 
                    fgroup-class="col-md-3" value="{{ $delegacion->ciudad_delegaciona}}" disabled/>
                <x-adminlte-input name="delegacion" label="ESTADO" 
                    fgroup-class="col-md-2" value="{{ $delegacion->estado_delegaciona}}" disabled/>
            </div>


            



           {{-- Setup data for datatables --}}
            @php
                
                $heads = ['ID','CARGO', 'TITULAR', 'GENERO', 'EMAIL', 'TELÉFONO', ['label' => 'ACCIONES', 'no-export' => true, 'width' => 8]];

                $btnDelete = '<button type="submit" class="btn btn-xs btn-default text-danger mx-1 shadow" title="Eliminar">
                                <i class="fa fa-lg fa-fw fa-trash"></i> BORRAR
                            </button>';
                $btnDetails = '';

                $config = [
                    // 'data' => [
                    //     [22, 'John Bender', '+02 (123) 123456789', '<nobr>'.$btnEdit.$btnDelete.$btnDetails.'</nobr>'],
                    //     [19, 'Sophia Clemens', '+99 (987) 987654321', '<nobr>'.$btnEdit.$btnDelete.$btnDetails.'</nobr>'],
                    //     [3, 'Peter Sousa', '+69 (555) 12367345243', '<nobr>'.$btnEdit.$btnDelete.$btnDetails.'</nobr>'],
                    // ],

                    'order' => [[0, 'asc']],
                    'columns' => [ 
                        ['visible' => false], 
                        null, 
                        null, 
                        ['visible' => false], 
                        null, 
                        null, 
                        null 
                    ],

                    'buttons' => ['copy', 'csv', 'excel', 'pdf', 'print'],
                    
                    'language' => [
                        'url' => '//cdn.datatables.net/plug-ins/1.13.7/i18n/es-ES.json',
                    ],

                    'paging' => false,
                    'lengthMenu' => false,
                    'searching' => false,
                    'info' => false,
                    //'hideColumns' => [0], // Ocultar la primera columna (ID)

                ];

            @endphp

            {{-- Minimal example / fill data using the component slot --}}
            <x-adminlte-datatable id="table1" :heads="$heads" :config="$config">
                @if ($delegacion->maestros->count()>0)
                    @foreach ($delegacion->maestros as $maestro)
                        <tr>
                            <td>{{$maestro->id}}</td>
                            <td>{{ $maestro->secretaria->cartera_secretaria}}</td>
                            <td>{{ $maestro->titulo}} {{ $maestro->nombre }} {{ $maestro->apaterno }} {{ $maestro->amaterno }}</td>
                            <td>{{ $maestro->genero->genero }} </td>
                            <td>{{ $maestro->email}} </td>
                            <td>{{ $maestro->telefono}} </td>
                            <td>
                                <a href="{{route('maestro.show',$maestro)}}" class="btn btn-sm btn-default text-success mx-1 shadow" title="MOSTRAR LOS DATOS DE {{ $maestro->nombre }} {{ $maestro->apaterno }}">
                                    <i class="fa fa-lg fa-fw fa-eye"></i>  
                                </a>                            
                                <a href="{{route('maestro.edit',$maestro)}}" class="btn btn-sm btn-default text-success mx-1 shadow" title="EDITAR A {{ $maestro->nombre }} {{ $maestro->apaterno }}">
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
                @else
                    <p>No hay maestros asociados a esta delegación.</p>
                @endif
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
<script>
    function abrirPagina() {
        var anchoVentana = window.innerWidth * 0.7;
        var altoVentana = window.innerHeight * 0.7;
        var left = (window.innerWidth - anchoVentana) / 2;
        var top = (window.innerHeight - altoVentana) / 2;

        window.open("{{ route('delegacion.print', $delegacion) }}", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=" + top + ",left=" + left + ",width=" + anchoVentana + ",height=" + altoVentana + ",titlebar=no,location=no");
    }
</script>
@stop
