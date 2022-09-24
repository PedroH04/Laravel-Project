@extends('layouts.MainData')
@section('title','Perfil Dados')
@section('conteudo')


  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Cidade</th>
      </tr>
    </thead>
<tbody>
      @foreach ($Datas as $data) 
      <tr>
        <th scope="row">{{$data -> id}}</th>
        <td><a href="{{ route('DataControllers.DataView' , $data) }}">{{$data -> name}}</a></td>
        <td>{{$data -> email}}</td>
        <td>{{$data -> cidade}}</td>
      </tr>
      @endforeach
  </table>
  <button type="button" class="btn btn-success" style="border-radius: 15px;"><a href="{{ route('DataControllers.RegistrarView') }}">Cadastre-se</button>
  @endsection

