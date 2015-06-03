<div class="form-group">
    {!! Form::label('lblfoto', 'Seleccione un archivo') !!}
    {!! Form::hidden('id', $id) !!}
    {!! Form::file('imagen') !!}
</div>