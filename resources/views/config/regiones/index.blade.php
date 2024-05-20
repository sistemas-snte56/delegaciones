@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>ADMINISTRACIÓN DE REGIONES</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            Lista de <strong>Regiones</strong>


            <a href="{{route('region.create')}}" class="btn btn-primary float-right"><i class="fa fa-sm fa-fw fa-pen"></i> Nuevo</a>

        </div>

        <div class="card-body">

            {{-- Setup data for datatables --}}
            @php
                $nlista = 1;
                $heads = ['ID', 'REGIÓN', 'SEDE', ['label' => 'Actions', 'no-export' => true, 'width' => 15]];

                $btnEdit = '';
                $btnDelete = '<button type="submit" class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                                <i class="fa fa-lg fa-fw fa-trash"></i>
                            </button>';
                $btnDetails = '<button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
                                <i class="fa fa-lg fa-fw fa-eye"></i>
                            </button>';

                $config = [
                    'columns' => [
                        ['type' => 'num'], 
                        ['orderable' => true], 
                        ['searchable' => true], 
                        ['orderable' => true]
                    ],
                    // 'columns' => [
                    //         // ['label' => 'ID'],
                    //         // ['name' => 'id'],
                    //         // ['orderable' => true],
                    //         // ['searchable' => true],
                    //         // ['type' => 'num'],
                    //     ],
                    'language' => [
                        'url' => '//cdn.datatables.net/plug-ins/1.13.7/i18n/es-ES.json',
                    ],
                    // 'lengthMenu' => [50,100,500],
                    'searching' => false,
                    'paging' => false,
                    'info' => false,

                ];

            @endphp

            {{-- Minimal example / fill data using the component slot --}}
            <x-adminlte-datatable id="table1" :heads="$heads" :config="$config"  striped hoverable bordered compressed with-buttons>
                @foreach ($regiones as $region)
                    <tr>
                        <td>{{ $nlista++ }}</td>
                        <td>{{ $region->region }}</td>
                        <td>{{ $region->sede }}</td>
                        <td>
                            <a href="{{route('region.edit', $region)}}" class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                                <i class="fa fa-lg fa-fw fa-pen"></i>
                            </a>
                            <form action="{{ route('region.destroy', $region) }}" method="post" class="formEliminar" style="display: inline">
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
                        this.submit();
                    }
                });

            })
        });
    </script>

    @if(session('update'))
        <script>
            $(document).ready(function(){
                let mensaje = "{{ session ('update') }}"
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: mensaje,
                    showConfirmButton: false,
                    timer: 1800
                });
            });
        </script>
    @endif

    @if(session('delete'))
        <script>
            $(document).ready(function(){
                let mensaje = "{{session('delete')}}"
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: mensaje,
                    showConfirmButton: false,
                    timer: 1800
                });

                // Swal.fire({
                //     title: '¿Estás seguro?',
                //     text: 'Eliminar esta región también eliminará todas las delegaciones asociadas. ¿Deseas continuar?',
                //     icon: 'warning',
                //     showCancelButton: true,
                //     confirmButtonColor: '#d33',
                //     cancelButtonColor: '#3085d6',
                //     confirmButtonText: 'Sí, eliminar',
                //     cancelButtonText: 'Cancelar'
                // }).then((result) => {
                //     if (result.isConfirmed) {
                //         // Realiza la acción de eliminación
                //         axios.delete(botonEliminar.href)
                //             .then(response => {
                //                 Swal.fire('Éxito', response.data.mensaje, 'success');
                //             })
                //             .catch(error => {
                //                 Swal.fire('Error', error.response.data.mensaje, 'error');
                //             });
                //     }
                // });                




            });
        </script>
    @endif    

    @if (session('error'))
        <script>
            $(document).ready(function(){
                let mensaje = "{{session('error')}}"
                Swal.fire({
                    icon: "error",
                    title: mensaje,
                    text: "Debido a que depende de otras delegaciones. "
                });
            });            
        </script>
    @endif



    @if(session('success'))
        <script>
            $(document).ready(function(e){
                let mensaje = "{{ session('success') }}"
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: mensaje,
                    showConfirmButton: false,
                    timer: 1800
                });
            });
        </script>
    @endif

@stop
