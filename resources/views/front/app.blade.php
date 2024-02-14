<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Mentoring</title>

    @include('front.layout.partials.css')
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
