@extends('front.app')
@section('content')
    <!-- Home Banner -->
    <section class="section section-search-eight">
        <div class="container">
            <div class="banner-wrapper-eight m-auto text-center">
                <div class="banner-header aos" data-aos="fade-up">
                    <h1>Search Teacher in <span>Mentoring</span> Appointment</h1>
                    <p>Discover the best Mentors & institutions the city nearest to you.</p>
                </div>

                <!-- Search -->
                <div class="search-box-eight aos" data-aos="fade-up">
                    <form action="https://mentoring.dreamstechnologies.com/html/template/search.html">
                        <div class="form-search">
                            <div class="form-inner">
                                <div class="form-group search-location-eight">
                                    <i class="material-icons">my_location</i>
                                    <select class="form-control select">
                                        <option>Location</option>
                                        <option>Japan</option>
                                        <option>France</option>
                                    </select>
                                </div>
                                <div class="form-group search-info-eight">
                                    <i class="material-icons">location_city</i>
                                    <input type="text" class="form-control" placeholder="Search School, Online educational centers, etc">
                                </div>
                                <button type="submit" class="btn search-btn-eight mt-0">Search <i class="fas fa-long-arrow-alt-right"></i></button>
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
                <span>Mentoring Flow</span>
                <h2>How does it works ?</h2>
                <p class="sub-title">Are you looking to join online institutions? Now it's very simple, Sign up with mentoring</p>
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
                                <div class="feature-text-eight">Sign up</div>
                            </div>
                        </div>
                        <p>Are you looking to join online Learning? Now it's very simple, Now Sign up</p>
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
                                <div class="feature-text-eight">Collaborate</div>
                            </div>
                        </div>
                        <p>Collaborate on your own timing, by scheduling with mentor booking</p>
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
                                <div class="feature-text-eight">Improve & Get Back</div>
                            </div>
                        </div>
                        <p>you can gather different skill set, and you can become mentor too</p>
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
                            <span>500+</span>
                            <h3>Happy Clients</h3>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 aos" data-aos="fade-up">
                    <div class="statistics-list-eight">
                        <div class="statistics-icon-eight">
                            <i class="fas fa-history"></i>
                        </div>
                        <div class="statistics-content-eight">
                            <span>120+</span>
                            <h3>Online Appointments</h3>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 aos" data-aos="fade-up">
                    <div class="statistics-list-eight">
                        <div class="statistics-icon-eight">
                            <i class="fas fa-user-check"></i>
                        </div>
                        <div class="statistics-content-eight">
                            <span>100%</span>
                            <h3>Job Satisfaction</h3>
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
                    <span>LATEST</span>
                    <h2>Blogs & News</h2>
                    <p class="sub-title">Are you looking to join online institutions? Now it's very simple, Sign up with mentoring</p>
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
                                                <a href="profile.html"><span>{{$blog->user->name}}</span></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <h3 class="blog-title-eight"><a href="blog-details.html">{{$blog->title}}</a></h3>
                                    <p>{{$blog->short_text}}</p>
                                    <a href="{{route('blogdetail',$blog->id)}}" class="read">Daha Fazlası...</a>
                                </div>
                            </div>
                            <!-- /Blog Post -->

                        </div>
                    @endforeach

                </div>
                <div class="view-all text-center aos" data-aos="fade-up">
                    <a href="blog-list.html" class="btn btn-primary btn-view">View All</a>
                </div>
            </div>
        </section>
    @endif
    <!-- /Blog Section -->
@endsection
