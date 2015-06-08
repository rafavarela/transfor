<div class="form-group">
    {!! Form::label('titulo', 'Título de la noticia') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control', 'placeholder' => 'Digite el título de la noticia'] ) !!}

    {!! Form::label('encabezado', 'Encabezado') !!}
    {!! Form::textarea('encabezado', null, ['class' => 'ckeditor', 'placeholder' => 'Digite el encabezado', 'size' => '30x5'] ) !!}

    {!! Form::label('detalle', 'Detalle') !!}
    {!! Form::textarea('detalle', null, ['class' => 'ckeditor', 'placeholder' => 'Digite el detalle', 'size' => '30x5'] ) !!}

    {!! Form::label('seccion_id', 'Sección') !!}
    {!! Form::select('seccion_id', $cmssecciones ) !!}

</div>