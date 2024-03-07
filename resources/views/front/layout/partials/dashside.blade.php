<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">

    <!-- Sidebar -->
    <div class="profile-sidebar">
        <div class="user-widget">
            <div class="pro-avatar">@if(auth()->user()->photo)
                    <img src="{{asset('images/profile/'.auth()->user()->photo)}}" width="100" alt="User Image" class="avatar-img rounded-circle">
                @else
                    <img src="{{asset('front/img/avatar_photo.jpg')}}" width="100"  alt="User Image" class="avatar-img rounded-circle">
                @endif</div>

            <div class="user-info-cont">
                <h4 class="usr-name">{{auth()->user()->name}} {{auth()->user()->surname}}</h4>
            </div>
        </div>
        <div class="custom-sidebar-nav">
            <ul>
                <li><a href="{{route('dashboard')}}"><i class="fas fa-home"></i>Dashboard <span><i class="fas fa-chevron-right"></i></span></a></li>
                <li><a href="{{route('myblogs')}}"><i class="fab fa-blogger-b"></i>Bloglarım <span><i class="fas fa-chevron-right"></i></span></a></li>
                <li><a href="{{route('addblog')}}"><i class="fab fa-blogger-b"></i>Blog Ekle <span><i class="fas fa-plus"></i></span></a></li>
                <li><a href="{{route('messages')}}"><i class="fas fa-comments"></i>Mesajlarım <span><i class="fas fa-chevron-right"></i></span></a></li>
                <li><a href="{{route('profilesettings')}}"><i class="fas fa-user-cog"></i>Profil Ayarları<span><i class="fas fa-chevron-right"></i></span></a></li>
                <li><a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>Çıkış Yap<span><i class="fas fa-chevron-right"></i></span>
                        <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </a></li>
            </ul>
        </div>
    </div>
    <!-- /Sidebar -->

</div>
