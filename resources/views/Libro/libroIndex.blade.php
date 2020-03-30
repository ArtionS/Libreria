@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Listado de Libros
                    </div>

                    <div class="card-body">

                        <a href="{{ action('LibroController@create')}}" class="btn btn-primary btn-ms">Nuevo Libro</a>

                        <br>
                        <br>

                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Libro</th>
                                <th scope="col">Autor</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Stock</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($libros as $libro)

                                <tr>
                                    <td>{{$libro->id}}</td>
                                    <td>
                                        <a href="{{route('libro.show' , $libro->id)}}">
                                            {{$libro->libro}} </a>
                                    </td>
                                    <td>{{$libro->autor}}</td>
                                    <td>{{$libro->categoria->nombre}}</td>
                                    <td>{{$libro->precio}}</td>
                                    <td>{{$libro->stock}}</td>


                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
