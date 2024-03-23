<footer class="footer footer-eight">

    <!-- Footer Top -->
    <div class="footer-top aos" data-aos="fade-up">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-6 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget footer-about">
                        <div class="footer-logo">
                            <img src="{{asset('images/settings/'.$settings->site_logo)}}" alt="logo">
                        </div>

                    </div>
                    <!-- /Footer Widget -->
                </div>

                <div class="col-lg-6 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget footer-menu">
                        <h2 class="footer-title">Hızlı Menü</h2>
                        <ul>
                            <li><a href="{{route('home')}}">Anasayfa</a></li>
                            @foreach($menus as $menu)
                                <li><a href="{{route('menu.detail',$menu->id)}}">{{$menu->name}}</a></li>

                            @endforeach


                            <li><a href="{{route('faqs')}}">S.S.S.</a></li>

                        </ul>
                    </div>
                    <!-- /Footer Widget -->
                </div>


            </div>
        </div>
    </div>
    <!-- /Footer Top -->

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container-fluid">
            <!-- Copyright -->
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6">
                        <div class="copyright-text">
                            <p class="mb-0">&copy; 2024 Ementor.Tüm haklar saklıdır.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- Bekatos-->
                    </div>
                </div>
            </div>
            <!-- /Copyright -->
        </div>
    </div>
    <!-- /Footer Bottom -->

</footer>
