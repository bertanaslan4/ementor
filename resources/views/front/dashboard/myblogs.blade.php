@extends('front.layout.dashtemp')

@section('content')
    <div class="col-md-7 col-lg-8 col-xl-9">

        <div class="row">

            <div class="col-12">




                        <div class="row">
                            @foreach($blogs as $blog)
                                <div class="col-12 col-md-6 col-xl-4 ">
                                    <div class="course-box blog grid-blog">
                                        <div class="blog-image mb-0">
                                            <a href="{{route('blogdetail',$blog->id)}}"><img class="img-fluid" style="height: 350px;object-fit: contain" src="{{asset('images/'.$blog->photo)}}" alt="Post Image"></a>
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
