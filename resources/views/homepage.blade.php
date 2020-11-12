@extends('layouts.master')
@section('title', 'Ezequiel Vera Aguirre 5°E')

@section('navbar')
@parent
@stop

@section('header')
@stop

@section('content')
<h1 id="title">¡Bienvenido!</h1>

    <a href="{{route('pintor1')}}"><img id="tamañoImg" src="images/rembrandt.jpg" title="Rembrandt Harmenszoon van Rijn">
    <p id="text">Rembrandt Harmenszoon van Rijn</p></a>

    <a href="{{route('pintor2')}}"><img id="tamañoImg" src="images/rafaello.jpg" title="Raffaello Sanzio">
    <p id="text">Raffaello Sanzio</p></a>
    </div>

    <a href="{{route('pintor3')}}"><img id="tamañoImg" src="images/johnSinger.jpg" title="John Singer Sargent">
    <p id="text">John Singer Sargent</p></a>

    <a href="{{action('ControllerPin@pintor4')}}"><img id="tamañoImg" src="images/juanGris.jpg" title="Juan Gris">
    <p id="text">Juan Gris</p></a>

    <a href="{{action('ControllerPin@pintor5')}}"><img id="tamañoImg" src="images/fridaKahlo.jpg" title="Frida Kahlo">
    <p id="text">Frida Kahlo</p></a>
@stop

@section('footer')
@parent
@stop