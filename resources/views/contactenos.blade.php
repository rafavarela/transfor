@extends('layout')

@section('tituloprincipal')
    CONTACTENOS
@stop

@section('encabezado')

@stop

@section('contenido')

    <p>
        <h1>Regional Norte</h1>
    </p>
    <p>
        <br>
        Avda. Circunvalar Calle 100 No. 12F-29 Parque Industrial Trinidad 1 Bodegas 9 y 10 <br>
        Tels: 380 8880 - 380 8599 <br>
        direccioncomercial@transforsas.com <br>
        <b>Barranquilla - Atlántico </b>
        <br>
    </p>
    <p>
        <br>
    </p>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d62667.76490524625!2d-74.83752586242676!3d10.983340811038381!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTDCsDU4JzAyLjEiTiA3NMKwNTAnMTguNSJX!5e0!3m2!1ses!2s!4v1433798346007" width="100%" height="260em" frameborder="0" style="border:0"></iframe>


    <p>
        <br><br><br>
        <h1>Regional Centro - Sur</h1>
    </p>
    <p>
        <br>
        Av. Troncal Panamericana de Occidente No. 5-61 Parque Industrial Puerto Vallarta Bodega No. 20 <br>
        Tels: 893 2660 - 893 2661 <br>
        direccioncomercial@transforsas.com <br>
        Mosquera - Cundinamarca
        <br>
    </p>
    <p>
        <br>
    </p>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63620.40114927531!2d-74.25143881762692!3d4.72221134055222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f7802cbbede57%3A0x17bbcbad1a13a370!2sCl.+8+%239-1%2C+Mosquera%2C+Cundinamarca%2C+Colombia!5e0!3m2!1ses!2ses!4v1433800299305" width="100%" height="260em" frameborder="0" style="border:0"></iframe>


    <p>
        <br><br><br>
        <h1>Servicio al cliente</h1>
    </p>
    <p>
        <br>
        Celular: 313 571 0383 <br>
        direccioncomercial@transforsas.com <br>
        Robinsón Estevez
        <br>
    </p>
    <p>
        <br>
        Celular: 321 897 3251 <br>
        direccioncomercialbogota@transforsas.com <br>
        Mauren Alean
        <br>
    </p>

    <p>
        <br>/
    </p>
    <div class="reply-section">
        <div class="reply-section-head">
            <div class="reply-section-head-text">
                <h3>Favor escriba sus inquietudes o comentarios*</h3>
            </div>
            <div class="clear-fix"></div>
        </div>
        @include('partials.formulario')
    </div>

@stop