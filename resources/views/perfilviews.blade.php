@extends('layouts.MainData')
@section('title','Perfil')
@section('conteudo')

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Cidade</th>
        <th scope="col">Observation</th>
      </tr>
    </thead>
<tbody>
      <tr>
        <th scope="row">{{$data -> id}}</th>
        <td>{{$data -> name}}</></td>
        <td>{{$data -> email}}</td>
        <td>{{$data -> cidade}}</td>
        <td>{{$data -> observation}}</td>
      </tr>
  </table>
  <button type="button" class="btn btn-success"><a href="{{ route('DataControllers.Home') }}">Voltar</></button>
@endsection