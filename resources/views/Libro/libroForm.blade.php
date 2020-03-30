@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">Nuevo Libro</div>

                    <div class="card-body">

                        <a href="{{ action('LibroController@index')}}" class="btn btn-primary btn-ms">Lista Libros</a>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

            {{--    Inicio del Form viendo si es nuevo o edicion                   --}}
                        @if(isset($libro))

                            {!! Form::model($libro, ['route' => ['libro.update' , $libro->id], 'method'=>'PATCH']) !!}

                        @else

                            {!! Form::open(['route' => 'libro.store']) !!}
                        @endif

            {{--    Formulario  --}}

                        <br>

            {{--    Texto del nombre del Libro  --}}
                        <div class="form-group">
                            {!! Form::label('libro', 'Libro'); !!}
                            {!! Form::text('libro', null, ['class' => 'form-control', 'id'=> 'libro', 'required', 'placeholder' => 'Nombre de Libro']) !!}
                        </div>

            {{--    Texto del nombre del Libro del Autor  --}}
                        <div class="form-group">
                            {!! Form::label('autor', 'Autor'); !!}
                            {!! Form::text('autor', null, ['class' => 'form-control', 'id'=> 'autor', 'required', 'placeholder' => 'Nombre de Autor']) !!}
                        </div>

            {{--    Seleccion de Categoria del libro                    --}}
                        <div class="form-group">
                            {!! Form::label('categoria_id' , 'Categoria'); !!}


                            {!! Form::select('categoria_id',
                                $categorias, null, ['class' => 'form-control'] ) !!}
                        </div>

            {{--    Text area de la Descripcion --}}
{{--                        <div class="form-group">--}}
{{--                            {!! Form::label('descripcion', 'Descripcion'); !!}--}}
{{--                            {!! Form::textarea('descripcion' , null, ['class' => 'form-control' , 'rows'=>'3']) !!}--}}
{{--                        </div>--}}

            {{--    Precio del Libro                        --}}
                        <div class="form-group">
                            {!! Form::label('precio' , 'Precio'); !!}
                            <br>
                            {!! Form::number('precio', null , ['id'=>'precio' , 'required']); !!}

                        </div>

            {{--    Stock del Libro                        --}}
                        <div class="form-group">
                            {!! Form::label('stock' , 'Stock'); !!}
                            <br>
                            {!! Form::number('stock', null , ['id'=>'stock' , 'required']); !!}

                        </div>

            {{--    Disponibilidad del libro                   --}}
                        <div class="form-group">
                            {!! Form::label('disponibilidad' , 'Disponibilidad'); !!}


                            {!! Form::select('disponibilidad', [
                                    '1' => 'Disponible' ,
                                    '0' => 'No Disponible'
                                    ], null, ['class' => 'form-control'] ) !!}
                        </div>
                        <br>

            {{--    Boton de submit del Formulario                    --}}
                        {!! Form::submit('Guardar' , ['class'=>'btn btn-outline-primary']) !!}


            {{--    Final del Form                    --}}
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
