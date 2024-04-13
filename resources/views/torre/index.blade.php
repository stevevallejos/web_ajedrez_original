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
                <td>1</td>
                    <td>El origen de su nombre</td>
                    <td>El nombre "torre" en el ajedrez se deriva del término persa antiguo "rukh", que significa "carro de guerra".</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                <td>2</td>
                    <td>Cuantos Torres hay?</td>
                    <td>En una partida estándar de ajedrez, cada jugador comienza con dos torres, para un total de cuatro torres en el tablero. Las torres se colocan en las esquinas de la fila más interna del tablero al comienzo del juego.</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                <td>3</td>
                    <td>Que es la Maniobras de desviación</td>
                    <td>En algunas ocasiones, se puede usar una torre para desviar la atención de una pieza enemiga importante. Por ejemplo, mover una torre a una casilla que ataque a una pieza enemiga, obligando al oponente a responder, mientras simultáneamente se abre una línea de ataque para otra pieza propia.</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </t-body>

            </table>
    
        </div>
        <div class="col-6">
            <img src={{ asset('img/torreblanca.png') }} alt="" height="700">
            <button type="button" class="btn btn-warning">COMPRAR !!!</button>
            <a href="file:///D:/projectos%20programacion/canvas/prueba.html" class="btn btn-success">Mas detalles a fondo.</a>
            <a href="./masinfo.blade.php" class="btn btn-primary" >leer mas</a>
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
            <td>4</td>
            <td>Primer movimiento:</td>
            <td>El primer movimiento de la torre en el juego de ajedrez es muy simple: la torre se mueve desde su posición inicial a cualquier casilla vacía que esté disponible en la fila o columna en la que se encuentra. Este movimiento es importante para controlar el centro del tablero y para conectar las torres entre sí, lo que puede ser estratégicamente beneficioso para el jugador.</td>
            <td><img src="/public/img/primer_movimiento.png" alt=""></td>
        </tr>
        <tr>
                <td>5</td>
                    <td>Que es sacrificio de torre</td>
                    <td>Aunque menos común que otros sacrificios, a veces se pueden hacer sacrificios de torre para obtener una ventaja posicional o táctica. Por ejemplo, sacrificando una torre para abrir una línea de ataque hacia el rey enemigo o para crear una oportunidad de mate.</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
        <tr>
        <td>6</td>
            <td>Que es son las torres pasadas</td>
            <td>Las torres pasadas son aquellas que no tienen piezas enemigas que las bloqueen en su camino hacia la octava fila. Estas torres pueden ser muy poderosas, ya que pueden avanzar hasta la fila final y convertirse en una pieza más poderosa, como una dama o un caballo.</td>
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