<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Mentoring</title>

    @include('front.layout.partials.css')
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script src="{{asset('front/js/jquery-3.6.0.min.js')}}"></script>
    <!-- include libraries(jQuery, bootstrap) -->

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
</head>
<body>

<!-- Main Wrapper -->
<div class="main-wrapper">

    @include('front.layout.header.header')

    @yield('content')

    @include('front.layout.footer.footer')
    @include('sweetalert::alert')

</div>
<!-- /Main Wrapper -->
@yield('scripts')
@include('front.layout.partials.js')

</body>
</html>
