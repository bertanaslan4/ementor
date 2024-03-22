@extends('admin.app')
@section('styles')
    <!-- -->
@endsection

@section('content')

    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <div class="profile-header">
                        <div class="row align-items-center">
                            <div class="col-auto profile-image">
                                <a href="#">
                                    @if($user->photo)
                                        <img class="rounded-circle" alt="User Image" src="{{asset('images/profile/'.$user->photo)}}">
                                    @else
                                        <img class="rounded-circle" alt="User Image" src="{{asset('front/img/avatar_photo.jpg')}}">
                                    @endif
                                </a>
                            </div>
                            <div class="col ms-md-n2 profile-user-info">
                                <h4 class="user-name mb-0">{{$user->name}} {{$user->surname}}</h4>
                                <h6 class="text-muted"><a href="https://mentoring.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b0d1dcdcd5ded4d1c6d9c3f0d1d4ddd9de9ed3dfdd">[email&#160;protected]</a></h6>
                                <div class="pb-3"><i class="fa fa-map-marker"></i> @if($user->userInfo) {{$user->userInfo->first()->city}}, {{$user->userInfo->first()->state}}@endif</div>
                                <div class="about-text">@if($user->Info) {{$user->userInfo->first()->about ? : ''}} @endif</div>
                            </div>
                            <div class="col-auto profile-btn">
                            </div>
                        </div>
                    </div>
                    <div class="profile-menu">
                        <ul class="nav nav-tabs nav-tabs-solid">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#per_details_tab">Detaylar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#password_tab">Eşleşme</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content profile-tab-cont">

                        <!-- Personal Details Tab -->
                        <div class="tab-pane fade show active" id="per_details_tab">

                            <!-- Personal Details -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title d-flex justify-content-between">
                                                <span>Detaylar</span>

                                            </h5>
                                            <div class="row">
                                                <p class="col-sm-2 text-muted mb-0 mb-sm-3">İsim</p>
                                                <p class="col-sm-10">{{$user->name}} {{$user->surname}}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-2 text-muted mb-0 mb-sm-3">Doğum Günü </p>
                                                <p class="col-sm-10">@if($user->userInfo) {{$user->userInfo->first()->birthday ? : ''}} @endif</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-2 text-muted mb-0 mb-sm-3">Email </p>
                                                <p class="col-sm-10">{{$user->email}}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-2 text-muted mb-0 mb-sm-3">Telefon</p>
                                                <p class="col-sm-10">@if($user->userInfo) {{$user->userInfo->first()->phone ? : ''}} @endif</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-2 text-muted mb-0">Adres</p>
                                                <p class="col-sm-10 mb-0">@if($user->userInfo) {{$user->userInfo->first()->address ? : ''}} @endif</p>
                                            </div>
                                        </div>
                                    </div>


                                </div>


                            </div>
                            <!-- /Personal Details -->

                        </div>
                        <!-- /Personal Details Tab -->

                        <!-- Change Password Tab -->
                        <div id="password_tab" class="tab-pane fade">

                            @if($user->role == 1)
                                @if($user->mentor)
                                    <!-- Personal Details -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title d-flex justify-content-between">
                                                        <span>Detaylar</span>

                                                    </h5>
                                                    <div class="row">
                                                        <p class="col-sm-2 text-muted mb-0 mb-sm-3">İsim</p>
                                                        <p class="col-sm-10">{{$user->mentor->first()->mentee->name}} {{$user->mentor->first()->mentee->surname}}</p>
                                                    </div>

                                                    <div class="row">
                                                        <p class="col-sm-2 text-muted mb-0 mb-sm-3">Email </p>
                                                        <p class="col-sm-10">{{$user->mentor->first()->mentee->email}}</p>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-8 mx-auto">
                                                            <a href="{{route('admin.relations.destroy',$user->id)}}" style="width: 100%" class="btn btn-sm bg-danger-light me-2 btn-match" >
                                                                <i class="fe fe-ban"></i> Eşleşmeyi Kaldır
                                                            </a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>


                                        </div>



                                    </div>
                                    <!-- /Personal Details -->
                                    @else
                                    <!-- Personal Details -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title d-flex justify-content-between">
                                                        <span>Eşleşme Yok</span>

                                                    </h5>

                                                </div>
                                            </div>


                                        </div>


                                    </div>
                                    <!-- /Personal Details -->
                                @endif
                            @else
                                @if($user->mentee)
                                    <!-- Personal Details -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title d-flex justify-content-between">
                                                        <span>Detaylar</span>

                                                    </h5>
                                                    <div class="row">
                                                        <p class="col-sm-2 text-muted mb-0 mb-sm-3">İsim</p>
                                                        <p class="col-sm-10">{{$user->mentee->first()->mentor->name}} {{$user->mentee->first()->mentor->surname}}</p>
                                                    </div>

                                                    <div class="row">
                                                        <p class="col-sm-2 text-muted mb-0 mb-sm-3">Email </p>
                                                        <p class="col-sm-10">{{$user->mentee->first()->mentor->email}}</p>
                                                    </div>

                                                </div>
                                            </div>


                                        </div>


                                    </div>
                                    <!-- /Personal Details -->
                                @else
                                    <!-- Personal Details -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title d-flex justify-content-between">
                                                        <span>Eşleşme Yok</span>

                                                    </h5>

                                                </div>
                                            </div>


                                        </div>


                                    </div>
                                    <!-- /Personal Details -->
                                @endif
                            @endif

                        </div>
                        <!-- /Change Password Tab -->

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /Page Wrapper -->
@endsection

@section('scripts')
    <!-- -->
@endsection
