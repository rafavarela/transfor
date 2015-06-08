@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Nueva sección del CMS (Sistema de Gestión de Contenidos)</div>

				<div class="panel-body">

				    @include('admin.cmssecciones.partials.messages')

				    {!! Form::open(['route' => 'admin.cmsseccion.store', 'method' => 'POST']) !!}

                        @include('admin.cmssecciones.partials.fields')
                        <button type="submit" class="btn btn-default">Guardar</button>

				    {!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
