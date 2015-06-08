@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Editar sección {{ $cmsseccion->nombre }}</div>

				<div class="panel-body">

				    @include('admin.cmssecciones.partials.messages')

				    {!! Form::model($cmsseccion, ['route' => ['admin.cmsseccion.update', $cmsseccion], 'method' => 'PUT']) !!}

                        @include('admin.cmssecciones.partials.fields')
                        <button type="submit" class="btn btn-default">Actualizar sección</button>

				    {!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
