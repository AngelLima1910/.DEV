<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container px-5">
        <a class="navbar-brand" href="{{ route('inicio') }}">Inicio <i class="fa-solid fa-house"></i> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('creditos') }}">
                        Creditos <i class="fa-brands fa-font-awesome"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:red" href="{{ route('logout')}}"> <i class="fa-solid fa-arrow-right-from-bracket"></i> 
                        Salir
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>