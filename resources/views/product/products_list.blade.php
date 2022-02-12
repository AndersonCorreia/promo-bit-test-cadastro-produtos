@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Produtos</h1>
@stop

@section('content')
<table class="table table-light table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col-5">Nome</th>
        <th scope="col-3">Tags</th>
        <th scope="col-4">Ações</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($products as $prd)
      <tr>
        <th scope="row">{{$prd->id}}</th>
        <td class="col-5">{{$prd->name}}</td>
        <td class="col-3">{{$prd->tagsString}}</td>
        <td class="col-4">
          <div>
            <a href="{{route('products.edit', $prd->id)}}" class="btn btn-sm mx-2 btn-primary">Editar</a>
            <a href="{{route('products.show', $prd->id)}}" class="btn btn-sm mx-2 btn-success">Ver</a>
            <a href="{{route('products.destroy', $prd->id)}}" class="btn btn-sm mx-2 btn-danger">Deletar</a>
          </div>
        </td>
      </tr>
      @empty
      <tr>
        <th scope="row" colspan="4">Nenhum produto encontrado.</th>
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