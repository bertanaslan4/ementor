@extends('front.app')

@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-12 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">Blog Details</h2>
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
                                                <a href="profile.html"><img src="assets/img/user/user.jpg" alt="Post Author"> <span>{{$blog->user->name}}</span></a>
                                            </div>
                                        </li>
                                        <li><i class="far fa-calendar"></i>{{$blog->created_at->format('d-m-Y')}}</li>
                                        <li><i class="far fa-comments"></i>12 Comments</li>
                                        <li><i class="fa fa-tags"></i>HTML</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-content">
                                <p>{!! $blog->text !!}</p>
                            </div>
                        </div>

                        <div class="card blog-share clearfix">
                            <div class="card-header">
                                <h4 class="card-title">Share the post</h4>
                            </div>
                            <div class="card-body">
                                <ul class="social-share">
                                    <li><a href="#" title="Facebook"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="#" title="Google Plus"><i class="fab fa-google-plus"></i></a></li>
                                    <li><a href="#" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card author-widget clearfix">
                            <div class="card-header">
                                <h4 class="card-title">About Author</h4>
                            </div>
                            <div class="card-body">
                                <div class="about-author">
                                    <div class="about-author-img">
                                        <div class="author-img-wrap">
                                            <a href="profile.html"><img class="img-fluid rounded-circle" alt="" src="assets/img/user/user1.jpg"></a>
                                        </div>
                                    </div>
                                    <div class="author-details">
                                        <a href="profile.html" class="blog-author-name">Darren Elder</a>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card blog-comments clearfix">
                            <div class="card-header">
                                <h4 class="card-title">Comments (12)</h4>
                            </div>
                            <div class="card-body pb-0">
                                <ul class="comments-list">
                                    <li>
                                        <div class="comment">
                                            <div class="comment-author">
                                                <img class="avatar" alt="" src="assets/img/user/user4.jpg">
                                            </div>
                                            <div class="comment-block">
													<span class="comment-by">
														<span class="blog-author-name">Michelle Fairfax</span>
													</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                <p class="blog-date">Dec 6, 2017</p>
                                                <a class="comment-btn" href="#">
                                                    <i class="fas fa-reply"></i> Reply
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="comments-list reply">
                                            <li>
                                                <div class="comment">
                                                    <div class="comment-author">
                                                        <img class="avatar" alt="" src="assets/img/user/user5.jpg">
                                                    </div>
                                                    <div class="comment-block">
															<span class="comment-by">
																<span class="blog-author-name">Gina Moore</span>
															</span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
                                                        <p class="blog-date">Dec 6, 2017</p>
                                                        <a class="comment-btn" href="#">
                                                            <i class="fas fa-reply"></i> Reply
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="comment">
                                                    <div class="comment-author">
                                                        <img class="avatar" alt="" src="assets/img/user/user3.jpg">
                                                    </div>
                                                    <div class="comment-block">
															<span class="comment-by">
																<span class="blog-author-name">Carl Kelly</span>
															</span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
                                                        <p class="blog-date">December 7, 2017</p>
                                                        <a class="comment-btn" href="#">
                                                            <i class="fas fa-reply"></i> Reply
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div class="comment">
                                            <div class="comment-author">
                                                <img class="avatar" alt="" src="assets/img/user/user6.jpg">
                                            </div>
                                            <div class="comment-block">
													<span class="comment-by">
														<span class="blog-author-name">Elsie Gilley</span>
													</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                <p class="blog-date">December 11, 2017</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="comment">
                                            <div class="comment-author">
                                                <img class="avatar" alt="" src="assets/img/user/user7.jpg">
                                            </div>
                                            <div class="comment-block">
													<span class="comment-by">
														<span class="blog-author-name">Joan Gardner</span>
													</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                <p class="blog-date">December 13, 2017</p>
                                                <a class="comment-btn" href="#">
                                                    <i class="fas fa-reply"></i> Reply
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="card new-comment clearfix">
                            <div class="card-header">
                                <h4 class="card-title">Leave Comment</h4>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label>Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Your Email Address <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Comments</label>
                                        <textarea rows="4" class="form-control"></textarea>
                                    </div>
                                    <div class="submit-section">
                                        <button class="btn btn-primary submit-btn" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>



            </div>
        </div>

    </div>
    <!-- /Page Content -->
@endsection
