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
                <div class="blog-form">
                    <form>
                        <input type="text" class="text" value="Nombre" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Enter Name';}">
                        <input type="text" class="text" value="Email" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Enter Email';}">
                        <input type="text" class="text" value="Asunto" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Subject';}">
                        <textarea></textarea>
                        <input type="button" value="ENVIAR COMENTARIOS">
                    </form>
                </div>
            </div>

        </div>
    </div>

@stop