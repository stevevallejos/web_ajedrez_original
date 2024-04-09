@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Torre</h1>
@stop

@section('content')
<div class="text-center">La pieza de la torre</div>
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
                <td>3</td>
                    <td>Que es la captura</td>
                    <td>La Dama puede capturar una pieza enemiga moviéndose hacia una casilla ocupada por una pieza enemiga, reemplazándola y retirándola del tablero.</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                <td>4</td>
                    <td>El origen de su nombre</td>
                    <td>Aunque es conocida como "reina" en el ajedrez moderno, en sus inicios, esta pieza era llamada "vizir" en el ajedrez persa, y "ferz" en el ajedrez árabe. El término "reina" probablemente se popularizó durante la época medieval en Europa.</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                <td>5</td>
                    <td>Cuantos Damas hay?</td>
                    <td>Cada jugador tiene una Dama en total 2 Damas</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </t-body>

            </table>
    
        </div>
        <div class="col-6">
            <img src={{ asset('img/torreblanca.png') }} alt="" height="700">
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
        <tr>
            <td>1</td>
            <td>Primer movimiento:</td>
            <td>El primer movimiento de la torre en el juego de ajedrez es muy simple: la torre se mueve desde su posición inicial a cualquier casilla vacía que esté disponible en la fila o columna en la que se encuentra. Este movimiento es importante para controlar el centro del tablero y para conectar las torres entre sí, lo que puede ser estratégicamente beneficioso para el jugador.</td>
            <td><img src="/public/img/primer_movimiento.png" alt=""></td>
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
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop