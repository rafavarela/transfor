@extends('layout')

@section('tituloprincipal')
    NOSOTROS
@stop

@section('encabezado')
    {{ $cmsnoticias[0]->titulo }}
@stop

@section('contenido')

    {!! $cmsnoticias[0]->detalle !!}

@stop