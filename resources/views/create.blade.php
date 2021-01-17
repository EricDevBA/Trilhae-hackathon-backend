@extends('layout')

@section('content')

<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>

<div class="card push-top">
  <div class="card-header">
    Adicionar Novo Estudante
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('students.store') }}">
          <div class="form-group">
              @csrf
              <label for="full_name">Nome Completo</label>
              <input type="text" class="form-control" name="full_name"/>
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="course">Curso</label>
              <input type="text" class="form-control" name="course"/>
          </div>
          <div class="form-group">
            <label for="phone_number">Telefone</label>
            <input type="phone" class="form-control" name="phone_number"/>
        </div>
          <div class="form-group">
              <label for="address">Endereço</label>
              <input type="text" class="form-control" name="address"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Cadastrar</button>
      </form>
  </div>
</div>
@endsection
