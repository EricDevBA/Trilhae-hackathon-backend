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
<div class="jumbotrong">
<div class="col-md-6">
<h2> Update  Data </h2>
<form action="{{action('StudentController@update',$id)}}" method="post">
{{csrf_field() }}
{{ method_field('PUT') }}
<div class="form-group">
<label>Nome Completo:</label>
<input type="text" name="name" id="name"  value="{{ $students->full_namen}}" class="form-control" placeholder="Seu nome">
</div>
<div class="form-group">
<label>Curso:</label>
<input type="text" name="course"  id="course"  value="{{ $students->course}}" class="form-control" placeholder="Curso">
</div>
<div class="form-group">
<label>Endereço:</label>
<input type="text" name="address"  id="address"  value="{{ $students->address}}" class="form-control" placeholder="Endereço">
</div>
<div class="form-group">
<label>Email:</label>
<input type="text" name="email"  id="email"  value="{{ $students->email}}" class="form-control" placeholder="Email">
</div>
<div class="form-group">
<label>Telefone:</label>
<input type="text" name="phone_number" id="phone_number"  value="{{ $students->phone_number}}" class="form-control" placeholder="Telefone">
</div>
<button type="submit" name="submit" class="btn btn-outline-warning">Editar</button>
</form>
</div>
</div>
</div>
</body>
</html>
