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
    <h1>Atualizar Dados</h1>
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
      <form method="post" action="{{ route('students.update', $students->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">Nome Completo</label>
              <input type="text" class="form-control" name="full_name" placeholder="Nome Completo"value="{{ $students->full_name }}"/>
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" value="{{ $students->email }}"/>
          </div>
          <div class="form-group">
              <label for="phone">Telefone</label>
              <input type="tel" class="form-control" name="phone_number" value="{{ $students->phone_number }}"/>
          </div>
          <div class="form-group">
            <label for="course">Curso</label>
            <input type="tel" class="form-control" name="course" value="{{ $students->course}}"/>
        </div>
          <div class="form-group">
              <label for="address">Endereço</label>
              <input type="text" class="form-control" name="address" value="{{ $students->address }}"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Atualizar meus dados</button>
      </form>
  </div>
</div>
@endsection
