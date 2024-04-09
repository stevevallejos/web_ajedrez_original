@extends('adminlte::page')

@section('title','Peón')

@section('content_header')
<h1>Peón</h1>
@stop

@section('content')
    <div class="text-center">La pieza de la dama</div>
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
                    <td>Movimiento:</td>
                    <td>La Dama en el ajedrez se mueve en líneas rectas tanto horizontal, vertical y diagonal, a través de cualquier número de casillas libres, lo que la convierte en una pieza poderosa y versátil.</td>
                    <td><img src="/public/img/primer_movimiento.png" alt=""></td>
                </tr>
                
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
            <img src={{ asset('img/damablanca.png') }} alt="" height="700">
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
