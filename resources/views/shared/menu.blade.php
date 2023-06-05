<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container px-5">
        <a class="navbar-brand" href="{{ route('inicio') }}">Inicio <i class="fa-solid fa-house"></i> </a>
        {{-- <img src="{{ asset('img/ITMA II.png') }}" style="height: 45px; width: 35px"> --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('lista') }}">
                        Estudiantes <i class="fa-solid fa-address-book"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('creditos') }}">
                        Créditos <i class="fa-brands fa-font-awesome"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a style="color: aqua" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user"></i> {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="nav-link" style="color:red" href="{{ route('logout')}}"> <i class="fa-solid fa-arrow-right-from-bracket"></i> 
                            Salir
                        </a>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>