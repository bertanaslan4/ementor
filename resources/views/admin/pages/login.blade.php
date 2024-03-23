@extends('admin.logAdmin')

@section('content')
    <!-- Main Wrapper -->
    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <div class="loginbox">
                    <div class="login-left">
                        <img class="img-fluid" src="{{asset('images/settings/'.$settings->site_logo)}}" alt="Logo">
                    </div>
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <h1>Admin Panel</h1>


                            <!-- Form -->
                            <form action="{{route('admin.login')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <input class="form-control" name="email" type="text" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="password" type="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block w-100" type="submit">Giriş</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Main Wrapper -->
@endsection
