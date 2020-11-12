@extends('layouts.master')
@section('title', 'Inicio')

@section('navbar')
@stop
@section('header')
<br><h1 id="titlelogin">Inicio de sesion</h1><br>
@stop

@section('content')
    <form action="{{action('ControllerPin@validar')}}" method="post">
        {{csrf_field()}}
        <div id="loginP">
        <label for="usuario">Usuario</label>
        <br>
        <input type="text" name="usuario" placeholder="Escribir...">

        <br>

        <label for="Contraseña">Contraseña</label>
        <br>
        <input type="password" name="Contraseña" placeholder="Escribir...">

        <br>

        <label for="key">Key</label>
        <br>
        <input type="key" name="key" placeholder="Escribir...">

        <br>
        <br>

        <input type="submit" value="Iniciar Sesion" id="boton">
        </div>
    </form>
@stop

@section('footer')
@parent
@stop