@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>DELEGACIÓN O CENTRO DE TRABAJO</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            Lista de <strong>Opciones</strong>
        </div>

        <div class="card-body">

            {{-- Setup data for datatables --}}
            @php
                $nlista = 1;
                $heads = ['ID', 'TIPO DE DELEGACIÓN', ['label' => 'Actions', 'no-export' => true, 'width' => 15]];

                $btnEdit = '';
                $btnDelete = '<button type="submit" class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                                <i class="fa fa-lg fa-fw fa-trash"></i>
                            </button>';
                $btnDetails = '<button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
                                <i class="fa fa-lg fa-fw fa-eye"></i>
                            </button>';

                $config = [
                    // 'data' => [
                    //     [22, 'John Bender', '+02 (123) 123456789', '<nobr>'.$btnEdit.$btnDelete.$btnDetails.'</nobr>'],
                    //     [19, 'Sophia Clemens', '+99 (987) 987654321', '<nobr>'.$btnEdit.$btnDelete.$btnDetails.'</nobr>'],
                    //     [3, 'Peter Sousa', '+69 (555) 12367345243', '<nobr>'.$btnEdit.$btnDelete.$btnDetails.'</nobr>'],
                    // ],
                    // 'order' => [[1, 'asc']],
                    // 'columns' => [null, null, null, ['orderable' => true]],
                    'columns' => [false, false, false, false],
                    'language' => [
                        'url' => '//cdn.datatables.net/plug-ins/1.13.7/i18n/es-ES.json',
                    ],
                    'paging' => true,
                    'lengthMenu' => [50,100,500],
                ];

            @endphp

            {{-- Minimal example / fill data using the component slot --}}
            <x-adminlte-datatable id="table1" :heads="$heads" :config="$config">
                @foreach ($delegacionCt as $deleg_ct)
                    <tr>
                        <td>{{ $nlista++ }}</td>
                        <td>{{ $deleg_ct->deleg_ct }}</td>
                        <td>
                            <a href="" class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                                <i class="fa fa-lg fa-fw fa-pen"></i>
                            </a>
                            <form action="" method="post" class="formEliminar" style="display: inline">
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


@stop
