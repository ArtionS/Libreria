<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">

            <div class="nav">

{{--                Seccion de Libreria--}}
                <div class="sb-sidenav-menu-heading">Libreria</div>

                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon">
                        <i class="fas fa-columns"></i>
                    </div>
                    Libros
                    <div class="sb-sidenav-collapse-arrow">
                        <i class="fas fa-angle-down"></i>
                    </div>
                </a>


                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ action('LibroController@index') }}">Libros</a>
                        <a class="nav-link" href="{{ action('LibroController@create')}}">Nuevo Libro</a>

{{--                    <a class="nav-link" href="layout-sidenav-light.html">Nuevo Libro</a>--}}

                    </nav>
                </div>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            {{\Auth::user()->name}}
        </div>
    </nav>
</div>
