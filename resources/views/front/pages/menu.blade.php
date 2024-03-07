@extends('front.app')

@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-md-12 col-12">

                    <h2 class="breadcrumb-title">{{$section->name}}</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <!-- Page Content -->
    <div class="content">
        <div class="container-fluid">

           @foreach($section->children as $content)
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="blog-view">
                            <div class="blog blog-single-post">

                                <div class="blog-content">
                                    <p>{!! $content->content !!}</p>
                                </div>
                            </div>

                        </div>
                    </div>



                </div>
           @endforeach
        </div>

    </div>
    <!-- /Page Content -->
@endsection
