<div class="form-group">

    <div class="form-group">
        <label class="col-md-4 control-label">Nombre</label>
        <div class="col-md-6">
            {!! Form::text('name', null, ['class' => 'form-control'] ) !!}
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label">E-Mail</label>
        <div class="col-md-6">
            {!! Form::email('email', null, ['class' => 'form-control'] ) !!}
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label">Clave</label>
        <div class="col-md-6">
            {!! Form::password('password', ['class' => 'form-control'] ) !!}
        </div>
    </div>

</div>