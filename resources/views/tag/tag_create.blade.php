@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Nova Tag</h1>
@stop

@section('content')

@if(session('error'))
<div class="alert alert-danger">
    <strong>{{ session('error') }}</strong>
</div>
@endif

<form action="{{route('tags.create.post')}}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Nome</label>
      <input type="text" class="form-control" minlength="3" required name="name" id="name">
    </div>
    <button type="submit" class="btn btn-primary float-right">Submit</button>
</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop