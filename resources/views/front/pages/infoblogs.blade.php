@extends('front.app')

@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title">Bloglar</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <!-- Page Content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-md-12 mx-auto">

                    <div class="row blog-grid-row">
                        @foreach($blogsmentee as $blogmentee)
                            <div class="col-md-6 col-sm-12">

                                <!-- Blog Post -->
                                <div class="blog grid-blog">
                                    <div class="blog-image">
                                        <a href="{{route('blogdetail',$blogmentee->id)}}"><img class="img-fluid" style="height: 300px;object-fit: contain;" src="{{asset('images/'.$blogmentee->photo)}}" alt="Post Image"></a>
                                    </div>
                                    <div class="blog-content">
                                        <ul class="entry-meta meta-item">
                                            <li>
                                                <div class="post-author">
                                                    @if($blogmentee->user->photo)
                                                        <img src="{{asset('images/profile/'.$blogmentee->user->photo)}}" alt="Post Author"> <span>{{$blogmentee->user->name}} {{$blogmentee->user->surname}}</span>
                                                    @else
                                                        <img src="{{asset('front/img/avatar_photo.jpg')}}" alt="Post Author"> <span>{{$blogmentee->user->name}} {{$blogmentee->user->surname}}</span>
                                                    @endif

                                                </div>
                                            </li>
                                            <li><i class="far fa-clock"></i> {{$blogmentee->created_at->format('d-m-Y')}}</li>
                                        </ul>
                                        <h3 class="blog-title"><a href="{{route('blogdetail',$blogmentee->id)}}">{{$blogmentee->title}}</a></h3>
                                        <p class="mb-0">{{$blogmentee->short_text}}</p>
                                    </div>
                                </div>
                                <!-- /Blog Post -->

                            </div>
                        @endforeach

                    </div>

                    <!-- Blog Pagination -->
                    {{--                    <div class="row">--}}
                    {{--                        <div class="col-md-12">--}}
                    {{--                            <div class="blog-pagination">--}}
                    {{--                                <nav>--}}
                    {{--                                    <ul class="pagination justify-content-center">--}}
                    {{--                                        <li class="page-item disabled">--}}
                    {{--                                            <a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-double-left"></i></a>--}}
                    {{--                                        </li>--}}
                    {{--                                        <li class="page-item">--}}
                    {{--                                            <a class="page-link" href="#">1</a>--}}
                    {{--                                        </li>--}}
                    {{--                                        <li class="page-item active">--}}
                    {{--                                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>--}}
                    {{--                                        </li>--}}
                    {{--                                        <li class="page-item">--}}
                    {{--                                            <a class="page-link" href="#">3</a>--}}
                    {{--                                        </li>--}}
                    {{--                                        <li class="page-item">--}}
                    {{--                                            <a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a>--}}
                    {{--                                        </li>--}}
                    {{--                                    </ul>--}}
                    {{--                                </nav>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    <!-- /Blog Pagination -->

                </div>


                {{--                <div class="col-lg-4 col-md-12 sidebar-right theiaStickySidebar">--}}

                {{--               --}}
                {{--                    <div class="card search-widget">--}}
                {{--                        <div class="card-body">--}}
                {{--                            <form class="search-form">--}}
                {{--                                <div class="input-group">--}}
                {{--                                    <input type="text" placeholder="Search..." class="form-control">--}}
                {{--                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>--}}
                {{--                                </div>--}}
                {{--                            </form>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                  --}}
                {{--                    <div class="card post-widget">--}}
                {{--                        <div class="card-header">--}}
                {{--                            <h4 class="card-title">Latest Posts</h4>--}}
                {{--                        </div>--}}
                {{--                        <div class="card-body">--}}
                {{--                            <ul class="latest-posts">--}}
                {{--                                <li>--}}
                {{--                                    <div class="post-thumb">--}}
                {{--                                        <a href="blog-details.html">--}}
                {{--                                            <img class="img-fluid" src="assets/img/blog/blog-thumb-01.jpg" alt="">--}}
                {{--                                        </a>--}}
                {{--                                    </div>--}}
                {{--                                    <div class="post-info">--}}
                {{--                                        <h4>--}}
                {{--                                            <a href="blog-details.html">Lorem Ipsum is simply dummy text of the printing</a>--}}
                {{--                                        </h4>--}}
                {{--                                        <p>4 Dec 2019</p>--}}
                {{--                                    </div>--}}
                {{--                                </li>--}}
                {{--                                <li>--}}
                {{--                                    <div class="post-thumb">--}}
                {{--                                        <a href="blog-details.html">--}}
                {{--                                            <img class="img-fluid" src="assets/img/blog/blog-thumb-02.jpg" alt="">--}}
                {{--                                        </a>--}}
                {{--                                    </div>--}}
                {{--                                    <div class="post-info">--}}
                {{--                                        <h4>--}}
                {{--                                            <a href="blog-details.html">It is a long established fact that a reader will be</a>--}}
                {{--                                        </h4>--}}
                {{--                                        <p>3 Dec 2019</p>--}}
                {{--                                    </div>--}}
                {{--                                </li>--}}
                {{--                                <li>--}}
                {{--                                    <div class="post-thumb">--}}
                {{--                                        <a href="blog-details.html">--}}
                {{--                                            <img class="img-fluid" src="assets/img/blog/blog-thumb-03.jpg" alt="">--}}
                {{--                                        </a>--}}
                {{--                                    </div>--}}
                {{--                                    <div class="post-info">--}}
                {{--                                        <h4>--}}
                {{--                                            <a href="blog-details.html">here are many variations of passages of Lorem Ipsum</a>--}}
                {{--                                        </h4>--}}
                {{--                                        <p>3 Dec 2019</p>--}}
                {{--                                    </div>--}}
                {{--                                </li>--}}
                {{--                                <li>--}}
                {{--                                    <div class="post-thumb">--}}
                {{--                                        <a href="blog-details.html">--}}
                {{--                                            <img class="img-fluid" src="assets/img/blog/blog-thumb-04.jpg" alt="">--}}
                {{--                                        </a>--}}
                {{--                                    </div>--}}
                {{--                                    <div class="post-info">--}}
                {{--                                        <h4>--}}
                {{--                                            <a href="blog-details.html">The standard chunk of Lorem Ipsum used since the</a>--}}
                {{--                                        </h4>--}}
                {{--                                        <p>2 Dec 2019</p>--}}
                {{--                                    </div>--}}
                {{--                                </li>--}}
                {{--                                <li>--}}
                {{--                                    <div class="post-thumb">--}}
                {{--                                        <a href="blog-details.html">--}}
                {{--                                            <img class="img-fluid" src="assets/img/blog/blog-thumb-05.jpg" alt="">--}}
                {{--                                        </a>--}}
                {{--                                    </div>--}}
                {{--                                    <div class="post-info">--}}
                {{--                                        <h4>--}}
                {{--                                            <a href="blog-details.html">generate Lorem Ipsum which looks reasonable</a>--}}
                {{--                                        </h4>--}}
                {{--                                        <p>1 Dec 2019</p>--}}
                {{--                                    </div>--}}
                {{--                                </li>--}}
                {{--                            </ul>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                   --}}
                {{--                    <div class="card category-widget">--}}
                {{--                        <div class="card-header">--}}
                {{--                            <h4 class="card-title">Blog Categories</h4>--}}
                {{--                        </div>--}}
                {{--                        <div class="card-body">--}}
                {{--                            <ul class="categories">--}}
                {{--                                <li><a href="#">HTML <span>(62)</span></a></li>--}}
                {{--                                <li><a href="#">Css <span>(27)</span></a></li>--}}
                {{--                                <li><a href="#">Java Script <span>(41)</span></a></li>--}}
                {{--                                <li><a href="#">Photoshop <span>(16)</span></a></li>--}}
                {{--                                <li><a href="#">Wordpress <span>(55)</span></a></li>--}}
                {{--                                <li><a href="#">VB <span>(07)</span></a></li>--}}
                {{--                            </ul>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--               --}}
                {{--                    <div class="card tags-widget">--}}
                {{--                        <div class="card-header">--}}
                {{--                            <h4 class="card-title">Tags</h4>--}}
                {{--                        </div>--}}
                {{--                        <div class="card-body">--}}
                {{--                            <ul class="tags">--}}
                {{--                                <li><a href="#" class="tag">HTML</a></li>--}}
                {{--                                <li><a href="#" class="tag">Css</a></li>--}}
                {{--                                <li><a href="#" class="tag">Java Script</a></li>--}}
                {{--                                <li><a href="#" class="tag">Jquery</a></li>--}}
                {{--                                <li><a href="#" class="tag">Wordpress</a></li>--}}
                {{--                                <li><a href="#" class="tag">Php</a></li>--}}
                {{--                                <li><a href="#" class="tag">Angular js</a></li>--}}
                {{--                                <li><a href="#" class="tag">React js</a></li>--}}
                {{--                                <li><a href="#" class="tag">Vue js</a></li>--}}
                {{--                                <li><a href="#" class="tag">Photoshop</a></li>--}}
                {{--                                <li><a href="#" class="tag">Ajax</a></li>--}}
                {{--                                <li><a href="#" class="tag">Json</a></li>--}}
                {{--                                <li><a href="#" class="tag">C</a></li>--}}
                {{--                                <li><a href="#" class="tag">C++</a></li>--}}
                {{--                                <li><a href="#" class="tag">Vb</a></li>--}}
                {{--                                <li><a href="#" class="tag">Vb.net</a></li>--}}
                {{--                                <li><a href="#" class="tag">Asp.net</a></li>--}}
                {{--                            </ul>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--               --}}

                {{--                </div>--}}


            </div>
            <div class="row">
                <div class="col-lg-8 col-md-12 mx-auto">

                    <div class="row blog-grid-row">
                        @foreach($blogs as $blog)
                            <div class="col-md-6 col-sm-12">

                                <!-- Blog Post -->
                                <div class="blog grid-blog">
                                    <div class="blog-image">
                                        <a href="{{route('blogdetail',$blog->id)}}"><img class="img-fluid" style="height: 300px;object-fit: contain;" src="{{asset('images/'.$blog->photo)}}" alt="Post Image"></a>
                                    </div>
                                    <div class="blog-content">
                                        <ul class="entry-meta meta-item">
                                            <li>
                                                <div class="post-author">
                                                    @if($blog->user->photo)
                                                       <img src="{{asset('images/profile/'.$blog->user->photo)}}" alt="Post Author"> <span>{{$blog->user->name}} {{$blog->user->surname}}</span>
                                                    @else
                                                        <img src="{{asset('front/img/avatar_photo.jpg')}}" alt="Post Author"> <span>{{$blog->user->name}} {{$blog->user->surname}}</span>
                                                    @endif

                                                </div>
                                            </li>
                                            <li><i class="far fa-clock"></i> {{$blog->created_at->format('d-m-Y')}}</li>
                                        </ul>
                                        <h3 class="blog-title"><a href="{{route('blogdetail',$blog->id)}}">{{$blog->title}}</a></h3>
                                        <p class="mb-0">{{$blog->short_text}}</p>
                                    </div>
                                </div>
                                <!-- /Blog Post -->

                            </div>
                        @endforeach

                    </div>

                    <!-- Blog Pagination -->
{{--                    <div class="row">--}}
{{--                        <div class="col-md-12">--}}
{{--                            <div class="blog-pagination">--}}
{{--                                <nav>--}}
{{--                                    <ul class="pagination justify-content-center">--}}
{{--                                        <li class="page-item disabled">--}}
{{--                                            <a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-double-left"></i></a>--}}
{{--                                        </li>--}}
{{--                                        <li class="page-item">--}}
{{--                                            <a class="page-link" href="#">1</a>--}}
{{--                                        </li>--}}
{{--                                        <li class="page-item active">--}}
{{--                                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>--}}
{{--                                        </li>--}}
{{--                                        <li class="page-item">--}}
{{--                                            <a class="page-link" href="#">3</a>--}}
{{--                                        </li>--}}
{{--                                        <li class="page-item">--}}
{{--                                            <a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </nav>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <!-- /Blog Pagination -->

                </div>


{{--                <div class="col-lg-4 col-md-12 sidebar-right theiaStickySidebar">--}}

{{--               --}}
{{--                    <div class="card search-widget">--}}
{{--                        <div class="card-body">--}}
{{--                            <form class="search-form">--}}
{{--                                <div class="input-group">--}}
{{--                                    <input type="text" placeholder="Search..." class="form-control">--}}
{{--                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                  --}}
{{--                    <div class="card post-widget">--}}
{{--                        <div class="card-header">--}}
{{--                            <h4 class="card-title">Latest Posts</h4>--}}
{{--                        </div>--}}
{{--                        <div class="card-body">--}}
{{--                            <ul class="latest-posts">--}}
{{--                                <li>--}}
{{--                                    <div class="post-thumb">--}}
{{--                                        <a href="blog-details.html">--}}
{{--                                            <img class="img-fluid" src="assets/img/blog/blog-thumb-01.jpg" alt="">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="post-info">--}}
{{--                                        <h4>--}}
{{--                                            <a href="blog-details.html">Lorem Ipsum is simply dummy text of the printing</a>--}}
{{--                                        </h4>--}}
{{--                                        <p>4 Dec 2019</p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <div class="post-thumb">--}}
{{--                                        <a href="blog-details.html">--}}
{{--                                            <img class="img-fluid" src="assets/img/blog/blog-thumb-02.jpg" alt="">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="post-info">--}}
{{--                                        <h4>--}}
{{--                                            <a href="blog-details.html">It is a long established fact that a reader will be</a>--}}
{{--                                        </h4>--}}
{{--                                        <p>3 Dec 2019</p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <div class="post-thumb">--}}
{{--                                        <a href="blog-details.html">--}}
{{--                                            <img class="img-fluid" src="assets/img/blog/blog-thumb-03.jpg" alt="">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="post-info">--}}
{{--                                        <h4>--}}
{{--                                            <a href="blog-details.html">here are many variations of passages of Lorem Ipsum</a>--}}
{{--                                        </h4>--}}
{{--                                        <p>3 Dec 2019</p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <div class="post-thumb">--}}
{{--                                        <a href="blog-details.html">--}}
{{--                                            <img class="img-fluid" src="assets/img/blog/blog-thumb-04.jpg" alt="">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="post-info">--}}
{{--                                        <h4>--}}
{{--                                            <a href="blog-details.html">The standard chunk of Lorem Ipsum used since the</a>--}}
{{--                                        </h4>--}}
{{--                                        <p>2 Dec 2019</p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <div class="post-thumb">--}}
{{--                                        <a href="blog-details.html">--}}
{{--                                            <img class="img-fluid" src="assets/img/blog/blog-thumb-05.jpg" alt="">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="post-info">--}}
{{--                                        <h4>--}}
{{--                                            <a href="blog-details.html">generate Lorem Ipsum which looks reasonable</a>--}}
{{--                                        </h4>--}}
{{--                                        <p>1 Dec 2019</p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                   --}}
{{--                    <div class="card category-widget">--}}
{{--                        <div class="card-header">--}}
{{--                            <h4 class="card-title">Blog Categories</h4>--}}
{{--                        </div>--}}
{{--                        <div class="card-body">--}}
{{--                            <ul class="categories">--}}
{{--                                <li><a href="#">HTML <span>(62)</span></a></li>--}}
{{--                                <li><a href="#">Css <span>(27)</span></a></li>--}}
{{--                                <li><a href="#">Java Script <span>(41)</span></a></li>--}}
{{--                                <li><a href="#">Photoshop <span>(16)</span></a></li>--}}
{{--                                <li><a href="#">Wordpress <span>(55)</span></a></li>--}}
{{--                                <li><a href="#">VB <span>(07)</span></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--               --}}
{{--                    <div class="card tags-widget">--}}
{{--                        <div class="card-header">--}}
{{--                            <h4 class="card-title">Tags</h4>--}}
{{--                        </div>--}}
{{--                        <div class="card-body">--}}
{{--                            <ul class="tags">--}}
{{--                                <li><a href="#" class="tag">HTML</a></li>--}}
{{--                                <li><a href="#" class="tag">Css</a></li>--}}
{{--                                <li><a href="#" class="tag">Java Script</a></li>--}}
{{--                                <li><a href="#" class="tag">Jquery</a></li>--}}
{{--                                <li><a href="#" class="tag">Wordpress</a></li>--}}
{{--                                <li><a href="#" class="tag">Php</a></li>--}}
{{--                                <li><a href="#" class="tag">Angular js</a></li>--}}
{{--                                <li><a href="#" class="tag">React js</a></li>--}}
{{--                                <li><a href="#" class="tag">Vue js</a></li>--}}
{{--                                <li><a href="#" class="tag">Photoshop</a></li>--}}
{{--                                <li><a href="#" class="tag">Ajax</a></li>--}}
{{--                                <li><a href="#" class="tag">Json</a></li>--}}
{{--                                <li><a href="#" class="tag">C</a></li>--}}
{{--                                <li><a href="#" class="tag">C++</a></li>--}}
{{--                                <li><a href="#" class="tag">Vb</a></li>--}}
{{--                                <li><a href="#" class="tag">Vb.net</a></li>--}}
{{--                                <li><a href="#" class="tag">Asp.net</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--               --}}

{{--                </div>--}}


            </div>
        </div>
    </div>
    <!-- /Page Content -->
@endsection
