
    <div class="blog-form">

        {!! Form::open(array('route' => 'contactenos_store', 'class' => 'form')) !!}

            {!! Form::text('Nombre', null, ['required', 'class'=>'text', 'placeholder'=>'Nombre *'] ) !!}

            {!! Form::email('Email', null, ['required', 'class' => 'text', 'placeholder'=>'Email *'] ) !!}

            {!! Form::text('Asunto', null, array('required', 'class'=>'text', 'placeholder'=>'Asunto *')) !!}

            {!! Form::textarea('Comentarios', null, ['required', 'placeholder'=>'Comentarios *']) !!}


            <input name="btnenviar" type="submit" value="ENVIAR COMENTARIOS">

        {!! Form::close() !!}
    </div>
