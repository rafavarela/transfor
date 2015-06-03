@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Editar categoría {{ $categoria->nombre }}</div>

				<div class="panel-body">

				    @include('admin.categorias.partials.messages')

				    {!! Form::model($categoria, ['route' => ['admin.categoria.update', $categoria], 'method' => 'PUT']) !!}

                        @include('admin.categorias.partials.fields')
                        <button type="submit" class="btn btn-default">Actualizar categoría</button>

				    {!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
