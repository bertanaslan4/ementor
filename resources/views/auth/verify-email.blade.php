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
                            <h3>Doğrulama Başarılı </h3>
                            <p>3 sn içinde yönlendiriliyorsunuz.</p>
                        </div>



                    </div>
                </div>
            </div>
            <!-- /Register Content -->

        </div>

    </div>
    <script>
        // 3 saniye sonra belirtilen URL'ye yönlendirme işlemi
        setTimeout(function(){
            window.location.href = "{{ route('login') }}"; // Yönlendirilecek URL
        }, 3000); // 3 saniye bekleme süresi (3000 milisaniye)
    </script>
    <!-- /Page Content -->
@endsection
