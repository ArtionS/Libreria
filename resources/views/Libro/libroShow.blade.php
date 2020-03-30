@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Descripción Libro </div>

                    <div class="card-body">

                        <a href="{{ action('LibroController@index')}}" class="btn btn-primary btn-ms">Lista Libros</a>

                        <a href="{{ route('libro.edit' , $libro->id)}}" class="btn btn-warning btn-ms">Editar Libros</a>

                        <hr>

                        <form action="{{route('libro.destroy' , $libro->id)}} " method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Borrar</button>

                        </form>

                        <br>
                        <br>

                        <table class="table">
                            <thead class="thead-dark">
                            </thead>
                            <tbody>
                            <tr>
                                <td>ID</td>
                                <td>{{$libro->id}}</td>
                            </tr>

                            <tr>
                                <td>Libro</td>
                                <td>{{$libro->libro}}</td>
                            </tr>
                            <tr>
                                <td>Autor</td>
                                <td>{{$libro->autor}}</td>
                            </tr>
                            <tr>
                                <td>Categoria</td>
                                <td>{{$libro->categoria->nombre}}</td>
                            </tr>
                            <tr>
                                <td>Precio</td>
                                <td>{{$libro->precio}}</td>
                            </tr>
                            <tr>
                                <td>Stock</td>
                                <td>{{$libro->stock}}</td>
                            </tr>
                            <tr>
                                <td>Disponibilidad</td>
                                <td>{{$libro->disponibilidad}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
