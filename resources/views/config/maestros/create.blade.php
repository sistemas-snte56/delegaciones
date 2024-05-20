@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>ADMINISTRACIÓN DE MAESTROS</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        Nuevo <strong>Maestro</strong>
    </div>

    <div class="card-body">
        <form action="{{ route('maestro.store') }}" method="post">
            @csrf
            <livewire:region-delegacion/>
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
                    icon: "error",
                    title: mensaje,
                    text: "Ya hay un registro en esa secretaría",
                    denyButtonText: "Don't save"
                });                
            });
        </script>
    @endif  
@stop

