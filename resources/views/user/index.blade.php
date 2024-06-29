@extends('adminlte::page')

@section('title','Dashboard')


@section('content')
<table class="table">
    <thead>
          <th> id </th>
          <th> usuario </th>
          <th> correo </th>
          <th> foto de perfil </th>
          
    </thead>
    <tbody>
        @foreach ($users as $usuario)
        <tr>
            <td>{{$usuario->id}}</td>
            <td>{{$usuario->name}}</td>
            <td>{{$usuario->email}}</td>
            <td><img src="{{asset('storage/user/'.$usuario->foto)}}" width="100px"></td>
         </tr>
        @endforeach
    </tbody>
</table>
@stop