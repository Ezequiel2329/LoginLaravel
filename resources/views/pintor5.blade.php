@extends('layouts.master')
@section('title')

@section('navbar')
@parent
@stop

@section('header')
    <h1>Frida Kahlo</h1>
@stop

@section('content')
    <h3>Biografia</h3>
    <p>Magdalena Carmen Frida Kahlo Calderón fue una pintora mexicana.​ Su vida estuvo marcada por el infortunio de 
        sufrir un grave accidente en su juventud que la mantuvo postrada en cama durante largos periodos, llegando 
        a someterse hasta a 32 operaciones quirúrgicas.​ Llevó una vida poco convencional.​ Su obra pictórica gira 
        temáticamente en torno a su biografía y a su propio sufrimiento. Fue autora de 150 obras, principalmente 
        autorretratos, en los que proyectó sus dificultades por sobrevivir. La obra de Frida y la de su marido, 
        el pintor Diego Rivera, se influyeron mutuamente. Ambos compartieron el gusto por el arte popular mexicano 
        de raíces indígenas, inspirando a otros pintores mexicanos del periodo posrevolucionario.
        <br><br>
        En 1939 expuso sus pinturas en Francia gracias a una invitación de André Breton, quien intentó convencerla 
        de que eran «surrealistas», aunque Kahlo decía que esta tendencia no correspondía con su arte ya que ella 
        no pintaba sueños sino su propia vida. Una de las obras de esta exposición se convirtió en el primer cuadro 
        de un artista mexicano adquirido por el Museo del Louvre.
    
    </p>
    <h4>Cuadros</h4>

    <img src="images/p5c1.jpg" id="p5c1">
        <p id="contenidoPin">
            La columna rota<br>
            Frida Kahlo - 1944</p>

    <img src="images/p5c2.jpg" id="p5c2">
        <p id="contenidoPin">
            Frieda y Diego Rivera<br>
            Frida Kahlo - 1931</p>

    <img src="images/p5c3.jpg" id="p5c3">
        <p id="contenidoPin">
            Autorretrato con Mono<br>
            Frida Kahlo - 1945</p>
        
    <img src="images/p5c4.jpg" id="p5c4">
        <p id="contenidoPin">
            Niña con máscara de muerte<br>
            Frida Kahlo - 1938</p>

    <img src="images/p5c5.jpg" id="p5c5">
        <p id="contenidoPin">
            Retrato de Alejandro Gómez Arias<br>
            Frida Kahlo - 1928</p>
@stop

@section('footer')
@parent
@stop