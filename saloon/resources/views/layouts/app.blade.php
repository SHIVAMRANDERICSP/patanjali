{{-- resources/views/layouts/adminlte.blade.php --}}
@extends('adminlte::page')

@section('title', config('app.name', 'Laravel'))

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
@yield('content')
@stop

@section('css')
<link rel="stylesheet" href="{{ asset('css/custom.css') }}">
@stop

@section('js')
<script>
    console.log('AdminLTE Loaded');
</script>
@stop