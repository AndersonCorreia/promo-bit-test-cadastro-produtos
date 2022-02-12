@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>{{$product->name}}</h1>
@stop

@section('content')

@if(session('error'))
<div class="alert alert-danger">
    <strong>{{ session('error') }}</strong>
</div>
@endif

<form action="{{route('products.edit', $product)}}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Nome do produto</label>
      <input type="text" class="form-control" minlength="3" value="{{$product->name}}" required name="name" id="name">
    </div>
    <div>
        <span class="form-label mr-4"><b>Tags: </b></span>
        @forelse ($tags as $tag)
            <div class="form-check form-check-inline">
                @if($product->asTag($tag))
                    <input class="form-check-input" checked name="tags[]" type="checkbox" id="inlineCheckbox{{$tag->id}}" value="{{$tag->id}}">
                @else
                    <input class="form-check-input" name="tags[]" type="checkbox" id="inlineCheckbox{{$tag->id}}" value="{{$tag->id}}">
                @endif
                <label class="form-check-label" for="inlineCheckbox{{$tag->id}}">{{$tag->name}}</label>
            </div>
        @empty
            Nenhuma tag cadastrada
        @endforelse
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