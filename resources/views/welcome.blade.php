@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
  <div class="row">
    <div class="col-md-3 col-sm-2 col-2">
      <div class="info-box">
        <span class="info-box-icon bg-info"><i class="fa-regular fa-chess-pawn fa-flip"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Peón</span>
          <span class="info-box-number">+1 punto</span>
          <p>precio: 1,00$</p>
          <button type="button" class="btn btn-info">COMPRAR!!!</button>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-2 col-2">
      <div class="info-box">
        <span class="info-box-icon bg-warning"><i class="fa-solid fa-chess-knight fa-flip"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Caballo</span>
            <span class="info-box-number">+3 puntos</span>
            <p>precio: 2,00$</p>
            <button type="button" class="btn btn-info">COMPRAR!!!</button>
          </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-2 col-2">
      <div class="info-box">
        <span class="info-box-icon bg-primary"><i class="fa-solid fa-chess-rook fa-flip"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">torre</span>
            <span class="info-box-number">+5 puntos</span>
            <p>precio: 3,00$</p>
            <button type="button" class="btn btn-info">COMPRAR!!!</button>
          </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-2 col-2">
      <div class="info-box">
        <span class="info-box-icon bg-secondary"><i class="fa-solid fa-question fa-beat-fade"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">arquero</span>
            <span class="info-box-number">+3 puntos</span>
            <p>precio: 30,00</p>
            <button type="button" class="btn btn-info">COMPRAR!!!</button>
          </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-2 col-2">
      <div class="info-box">
        <span class="info-box-icon bg-secondary"><i class="fa-solid fa-chess-bishop fa-flip"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">alfil</span>
            <span class="info-box-number">+3 puntos</span>
            <p>precio: 2,00$</p>
            <button type="button" class="btn btn-info">COMPRAR!!!</button>
          </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-2 col-2">
      <div class="info-box">
        <span class="info-box-icon bg-secondary"><i class="fa-solid fa-chess-queen fa-flip"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">dama</span>
            <span class="info-box-number">+9 puntos</span>
            <p>precio: 5,00$</p>
            <button type="button" class="btn btn-info">COMPRAR!!!</button>
          </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-2 col-2">
      <div class="info-box">
        <span class="info-box-icon bg-warning"><i class="fa-solid fa-chess-king fa-flip"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">rey</span>
            <span class="info-box-number">♾️ puntos</span>
            <p>precio: 10,00$</p>
            <button type="button" class="btn btn-info">COMPRAR!!!</button>
          </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-2 col-2">
      <div class="info-box">
        <span class="info-box-icon bg-warning"><i class="fa-solid fa-chess-board fa-bounce"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">tabla</span>
            <span class="info-box-number">precio americano "200 $"</span>
            <p>precio: 200,00$</p>
            <button type="button" class="btn btn-info">COMPRAR!!!</button>
          </div>
      </div>
    </div>


@stop

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
