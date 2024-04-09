@extends('adminlte::page')

@section('title','Peón')

@section('content_header')
<h1>Peón</h1>
@stop

@section('content')
    <div class="text-center">La pieza de Peón</div>
    <div class="row">
        <div class="col-6">
            <table class="table table-bordered table-striped table-hoved">
                <t-head>
                    <th>#</th>
                    <th>ITEM</th>
                    <th>DESCRIPCION</th>
                </t-head>
            <t-body> 
            <tr>
                    <td>1</td>
                    <td>Primer movimiento:</td>
                    <td>Puede avanzar dos casillas desde su posición inicial y una casilla en las siguientes jugadas. En los siguientes turnos, puede avanzar una sola casilla hacia adelante.</td>
                    <td><img src="/public/img/primer_movimiento.png" alt=""></td>
                </tr>
                
                <tr>
                    <td>2</td>
                    <td>Movimiento estandar</td>
                    <td>En los siguientes turnos, puede avanzar una sola casilla hacia adelante.</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                <td>3</td>
                    <td>Que son los peones doblados?</td>
                    <td>Cuando dos peones del mismo color están en la misma columna, se consideran peones doblados. Esta situación puede ser una debilidad, ya que los peones no pueden protegerse entre sí.</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                <td>4</td>
                    <td>Como atacan ?</td>
                    <td>Los peones pueden capturar las piezas enemigas moviéndose una casilla diagonalmente hacia adelante.</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                <td>5</td>
                    <td>Cuantos peones hay?</td>
                    <td>En una partida estándar de ajedrez, cada jugador tiene un total de 8 peones al comienzo del juego, lo que hace un total de 16 peones en el tablero.</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </t-body>

            </table>
    
        </div>
        <div class="col-6">
            <img src={{ asset('img/peon.png') }} alt="" height="700">
        </div>
    </div>






    <table class="table table-bordered table-striped table-hover">
        <thead>
            <th>#</th>
            <th>ITEM</th>
            <th>DESCRIPCION</th>
            <th>COMPRAR</th>
            <th>NACIMIENTO</th>
            <th>GRAFICO</th>
        </thead>
        <tbody>
        <td>3</td>
            <td>Que es una promocion?</td>
            <td>Cuando un peón alcanza la última fila del tablero (la fila más cercana al oponente), el jugador puede elegir promoverlo a una pieza de mayor valor, generalmente una dama, torre, alfil o caballo.</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <td>4</td>
            <td>que es un peón pasado?</td>
            <td>Un peón pasado es un peón que no tiene peones enemigos que lo puedan bloquear en su camino hacia la promoción. Los peones pasados son valiosos porque pueden convertirse en una nueva pieza y representar una amenaza importante para el oponente.</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
        <td>8</td>
            <td>Dato curioso</td>
            <td>Un hecho poco conocido sobre los peones es que en la historia del ajedrez, hubo una variante llamada "Peón del Rey", en la cual el peón que estaba en la columna de al lado del rey podía mover dos casillas hacia adelante en su primer movimiento, similar al "Movimiento Inicial Doble" de los peones en el ajedrez estándar. Sin embargo, esta variante no se popularizó y eventualmente cayó en desuso.</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
        <tfoot>

        </tfoot>
    </table>
@stop
@section('css')

@stop

@section('js')
<script>console.log("Hi, I'm using the Laravel-AdminLTE package"):</script>
@stop
