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
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Menü Listesi</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Dashboard</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->


            <div class="card invoices-tabs-card">
                <div class="card-body card-body pt-0 pb-0">
                    <div class="invoices-main-tabs border-0 pb-0">
                        <div class="row align-items-center">
                            <div class="col-lg-12 col-md-12">
                                <div class="invoices-settings-btn invoices-settings-btn-one">
                                    <a href="{{route('admin.anno.create')}}" class="btn">
                                        <i data-feather="plus-circle"></i> Yeni Duyuru Ekle
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-stripped table-hover datatable">
                                    <thead class="thead-light">
                                    <tr>
                                        <th>Başlık</th>

                                        <th>Tarih</th>
                                        <th class="text-end">İşlem</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($annos as $anno)
                                        <tr>

                                            <td class="text-primary">{{$anno->title}}</td>
                                            <td>{{$anno->created_at->format('d-m-Y')}}</td>
                                            <td class="text-end">
                                                <a href="" class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> Detay</a>

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
