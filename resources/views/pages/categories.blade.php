@extends('adminlte::page')

@section('title', 'Categorias')

@section('content_header')
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet"/>
<h1>Categorias</h1>
@stop

@section('content')
@livewire('alertas')
@livewire('list-categories')

@stop

@section('css')

@stop

@section('js')

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script>
    /* Listeners para alertas Toastr */

    window.addEventListener('alertError', event => {
        toastr.error(event.detail.operacion);
    });

    window.addEventListener('alertInfo', event => {
        toastr.info(event.detail.operacion);
    });

    window.addEventListener('alertSuccess', event => {
        toastr.success(event.detail.operacion);
    });
</script>

@stop
