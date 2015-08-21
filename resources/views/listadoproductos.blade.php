@extends('layout')

@section('tituloprincipal')
    {{ $categoria->nombre }}
@stop

@section('contenido')
    <br><br>
    <?php
        $columnas = 1;
        $PintarEncabezado = 1;
    ?>

    <div class="blog-section" id="Blog" style="margin:0px; padding:0px;">
        <div class="container">

    @foreach ($productos as $producto)

        @if ($PintarEncabezado == 1)
            <div class="blog-section-grids" >
        @endif

                <div class="col-md-4">
                  <div class="grid1">
                    <div class="view view-first" style="height: 16em;">
                      <div class="index_img"><img src="{{ $producto->imagen }}" class="img-responsive" alt=""/></div>
                          <div class="mask">
                            <a href="/producto/{{ $producto->id }}"> <div class="info"><i class="search"> </i> Ver detalles</div></a>
                            </div>
                       </div>
                       <div class="inner_wrap" style="height: 7em;  margin-bottom: 3em;">
                            <h3> {{ $producto->nombre }}</h3>
                       </div>
                   </div>
                </div>

        {{-- Cada 3 columnas hay que volver a crear una tabla --}}
        @if ($columnas <= 2)
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

    @if ($columnas <= 2)
            <div class="clear-fix"></div>
        </div>
    @endif

        </div>
    </div>
@stop