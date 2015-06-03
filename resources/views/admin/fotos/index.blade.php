@extends('app')

@section('estilos')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/redmond/jquery-ui.css">
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Fotos del producto ({{$producto_id}}) : {{$producto_nombre}}</div>

				<div class="panel-body">
				    <p>
				        <a href="/admin/foto/crear-foto/{{ $producto_id }}" class="btn btn-primary" role="button">Nueva foto</a>
				        <a href="/admin/producto/{{ $producto_id }}/edit" class="btn btn-primary" role="button">Regresar al producto</a>
				        <a href="/admin/producto/" class="btn btn-primary" role="button">Regresar al listado</a>
				    </p>


					@if(sizeof($fotos) > 0)
					    @foreach($fotos as $foto)

					        <div class="row">
					            <div class="col-sm-6 col-md-12">
					                <div class="thumbnail">
					                    <img src="{{ $foto->imagen }}" alt=""/>
					                    <p><a href="/admin/foto/eliminar-foto/{{ $foto->id }}" class="btn btn-danger" role="button" onclick="return confirm('Realmente desea eliminar este registro?');">Eliminar foto</a></p>
					                </div>

					            </div>
					        </div>
					    @endforeach
					@else
					    <div class="alert alert-danger">
					        <p>Este producto NO tiene fotos</p>
					    </div>
					@endif

				</div>
			</div>
		</div>
	</div>
</div>

@endsection


@section('scripts')
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
@endsection