@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Tags</h1>
@stop

@section('content')
<table class="table table-light table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col-6">Nome</th>
        <th scope="col-4">Qtd de Produtos</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($tags as $tag)
      <tr>
        <th scope="row">{{$tag->id}}</th>
        <td class="col-6">{{$tag->name}}</td>
        <td class="col-4">{{$tag->productsCount}}</td>
      </tr>
      @empty
      <tr>
        <th scope="row" colspan="4">Nenhuma tag encontrada.</th>
      </tr>
      @endforelse
    </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop