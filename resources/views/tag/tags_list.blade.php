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
        <th scope="col-2">Ações</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($tags as $tag)
      <tr>
        <th scope="row">{{$tag->id}}</th>
        <td class="col-6">{{$tag->name}}</td>
        <td class="col-4">
          <div>
            <a href="{{route('tags.edit', $tag->id)}}" class="btn btn-sm mx-2 btn-primary">Editar</a>
            <a href="{{route('tags.show', $tag->id)}}" class="btn btn-sm mx-2 btn-success">Ver</a>
            <a href="{{route('tags.destroy', $tag->id)}}" class="btn btn-sm mx-2 btn-danger">Deletar</a>
          </div>
        </td>
      </tr>
      @empty
      <tr>
        <th scope="row" colspan="4">Nenhum tag encontrada.</th>
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