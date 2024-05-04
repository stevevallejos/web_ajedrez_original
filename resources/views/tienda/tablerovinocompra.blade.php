@extends('adminlte::page')

@section('title', 'Tablerovinocompra')

@section('content')
<div class="row">
        <div class="info-box">
            <span class="info-box-icon bg-info"><i class="fa-solid fa-hand-holding-dollar fa-beat"></i></span>
            <div class="info-box-content">
                <div class="row">
                    <div class="bg-danger pagos">
                        <span class="info-box-text p-6"><a href="URL_del_enlace" class="btn btn-light"> <img src="/img/paypal.webp" alt="PayPal" width="130px"></a></span>
                    </div>
                    <div class="bg-success pagos">
                        <span><a href="URL_del_enlace" class="btn btn-light p-4"><img src="/img/amazonay.png" alt="Amazon Pay" width="167px"></a></span>
                    </div>
                    <div class="bg-primary pagos">
                        <span class="info-box-number p-4"><a href="URL_del_enlace" class="btn btn-light"><img src="/img/GooglePay.webp" alt="Google Pay" width="163px"></a></span>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</div>  




<div class="botones-container" style="background: linear-gradient(to bottom, #8d8d8d, #ffffff); border: 1px solid #ffffff;">
    <h2>pagos en línea <i class="fa-solid fa-hand-holding-dollar fa-beat"></i></h2>
    <a href="URL_del_enlace" class="btn bg-light ">
        <img src="/img/GooglePay.webp" alt="Google Pay" width="100px">
    </a>
    -
    <a href="https://pay.amazon.es/" class="btn bg-light">
        <img src="/img/amazonay.png" alt="Amazon Pay" width="167px">
    </a>
    -
    <a href="https://www.paypal.com/bo/home" class="btn bg-light">
        <img src="/img/paypal.webp" alt="PayPal" width="120px">
    </a>
    -
    <a href="URL_del_enlace" class="btn bg-light">
        <img src="/img/APLEEpay.png" alt="PayPal" width="120px">
    </a>
</div>



<h3>pagos con tarjetas de crédito <i class="fa-solid fa-credit-card fa-flip" style="color: #74C0FC;"></i></h2>
<img src="/img/Former_Visa_(company)_logo.svg.png" alt="Visa" width="60px">
<img src="/img/Mastercard-logo.svg.webp" alt="Mastercard" width="50px">
<img src="/img/americanexpress.png" alt="American Express" width="60px">
<img src="/img/dicover_logo.png" alt="Discover" width="60px">
<a href="" class="btn btn-success">COMPRAR CON ESTE MÉTODO</a>
<h3>pagos con tarjetas de débito <i class="fa-solid fa-credit-card fa-flip"></i></h2>

<h3>pagar con criptomoneda <i class="fa-brands fa-bitcoin fa-beat" style="color: #FFD43B;"></i></h2>
<img src="/img/Bitcoin_logo.svg.png" alt="Bitcoin" width="167px">

<h3>pagar con gift card <i class="fa-solid fa-gift fa-flip"></i></h2>
<img src="/img/cardgift1.png" alt="Gift Card" width="200px">
<button class="btn btn-secondary" onclick="mostrarBarra()">Canjear Gift Card</button>

<div id="barraCanjeo" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: white; padding: 20px; border-radius: 10px; z-index: 9999; box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);">
    <button class="btn btn-light" style="float: right;" onclick="cerrarBarra()"><i class="fas fa-times"></i></button>
    <input type="text" id="codigoGiftCard" placeholder="Ingresa el código de tu Gift Card">
    <button class="btn btn-primary" onclick="canjearGiftCard()">Canjear</button>
</div>



<div class="botones-container" style="background: linear-gradient(to bottom, #8d8d8d, #ffffff); border: 1px solid #ffffff;">
<h2>pagos con transferencia bancaria <i class="fa-solid fa-university fa-flip" style="color: #FFD43B;"></i></h2>
<img src="/img/New_Wise_(formerly_TransferWise)_logo.svg.png" alt="Transferencia Bancaria" width="90px">
<img src="/img/Stripe_Logo,_revised_2016.svg.webp" alt="Transferwise" width="90px">
<img src="/img/paypal.webp" alt="Stripe" width="90px">
<a href="URL_del_enlace" class="btn btn-primary">COMPRAR CON ESTE MÉTODO</a>
</div>







<div id="fondoBorroso" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 9998;"></div>

<div id="mensajeExito" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: white; padding: 20px; border-radius: 10px; z-index: 9999;">
    <i class="fas fa-check-circle" style="color: green; font-size: 24px; margin-right: 10px;"></i>
    <span id="textoMensaje" style="font-size: 18px;"></span>
</div>

<div id="mensajeError" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: white; padding: 20px; border-radius: 10px; z-index: 9999;">
    <i class="fas fa-times-circle" style="color: red; font-size: 24px; margin-right: 10px;"></i>
    <span id="textoError" style="font-size: 18px;"></span>
</div>

<script>
    function mostrarBarra() {
        var barra = document.getElementById("barraCanjeo");
        var fondoBorroso = document.getElementById("fondoBorroso");
        if (barra.style.display === "none") {
            barra.style.display = "block";
            fondoBorroso.style.display = "block";
        } else {
            barra.style.display = "none";
            fondoBorroso.style.display = "none";
        }
    }

    function cerrarBarra() {
        var barra = document.getElementById("barraCanjeo");
        var fondoBorroso = document.getElementById("fondoBorroso");
        barra.style.display = "none";
        fondoBorroso.style.display = "none";
    }

    function canjearGiftCard() {
        var codigo = document.getElementById("codigoGiftCard").value;
        var mensajeExito = document.getElementById("mensajeExito");
        var mensajeError = document.getElementById("mensajeError");
        var textoMensaje = document.getElementById("textoMensaje");
        var textoError = document.getElementById("textoError");
        if (codigo === "ABC123") {
            textoMensaje.innerHTML = "¡Tu gift card ha sido canjeada con éxito!";
            mensajeExito.style.display = "block";
            mensajeError.style.display = "none";
            
            // Mostrar el mensaje permanente
            var mensajePermanente = document.createElement("h3");
            mensajePermanente.textContent = "500 chesscoins";
            mensajePermanente.style.position = "fixed";
            mensajePermanente.style.top = "10px";
            mensajePermanente.style.right = "10px";
            mensajePermanente.style.backgroundColor = "rgba(255, 255, 255, 0.9)";
            mensajePermanente.style.padding = "10px";
            mensajePermanente.style.borderRadius = "5px";
            mensajePermanente.style.zIndex = "9999";
            document.body.appendChild(mensajePermanente);
            
            setTimeout(function() {
                mensajeExito.style.display = "none";
            }, 3000); // Ocultar el mensaje de éxito después de 3 segundos
        } else {
            textoError.innerHTML = "El código ingresado no es válido.";
            mensajeError.style.display = "block";
            mensajeExito.style.display = "none";
        }
    }
</script>

@stop

@section('css')
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
