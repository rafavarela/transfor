@extends('layout')


@section('estilos')
    <style>
       @import "http://fonts.googleapis.com/css?family=Montserrat:300,400,700";
       .rwd-table {
         margin: 1em 0;
         min-width: 300px;
       }
       .rwd-table tr {
         border-top: 1px solid #ddd;
         border-bottom: 1px solid #ddd;
       }
       .rwd-table th {
         display: none;
       }
       .rwd-table td {
         display: block;
       }
       .rwd-table td:first-child {
         padding-top: .5em;
       }
       .rwd-table td:last-child {
         padding-bottom: .5em;
       }
       .rwd-table td:before {
         content: attr(data-th) ": ";
         font-weight: bold;
         width: 6.5em;
         display: inline-block;
       }
       @media (min-width: 480px) {
         .rwd-table td:before {
           display: none;
         }
       }
       .rwd-table th, .rwd-table td {
         text-align: left;
       }
       @media (min-width: 480px) {
         .rwd-table th, .rwd-table td {
           display: table-cell;
           padding: .25em .5em;
         }
         .rwd-table th:first-child, .rwd-table td:first-child {
           padding-left: 0;
         }
         .rwd-table th:last-child, .rwd-table td:last-child {
           padding-right: 0;
         }
       }

       body {
         font-family: Montserrat, sans-serif;
         -webkit-font-smoothing: antialiased;
         text-rendering: optimizeLegibility;
         color: #444;
         background: #eee;
       }

       .rwd-table {
         background: #34495E;
         color: #fff;
         border-radius: .4em;
         overflow: hidden;
       }
       .rwd-table tr {
         border-color: #46627f;
       }
       .rwd-table th, .rwd-table td {
         margin: .5em 1em;
       }
       @media (min-width: 480px) {
         .rwd-table th, .rwd-table td {
           padding: 1em !important;
         }
       }
       .rwd-table th, .rwd-table td:before {
         color: #dd5;
       }
    </style>
@stop

@section('tituloprincipal')
    {{ $producto->nombre }}:
@stop

@section('encabezado')
    {!! $producto->encabezado !!}
@stop

@section('contenido')

    <div class="blog-content">
        <div class="container">
            <div class="blog-example-post">
                <div class="blog-example-post-grids">
                    <div class="blog-title-text">
                        {!! $producto->detalle !!}
                    </div>
                    {{-- ------------------------------------- --}}
                    <!-- Formulario -->
                    <div class="col-md-12" >
                        <div class="reply-section-head-text">
                            <h3>Solicitar producto</h3>
                        </div>
                    </div>
                    @include('partials.formulario')

                    <div class="col-md-6 contact-section-right-grid">
                        <img src="{{$foto->imagen}}" class="img-responsive" alt="" />
                    </div>

                    {{-- ------------------------------------- --}}
                </div>

            </div>



        </div>
    </div>

@stop