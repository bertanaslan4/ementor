@extends('front.layout.dashtemp')

@section('content')
    <div class="col-md-7 col-lg-8 col-xl-9">
        <div class="card">
            <div class="card-body">

                <!-- Profile Settings Form -->
                <form action="{{route('profilesettings.update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row form-row">
                        <div class="col-12 col-md-12">
                            <div class="form-group">
                                <div class="change-avatar">
                                    <div class="profile-img">
                                        <div class="uploaded-photo">
                                            @if($user->photo)
                                                <img src="{{asset('images/profile/'.$user->photo)}}" alt="User Image">
                                            @else
                                                <img src="{{asset('front/img/avatar_photo.jpg')}}" alt="User Image">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="upload-img">
                                        <div class="change-photo-btn">
                                            <span><i class="fa fa-upload"></i> Fotoğraf Yükle</span>
                                            <input type="file" name="photo" class="upload">
                                        </div>
                                        <small class="form-text text-muted">Format JPG, GIF veya PNG. İzin verilen boyut 2MB</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>İsim</label>
                                <input type="text" name="name" class="form-control" value="{{$user->name}}">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Soyisim</label>
                                <input type="text" name="surname" class="form-control" value="{{$user->surname}}">
                            </div>
                        </div>
                        <div class="col-12 col-md-12">
                            <div class="form-group">
                                <label>Doğum Tarihi</label>

                                    <input
                                        type="date"
                                        id="meeting-time"
                                        name="birthday"
                                        value="{{ $userInfo->birthday ?? '' }}"
                                        class="form-control"
                                        />

                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="mail" class="form-control" value="{{$user->email}}">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Telefon</label>
                                <input type="text" name="phone" value="{{ $userInfo->phone ?? '' }}" class="form-control">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Adres</label>
                                <input type="text" name="address" class="form-control" value="{{ $userInfo->address ?? '' }}">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>İl</label>
                                <input type="text" name="city" class="form-control" value="{{ $userInfo->city ?? '' }}">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>İlçe</label>
                                <input type="text"  name="state" class="form-control" value="{{ $userInfo->state ?? '' }}">
                            </div>
                        </div>
                        <div class="col-12 col-md-12">
                            <div class="form-group">
                                <label>Hakkımda</label>
                                <textarea name="about" class="form-control" rows="5" >{{ $userInfo->about ?? '' }} </textarea>
                            </div>
                        </div>


                    </div>
                    <div class="submit-section">
                        <button type="submit" class="btn btn-primary submit-btn">Kaydet</button>
                    </div>
                </form>
                <!-- /Profile Settings Form -->

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
