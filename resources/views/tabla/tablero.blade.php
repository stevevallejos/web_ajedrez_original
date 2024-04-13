@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<body>
    <canvas id="chessboard" width="500" height="500"></canvas>
    <script>
        var canvas = document.getElementById('chessboard');
        var lapiz = canvas.getContext('2d');
        var ancho = 400 / 8;
        for (var i = 0; i < 8; i++) {
            for (var j = 0; j < 8; j++) {
                if ((i + j) % 2 === 0) {
                    lapiz.fillStyle = '#000000';
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
        lapiz.fillText("a", 22, 419)
        lapiz.fillText("b", 70, 419)
        lapiz.fillText("c", 116, 419)
        lapiz.fillText("d", 170, 419)
        lapiz.fillText("e", 223, 419)
        lapiz.fillText("f", 289, 419)
        lapiz.fillText("g", 344, 419)
        lapiz.fillText("h", 389, 419)

        lapiz.strokeRect(0, 0, canvas.width, canvas.height);
    </script>
</body>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop