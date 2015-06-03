@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading" style="height: 4em">

				    <div style="width: 15em; float: left">Editar producto: <b>{{ $producto->nombre }}</b></div>

				    <div style=" text-align: right; width: 22em; float: right  ">
				        <span><a href="/admin/foto/mostrar-fotos/{{ $producto->id }}" class="btn btn-primary" role="button">Gestionar fotos</a></span>
				        <span><a href="/admin/producto/" class="btn btn-primary" role="button">Regresar al listado</a></span>
                    </div>
                </div>

				<div class="panel-body">

				    @include('admin.productos.partials.messages')

				    {!! Form::model($producto, ['route' => ['admin.producto.update', $producto], 'method' => 'PUT']) !!}

                        @include('admin.productos.partials.fields')
                        <button type="submit" class="btn btn-default">Actualizar producto</button>

				    {!! Form::close() !!}

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
