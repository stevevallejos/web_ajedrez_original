@extends('adminlte::page')
@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"> --}}
@stop
@section('title', 'Dashboard')

@section('content_header')
    <h1>Tablero</h1>
@stop

@section('content')
<body>
<div class="container">
    <div class="col text-center">
        <div class="row">
            <div class="col-6">
                <div class="card"> 
                    <div class="card-header">
                    Notacion Algebráica
                    </div>
                    <div class="card-body">
                        <canvas id="chessboard" width="500" height="500"></canvas>
                    </div>
                    <h2>mas informacion</h2>
                    <p>1. **Coordenadas:** Tablero con columnas de "a" a "h" y filas de "1" a "8".</p>
   <p>2. **Piezas:** Cada tipo de pieza se representa por una letra (K, Q, R, B, N). El peón no tiene letra</p>
             
   <a href="{{url('tabla/idiomas')}}" class="">idiomas🌐</a>
   <div class="text-center">
   <img src="img/phpqMSyzw.png" alt="imagen" width="260" >
    </div>
   
   <p>3. **Movimientos:** Se indican con la pieza (excepto peones) y las coordenadas de destino, por ejemplo, "e4"</p>
   
   <p>4. **Capturas:** Se marca con "x" entre la pieza y la coordenada de destino, por ejemplo, "Nxf3".</p>
   
   <p>5. **Enroque:** Se anota como "O-O" para el enroque corto y "O-O-O" para el enroque largo.</p>
   
   6. **Jaque y jaque mate:** "+" para jaque, "++" o "#" para jaque mate.</p>
   <h2>------------NUMEROS Y LETRAS-----------</h2>
   <p>    a1, a2, a3, a4, a5, a6, a7, a8
    b1, b2, b3, b4, b5, b6, b7, b8
    c1, c2, c3, c4, c5, c6, c7, c8
    d1, d2, d3, d4, d5, d6, d7, d8
    e1, e2, e3, e4, e5, e6, e7, e8
    f1, f2, f3, f4, f5, f6, f7, f8
    g1, g2, g3, g4, g5, g6, g7, g8
    h1, h2, h3, h4, h5, h6, h7, h8
</p>
<div class="text-center">
    <img src="img/AlgebraicNotationOnChessboard.png" alt="" width="210px">
</div>
<h2>----------CURIOSIDADES?----------</h2>
<h3>teoria de el tablero esfera</h3>
<div class="text-center">
    <img src="img/phpmHlVgg.png" alt="" width="210px">
    <img src="img/524280.529e6521.5000x5000o.7cf21ed728a4.png" alt="" width="210px">
</div>
<p class="text-align">
    La teoría de que "el tablero de ajedrez es también una esfera" es una idea más abstracta y geométrica que implica visualizar el tablero de ajedrez como una superficie esférica en lugar de una superficie plana. A continuación, te resumo los puntos clave de esta teoría:

    Superficie cerrada: En lugar de un tablero plano, la teoría visualiza el tablero de ajedrez como una esfera, donde los bordes del tablero se conectan para formar una superficie cerrada.

    Continuidad: Cuando un jugador mueve una pieza más allá de un borde del tablero, reaparece en el lado opuesto. Por ejemplo, si una pieza se mueve más allá de la columna "h", reaparecerá en la columna "a" correspondiente.

    Nueva estrategia: El concepto introduce nuevas estrategias y tácticas debido a la continuidad de la superficie, lo que permite movimientos que serían imposibles en un tablero plano tradicional.

    Desafío adicional: Los jugadores deben adaptar su pensamiento a esta nueva disposición, ya que las jugadas no se limitan por los bordes del tablero, lo que puede hacer que los juegos sean más complejos.

    Aplicaciones matemáticas: Esta teoría tiene aplicaciones en la topología y la geometría, ya que se refiere a la transformación de un objeto plano en una superficie esférica.

    En resumen, esta teoría desafía la concepción tradicional del tablero de ajedrez al considerarlo una superficie esférica, lo que añade complejidad y nuevas posibilidades tácticas al juego.
</p>
<div class="text-center">
    <img src="img/images.jpg" alt="" width="200px">
</div>
                </div>
            </div>
            <div class="col-6">
                <div class="card"> 
                    <div class="card-header">
                        Tablero AJEDREZ
                    </div>
                    <div class="card-body">
                        <canvas id="chessboard" width="500" height="500"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script>
        var canvas = document.getElementById('chessboard');
        var lapiz = canvas.getContext('2d');
        var ancho = 400 / 8;
        for (var i = 0; i < 8; i++) {
            for (var j = 0; j < 8; j++) {
                if ((i + j) % 2 === 0) {
                    lapiz.fillStyle = '#909090';
                } else {
                    lapiz.fillStyle = '#FFFFFF';
                }
                lapiz.fillRect(i * ancho, j * ancho, ancho, ancho);
            
            }
        }
        lapiz.fillStyle = '#000000';
        lapiz.font = '30px Arial';
        lapiz.fillText('♜', 0, 0);
        lapiz.fillText('♞', 1 * ancho, 0);
        lapiz.fillText('♝', 2 * ancho, 0);
        lapiz.fillText('♛', 3 * ancho, 0);
        lapiz.fillText('♚', 4 * ancho, 0);
        lapiz.fillText('♝', 5 * ancho, 0);
        lapiz.fillText('♞', 6 * ancho, 0);
        lapiz.fillText('♜', 7 * ancho, 0);
        lapiz.fillText('♟', 0, 1 * ancho);
        lapiz.fillText('♟', 1 * ancho, 1 * ancho);
        lapiz.fillText('♟', 2 * ancho, 1 * ancho);
        lapiz.fillText('♟', 3 * ancho, 1 * ancho);
        lapiz.fillText('♟', 4 * ancho, 1 * ancho);
        lapiz.fillText('♟', 5 * ancho, 1 * ancho);
        lapiz.fillText('♟', 6 * ancho, 1 * ancho);
        lapiz.fillText('♟', 7 * ancho, 1 * ancho);
        lapiz.fillText('♙', 0, 6 * ancho +20);
        lapiz.fillText('♙', 1 * ancho, 6 * ancho);
        lapiz.fillText('♙', 2 * ancho, 6 * ancho);
        lapiz.fillText('♙', 3 * ancho, 6 * ancho);
        lapiz.fillText('♙', 4 * ancho, 6 * ancho);
        lapiz.fillText('♙', 5 * ancho, 6 * ancho);
        lapiz.fillText('♙', 6 * ancho, 6 * ancho);
        lapiz.fillText('♙', 7 * ancho, 6 * ancho);
        lapiz.fillText('♖', 0, 7 * ancho);
        lapiz.fillText('♘', 1 * ancho, 7 * ancho);
        lapiz.fillText('♗', 2 * ancho, 7 * ancho);
        lapiz.fillText('♕', 3 * ancho, 7 * ancho);
        lapiz.fillText('♔', 4 * ancho, 7 * ancho);
        lapiz.fillText('♗', 5 * ancho, 7 * ancho);
        lapiz.fillText('♘', 6 * ancho, 7 * ancho);
        lapiz.fillText('♖', 7 * ancho, 7 * ancho);
        lapiz.fillText("1",410 , 35 )
        lapiz.fillText("2",410 , 85 )
        lapiz.fillText("3",410 , 141 )
        lapiz.fillText("4",410 , 189 )
        lapiz.fillText("5",410 , 244 )
        lapiz.fillText("6",410 , 289 )
        lapiz.fillText("7",410 , 344 )
        lapiz.fillText("8",410 , 389 )
        

        lapiz.strokeRect(0, 0, canvas.width, canvas.height);  
    </script>
</body>


<
    <script>
        var canvas = document.getElementById('chessboard');
        var lapiz = canvas.getContext('2d');
        var ancho = 400 / 8;
        for (var i = 0; i < 8; i++) {
            for (var j = 0; j < 8; j++) {
                if ((i + j) % 2 === 0) {
                    lapiz.fillStyle = '#909090';
                } else {
                    lapiz.fillStyle = '#FFFFFF';
                }
                lapiz.fillRect(i * ancho, j * ancho, ancho, ancho);
            
            }
        }
        lapiz.fillStyle = '#000000';
        lapiz.font = '30px Arial';
        lapiz.fillText("1",410 , 35 )
        lapiz.fillText("2",410 , 85 )
        lapiz.fillText("3",410 , 141 )
        lapiz.fillText("4",410 , 189 )
        lapiz.fillText("5",410 , 244 )
        lapiz.fillText("6",410 , 289 )
        lapiz.fillText("7",410 , 344 )
        lapiz.fillText("8",410 , 389 )
        lapiz.fillText("a", 22, 427)
        lapiz.fillText("b", 70, 427)
        lapiz.fillText("c", 116, 427)
        lapiz.fillText("d", 170, 427)
        lapiz.fillText("e", 223, 427)
        lapiz.fillText("f", 289, 427)
        lapiz.fillText("g", 344, 427)
        lapiz.fillText("h", 389, 427) 
        
        
        lapiz.font = '15px Arial';
        lapiz.fillText("A1", 20, 30) ///X,Y
        lapiz.fillText("B1", 68, 30) ///X,Y
        lapiz.fillText("C1", 118, 30) ///X,Y
        lapiz.fillText("D1", 163, 30) ///X,Y
        lapiz.fillText("E1", 220, 30) ///X,Y
        lapiz.fillText("F1", 263, 30) ///X,Y
        lapiz.fillText("G1", 310, 30) ///X,Y
        lapiz.fillText("H1", 363, 30) ///X,Y

        lapiz.fillText("A2", 20, 80) ///X,Y
        lapiz.fillText("B2", 68, 80) ///X,Y
        lapiz.fillText("C2", 118, 80) ///X,Y
        lapiz.fillText("D2", 163, 80) ///X,Y
        lapiz.fillText("E2", 220, 80) ///X,Y
        lapiz.fillText("F2", 263, 80) ///X,Y
        lapiz.fillText("G2", 310, 80) ///X,Y
        lapiz.fillText("H2", 363, 80) ///X,Yz

        lapiz.fillText("A3", 20, 130) ///X,Y
        lapiz.fillText("B3", 68, 130) ///X,Y
        lapiz.fillText("C3", 118, 130) ///X,Y
        lapiz.fillText("D3", 163, 130) ///X,Y
        lapiz.fillText("E3", 220, 130) ///X,Y
        lapiz.fillText("F3", 263, 130) ///X,Y
        lapiz.fillText("G3", 310, 130) ///X,Y
        lapiz.fillText("H3", 363, 130) ///X,Yz
        
        lapiz.fillText("A4", 20, 187) ///X,Y
        lapiz.fillText("B4", 68, 187) ///X,Y
        lapiz.fillText("C4", 118, 187) ///X,Y
        lapiz.fillText("D4", 163, 187) ///X,Y
        lapiz.fillText("E4", 220, 187) ///X,Y
        lapiz.fillText("F4", 263, 187) ///X,Y
        lapiz.fillText("G4", 310, 187) ///X,Y
        lapiz.fillText("H4", 363, 187) ///X,Yz

        lapiz.fillText("A5", 20, 239) ///X,Y
        lapiz.fillText("B5", 68, 239) ///X,Y
        lapiz.fillText("C5", 118, 239) ///X,Y
        lapiz.fillText("D5", 163, 239) ///X,Y
        lapiz.fillText("E5", 220, 239) ///X,Y
        lapiz.fillText("F5", 263, 239) ///X,Y
        lapiz.fillText("G5", 310, 239) ///X,Y
        lapiz.fillText("H5", 363, 239) ///X,Yz

        lapiz.fillText("A6", 20, 280) ///X,Y
        lapiz.fillText("B6", 68, 280) ///X,Y
        lapiz.fillText("C6", 118, 280) ///X,Y
        lapiz.fillText("D6", 163, 280) ///X,Y
        lapiz.fillText("E6", 220, 280) ///X,Y
        lapiz.fillText("F6", 263, 280) ///X,Y
        lapiz.fillText("G6", 310, 280) ///X,Y
        lapiz.fillText("H6", 363, 280) ///X,Yz

        lapiz.fillText("A7", 20, 330) ///X,Y
        lapiz.fillText("B7", 68, 330) ///X,Y
        lapiz.fillText("C7", 118, 330) ///X,Y
        lapiz.fillText("D7", 163, 330) ///X,Y
        lapiz.fillText("E7", 220, 330) ///X,Y
        lapiz.fillText("F7", 263, 330) ///X,Y
        lapiz.fillText("G7", 310, 330) ///X,Y
        lapiz.fillText("H7", 363, 330) ///X,Yz

        lapiz.fillText("A8", 20, 380) ///X,Y
        lapiz.fillText("B8", 68, 380) ///X,Y
        lapiz.fillText("C8", 118, 380) ///X,Y
        lapiz.fillText("D8", 163, 380) ///X,Y
        lapiz.fillText("E8", 220, 380) ///X,Y
        lapiz.fillText("F8", 263, 380) ///X,Y
        lapiz.fillText("G8", 310, 380) ///X,Y
        lapiz.fillText("H8", 363, 380) ///X,Yz


        lapiz.strokeRect(0, 0, canvas.width, canvas.height);
    </script>
    </div>
</body>
@stop



@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop