@extends('front.layout.auth')

@section('content')
    <!-- Page Content -->
    <div class="bg-pattern-style bg-pattern-style-register">
        <div class="content">

            <!-- Register Content -->
            <div class="account-content">
                <div class="account-box">
                    <div class="login-right">
                        <div class="login-header">
                            <h3><span>Ementor</span> Kayıt</h3>

                        </div>

                        <!-- Register Form -->
                        <form action="{{route('register')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">İsim</label>
                                        <input id="first-name" type="text" class="form-control" name="name" autofocus="" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Soyisim</label>
                                        <input id="last-name" type="text" class="form-control" name="surname" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Email Adres</label>
                                <input id="email" type="email" name="email" class="form-control" required>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="form-check form-check-xs custom-checkbox">
                                            <input type="radio" class="form-check-input" name="role" value="1" required>
                                            <label class="form-check-label" for="agree_checkbox_user">Mentor</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="form-check form-check-xs custom-checkbox">
                                            <input type="radio" class="form-check-input" name="role" value="2" required>
                                            <label class="form-check-label" for="agree_checkbox_user">Mentee</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Şifre</label>
                                        <input id="password" type="password" class="form-control" name="password" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Şifre Tekrar</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group">
                                <div class="form-check form-check-xs custom-checkbox">
                                    <input type="checkbox" class="form-check-input" name="agreeCheckboxUser" id="agree_checkbox_user" required>
                                    <label class="form-check-label" for="agree_checkbox_user">KVKK ve </label> <a tabindex="-1" href="javascript:void(0);">Gizlilik Sözleşmesini</a> &amp; <a tabindex="-1" href="javascript:void(0);"> kabul ediyorum.</a>
                                </div>
                            </div>
                            <button class="btn btn-primary login-btn" type="submit">Kayıt Ol</button>
                            <div class="account-footer text-center mt-3">
                                Zaten Hesabınız var mı? <a class="forgot-link mb-0" href="{{route('login')}}">Giriş Yap</a>
                            </div>
                        </form>
                        <!-- /Register Form -->

                    </div>
                </div>
            </div>
            <!-- /Register Content -->

        </div>

    </div>
    <!-- /Page Content -->
@endsection
