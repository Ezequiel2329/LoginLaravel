@extends('layouts.master')
@section('title')

@section('navbar')
@parent
@stop

@section('header')
    <h1>Juan Gris</h1>
@stop

@section('content')
    <h3>Biografia</h3>
    <p>Nace en Madrid en 1887, en el seno de una familia bien situada, lo que le permitió entrar gradualmente en un ambiente de clase media. 
        El lugar donde nació ocupa ahora el emplazamiento del Hotel Europa, en la calle del Carmen número 4. En este puede observarse su placa 
        conmemorativa de nacimiento.
        Sus primeros intentos como pintor en el cubismo son en el año de 1910, cuando fue dejando gradualmente las labores de ilustración, 
        aunque en los museos españoles existen pocos ejemplos de esta fase. El Museo Thyssen-Bornemisza posee un dibujo de 1911 que sorprende 
        por su radicalidad.
        Al igual que otros cubistas y que el arte moderno en general, Juan Gris tuvo escaso predicamento en los circuitos culturales españoles 
        mientras vivió. Todavía décadas después de su muerte, su producción tenía escasísima presencia en los museos públicos.</p>
    
    <h4>Cuadros</h4>

    <img src="images/p4c1.jpg" id="p4c1">
    <p id="contenidoPin">
        The Bottle of Anís del Mono<br>
        Juan Gris<br>
        1914</p>

    <img src="images/p4c2.png" id="p4c2">
    <p id="contenidoPin">
        Coffee Grinder and Glass<br>
        Juan Gris<br>
        1915</p>

    <img src="images/p4c5.jpg" id="p4c5">
    <p id="contenidoPin">
        Damier et cartes à jouer (Checkerboard and playing cards)<br>
        Juan Gris<br>
        1915</p>

    <img src="images/p4c4.jpg" id="p4c4">
    <p id="contenidoPin">
        Mujer sentada<br>
        Juan Gris<br>
        1917</p>
   
    <img src="images/p4c3.jpg" id="p4c3">
    <p id="contenidoPin">
        Man and Woman on Bench<br>
        Juan Gris<br>
        1908 - 1909</p>
@stop

@section('footer')
@parent
@stop