@extends('front.layout.dashtemp')

@section('content')
    <div class="col-md-7 col-lg-8 col-xl-9 custom-edit-service">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="pb-3">Blog Düzenleme</h3>

                        <form action="{{route('updateBlog')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="service-fields mb-3">
                                <h4 class="heading-2">Bilgi Kaynağı Girişi</h4>
                                <div class="row">
                                    <div class="col-12 col-md-12">
                                        <div class="form-group">
                                            <div class="change-avatar">
                                                <div class="uploaded-photo">
                                                    <img src="{{asset('images/'.$blog->photo)}}">
                                                </div>
                                                <div class="upload-img">
                                                    <div class="change-photo-btn">
                                                        <span><i class="fa fa-upload"></i> Upload Photo</span>
                                                        <input type="file" name="photo" class="upload">
                                                    </div>
                                                    <small class="form-text text-muted">Format JPG, GIF veya PNG. İzin verilen boyut 2MB</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Başlık <span class="text-danger">*</span></label>
                                            <input class="form-control" name="title" type="text" value="{{$blog->title}}">
                                        </div>
                                        <div class="form-group">

                                            <input class="form-control" name="id" type="hidden" value="{{$blog->id}}">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="service-fields mb-3">

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Kısa Özet: <span class="text-danger">*</span></label>
                                            <textarea id="about" class="form-control service-desc" name="short_text">{{$blog->short_text}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="service-fields mb-3">

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>İçerik <span class="text-danger">*</span></label>
                                            <textarea id="about" class="form-control service-desc" name="text">{{$blog->text}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="service-fields mb-3">
                                <h4 class="heading-2">Blog Dökümanı </h4>
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
                                <button class="btn btn-primary submit-btn" type="submit" name="form_submit" value="submit">Düzenle</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>


        </div>

    </div>
    <script>
        function previewPhoto(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    // Resim önizlemesi için bir img elementi oluştur
                    var imgElement = document.createElement("img");
                    imgElement.src = e.target.result;


                    // Profil resmi alanını temizle ve yeni resmi ekleyin
                    var profileImgDiv = document.querySelector(".uploaded-photo");
                    profileImgDiv.innerHTML = "";
                    profileImgDiv.appendChild(imgElement);
                };

                reader.readAsDataURL(input.files[0]); // Resmi oku ve base64 olarak al
            }
        }

        // Dosya seçildiğinde önizleme işlevini çağır
        document.querySelector('input[name="photo"]').addEventListener("change", function () {
            previewPhoto(this);
        });
    </script>
@endsection
