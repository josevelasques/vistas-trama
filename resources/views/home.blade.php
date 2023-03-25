@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet"/>
<h1>Dashboard</h1>
@stop

@section('content')
@livewire('list-articles')
@livewire('user-detail')
@livewire('nuevo-rubro')
@livewire('carousel')
@livewire('nueva-marca')
@livewire('nuevo-proveedor')
@livewire('nuevo-articulo')
@livewire('nueva-venta')

@stop

@section('css')

@stop

@section('js')

<script>
    console.log('Hi!');
</script>
@stop
