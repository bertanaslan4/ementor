<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Ementor</title>
    <!-- Datetimepicker CSS -->

    @include('front.layout.partials.css')
    <link rel="stylesheet" href="{{asset('front/css/bootstrap-datetimepicker.min.css')}}">
    <!-- include libraries(jQuery, bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
</head>
<body>

<!-- Main Wrapper -->
<div class="main-wrapper">
    @include('sweetalert::alert')
    @include('front.layout.header.header')

    <!-- Breadcrumb -->
    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-12 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Anasayfa</a></li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">Dashboard</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <!-- Page Content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                @if (!isset($hideFooter) || !$hideFooter)
                @include('front.layout.partials.dashside')
                @endif
               @yield('content')
            </div>

        </div>

    </div>
    <!-- /Page Content -->
{{--    @include('sweetalert::alert')--}}

    @if (!isset($hideFooter) || !$hideFooter)
        @include('front.layout.footer.footer')
    @endif

</div>
<!-- /Main Wrapper -->

@include('front.layout.partials.js')
<!-- Datetimepicker JS -->
<script src="{{asset('front/js/moment.min.js')}}"></script>
<script src="{{asset('front/js/bootstrap-datetimepicker.min.js')}}"></script>
</body>
</html>
