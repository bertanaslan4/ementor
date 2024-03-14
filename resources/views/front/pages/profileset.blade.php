@extends('front.app')

@section('content')
    <div class="col-md-8 col-lg-8 col-xl-8 mx-auto">
        <div class="card">
            <div class="card-body">

                <!-- Profile Settings Form -->
                <form action="{{route('profileset.update')}}" method="post" enctype="multipart/form-data">
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
                                            <span><i class="fa fa-upload"></i> Upload Photo</span>
                                            <input type="file" name="photo" class="upload">
                                        </div>
                                        <small class="form-text text-muted">Allowed JPG, GIF or PNG. Max size of 2MB</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="name" class="form-control" value="{{$user->name}}">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="surname" class="form-control" value="{{$user->surname}}">
                            </div>
                        </div>
                        <div class="col-12 col-md-12">
                            <div class="form-group">
                                <label>Date of Birth</label>

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
                                <label>Mobile</label>
                                <input type="text" name="phone" value="{{ $userInfo->phone ?? '' }}" class="form-control">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control" value="{{ $userInfo->address ?? '' }}">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" name="city" class="form-control" value="{{ $userInfo->city ?? '' }}">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>State</label>
                                <input type="text"  name="state" class="form-control" value="{{ $userInfo->state ?? '' }}">
                            </div>
                        </div>
                        <div class="col-12 col-md-12">
                            <div class="form-group">
                                <label>Hakkımda</label>
                                <textarea name="about" id="about" class="form-control" rows="5" >{{ $userInfo->about ?? '' }} </textarea>
                            </div>
                        </div>


                    </div>
                    <div class="submit-section">
                        <button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
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
        $('#about').summernote({
            placeholder: 'Hakkımda',
            tabsize: 2,
            height: 300,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>
@endsection
