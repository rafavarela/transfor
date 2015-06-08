<table class="table table-striped">
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Acciones</th>
    </tr>
    @foreach($cmsnoticias as $cmsnoticia)
        <tr data-id="{{ $cmsnoticia->id }}">
            <td>{{ $cmsnoticia->id }}</td>
            <td>{{ $cmsnoticia->titulo }}</td>
            <td>
                <a href=" {{ route('admin.cmsnoticia.edit', $cmsnoticia) }}">Editar</a>
                <a href="#" class="btn-delete" data-codigo="{{ $cmsnoticia->id }}">Eliminar</a>
            </td>
        </tr>
    @endforeach
</table>