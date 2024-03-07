@extends('front.layout.dashtemp')

@section('content')
    <div class="col-md-7 col-lg-8 col-xl-9">

        <div class="row">

            <div class="col-12">

                <!-- Tab Menu -->
                <nav class="user-tabs">
                    <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                        <li>
                            <a class="nav-link active" href="#activeservice" data-bs-toggle="tab">Actif</a>
                        </li>
                        <li>
                            <a class="nav-link" href="#inactiveservice" data-bs-toggle="tab">Inaktif</a>
                        </li>
                    </ul>
                </nav>
                <!-- /Tab Menu -->

                <!-- Tab Content -->
                <div class="tab-content">

                    <!-- Active Content -->
                    <div role="tabpanel" id="activeservice" class="tab-pane fade show active">

                        <div class="row">
                            @foreach($blogs as $blog)
                                <div class="col-12 col-md-6 col-xl-4 d-flex">
                                    <div class="course-box blog grid-blog">
                                        <div class="blog-image mb-0">
                                            <a href="blog-details.html"><img class="img-fluid" style="height: 350px;object-fit: contain" src="{{asset('images/'.$blog->photo)}}" alt="Post Image"></a>
                                        </div>
                                        <div class="course-content">
                                            <span class="date">{{$blog->created_at}}</span>
                                            <span class="course-title">{{$blog->title}}</span>
                                            <p>{{$blog->short_text}}</p>
                                            <div class="row">
                                                <div class="col">
                                                    <a href="{{route('editBlog',$blog->id)}}" class="text-success"><i class="far fa-edit"></i> Düzenle</a>
                                                </div>
                                                <div class="col text-end">
                                                    <a href="{{route('deleteBlog',$blog->id)}}" data-confirm-delete="true" class="text-danger">
                                                        <i class="far fa-trash-alt"></i> Sil
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach

                        </div>

                    </div>
                    <!-- /Active Content -->

                    <!-- Inactive Content -->
                    <div role="tabpanel" id="inactiveservice" class="tab-pane fade">

                        <div class="row">
{{--                            <div class="col-12 col-md-6 col-xl-4 d-flex">--}}
{{--                                <div class="course-box blog grid-blog">--}}
{{--                                    <div class="blog-image mb-0">--}}
{{--                                        <a href="blog-details.html"><img class="img-fluid" src="assets/img/blog/blog-04.jpg" alt="Post Image"></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="course-content">--}}
{{--                                        <span class="date">April 09 2020</span>--}}
{{--                                        <span class="course-title">Abacus Study for beginner - Part III</span>--}}
{{--                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col">--}}
{{--                                                <a href="edit-blog.html" class="text-success">--}}
{{--                                                    <i class="far fa-edit"></i> Edit--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="col text-end">--}}
{{--                                                <a href="javascript:void(0);" class="text-success">--}}
{{--                                                    <i class="fas fa-toggle-on"></i> Active--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

                        </div>

                    </div>
                    <!-- /Inactive Content -->

                </div>
                <!-- /Tab Content -->


            </div>


        </div>

    </div>
    <script>
        function deleteBlog(id) {
            var urlToRedirect = '/deleteBlog/' + id;
            console.log(urlToRedirect);
            Swal.fire({
                title: "İçeriği silmek istediğinize emin misiniz?",
                icon: "question",
                showCancelButton: true,
                confirmButtonText: "Onayla",
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = urlToRedirect;
                }
            });
        }
    </script>
@endsection
