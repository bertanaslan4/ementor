@extends('front.layout.auth')

@section('content')

    <!-- Page Content -->
    <div class="bg-pattern-style">
        <div class="content">

            <!-- Login Tab Content -->
            <div class="account-content">
                <div class="account-box">
                    <div class="login-right">
                        <div class="login-header">
                            <h3>Login <span>Mentoring</span></h3>
                            <p class="text-muted">Access to our dashboard</p>
                        </div>
                        @if($errors->any())
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger" role="alert">
                                    {{$error}}
                                </div>
                            @endforeach
                        @endif
                        <form action="{{route('login')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label">Email Address</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Password</label>
                                <div class="pass-group">
                                    <input type="password" name="password" class="form-control pass-input">
                                    <span class="fas fa-eye toggle-password"></span>
                                </div>
                            </div>
                            <div class="text-end">
                                <a class="forgot-link" href="forgot-password.html">Forgot Password ?</a>
                            </div>
                            <button class="btn btn-primary login-btn" type="submit">Login</button>
                            <div class="text-center dont-have">Don’t have an account? <a href="{{route('register')}}">Register</a></div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /Login Tab Content -->

        </div>

    </div>
    <!-- /Page Content -->

@endsection
