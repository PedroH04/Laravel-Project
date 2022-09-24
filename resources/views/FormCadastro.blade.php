@extends('layouts.MainData')
@section('title','Cadastro')
@section('conteudo')    

<style>
    *{
        padding: 0;
        margin: 0;
    }
    body{
        background-color:#f0f2f5 ;
        
    }
    .container{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: row;
        height: 100vh;
        width: 100%;
    }
    #observation{
        margin-bottom: 10px;
        }

        button{
            margin: 10px;
         
        }
</style>
<div class="container">
@csrf
<form class="row g-3" action="{{ route('DataControllers.RegistrarView') }}" method="post"> 
  <div class="col-md-6">
    <label for="name" class="form-label">Nome</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="col-md-6">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="col-12">
    <label for="cidade" class="form-label">Cidade</label>
    <input type="text" class="form-control" id="cidade" name="cidade">
  </div>
  <div class="col-12">
    <label for="observation" class="form-label">Observação</label>
    <input type="text" class="form-control" id="observation" name="observation">
  </div>
  <button type="submit" class="btn btn-danger">Cadastrar</button>
  <button type="button" class="btn btn-success"><a href="{{ route('DataControllers.Home') }}">Voltar</></button>
</form>

</div>
@endsection