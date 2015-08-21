<?php
    $columnas = 1;
    $PintarEncabezado = 1;
?>


<!-- team-section-starts-->
<div class="team-section" id="Team">
    <div class="container">
        <div class="team-section-grids">
            @foreach ($categorias as $categoria)
                <div class="col-md-3">
                    <div class="team-section-grid">
                        <div class="team-section-image">
                            <a href="/categoria/{{ $categoria->id }}">
                            <img src="{{asset('images/').'/categoria'.$categoria->id.'.jpg'}}" class="img-responsive" alt="" />
                            </a>
                        </div>

                        <div class="team-section-text text-center">
                            <a style="text-transform: uppercase" href="/categoria/{{ $categoria->id }}"><h4>{{ $categoria->nombre  }}</h4></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- team-section-ends-->

