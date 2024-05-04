@extends('adminlte::page')

@section('content')
<div class="text-center">
    <h1>¡Bienvenido a la tienda!</h1>
    <p>En esta tienda podrás encontrar los mejores productos para tu hogar.</p>

        <!-- Barra de búsqueda -->
        <div class="input-group mb-3">
            <input id="searchInput" type="text" class="form-control" placeholder="Buscar productos...">
            <div class="input-group-append">
                <button id="searchButton" class="btn btn-outline-secondary" type="button">
                    <i class="fas fa-search"></i> Buscar
                </button>
            </div>
        </div>
</div>

<div class="row" id="productList">
    <!-- Bloques de productos -->
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card">
            <img src="/img/ajedrez_vino.jpg" class="card-img-top" alt="Imagen 1" width="60px" height="400px">
            <div class="card-body">
                <h5 class="card-title">Tabla ajedrez_vino</h5>
                <p class="card-text">Kit de ajedrez "vino"</p>
                <a href="http://127.0.0.1:8000/tienda/tablerovino" class="btn btn-primary">COMPRAR!!</a>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card">
            <img src="/img/magneticgames.webp" class="card-img-top" alt="Imagen 1" width="60px" height="400px">
            <div class="card-body">
                <h5 class="card-title">tablero magnetic games</h5>
                <p class="card-text">incluye juego de cartas y tablero de ajedrez y damas</p>
                <a href="http://127.0.0.1:8000/tienda/tablerovino" class="btn btn-primary">COMPRAR!!</a>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card">
            <img src="/img/A12bK6Dse2L.jpg" width="30px" class="card-img-top" alt="Imagen 2">
            <div class="card-body">
                <h5 class="card-title">tradition chess</h5>
                <p class="card-text">Pieza de rey</p>
                <a href="link_de_la_categoría_2" class="btn btn-success">COMPRAR!!</a>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card">
            <img src="/img/gambito-de-dama-el-juego-de-tablero.webp" class="card-img-top" alt="Imagen 3" width="30px">
            <div class="card-body">
                <h5 class="card-title">ajedrez gambito de dama</h5>
                <p class="card-text">Descripción de la categoría 3.</p>
                <a href="link_de_la_categoría_3" class="btn btn-primary">COMPRAR!!</a>
            </div>
        </div>
    </div>

    <!-- Más bloques de productos -->
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card">
            <img src="/img/D_NQ_NP_706408-MLA50694814203_072022-O.webp" class="card-img-top" alt="Imagen 4" width="30px">
            <div class="card-body">
                <h5 class="card-title">Tazas de ajedrez</h5>
                <p class="card-text">Descripción de la categoría 4.</p>
                <a href="link_de_la_categoría_4" class="btn btn-primary">COMPRAR!!</a>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card">
            <img src="/img/chessvi.jpg" class="card-img-top" alt="Imagen 5" width="20px">
            <div class="card-body">
                <h5 class="card-title">Ajedrez cristal</h5>
                <p class="card-text">Descripción de la categoría 5.</p>
                <a href="link_de_la_categoría_5" class="btn btn-primary">COMPRAR!!</a>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card">
            <img src="/img/ajedreza.webp" class="card-img-top" alt="Imagen 6" width="20px">
            <div class="card-body">
                <h5 class="card-title">Tablero para guardar piezas</h5>
                <p class="card-text">Descripción de la categoría 6.</p>
                <a href="link_de_la_categoría_6" class="btn btn-primary">COMPRAR!!</a>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card">
            <img src="/img/chessgold.jpg" class="card-img-top" alt="Imagen 3" width="20px">
            <div class="card-body">
                <h5 class="card-title">GOLD CHESS</h5>
                <p class="card-text">Descripción de la categoría 7.</p>
                <a href="link_de_la_categoría_3" class="btn btn-primary">COMPRAR!!</a>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card">
            <img src="/img/GLOBOCHESS.png" class="card-img-top" alt="Imagen 3" width="20px">
            <div class="card-body">
                <h5 class="card-title">tablero esfera</h5>
                <p class="card-text">Descripción de la categoría 8.</p>
                <a href="link_de_la_categoría_3" class="btn btn-primary">COMPRAR!!</a>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card">
            <img src="/img/ajedrezold.jpg" class="card-img-top" alt="Imagen 3" width="20px">
            <div class="card-body">
                <h5 class="card-title">polera negra de WEB_AJEDERZ</h5>
                <p class="card-text">Descripción de la categoría 10.</p>
                <a href="link_de_la_categoría_3" class="btn btn-primary">COMPRAR!!</a>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card">
            <img src="/img/pelucheschess.webp" class="card-img-top" alt="Imagen 3" width="20px">
            <div class="card-body">
                <h5 class="card-title">peluches de ajedrez</h5>
                <p class="card-text">Descripción de la categoría 10.</p>
                <a href="link_de_la_categoría_3" class="btn btn-primary">COMPRAR!!</a>
            </div>
        </div>
    </div>    

    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card">
            <img src="/img/peonverde.png" class="card-img-top" alt="Imagen 3" width="20px">
            <div class="card-body">
                <h5 class="card-title">peluches de ajedrez verde</h5>
                <p class="card-text">Descripción de la categoría 10.</p>
                <a href="link_de_la_categoría_3" class="btn btn-primary">COMPRAR!!</a>
            </div>
        </div>
    </div>    

    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card">
            <img src="/img/71fOTqXAlVL.jpg" class="card-img-top" alt="Imagen 3" width="20px">
            <div class="card-body">
                <h5 class="card-title">juego de ajedrez esculpido</h5>
                <p class="card-text">Descripción de la categoría 10.</p>
                <a href="link_de_la_categoría_3" class="btn btn-primary">COMPRAR!!</a>
            </div>
        </div>
    </div>    

    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card">
            <img src="/img/chaturanga.jpeg" class="card-img-top" alt="Imagen 3" width="20px">
            <div class="card-body">
                <h5 class="card-title">juego de ajedrez esculpido</h5>
                <p class="card-text">Descripción de la categoría 10.</p>
                <a href="link_de_la_categoría_3" class="btn btn-primary">COMPRAR!!</a>
            </div>
        </div>
    </div> 
    
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card">
            <img src="/img/escultura1.jpg" class="card-img-top" alt="Imagen 3" width="20px">
            <div class="card-body">
                <h5 class="card-title">escultura de piezas de ajedrez</h5>
                <p class="card-text">Descripción de la categoría 10.</p>
                <a href="link_de_la_categoría_3" class="btn btn-primary">COMPRAR!!</a>
            </div>
        </div>
    </div>  


    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card">
            <img src="/img/Sintítulo(7).png" class="card-img-top" alt="Imagen 3" width="20px">
            <div class="card-body">
                <h5 class="card-title">polera negra de WEB_AJEDERZ</h5>
                <p class="card-text">Descripción de la categoría 9.</p>
                <a href="link_de_la_categoría_3" class="btn btn-primary">COMPRAR!!</a>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card">
            <img src="/img/posterchess.png" class="card-img-top" alt="Imagen 3" width="20px">
            <div class="card-body">
                <h5 class="card-title">poster de WEB_AJEDERZ</h5>
                <p class="card-text">Descripción de la categoría 11.</p>
                <a href="link_de_la_categoría_3" class="btn btn-primary">COMPRAR!!</a>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card">
            <img src="/img/almoda.png" class="card-img-top" alt="Imagen 3" width="20px">
            <div class="card-body">
                <h5 class="card-title">almoada de WEB_AJEDERZ</h5>
                <p class="card-text">Descripción de la categoría 12.</p>
                <a href="link_de_la_categoría_3" class="btn btn-primary">COMPRAR!!</a>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card">
            <img src="/img/gorrochess.png" class="card-img-top" alt="Imagen 3" width="20px">
            <div class="card-body">
                <h5 class="card-title">gorro negro de WEB_AJEDERZ</h5>
                <p class="card-text">Descripción de la categoría 13.</p>
                <a href="link_de_la_categoría_3" class="btn btn-primary">COMPRAR!!</a>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card">
            <img src="/img/chicasjugandochess.png" class="card-img-top" alt="Imagen 3" width="20px">
            <div class="card-body">
                <h5 class="card-title">poster de chicas jugando ajedrez</h5>
                <p class="card-text">Descripción de la categoría 14.</p>
                <a href="link_de_la_categoría_3" class="btn btn-primary">COMPRAR!!</a>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card">
            <img src="/img/diccionario.png" class="card-img-top" alt="Imagen 3" width="20px">
            <div class="card-body">
                <h5 class="card-title">diccionario de web ajederz</h5>
                <p class="card-text">Descripción de la categoría 14.</p>
                <a href="link_de_la_categoría_3" class="btn btn-primary">COMPRAR!!</a>
            </div>
        </div>
    </div>


</div>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/admin_custom.css">

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

@section('js')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Obtiene la lista de tarjetas de productos
        const productList = document.getElementById('productList').getElementsByClassName('card');

        // Captura el evento de clic en el botón de búsqueda
        document.getElementById('searchButton').addEventListener('click', function() {
            filterProducts();
        });

        // Captura el evento de tecla presionada en el campo de búsqueda
        document.getElementById('searchInput').addEventListener('keyup', function(event) {
            if (event.key === 'Enter') {
                filterProducts();
            }
        });

        // Función para filtrar productos según el término de búsqueda
        function filterProducts() {
            const searchTerm = document.getElementById('searchInput').value.trim().toLowerCase();
            
            // Itera sobre las tarjetas de productos y muestra u oculta según el término de búsqueda
            Array.from(productList).forEach(function(card) {
                const cardTitle = card.querySelector('.card-title').textContent.trim().toLowerCase();
                const isVisible = cardTitle.includes(searchTerm);
                card.style.display = isVisible ? 'block' : 'none';
            });
        }
    });
</script>
@stop
