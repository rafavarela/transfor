@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Editar usuario {{ $usuario->name }}</div>

				<div class="panel-body">

				    @include('admin.usuarios.partials.messages')

				    {!! Form::model($usuario, ['route' => ['admin.usuario.update', $usuario], 'method' => 'PUT']) !!}

                        @include('admin.usuarios.partials.fields')

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Actualizar usuario
                                </button>
                            </div>
                        </div>

				    {!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
