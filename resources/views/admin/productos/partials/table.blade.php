<table class="table table-striped">
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Acciones</th>
    </tr>
    @foreach($productos as $producto)
        <tr data-id="{{ $producto->id }}">
            <td>{{ $producto->id }}</td>
            <td>{{ $producto->nombre }}</td>
            <td>
                <a href=" {{ route('admin.producto.edit', $producto) }}">Editar</a>
                <a href="#" class="btn-delete" data-codigo="{{ $producto->id }}" style="color:#ff0000">Eliminar</a>
                <a href="/admin/foto/mostrar-fotos/{{ $producto->id }}">Fotos</a>
            </td>
        </tr>
    @endforeach
</table>