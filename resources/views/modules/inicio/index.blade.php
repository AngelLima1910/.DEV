@extends('../layouts/main_admin')
@section('contenido')
    <!-- Header-->
    <header class="masthead text-center text-white">
        <div class="masthead-content">
            <div class="container px-5">
                <div class="position-absolute top-0 start-0">
                    <img src="{{ asset('img/tecnm.png') }}" style="height: 100px; width: 125px">
                </div>
                <div class="position-absolute top-0 end-0">
                    <img src="{{ asset('img/ITMA II.png') }}" style="height: 100px; width: 125px">
                </div>
                <h1 class="masthead-heading mb-0">Créditos extraescolares</h1>
            </div>
        </div>
        <div class="bg-circle-1 bg-circle"></div>
        <div class="bg-circle-2 bg-circle"></div>
        <div class="bg-circle-3 bg-circle"></div>
        <div class="bg-circle-4 bg-circle"></div>
    </header>
    <!-- Content section 1-->
    <section id="scroll">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5"><img class="img-fluid rounded-circle" src="{{ asset('img/deportivo.png') }}"></div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="display-4">Crédito deportivo</h2>
                        <p>Esta actividad tiene como competencias adquirir destreza y salud para los alumnos de dicho instituto.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content section 2-->
    <section>
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <div class="p-5"><img class="img-fluid rounded-circle" src="{{ asset('img/cultural.png') }}"></div>
                </div>
                <div class="col-lg-6">
                    <div class="p-5">
                        <h2 class="display-4">Crédito cultural</h2>
                        <p>Esta actividad tiene como propósito incentivar y dar a conocer a los alumnos las tradiciones que tiene nuestra institución y pueblo en donde se desarrolló el ambiente estudiantil.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content section 3-->
    <section>
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5"><img class="img-fluid rounded-circle" src="{{ asset('img/civico.jpg') }}"></div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="display-4">Crédito cívico</h2>
                        <p>Esta actividad tiene como función que los estudiantes cuenten con los conocimientos históricos y acontecimientos importantes de su país.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-black">
        <div class="container px-5"><p class="m-0 text-center text-white small">Copyright &copy; Orion System 2023</p></div>
    </footer>
@endsection