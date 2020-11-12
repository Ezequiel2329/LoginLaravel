<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Ezequiel Vera Aguirre')</title>
</head>
<body>
    @section('navbar')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <p class="navbar-brand">Barra de navegacion</p>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">

      <li class="nav-item active">
        <a class="nav-link" href="{{route('inicio')}}">Pagina principal</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Pintores
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{route('pintor1')}}">Rembrandt</a>
          <a class="dropdown-item" href="{{route('pintor2')}}">Raffaello Sanzio</a>
          <a class="dropdown-item" href="{{route('pintor3')}}">John Singer Sargent</a>
          <a class="dropdown-item" href="{{action('ControllerPin@pintor4')}}">Juan Gris</a>
          <a class="dropdown-item" href="{{action('ControllerPin@pintor5')}}">Frida Kahlo</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
    @show