@extends('../../layouts/main')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="login-form">
                    <h1>.DEV</h1>
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