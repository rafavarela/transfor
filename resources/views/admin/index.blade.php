@extends('app')

@section('estilos')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/redmond/jquery-ui.css">
@endsection

@section('content')
    <div class="container">
    	<div class="row">
    		<div class="col-md-10 col-md-offset-1">
    			<div class="panel panel-default">
    				<div class="panel-heading">Edición de los textos del sitio web</div>

    				<div class="panel-body">
                        <a href="/admin/cmsseccion/" class="btn btn-primary" role="button">Listado de secciones</a>
                        <a href="/admin/cmsnoticia/" class="btn btn-primary" role="button">Listado de noticias / textos</a>
    				</div>
    			</div>

    			<div class="panel panel-default">
                    <div class="panel-heading">Edición de los productos y/o servicios vender</div>

                    <div class="panel-body">
                        <a href="/admin/categoria/" class="btn btn-primary" role="button">Listado de categorías</a>
                        <a href="/admin/producto/" class="btn btn-primary" role="button">Listado de productos / servicios</a>
                    </div>
                </div>
    		</div>
    	</div>
    </div>
@endsection
