@extends('front.app')
@section('styles')
    <!-- -->
@endsection
@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-12 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">

                        </ol>
                    </nav>

                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <!-- Page Content -->
    <div class="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">

                    <!-- Mentor Widget -->
                    <div class="card">
                        <div class="card-body">
                            <div class="mentor-widget">
                                <div class="user-info-left align-items-center">
                                    <div class="mentor-img d-flex flex-wrap justify-content-center">
                                        <div class="pro-avatar">@if($user->photo)
                                                <img src="{{asset('images/profile/'.$user->photo)}}" width="100" alt="User Image" class="avatar-img rounded-circle">
                                            @else
                                                <img src="{{asset('front/img/avatar_photo.jpg')}}" width="100"  alt="User Image" class="avatar-img rounded-circle">
                                            @endif
                                        </div>

                                        <div class="mentor-details m-0">
                                            <p class="user-location m-0"> @if(!is_null($userInfo)) <i class="fas fa-map-marker-alt"></i> {{$userInfo->city ? : '' }} - {{$userInfo->state}}  @endif</p>
                                        </div>
                                    </div>
                                    <div class="user-info-cont">
                                        <h4 class="usr-name">{{$user->name}} {{$user->surname}}</h4>
                                       <p class="mentor-type">{{$userInfo->birthday ?? ''}}</p>

{{--                                        <div class="mentor-action">--}}
{{--                                            <p class="mentor-type social-title">Contact Me</p>--}}
{{--                                            <a href="javascript:void(0)" class="btn-blue">--}}
{{--                                                <i class="fas fa-comments"></i>--}}
{{--                                            </a>--}}
{{--                                            <a href="chat.html" class="btn-blue">--}}
{{--                                                <i class="fas fa-envelope"></i>--}}
{{--                                            </a>--}}
{{--                                            <a href="javascript:void(0)" class="btn-blue" data-toggle="modal" data-target="#voice_call">--}}
{{--                                                <i class="fas fa-phone-alt"></i>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
                                <div class="user-info-right d-flex align-items-end flex-wrap">
                                    <div class="hireme-btn text-center">
{{--                                        <span class="hire-rate">$500 / Hour</span>--}}
                                        @if($user->id == auth()->user()->id)
                                            @if($user->role == 1)
                                                <a href="{{route('profilesettings')}}" class="blue-btn-radius" >Profil Düzenle</a>
                                            @else
                                                <a href="{{route('profileset')}}" class="blue-btn-radius" >Profil Düzenle</a>
                                            @endif
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Mentor Widget -->

                    <!-- Mentor Details Tab -->
                    <div class="card">
                        <div class="card-body custom-border-card pb-0">

                            <!-- About Details -->
                            <div class="widget about-widget custom-about mb-0">
                                <h4 class="widget-title">Hakkımda</h4>
                                <hr/>
                                <p>{!!  $userInfo->about ?? '-'!!}</p>

                            </div>
                            <!-- /About Details -->
                        </div>
                    </div>

{{--                    <div class="card">--}}
{{--                        <div class="card-body custom-border-card pb-0">--}}

{{--                 --}}
{{--                            <div class="widget education-widget mb-0">--}}
{{--                                <h4 class="widget-title">Personal Details</h4>--}}
{{--                                <hr/>--}}
{{--                                <div class="experience-box">--}}
{{--                                    <ul class="experience-list profile-custom-list">--}}
{{--                                        <li>--}}
{{--                                            <div class="experience-content">--}}
{{--                                                <div class="timeline-content">--}}
{{--                                                    <span>Gender</span>--}}
{{--                                                    <div class="row-result">Male</div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <div class="experience-content">--}}
{{--                                                <div class="timeline-content">--}}
{{--                                                    <span>Date of Birth</span>--}}
{{--                                                    <div class="row-result">01 - 02 - 2000</div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <div class="experience-content">--}}
{{--                                                <div class="timeline-content">--}}
{{--                                                    <span>Where did you hear about us?</span>--}}
{{--                                                    <div class="row-result">Through web search</div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                       --}}

{{--                        </div>--}}
{{--                    </div>--}}

                    <!-- /Mentor Details Tab -->

                </div>
            </div>
        </div>
    </div>
    <!-- /Page Content -->
@endsection
@section('scripts')
    <!-- -->
@endsection
