<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="float-left">
<h2>Dados Pessoais do Aluno</h2>
</div>
<div class="float-right">
<a class="badge badge-dark" href="/add-data"  title="Create a new student">Add</a>
</div>
<!--         <div  class="pull-right">
<a href="/add-data" class="btn btn-outline-primary"> Add Student </a>
</div> -->
</div>
</div>
<br>
@if(count($errors) >0)
<div class="alert alert-danger">
<ul>
@foreach($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
</ul>
</div>
@endif
@if(\Session::has('success'))
<div class="alert alert-success">
<p>{{\Session::get('success') }}      </p>
</div>
@endif
<table class="table table-striped table-secondary">
<thead>
<tr>
<th scope="col-">Id</th>
<th scope="col">Nome Completo</th>
<th scope="col">Curso</th>
<th scope="col">Endereco</th>
<th scope="col">Email</th>
<th scope="col">Telefone</th>
<th scope="col">Action</th>
<th scope="col">Delete</th>
</tr>
</thead>
<tbody>
@foreach($students as $student)
<tr>
<th>{{$student->id}}</th>
<th>{{$student->name}}</th>
<th>{{$student->course}}</th>
<th>{{$student->address}}</th>
<th>{{$student->email}}</th>
<th>{{$student->phone_number}}</th>
<th>
<!-- edit data -->
<a href="{{action('StudentController@edit',$student['id'])}}" class="btn btn-outline-success">Editar</a>
</th>
<th>
<form action="{{action('StudentController@destroy',$student['id'])}}" method="post">
{{csrf_field() }}
<input type="hidden" name="_method" value="DELETE" >
<button type="submit" name="submit" class="btn btn-outline-danger">Delete</button>
</form>
</th>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</body>
</html>
