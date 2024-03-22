@extends('front.app')
@section('content')
    <!-- Home Banner -->
    <section class="section section-search-eight">
        <div class="container">
            <div class="banner-wrapper-eight m-auto text-center">
                <div class="banner-header aos" data-aos="fade-up">
                    <h1>{{$settings->banner_title}}</h1>
                    <p>{{$settings->banner_subtitle}}</p>
                </div>

                <!-- Search -->
                <div class="search-box-eight aos" data-aos="fade-up">
                    <form action="#">
                        <div class="form-search">
                            <div class="form-inner">
                                <div class="form-group search-location-eight">
                                    <i class="material-icons">my_location</i>
                                    <select class="form-control select">
                                        <option>Kategori Seçin</option>
                                        <option>İçerik</option>
                                        <option>Mentor</option>
                                    </select>
                                </div>
                                <div class="form-group search-info-eight">
                                    <i class="material-icons">location_city</i>
                                    <input type="text" class="form-control" placeholder="Arama Yapın">
                                </div>
                                <button type="submit" class="btn search-btn-eight mt-0">Ara <i class="fas fa-long-arrow-alt-right"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /Search -->

            </div>
        </div>
    </section>
    <!-- /Home Banner -->

    <!-- Work Flow -->
    <section class="section how-it-works-section">
        <div class="container">
            <div class="section-header-eight text-center aos" data-aos="fade-up">
                <span>{{$settings->section_title}}</span>
                <h2>{{$settings->section_subtitle}}</h2>

                <div class="sec-dots">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="row justify-content-center feature-list">
                <div class="col-12 col-md-4 col-lg-3 aos" data-aos="fade-up">
                    <div class="feature-grid text-center top-box">
                        <div class="feature-header-eight">
                            <div class="feature-icon-eight">
                                <span class="circle bg-green"><i class="fas fa-sign-in-alt"></i></span>
                            </div>
                            <div class="feature-cont">
                                <div class="feature-text-eight">{{$settings->section1_title}}</div>
                            </div>
                        </div>
                        <p>{{$settings->section1_subtitle}}</p>
                        <span class="text-green">01</span>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-3 offset-lg-1 aos" data-aos="fade-up">
                    <div class="feature-grid text-center">
                        <div class="feature-header-eight">
                            <div class="feature-icon-eight">
                                <span class="circle bg-blue"><i class="material-icons">accessibility</i></span>
                            </div>
                            <div class="feature-cont">
                                <div class="feature-text-eight">{{$settings->section2_title}}</div>
                            </div>
                        </div>
                        <p>{{$settings->section2_subtitle}}</p>
                        <span class="text-blue">02</span>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-3 offset-lg-1 aos" data-aos="fade-up">
                    <div class="feature-grid text-center top-box">
                        <div class="feature-header-eight">
                            <div class="feature-icon-eight">
                                <span class="circle bg-orange"><i class="material-icons">event_seat</i></span>
                            </div>
                            <div class="feature-cont">
                                <div class="feature-text-eight">{{$settings->section3_title}}</div>
                            </div>
                        </div>
                        <p>{{$settings->section3_subtitle}}</p>
                        <span class="text-orange">03</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Work Flow -->

    <!-- Popular Mendors -->
    <section class="section popular-mendors">
        <div class="mendor-title">
            <div class="section-header-eight text-center">
                <div class="container aos" data-aos="fade-up">
                    <span>S.S.S</span>
                    <h2 class="text-white">Sıkça Sorulan Sorular</h2>
                    <p class="sub-title text-white"> <a href="{{route('faqs')}}" class="text-white">Tümünü Görüntüle</a></p>
                    <div class="sec-dots">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="mendor-list">
            <div class="container aos" data-aos="fade-up">
                <div class="mendor-slider slick">

                    @foreach($faqs as $faq)
                        <!-- Mentor Item -->
                        <div class="mendor-box">
                            <div class="mendor-content">
                                <h3 class="title">{{$faq->question}}</h3>
                                <div class="mendor-course">
                                    {{substr($faq->answer,0,100)}}...
                                </div>

                            </div>
                        </div>
                        <!-- /Mentor Item -->
                    @endforeach


                </div>
            </div>
        </div>
    </section>
    <!-- /Popular Mendors -->




    <!-- Statistics Section -->
    <section class="section statistics-section-eight">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 aos" data-aos="fade-up">
                    <div class="statistics-list-eight">
                        <div class="statistics-icon-eight">
                            <i class="fas fa-street-view"></i>
                        </div>
                        <div class="statistics-content-eight">
                            <span>{{$settings->section4_title}}</span>
                            <h3>{{$settings->section4_subtitle}}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 aos" data-aos="fade-up">
                    <div class="statistics-list-eight">
                        <div class="statistics-icon-eight">
                            <i class="fas fa-history"></i>
                        </div>
                        <div class="statistics-content-eight">
                            <span>{{$settings->section5_title}}</span>
                            <h3>{{$settings->section5_subtitle}}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 aos" data-aos="fade-up">
                    <div class="statistics-list-eight">
                        <div class="statistics-icon-eight">
                            <i class="fas fa-user-check"></i>
                        </div>
                        <div class="statistics-content-eight">
                            <span>{{$settings->section6_title}}</span>
                            <h3>{{$settings->section6_subtitle}}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Statistics Section -->

    <!-- Blog Section -->
    @if(auth()->check())
        <section class="section section-blogs-eight">
            <div class="container">

                <!-- Section Header -->
                <div class="section-header-eight text-center aos" data-aos="fade-up">
                    <span>En Yeni</span>
                    <h2>İçerikler</h2>

                    <div class="sec-dots">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <!-- /Section Header -->

                <div class="row blog-grid-row justify-content-center">
                    @foreach($blogs as $blog)
                        <div class="col-md-6 col-lg-4 col-sm-12 aos" data-aos="fade-up">

                            <!-- Blog Post -->
                            <div class="blog-card">
                                <div class="blog-card-image">
                                    <a href="{{route('blogdetail',$blog->id)}}"><img class="img-fluid" style="height: 275px;object-fit: contain;" src="{{asset('images/'.$blog->photo)}}" alt="Post Image"></a>
                                </div>
                                <div class="blog-card-content">

                                    <ul class="meta-item-eight">
                                        <li>
                                            <div class="post-author-eight">
                                                <a href="{{route('profile',$blog->user_id)}}"><span>{{$blog->user->name}} {{$blog->user->surname}}</span></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <h3 class="blog-title-eight"><a href="{{route('blogdetail',$blog->id)}}">{{$blog->title}}</a></h3>
                                    <p>{{$blog->short_text}}</p>
                                    <a href="{{route('blogdetail',$blog->id)}}" class="read">Daha Fazlası...</a>
                                </div>
                            </div>
                            <!-- /Blog Post -->

                        </div>
                    @endforeach

                </div>
                <div class="view-all text-center aos" data-aos="fade-up">
                    <a href="{{route('infoblog')}}" class="btn btn-primary btn-view">Tümünü Gör</a>
                </div>
            </div>
        </section>
    @endif
    <!-- /Blog Section -->
@endsection
