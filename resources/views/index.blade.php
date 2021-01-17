@extends('layout')

@section('content')

<style>
  .push-top {
    margin-top: 50px;
  }
</style>

<h1 align="center">Lista de Estudantes</h1>

<div class="push-top">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif
  <table class="table">
    <thead>
        <tr class="table-warning">
          <td>ID</td>
          <td>Nome Completo</td>
          <td>Email</td>
          <td>Curso</td>
          <td>Telefone</td>
          <td>Endereço</td>
          <td class="text-center">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->full_name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->course}}</td>
            <td>{{$student->address}}</td>
            <td>{{$student->phone_number}}</td>
            <td class="text-center">
                <a href="{{ route('students.edit', $student->id)}}" class="btn btn-primary btn-sm"">Edit</a>
                <form action="{{ route('students.destroy', $student->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm"" type="submit">Delete</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
