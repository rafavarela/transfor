<div class="form-group">
    {!! Form::label('nombre', 'Nombre del producto') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Digite el producto'] ) !!}

    {!! Form::label('encabezado', 'Encabezado') !!}
    {!! Form::textarea('encabezado', null, ['class' => 'ckeditor', 'placeholder' => 'Digite el encabezado', 'size' => '30x5'] ) !!}

    {!! Form::label('detalle', 'Detalle') !!}
    {!! Form::textarea('detalle', null, ['class' => 'ckeditor', 'placeholder' => 'Digite el detalle', 'size' => '30x5'] ) !!}

    {!! Form::label('categoria_id', 'Categoria') !!}
    {!! Form::select('categoria_id', $categorias ) !!}

</div>