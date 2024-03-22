@extends('admin.app')
@section('styles')
    <style>
        .uploaded-photo img {
            max-width: 300px;
            max-height: 150px;
            width: auto;
            height: auto;
        }
        </style>
@endsection
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Ayarlar</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active">Ayarlar</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-md-12">
                    <div class="profile-menu">
                        <ul class="nav nav-tabs nav-tabs-solid">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#per_details_tab">Genel Ayarlar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#password_tab">Anasayfa Ayarları</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content profile-tab-cont">

                        <!-- Personal Details Tab -->
                        <div class="tab-pane fade show active" id="per_details_tab">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title">Website Ayarları</h5>
                                        </div>
                                        <div class="card-body pt-0">

                                            <form action="{{route('admin.settings.logo')}}"  method="post" enctype="multipart/form-data">
                                                @csrf

                                                <div class="settings-form">

                                                    <div class="form-group">
                                                        <p class="settings-label">Logo <span class="star-red">*</span></p>
                                                        <div class="form-control">
                                                            <input type="file" name="logo" class="upload">
                                                        </div>
                                                                <small class="form-text text-muted">Format JPG, GIF veya PNG. İzin verilen boyut 2MB</small>
                                                        <h6 class="settings-size">Recommended image size is <span>150px x 150px</span></h6>
                                                        <div class="uploaded-photo" style="width: 300px!important;height: 150px!important;">
                                                            <img src="{{asset('images/settings/'.$settings->site_logo)}}">
                                                        </div>
                                                    </div>

                                                    <div class="form-group mb-0">
                                                        <div class="settings-btns">
                                                            <button type="submit" class="btn btn-orange">Güncelle</button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <h5 class="card-title">Banner</h5>

                                        </div>
                                        <div class="card-body pt-0">

                                            <form action="{{route('admin.settings.banner')}}" method="post">
                                                @csrf
                                                <div class="settings-form">

                                                    <div class="form-group form-placeholder">
                                                        <label>Banner Başlık <span class="star-red">*</span></label>
                                                        <input type="text" name="banner_title" class="form-control" value="{{$settings->banner_title}}">
                                                    </div>
                                                    <div class="form-group form-placeholder">
                                                        <label>Banner Alt Başlık <span class="star-red">*</span></label>
                                                        <input type="text" name="banner_subtitle" class="form-control" value="{{$settings->banner_subtitle}}">
                                                    </div>
                                                    <div class="form-group mb-0">
                                                        <div class="settings-btns">
                                                            <button type="submit" class="btn btn-orange">Güncelle</button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- /Personal Details Tab -->

                        <!-- Change Password Tab -->
                        <div id="password_tab" class="tab-pane fade">

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <h5 class="card-title">Banner Altı</h5>

                                        </div>
                                        <div class="card-body pt-0">

                                            <form action="{{route('admin.settings.section1')}}" method="post">
                                                @csrf
                                                <div class="settings-form">

                                                    <div class="form-group form-placeholder">
                                                        <label>Başlık 1 <span class="star-red">*</span></label>
                                                        <input type="text" name="section1_title" class="form-control" value="{{$settings->section1_title}}">
                                                    </div>
                                                    <div class="form-group form-placeholder">
                                                        <label>İçerik 1 <span class="star-red">*</span></label>
                                                        <input type="text" name="section1_subtitle" class="form-control" value="{{$settings->section1_subtitle}}">
                                                    </div>
                                                    <div class="form-group form-placeholder">
                                                        <label>Başlık 2 <span class="star-red">*</span></label>
                                                        <input type="text" name="section2_title" class="form-control" value="{{$settings->section2_title}}" >
                                                    </div>
                                                    <div class="form-group form-placeholder">
                                                        <label>İçerik 2 <span class="star-red">*</span></label>
                                                        <input type="text" name="section2_subtitle" class="form-control" value="{{$settings->section2_subtitle}}">
                                                    </div>
                                                    <div class="form-group form-placeholder">
                                                        <label>Başlık 3 <span class="star-red">*</span></label>
                                                        <input type="text" name="section3_title" class="form-control" value="{{$settings->section3_title}}">
                                                    </div>
                                                    <div class="form-group form-placeholder">
                                                        <label>İçerik 3 <span class="star-red">*</span></label>
                                                        <input type="text" name="section3_subtitle" class="form-control"value="{{$settings->section3_subtitle}}" >
                                                    </div>
                                                    <div class="form-group mb-0">
                                                        <div class="settings-btns">
                                                            <button type="submit" class="btn btn-orange">Güncelle</button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <h5 class="card-title">Footer Üstü</h5>

                                        </div>
                                        <div class="card-body pt-0">

                                            <form action="{{route('admin.settings.section4')}}" method="post">
                                                @csrf
                                                <div class="settings-form">

                                                    <div class="form-group form-placeholder">
                                                        <label>Başlık 1 <span class="star-red">*</span></label>
                                                        <input type="text" name="section4_title" class="form-control" value="{{$settings->section4_title}}">
                                                    </div>
                                                    <div class="form-group form-placeholder">
                                                        <label>İçerik 1 <span class="star-red">*</span></label>
                                                        <input type="text" name="section4_subtitle" class="form-control" value="{{$settings->section4_subtitle}}">
                                                    </div>
                                                    <div class="form-group form-placeholder">
                                                        <label>Başlık 2 <span class="star-red">*</span></label>
                                                        <input type="text" name="section5_title" class="form-control" value="{{$settings->section5_title}}">
                                                    </div>
                                                    <div class="form-group form-placeholder">
                                                        <label>İçerik 2 <span class="star-red">*</span></label>
                                                        <input type="text" name="section5_subtitle" class="form-control" value="{{$settings->section5_subtitle}}">
                                                    </div>
                                                    <div class="form-group form-placeholder">
                                                        <label>Başlık 3 <span class="star-red">*</span></label>
                                                        <input type="text" name="section6_title" class="form-control" value="{{$settings->section6_title}}">
                                                    </div>
                                                    <div class="form-group form-placeholder">
                                                        <label>İçerik 3 <span class="star-red">*</span></label>
                                                        <input type="text" name="section6_subtitle" class="form-control" value="{{$settings->section6_subtitle}}">
                                                    </div>
                                                    <div class="form-group mb-0">
                                                        <div class="settings-btns">
                                                            <button type="submit" class="btn btn-orange">Güncelle</button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const fileInput = document.querySelector('input[type="file"]');
            const uploadedPhoto = document.querySelector('.uploaded-photo img');

            fileInput.addEventListener('change', function(event) {
                const file = event.target.files[0];
                const reader = new FileReader();

                reader.onload = function(e) {
                    uploadedPhoto.src = e.target.result;
                }

                reader.readAsDataURL(file);
            });
        });

    </script>
@endsection
