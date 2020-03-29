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
{{--                                <th scope="col">Descripcion</th>--}}
{{--                                <th scope="col">Prioridad</th>--}}
{{--                                <th scope="col">Categoria</th>--}}
{{--                                <th scope="col">Usuario</th>--}}
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($libro as $libro)

                                <tr>
                                    <td>{{$libro->id}}</td>
                                    <td>
                                        <a href="{{route('tarea.show' , $libro->id)}}">{{$libro->libro}} </a>
                                    </td>
{{--                                    --}}
{{--                                    <td>{{$tarea->descripcion}}</td>--}}
{{--                                    <td>{{$tarea->prioridad}}</td>--}}
{{--                                    <td>{{$tarea->categoria->nombre}}</td>--}}
{{--                                    <td>{{$tarea->user->name}}</td>--}}
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
