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
                            <h3>E mentor <span>Giriş</span></h3>
                        </div>
                        @if(session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif
                        <form action="{{route('login')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label">Email Adres</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Şifre</label>
                                <div class="pass-group">
                                    <input type="password" name="password" class="form-control pass-input">
                                    <span class="fas fa-eye toggle-password"></span>
                                </div>
                            </div>
                            <div class="text-end">
                                <a class="forgot-link" href="#">Şifrenizi mi Unuttunuz ?</a>
                            </div>
                            <button class="btn btn-primary login-btn" type="submit">Giriş Yap</button>
                            <div class="text-center dont-have">Henüz hesabınız yok mu? <a href="{{route('register')}}">Kayıt Olun</a></div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /Login Tab Content -->

        </div>

    </div>
    <!-- /Page Content -->

@endsection
