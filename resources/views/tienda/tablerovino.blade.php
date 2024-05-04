@extends('adminlte::page')

@section('title', 'Tablero Vino')

@section('content')
    <div class="product" style="display: flex;">    
        <i class="fa-solid fa-arrow-right fa-rotate-180"></i><img src="/img/ajedrez_vino.jpg" alt="Imagen del producto" width="400px"><i class="fa-solid fa-arrow-right"></i>
        <div style="margin-left: 20px;">
            <h2 class="card">AJEDREZ KIT VINO</h2>

            <h2>COMPRAR <i class="fa-solid fa-tag fa-beat"></i></h2>
            <p>Descripción:un tablero de ajedrez con un kit de vino</p>
            <p>Precio: $99.99</p>
            <a href="http://127.0.0.1:8000/tienda/tablerovinocompra" class="btn btn-primary">comprar directamente</a>
            <h2>Carrito de compras <i class="fa-solid fa-cart-shopping"></i></h2>
            <p>ajedrez kit vino: $99.99</p> 
            <p>Total: $99.99</p>
            <a href="" class="btn btn-primary">Poner en Carrito de compras</a>  
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .pagos{
    
            padding-left: 50px;
            padding-top: 20px;
            padding-right: 50px;
            padding-bottom: 20px;
        }
        .btn {
            display: inline-block;
            margin-right: 10px;
            margin-bottom: 10px;
            padding: 10px 20px;
            text-decoration: none;
            color: #333;
            border: 1px solid #ccc;
            transition: transform 0.3s ease; /* Transición suave para transformaciones */
        }
    
        .btn:hover {
            transform: scale(1.05); /* Aumentar el tamaño al 105% en hover */
            box-shadow: 4px 4px 8px rgba(71, 70, 70, 0.5)
        }
        h2 {
            color: rgba(0, 0, 0, 0.8); /* Color negro con opacidad (alpha) del 80% */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); /* Sombra con desplazamiento y desenfoque */
        }
    
        .btn i {
            text-shadow: none; /* Anular la sombra para los iconos dentro de los botones */
        }
    </style>
@stop