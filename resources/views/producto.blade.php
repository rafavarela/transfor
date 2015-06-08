@extends('layout')

@section('tituloprincipal')
    {{ $producto->nombre }}:
@stop

@section('encabezado')
    {!! $producto->encabezado !!}
@stop

@section('contenido')

    <div class="blog-content">
        <div class="container">
            <div class="blog-banner">
                <img src="{{$foto->imagen}}" class="img-responsive" alt="" />
            </div>
            <div class="blog-example-post">
                <div class="blog-example-post-grids">
                    <div class="blog-title-text">
                        {!! $producto->detalle !!}
                    </div>
                </div>
            </div>

            <!-- Formulario -->

            <div class="reply-section">
                <div class="reply-section-head">
                    <div class="reply-section-head-text">
                        <h3>Solicitar producto</h3>
                    </div>
                    <div class="clear-fix"></div>
                </div>
                @include('partials.formulario')
            </div>

        </div>
    </div>

@stop