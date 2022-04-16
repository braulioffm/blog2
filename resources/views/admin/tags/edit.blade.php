@extends('adminlte::page')

@section('title', 'Curso Blog')

@section('content_header')
    <h1>Editar Etiqueta</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            {!! Form::model($tag, ['route' => ['admin.tags.update', $tag], 'method' => 'put']) !!}

                <div class="form-group">
                    {!! Form::label('name', 'Nombre') !!}
                    {!! Form::text('name', $tag->name, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la etiqueta']) !!}

                    @error('name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                    

                <div class="form-group">
                    {!! Form::label('slug', 'Slug') !!}
                    {!! Form::text('slug', $tag->slug, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug de la etiqueta', 'readonly']) !!}

                    @error('slug')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                <div class="form-group">
                    {!! Form::label('color', 'Color') !!}
                    {!! Form::select('color', $colors, $tag->color, ['class' => 'form-control']) !!}

                    @error('color')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                {!! Form::submit('Actualizar etiqueta', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('js')

    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>

    <script>
     $(document).ready( function() {
    $("#name").stringToSlug({
        setEvents: 'keyup keydown blur load',
        getPut: '#slug',
        space: '-'
    });
    });
    </script>


@endsection
