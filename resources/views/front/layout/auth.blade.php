<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>Mentoring</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('front/img/favicon.png')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset('front/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/plugins/fontawesome/css/all.min.css')}}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">

</head>
<body class="account-page">

<!-- Main Wrapper -->
<div class="main-wrapper">


@yield('content')

</div>
<!-- /Main Wrapper -->

<!-- jQuery -->
<script src="{{asset('front/js/jquery-3.6.0.min.js')}}"></script>

<!-- Bootstrap Core JS -->
<script src="{{asset('front/js/bootstrap.bundle.min.js')}}"></script>

<!-- Custom JS -->
<script src="{{asset('front/js/script.js')}}"></script>

</body>
</html>
