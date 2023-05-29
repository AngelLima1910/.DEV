@extends('../../layouts/main')
@section('contenido')
    <div class="container" style="background: https://img.freepik.com/fotos-premium/fondo-triangular-colorido-patron-triangular_574545-1478.jpg">
        <div class="row">
            <div class="col">
                <div class="login-form">
                    <h1>Orion System</h1>
                    <div class="text-center">
                        <img src="{{ asset('img/orion.jpg') }} " height="50%" width="50%">
                    </div>
                    <br>
                    <form action="{{ route('logear') }}" method="post">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username " name="user">
                            <i class="fa fa-user"></i>
                          </div>
                          <div class="form-group log-status">
                            <input type="password" class="form-control" placeholder="Password" name="password">
                            <i class="fa fa-lock"></i>
                          </div>
                           <span class="alert">Invalid Credentials</span>
                           <a class="link" href="#">Lost your password?</a>
                          <button class="log-btn">Log in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection