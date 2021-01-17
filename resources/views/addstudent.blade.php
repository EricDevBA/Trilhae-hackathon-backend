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
<h2>Tela de Cadastro</h2>
<form action="{{action('StudentController@store')}}" method="post">
{{csrf_field() }}
{{ method_field('POST') }}
<div class="form-group">
<label>Nome Completo:</label>
<input type="text" name="name" id="name" class="form-control" placeholder="Seu nome">
</div>
<div class="form-group">
<label>Curso:</label>
<input type="text" name="course"  id="course"  class="form-control" placeholder="Curso">
</div>
<div class="form-group">
<label>Endereço:</label>
<input type="text" name="address"  id="address"  class="form-control" placeholder="Endereço">
</div>
<div class="form-group">
<label>Email:</label>
<input type="text" name="email"  id="email"  class="form-control" placeholder="Email">
</div>
<div class="form-group">
<label>Telefone:</label>
<input type="text" name="mobile" id="mobile"  class="form-control" placeholder="Telefone">
</div>
<button type="submit" name="submit" href="/students" class="btn btn-primary">Cadastrar</button>
</form>
</div>
</div>
</div>
</body>
</html>
