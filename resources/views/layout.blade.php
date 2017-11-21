<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Aprendiendo Laravel</title>

	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.0.4/popper.js"></script>
            <script src="{{asset('components/bootstrap/js/jquery-1.9.1.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('components/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <link rel="stylesheet" href="{{asset('components/bootstrap/css/bootstrap.min.css')}}"/>
  </head>
  <body>
      @yield('content')
     <div class="container">
	 <form>
	 @yield('form')

	</form>
	<table class="table">
	<thead>
	<th>Nombre</th>
	<th>Apellido</th>
	<th>direccion</th>
	<th>Cedula</th>
	</thead>
	<tbody>
    @foreach ($usuarios as $user)
      <tr><td>{{ $user->nombre }}</td>
      <td>{{ $user->apellido }}</td>
      <td>{{ $user->direccion }}</td>
      <td>{{ $user->cedula }}</td></tr>
    @endforeach
  <tr><td><?php //echo $_GET['txtapellido'];?></td></tr>
	<tr><td><?php //echo $_GET['txtedad'];?></td></tr>
	</tbody>
	</table>

	</div>
  </body>
</html>
