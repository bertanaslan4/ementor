<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from mentoring.dreamstechnologies.com/html/template/index-seven.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Dec 2023 20:23:54 GMT -->
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

    <!-- Breadcrumb -->
    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-12 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
                @include('front.layout.partials.dashside')

               @yield('content')
            </div>

        </div>

    </div>
    <!-- /Page Content -->
{{--    @include('sweetalert::alert')--}}

    @include('front.layout.footer.footer')

</div>
<!-- /Main Wrapper -->

@include('front.layout.partials.js')

</body>

<!-- Mirrored from mentoring.dreamstechnologies.com/html/template/index-seven.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Dec 2023 20:23:59 GMT -->
</html>
