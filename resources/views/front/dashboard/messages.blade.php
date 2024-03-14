@extends('front.layout.dashtemp')

@section('content')
    <div class="col-md-7 col-lg-8 col-xl-9">

        <div class="row">
            <div class="col-sm-12 mb-4">
                @include('Chatify::pages.app')
            </div>
        </div>
        <!-- /Row -->
    </div>
@endsection
