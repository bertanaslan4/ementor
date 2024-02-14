@extends('admin.app')
@section('styles')
    <!-- -->
@endsection
@section('content')

    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Menteeler</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Dashboard</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-center mb-0">
                                    <thead>
                                    <tr>
                                        <th>Mentee İsim Soyisim</th>
                                        <th>Email</th>
                                        <th>İşlem</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($mentees as $mentee)
                                        <tr>
                                            <td>{{$mentee->name}}</td>
                                            <td>{{$mentee->email}}</td>
                                            <td class="text-end">
                                                <div class="actions">
                                                    <a  href="{{route('admin.users.detail',$mentee->id)}}" class="btn btn-sm bg-primary-light me-2">
                                                        <i class="fe fe-eye"></i> Detay
                                                    </a>

                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
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
