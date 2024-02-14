@extends('front.layout.dashtemp')

@section('content')
    <div class="col-md-7 col-lg-8 col-xl-9 custom-edit-service">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="pb-3">Add Blog</h3>

                        <form action="{{route('storeBlog')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="service-fields mb-3">
                                <h4 class="heading-2">Bilgi Kaynağı Girişi</h4>
                                <div class="row">
                                    <div class="col-12 col-md-12">
                                        <div class="form-group">
                                            <div class="change-avatar">
                                                <div class="upload-img">
                                                    <div class="change-photo-btn">
                                                        <span><i class="fa fa-upload"></i> Upload Photo</span>
                                                        <input type="file" name="photo" class="upload">
                                                    </div>
                                                    <small class="form-text text-muted">Allowed JPG, GIF or PNG. Max size of 2MB</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Başlık <span class="text-danger">*</span></label>
                                            <input class="form-control" name="title" type="text" placeholder="Başlık">
                                        </div>
                                    </div>
                                </div>
                            </div>

{{--                            <div class="service-fields mb-3">--}}
{{--                                <h4 class="heading-2">Blog Category</h4>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-lg-6">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label>Category <span class="text-danger">*</span></label>--}}
{{--                                            <select class="form-control select form-select" name="category">--}}
{{--                                                <option value="1">Abacus Study for beginner - Part I</option>--}}
{{--                                                <option value="2" selected="selected">Abacus Study for beginner - Part II</option>--}}
{{--                                                <option value="3">Abacus Study for beginner - Part III</option>--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-6">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label>Sub Category <span class="text-danger">*</span></label>--}}
{{--                                            <select class="form-control select form-select" name="subcategory">--}}
{{--                                                <option value="1">Abacus Study for experienced - Part I</option>--}}
{{--                                                <option value="2" selected="selected">Abacus Study for experienced - Part II</option>--}}
{{--                                                <option value="3">Abacus Study for experienced - Part III</option>--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

                            <div class="service-fields mb-3">

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Kısa Özet: <span class="text-danger">*</span></label>
                                            <textarea id="about" class="form-control service-desc" name="short_text"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="service-fields mb-3">

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>İçerik <span class="text-danger">*</span></label>
                                            <textarea id="about" class="form-control service-desc" name="text"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="service-fields mb-3">
                                <h4 class="heading-2">Blog Images </h4>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="service-upload">
                                            <i class="fas fa-cloud-upload-alt"></i>
                                            <span>Upload Service Images *</span>
                                            <input type="file" name="images[]" id="images" multiple="">

                                        </div>
                                        <div id="uploadPreview">
                                            <ul class="upload-wrap">
                                                <li>
                                                    <div class="upload-images">

                                                        <img alt="" src="assets/img/blog/blog-thumb-01.jpg">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="upload-images">

                                                        <img alt="" src="assets/img/blog/blog-thumb-02.jpg">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="upload-images">

                                                        <img alt="" src="assets/img/blog/blog-thumb-03.jpg">
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn" type="submit" name="form_submit" value="submit">Submit</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>


        </div>

    </div>
@endsection
