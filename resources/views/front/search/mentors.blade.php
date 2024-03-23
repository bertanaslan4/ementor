@extends('front.app')

@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page"></li>
                        </ol>
                    </nav>
                </div>
                {{--                <div class="col-md-4 col-12 d-md-block d-none">--}}
                {{--                    <div class="sort-by">--}}
                {{--                        <span class="sort-title">Sort by</span>--}}
                {{--                        <span class="sortby-fliter">--}}
                {{--									<select class="select">--}}
                {{--										<option>Select</option>--}}
                {{--										<option class="sorting">Rating</option>--}}
                {{--										<option class="sorting">Popular</option>--}}
                {{--										<option class="sorting">Latest</option>--}}
                {{--										<option class="sorting">Free</option>--}}
                {{--									</select>--}}
                {{--								</span>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <!-- Page Content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                {{--                <div class="col-md-12 col-lg-4 col-xl-3 theiaStickySidebar">--}}

                {{--        --}}
                {{--                    <div class="card search-filter">--}}
                {{--                        <div class="card-header">--}}
                {{--                            <h4 class="card-title mb-0">Search Filter</h4>--}}
                {{--                        </div>--}}
                {{--                        <div class="card-body">--}}
                {{--                            <div class="filter-widget">--}}
                {{--                                <div class="cal-icon">--}}
                {{--                                    <input type="text" class="form-control datetimepicker" placeholder="Select Date">--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                            <div class="filter-widget">--}}
                {{--                                <h4>Gender</h4>--}}
                {{--                                <div>--}}
                {{--                                    <label class="custom_check">--}}
                {{--                                        <input type="checkbox" name="gender_type" checked>--}}
                {{--                                        <span class="checkmark"></span> Male--}}
                {{--                                    </label>--}}
                {{--                                </div>--}}
                {{--                                <div>--}}
                {{--                                    <label class="custom_check">--}}
                {{--                                        <input type="checkbox" name="gender_type">--}}
                {{--                                        <span class="checkmark"></span> Female--}}
                {{--                                    </label>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                            <div class="filter-widget">--}}
                {{--                                <h4>Select Courses</h4>--}}
                {{--                                <div>--}}
                {{--                                    <label class="custom_check">--}}
                {{--                                        <input type="checkbox" name="select_specialist" checked>--}}
                {{--                                        <span class="checkmark"></span> Digital Marketer--}}

                {{--                                    </label>--}}
                {{--                                </div>--}}
                {{--                                <div>--}}
                {{--                                    <label class="custom_check">--}}
                {{--                                        <input type="checkbox" name="select_specialist" checked>--}}
                {{--                                        <span class="checkmark"></span> UNIX, Calculus, Trigonometry--}}
                {{--                                    </label>--}}
                {{--                                </div>--}}
                {{--                                <div>--}}
                {{--                                    <label class="custom_check">--}}
                {{--                                        <input type="checkbox" name="select_specialist">--}}
                {{--                                        <span class="checkmark"></span> Computer Programming--}}
                {{--                                    </label>--}}
                {{--                                </div>--}}
                {{--                                <div>--}}
                {{--                                    <label class="custom_check">--}}
                {{--                                        <input type="checkbox" name="select_specialist">--}}
                {{--                                        <span class="checkmark"></span> ASP.NET,Computer Gaming--}}
                {{--                                    </label>--}}
                {{--                                </div>--}}
                {{--                                <div>--}}
                {{--                                    <label class="custom_check">--}}
                {{--                                        <input type="checkbox" name="select_specialist">--}}
                {{--                                        <span class="checkmark"></span> HTML, Css--}}
                {{--                                    </label>--}}
                {{--                                </div>--}}
                {{--                                <div>--}}
                {{--                                    <label class="custom_check">--}}
                {{--                                        <input type="checkbox" name="select_specialist">--}}
                {{--                                        <span class="checkmark"></span> VB, VB.net--}}
                {{--                                    </label>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                            <div class="btn-search">--}}
                {{--                                <button type="button" class="btn btn-block w-100">Search</button>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--               --}}

                {{--                </div>--}}

                <div class="col-md-12 col-lg-8 col-xl-9 mx-auto">

                    @foreach($mentors as $mentor)
                        <!-- Mentor Widget -->
                        <div class="card">
                            <div class="card-body">
                                <div class="mentor-widget">
                                    <div class="user-info-left">
                                        <div class="mentor-img">

                                            @if($mentor->photo)
                                                <img src="{{asset('images/profile/'.$mentor->photo)}}" class="img-fluid" alt="User Image">
                                            @else
                                                <img src="{{asset('front/img/avatar_photo.jpg')}}" class="img-fluid" alt="User Image">
                                            @endif

                                        </div>
                                        <div class="user-info-cont">
                                            <h4 class="usr-name"><a href="{{route('profile',$mentor->id)}}">{{$mentor->name}} {{$mentor->surname}}</a></h4>


                                            <div class="mentor-details">
                                                <p class="user-location"><i class="fas fa-map-marker-alt"></i>
                                                    @if(!is_null($mentor->userInfo->first()))
                                                        {{$mentor->userInfo->first()->city ? : '' }},  {{$mentor->userInfo->first()->state ? : ''}}
                                                    @endif

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="user-info-right">
                                        <div class="user-infos">
                                            <ul>
                                                <li><i class="far fa-comment"></i> @if(!is_null($mentor->infoBlogs)) {{count($mentor->infoBlogs)}} @endif İçerik</li>

                                            </ul>
                                        </div>
                                        <div class="mentor-booking">
                                            <a class="apt-btn" href="{{route('profile',$mentor->id)}}">Detay</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Mentor Widget -->
                    @endforeach


                    {{--                    <div class="load-more text-center">--}}
                    {{--                        <a class="btn btn-primary btn-sm" href="javascript:void(0);">Load More</a>--}}
                    {{--                    </div>--}}
                </div>
            </div>

        </div>

    </div>
    <!-- /Page Content -->
@endsection
