@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Nueva categoría</div>

				<div class="panel-body">

				    @include('admin.categorias.partials.messages')

				    {!! Form::open(['route' => 'admin.categoria.store', 'method' => 'POST']) !!}

                        @include('admin.categorias.partials.fields')
                        <button type="submit" class="btn btn-default">Guardar</button>

				    {!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
