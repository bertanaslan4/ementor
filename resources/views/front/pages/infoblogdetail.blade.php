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
                <div class="col-lg-12 col-md-12">
                    <div class="blog-view">
                        <div class="blog blog-single-post">
                            <div class="blog-image">
                                <a href="javascript:void(0);"><img alt="" style="max-height: 500px;object-fit: contain;" src="{{asset('images/'.$blog->photo)}}" class="img-fluid"></a>
                            </div>
                            <h3 class="blog-title">{{$blog->title}}</h3>
                            <div class="blog-info clearfix">
                                <div class="post-left">
                                    <ul>
                                        <li>
                                            <div class="post-author">
                                                @if($blog->user->photo)
                                                    <a href="profile.html"><img src="{{asset('images/profile/'.$blog->user->photo)}}" alt="Post Author"> <span>{{$blog->user->name}} {{$blog->user->surname}}</span></a>
                                                @else
                                                    <a><img src="{{asset('front/img/avatar_photo.jpg')}}" alt="Post Author"> <span>{{$blog->user->name}} {{$blog->user->surname}}</span></a>
                                                @endif

                                            </div>
                                        </li>
                                        <li><i class="far fa-calendar"></i>{{$blog->created_at->format('d-m-Y')}}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-content">
                                <p>{!! $blog->text !!}</p>
                            </div>
                        </div>

                        @if($infoDocs)
                            <div class="card blog-share clearfix">
                                <div class="card-header">
                                    <h4 class="card-title">Belgeler</h4>
                                </div>
                                <div class="card-body">

                                        @foreach($infoDocs as $infoDoc)
                                           <a href="{{asset('docs/'.$infoDoc->docs)}}" download><i class="fa fa-download"></i> Belgeyi indirmek için tıklayınız</a>
                                        @endforeach
                                </div>
                            </div>
                        @endif
                        @if($blog->user->userInfo->first()->about)
                            <div class="card author-widget clearfix">
                                <div class="card-header">
                                    <h4 class="card-title">Mentor Hakkında</h4>
                                </div>
                                <div class="card-body">
                                    <div class="about-author">
                                        <div class="about-author-img">
                                            <div class="author-img-wrap">
                                                @if($blog->user->photo)
                                                    <a href="profile.html"><img class="img-fluid rounded-circle" src="{{asset('images/profile/'.$blog->user->photo)}}" alt="Post Author"></a>
                                                @else
                                                    <a><img class="img-fluid rounded-circle" src="{{asset('front/img/avatar_photo.jpg')}}" alt="Post Author"></a>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="author-details">
                                            <a href="profile.html" class="blog-author-name">{{$blog->user->name}} {{$blog->user->surname}}</a>
                                            <p class="mb-0">{{$blog->user->userInfo->first()->about}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div class="card blog-comments clearfix">
                            <div class="card-header">
                                <h4 class="card-title">Yorumlar ({{ count($comments) }})</h4>
                            </div>
                            <div class="card-body pb-0">
                                <ul class="comments-list">
                                    @foreach($comments as $comment)
                                        <li>
                                            <div class="comment">
                                                <div class="comment-author">
                                                    @if($comment->user->photo)
                                                        <img class="avatar" alt="" src="{{asset('images/profile/'.$comment->user->photo)}}">
                                                    @else
                                                        <img class="avatar" alt="" src="{{asset('front/img/avatar_photo.jpg')}}">
                                                    @endif
                                                </div>
                                                <div class="comment-block">
													<span class="comment-by">
														<span class="blog-author-name">{{$comment->user->name}} {{$comment->user->surname}}</span>
													</span>
                                                    <p><b>{{$comment->title}}</b></p>
                                                    <p>{{$comment->text}}</p>
                                                    <p class="blog-date">{{$comment->created_at->format('d-m-Y')}}</p>

                                                </div>
                                            </div>

                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>

                        @if(auth()->user()->role ==2)
                            <div class="card new-comment clearfix">
                                <div class="card-header">
                                    <h4 class="card-title">Yorum Yapın</h4>
                                </div>
                                <div class="card-body">
                                    <form action="{{route('comment.create')}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <input type="hidden" name="user_id" value="{{auth()->user()->id}}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" name="blog_id" value="{{$blog->id}}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Başlık</label>
                                            <input type="text" name="title" placeholder="Başlık(*)" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Yorum</label>
                                            <textarea rows="4" name="text" class="form-control" required></textarea>
                                        </div>
                                        <div class="submit-section">
                                            <button class="btn btn-primary submit-btn" type="submit">Gönder</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @endif

                    </div>
                </div>



            </div>
        </div>

    </div>
    <!-- /Page Content -->
@endsection
