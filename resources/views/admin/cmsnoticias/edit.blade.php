@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Nueva noticia</div>

				<div class="panel-body">

				    @include('admin.cmsnoticias.partials.messages')

				    {!! Form::model($cmsnoticia, ['route' => ['admin.cmsnoticia.update', $cmsnoticia], 'method' => 'PUT']) !!}

                        @include('admin.cmsnoticias.partials.fields')
                        <button type="submit" class="btn btn-default">Guardar</button>

				    {!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
