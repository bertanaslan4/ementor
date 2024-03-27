@extends('front.app')

@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title">Sıkça Sorulan Sorular</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <!-- Page Content -->
    <div class="container">
        <div class="content">
            <div class="container-fluid">

                <div class="row">

                    <div class="col-md-12 col-lg-12 col-xl-12">
                        <div class="doc-review review-listing">

                            <!-- Review Listing -->
                            <ul class="comments-list">
                                @foreach($faqs as $faq)
                                    <!-- Comment List -->
                                    <li>
                                        <div class="comment">

                                            <div class="comment-body" style="width: 100%">
                                                <div class="meta-data">
                                                    <span class="comment-author">Soru : {{ $faq->question}} </span>
                                                    <span class="comment-date">{{$faq->created_at->format('d-m-Y')}}</span>
                                                    <div class="review-count rating">
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                                {{--                                               <p class="recommended"><i class="far fa-thumbs-up"></i> I recommend the consectetur</p>--}}
                                                <hr>
                                                <div class="comment-reply">
                                                    <a class="comment-btn toggle-answer" data-id="{{$faq->id}}"  href="#">
                                                        <i class="fas fa-reply"></i> Cevabı gör
                                                    </a>
                                                    {{--                                                   <p class="recommend-btn">--}}
                                                    {{--                                                       <span>Beğendiniz mi?</span>--}}
                                                    {{--                                                       <a href="#" class="like-btn">--}}
                                                    {{--                                                           <i class="far fa-thumbs-up"></i> Evet--}}
                                                    {{--                                                       </a>--}}
                                                    {{--                                                       <a href="#" class="dislike-btn">--}}
                                                    {{--                                                           <i class="far fa-thumbs-down"></i> Hayır--}}
                                                    {{--                                                       </a>--}}
                                                    {{--                                                   </p>--}}
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Comment Reply -->
                                        <ul class="comments-reply" id="answer_{{$faq->id}}" style="display: none">

                                            <!-- Comment Reply List -->
                                            <li>
                                                <div class="comment">

                                                    <div class="comment-body">
                                                        <div class="meta-data">
                                                            <span class="comment-author"> Cevap :  </span>

                                                        </div>

                                                        <p class="comment-content">
                                                            {!!  $faq->answer !!}
                                                        </p>

                                                    </div>
                                                </div>
                                            </li>
                                            <!-- /Comment Reply List -->

                                        </ul>
                                        <!-- /Comment Reply -->

                                    </li>
                                    <!-- /Comment List -->
                                    <!-- Comment List -->




                                @endforeach
                            </ul>
                            <!-- /Comment List -->

                        </div>
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
