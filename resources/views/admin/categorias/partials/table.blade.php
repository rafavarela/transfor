<table class="table table-striped">
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Acciones</th>
    </tr>
    @foreach($categorias as $categoria)
        <tr data-id="{{ $categoria->id }}">
            <td>{{ $categoria->id }}</td>
            <td>{{ $categoria->nombre }}</td>
            <td>
                <a href=" {{ route('admin.categoria.edit', $categoria) }}">Editar</a>
                <a href="#" class="btn-delete" data-codigo="{{ $categoria->id }}">Eliminar</a>
            </td>
        </tr>
    @endforeach
</table>