@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content_header')
    <h1>Crear Usuario</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
           <form action="{{route("users.store")}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese el nombre del usuario">
                </div>
                <div class="form-group">
                    <label for="email">Correo</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese el correo del usuario">
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese la contraseña del usuario">
                </div>
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="file" class="form-control" id="foto" name="foto">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
@stop