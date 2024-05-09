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
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="pb-3">Soru Ekle</h3>

                            <form action="{{route('faqs.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="service-fields mb-3">
                                    <h4 class="heading-2">Sıkça Sorulan Soru Girişi</h4>

                                </div>

                                <div class="service-fields mb-3">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Soru: <span class="text-danger">*</span></label>
                                                <textarea id="about" class="form-control service-desc" name="question"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="submit-section">
                                    <button class="btn btn-primary submit-btn" type="submit" name="form_submit" value="submit">Oluştur</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- /Page Content -->
@endsection
@section('scripts')
    <!-- -->
@endsection
