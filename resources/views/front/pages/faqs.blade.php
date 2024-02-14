@extends('front.app')

@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-12 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Anasayfa</a></li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">Sıkça Sorulan Sorular</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <!-- Page Content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">

                <div class="col-md-12 col-lg-12 col-xl-12">
                    <div class="doc-review review-listing">

                        <!-- Review Listing -->
                        <ul class="comments-list">

                            <!-- Comment List -->
                            @foreach($faqs as $faq)
                                <li>
                                    <div class="comment">
                                        <div class="comment-body">
                                            <div class="meta-data">
                                                <span class="comment-author">Soru : </span>
                                            </div>
                                            <h4 class="comment-content">
                                                {{$faq->question}}
                                            </h4>
                                            <div class="meta-data">
                                                <span class="comment-date">{{$faq->created_at->format('d-m-Y')}}</span>
                                            </div>
                                            <div class="comment-reply">
                                                <!-- Cevabı Gör düğmesi için data-id ile id değerini veriye gömüyoruz -->
                                                <a class="comment-btn toggle-answer" data-id="{{$faq->id}}" href="#">
                                                    <i class="fas fa-reply"></i> Cevabı Gör
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Comment Reply -->
                                    <ul class="comments-reply" id="answer_{{$faq->id}}" style="display: none">
                                        <!-- Comment Reply List -->
                                        <li>
                                            <div class="comment">
                                                <div class="comment-body">
                                                    <p class="comment-content">
                                                        {{$faq->answer}}
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- /Comment Reply List -->
                                    </ul>
                                    <!-- /Comment Reply -->
                                </li>
                            @endforeach



                        </ul>
                        <!-- /Comment List -->

                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /Page Content -->
    <script>
        // Tüm toggle-answer class'larına sahip elementleri seçiyoruz
        const toggles = document.querySelectorAll('.toggle-answer');

        // toggle-answer class'ına sahip elementlerin her birine click olayını dinliyoruz
        toggles.forEach(toggle => {
            toggle.addEventListener('click', function(event) {
                // Olayın varsayılan davranışını engelliyoruz (sayfanın yeniden yüklenmesini önlemek için)
                event.preventDefault();

                // toggle-answer class'ına sahip elementin data-id özelliğinden cevabın id'sini alıyoruz
                const answerId = this.getAttribute('data-id');

                // Cevabın id'sini içeren bir elementi buluyoruz
                const answerElement = document.getElementById('answer_' + answerId);

                // Cevabın görünürlüğünü değiştiriyoruz
                if (answerElement.style.display === 'none') {
                    answerElement.style.display = 'block';
                } else {
                    answerElement.style.display = 'none';
                }
            });
        });
    </script>
    @endsection
