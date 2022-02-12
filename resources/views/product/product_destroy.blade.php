@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Excluir Produto ?</h1>
@stop

@section('content')

@if(session('error'))
<div class="alert alert-danger">
    <strong>{{ session('error') }}</strong>
</div>
@endif

<form action="{{ route('products.destroy.delete', $product->id) }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger mb-5">Deletar Produto</button>
</form>

<div class="mb-3">
<label for="name" class="form-label">Nome do produto</label>
<input type="text" class="form-control" disabled minlength="3" value="{{$product->name}}" required name="name" id="name">
</div>
    <div>
        <span class="form-label mr-4"><b>Tags: </b></span>
        @foreach ($tags as $tag)
            <div class="form-check form-check-inline">
                <input class="form-check-input" disabled checked="{{$product->asTag($tag)}}" name="tags[]" type="checkbox" id="inlineCheckbox{{$tag->id}}" value="{{$tag->id}}">
                <label class="form-check-label" for="inlineCheckbox{{$tag->id}}">{{$tag->name}}</label>
            </div>
        @endforeach
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop