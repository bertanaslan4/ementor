@extends('front.app')

@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title">Duyurular</h2>
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
                                @foreach($annos as $anno)
                                    <!-- Comment List -->
                                    <li>
                                        <div class="comment">

                                            <div class="comment-body" style="width: 100%">
                                                <div class="meta-data">
                                                    <span class="comment-author">{{ $anno->anno->title}} </span>
                                                    <span class="comment-date">{{$anno->anno->created_at->format('d-m-Y')}}</span>

                                                </div>

                                                <hr>
                                                <div class="meta-data">
                                                    <p>{{ $anno->anno->description}}</p>

                                                </div>
                                            </div>
                                        </div>



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

@endsection
