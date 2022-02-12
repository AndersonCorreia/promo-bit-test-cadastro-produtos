@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>{{$tag->name}}</h1>
@stop

@section('content')

@if(session('error'))
<div class="alert alert-danger">
    <strong>{{ session('error') }}</strong>
</div>
@endif

@csrf
<div class="mb-3">
    <label for="name" class="form-label">Nome</label>
    <input type="text" class="form-control" disabled minlength="3" value="{{$tag->name}}" required name="name" id="name">
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop