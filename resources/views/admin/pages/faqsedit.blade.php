@extends('admin.app')
@section('styles')
    <!-- -->
    <!-- --><script src="{{asset('front/js/jquery-3.6.0.min.js')}}"></script>
    <!-- include libraries(jQuery, bootstrap) -->

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
@endsection
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Sıkça Sorulan Soru Düzenle</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Dashboard</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">

                            <!-- Add details -->
                            <div class="row">
                                <div class="col-12 blog-details">
                                    <form action="{{route('admin.faqs.update')}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label>Soru</label>
                                            <input class="form-control" name="question" value="{{$faq->question}}" type="text">
                                        </div>
                                        <input type="hidden" name="id" value="{{$faq->id}}">

                                        <div class="form-group">
                                            <label>Cevap</label>
                                            <textarea id="content"  cols="30" name="answer" rows="6" class="form-control">{{$faq->answer}}</textarea>
                                        </div>

                                        <div class="m-t-20 text-center">
                                            <button class="btn btn-primary btn-lg">Yayınla</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- /Add details -->

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script>
        $('#content').summernote({
            placeholder: 'İçerik Ekleyin..',
            tabsize: 2,
            height: 300,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>
    <!-- /Page Wrapper -->
@endsection
@section('scripts')
    <!-- -->
@endsection
