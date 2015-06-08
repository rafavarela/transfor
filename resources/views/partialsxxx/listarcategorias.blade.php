<?php
    $columnas = 1;
    $PintarEncabezado = 1;
?>

@foreach ($categorias as $categoria)

    @if ($PintarEncabezado == 1)
        <div class="tables">
    @endif

            @if ($columnas <= 3)
                <div class="col-md-3 table-3 text-center">
            @else
                <div class="col-md-3 table-4 text-center">
            @endif
                <div class="table-3-head">
                    <h5>{{ $categoria->nombre  }}</h5>
                    <a href="/categoria/{{ $categoria->id }}"><i class="msg-box"></i></a>
                </div>
                <br />
                <input type="button" value="Mostrar" onclick="window.location.href='/categoria/{{ $categoria->id }}'">
            </div>

    {{-- Cada 4 columnas hay que volver a crear una tabla --}}
    @if ($columnas <= 3)
        <?php
            $columnas++;
            $PintarEncabezado = 0;
        ?>
    @else
        <?php
            $columnas = 1;
            $PintarEncabezado = 1;
        ?>
    @endif


    @if ($PintarEncabezado == 1)
            <div class="clear-fix"></div>
        </div>
    @endif

@endforeach

@if ($columnas <= 3)
        <div class="clear-fix"></div>
    </div>
@endif