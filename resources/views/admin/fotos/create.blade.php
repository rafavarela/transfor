@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">

                <div class="panel-heading">
                    Fotos del producto {{$nombre}}
                    <a href="/admin/foto/mostrar-fotos/{{ $id }}" class="btn btn-primary" role="button">Regresar</a>
                </div>

				<div class="panel-body">

				    @include('admin.productos.partials.messages')

				    {!! Form::open(['url' => 'admin/foto/guardar', 'method' => 'POST', 'files' => true]) !!}

                        @include('admin.fotos.partials.fields')
                        <button type="submit" class="btn btn-default">Subir imagen</button>

				    {!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
