<table class="table table-striped">
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Acciones</th>
    </tr>
    @foreach($cmssecciones as $cmsseccion)
        <tr data-id="{{ $cmsseccion->id }}">
            <td>{{ $cmsseccion->id }}</td>
            <td>{{ $cmsseccion->nombre }}</td>
            <td>
                <a href=" {{ route('admin.cmsseccion.edit', $cmsseccion) }}">Editar</a>
                <a href="#" class="btn-delete" data-codigo="{{ $cmsseccion->id }}">Eliminar</a>
            </td>
        </tr>
    @endforeach
</table>