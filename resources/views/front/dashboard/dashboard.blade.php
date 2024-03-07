@extends('front.layout.dashtemp')

@section('content')
    <div class="col-md-7 col-lg-8 col-xl-9">

        <div class="row">
            <div class="col-md-12 col-lg-6 dash-board-list blue">
                <div class="dash-widget">
                    <div class="circle-bar">
                        <div class="icon-col">
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                    <div class="dash-widget-info">
                        <h3>{{$blogCount}}</h3>
                        <h6>Kaynak Sayısı</h6>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-6 dash-board-list yellow">
                <div class="dash-widget">
                    <div class="circle-bar">
                        <div class="icon-col">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                    </div>
                    <div class="dash-widget-info">
                        <h3>{{$commentCount}}</h3>
                        <h6>Yorum Sayısı</h6>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12">
                <h4 class="mb-4">Mentee</h4>
                <div class="card card-table">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-center mb-0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>İsim</th>
                                    <th>Mail</th>
                                    <th class="text-center">İşlem</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(!is_null($mentee))
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                @if($mentee->photo)
                                                    <a href="#" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{asset('images/profile/'.$mentee->photo)}}" alt="User Image"></a>
                                                @else
                                                    <a href="#" class="avatar avatar-sm me-2"> <img class="avatar-img rounded-circle" src="{{asset('front/img/avatar_photo.jpg')}}" alt="User Image"></a>
                                                @endif

                                            </h2>
                                        </td>
                                        <td>
                                            <a href="profile.html">{{$mentee->name}}</a>
                                        </td>
                                        <td>{{$mentee->email}}</td>
                                        <td class="text-center"><a href="profile.html" class="btn btn-sm bg-info-light"><i class="far fa-eye"></i> Detay</a></td>
                                    </tr>
                                @else
                                    <tr>
                                        <td>

                                            Mentee'niz bulunmamaktadır.
                                        </td>

                                    </tr>
                                @endif

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
