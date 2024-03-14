<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Mentoring - Dashboard</title>

    @include('admin.partials.css')
    @yield('styles')

</head>
<body>

<!-- Main Wrapper -->
<div class="main-wrapper">
    @include('sweetalert::alert')
    @include('admin.layout.header')

    @include('admin.layout.sidebar')

    @yield('content')

</div>
<!-- /Main Wrapper -->

@include('admin.partials.js')
@yield('scripts')

</body>
</html>
