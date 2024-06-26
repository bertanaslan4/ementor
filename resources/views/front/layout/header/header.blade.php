
<header class="header-eight min-header">
    <div class="header-fixed header-fixed-wrap">
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="navbar-header">
                <a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
                </a>
                <a href="{{route('home')}}" class="navbar-brand logo">
                    <img src="{{asset('images/settings/'.$settings->site_logo)}}" class="img-fluid" alt="Logo">
                </a>
            </div>
            <div class="main-menu-wrapper main-menu-wrapper-eight" style="margin: auto">
                <div class="menu-header">
                    <a href="{{route('home')}}" class="menu-logo">
                        <img src="{{asset('images/settings/'.$settings->site_logo)}}" class="img-fluid" alt="Logo">
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0);">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
                <ul class="main-nav" >
                    <li>
                        <a href="{{route('home')}}">Anasayfa</a>
                    </li>
                    @foreach($menus as $menu)
                        <li >
                            <a href="{{route('menu.detail',$menu->id)}}">{{$menu->name}}</a>
                        </li>
                    @endforeach
                    @if(auth()->check())
                        <li >
                            <a href="{{route('infoblog')}}">Bilgi Kaynağı</a>
                        </li>
                        <li >
                            <a href="{{route('mentors')}}">Mentorler</a>
                        </li>
                    @endif
                    <li >
                        <a href="{{route('faqs')}}">S.S.S</a>
                    </li>


                    @if(auth()->check())
                        @if(session('anno')!=null)
                            <li class="mobile">
                                <a href="{{route('anno')}}">Duyurular</a>
                            </li>
                        @endif
                        @if(auth()->user()->role == 1)
                            <li class="mobile">
                                <a href="{{route('calendar')}}">Takvim</a>
                            </li>
                            <li class="mobile">
                                <a href="{{route('dashboard')}}">Dashboard</a>
                            </li>
                            @else
                                <li class="mobile">
                                    <a href="{{route('calendar')}}">Takvim</a>
                                </li>
                                <li class="mobile">
                                    <a href="{{route('profile',auth()->user()->id)}}">Profilim</a>
                                </li>
                                @if(session('mentor')!=null)
                                    <li class="mobile">
                                        <a href="{{route('chat',session('mentor'))}}">Mesajlar</a>
                                    </li>
                               @endif

                       @endif
                        <li class="mobile">
                            <a class="dropdown-item" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Çıkış Yap
                                <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </a>
                        </li>
                    @else
                       
                            <li class="mobile">
                                <a href="{{route('login')}}">Giriş Yap</a>
                            </li>
                            <li class="mobile">
                                <a href="{{route('register')}}">Kayıt Ol</a>
                            </li>
                    @endif


                </ul>
            </div>
            @if(auth()->check())
                <ul class="nav header-navbar-rht" style="margin-left: 0px!important;">


                        <li class="nav-item dropdown has-arrow logged-item">
                            <a href="{{route('anno')}}">
                                <div class="rounded-circle">
                                    <i class="fa fa-bell" style="font-size: 24px"></i>
                                </div>
                                @if(session('anno')!=null)
                                <div
                                    class="badge badge-danger badge-pill fill-red rounded-pill"
                                >
                                    1
                                </div>
                                @endif
                            </a>
                        </li>

                        <li class="nav-item dropdown has-arrow logged-item">
                            @if(auth()->user()->role == 1)
                                @if(session('mentee')!=null)
                                    <a href="{{route('chat',session('mentee'))}}">
                                        <div class="rounded-circle">
                                            <i class="fa fa-comment" style="font-size: 24px"></i>
                                        </div>
                                        @if(auth()->user()->messenger_color == 1)
                                            <div
                                                class="badge badge-danger badge-pill fill-red rounded-pill"
                                            >
                                                1
                                            </div>
                                        @endif
                                    </a>

                                @endif
                            @else
                                @if(session('mentor')!=null)
                                    <a href="{{route('chat',session('mentor'))}}">
                                        <div class="rounded-circle">
                                            <i class="fa fa-comment" style="font-size: 24px"></i>
                                        </div>
                                        @if(auth()->user()->messenger_color == 1)
                                            <div
                                                class="badge badge-danger badge-pill fill-red rounded-pill"
                                            >
                                                1
                                            </div>
                                        @endif
                                    </a>
                                @endif
                            @endif
                        </li>



                    <!-- User Menu -->
                    <li class="nav-item dropdown has-arrow logged-item">
                        <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
								<span class="user-img">
									@if(auth()->user()->photo)
                                        <img src="{{asset('images/profile/'.auth()->user()->photo)}}" width="32" alt="User Image" class="avatar-img rounded-circle">
                                    @else
                                        <img src="{{asset('front/img/avatar_photo.jpg')}}"  width="32" alt="User Image" class="avatar-img rounded-circle">
                                    @endif
								</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <div class="user-header">
                                <div class="avatar avatar-sm">
                                    @if(auth()->user()->photo)
                                        <img src="{{asset('images/profile/'.auth()->user()->photo)}}" alt="User Image" class="avatar-img rounded-circle">
                                    @else
                                        <img src="{{asset('front/img/avatar_photo.jpg')}}"  alt="User Image" class="avatar-img rounded-circle">
                                    @endif

                                </div>
                                <div class="user-text">
                                    <h6>{{auth()->user()->name}} {{auth()->user()->surname}}</h6>
                                    @if(auth()->user()->role == 1)
                                        <p class="text-muted mb-0">Mentor</p>
                                    @else
                                        <p class="text-muted mb-0">Mentee</p>
                                    @endif
                                </div>
                            </div>
                            @if(auth()->user()->role == 1)
                                <a class="dropdown-item" href="{{route('dashboard')}}">Dashboard</a>
                                <a class="dropdown-item" href="{{route('calendar')}}">Takvim</a>

                                @else
                                <a class="dropdown-item" href="{{route('profile',auth()->user()->id)}}">Profilim</a>
                                    @if(session('mentor')!=null)
                                    <a class="dropdown-item" href="{{route('calendar')}}">Takvim</a>
                                        <a class="dropdown-item" href="{{route('chat',session('mentor'))}}">Mesajlar</a>
                                    @endif

                            @endif

                            <a class="dropdown-item" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Çıkış Yap
                            <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            </a>
                        </div>
                    </li>
                    <!-- /User Menu -->

                </ul>
            @else
                <ul class="nav header-navbar-rht header-navbar-rht-eight">
                    <li class="nav-item">
                        <a class="nav-link btn btn-register" href="{{route('register')}}"><i class="fas fa-sign-in-alt"></i> Kayıt Ol</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-login" href="{{route('login')}}"><i class="fas fa-lock"></i> Giriş Yap</a>
                    </li>
                </ul>
            @endif



        </nav>
    </div>
</header>
