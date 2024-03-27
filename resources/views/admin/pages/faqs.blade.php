@extends('admin.app')
@section('styles')
    <!-- -->
@endsection
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Sıkça Sorulan Sorular</h3>
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

                            <!-- Blog list -->
                            <div class="row">
                                @foreach($faqs as $faq)
                                    <div class="col-12 col-md-6 col-xl-4">
                                        <div class="course-box blog grid-blog">

                                            <div class="course-content">
                                                <span class="date">{{$faq->created_at->format('d-m-Y')}}</span>
                                                <span class="course-title">{{$faq->question}}</span>

                                                <div class="row">
                                                    <div class="col">
                                                        <a href="{{route('admin.faqs.edit',$faq->id)}}" class="text-primary">
                                                            <i class="far fa-edit"></i> Düzenle
                                                        </a>
                                                    </div>
                                                    @if($faq->status == true)
                                                        <div class="col text-end">
                                                            <a onclick="passive({{$faq->id}})" class="text-danger">
                                                                <i class="far fa-trash-alt"></i> Pasif Yap
                                                            </a>
                                                        </div>
                                                    @else
                                                        <div class="col text-end">
                                                            <a onclick="active({{$faq->id}})" class="text-success">
                                                                <i class="far fa-trash-alt"></i> Aktif Yap
                                                            </a>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                            <!-- /Blog list -->

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /Page Wrapper -->
@endsection
@section('scripts')
    <script>
        function passive(id) {
            var urlToRedirect = '/admin/faqs/passive/' + id;
            console.log(urlToRedirect);
            Swal.fire({
                title: "Pasif yapmak istediğinize emin misiniz?",
                icon: "question",
                showCancelButton: true,
                confirmButtonText: "Onayla",
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = urlToRedirect;
                }
            });
        }
        function active(id) {
            var urlToRedirect = '/admin/faqs/active/' + id;
            console.log(urlToRedirect);
            Swal.fire({
                title: "Aktif yapmak istediğinize emin misiniz?",
                icon: "question",
                showCancelButton: true,
                confirmButtonText: "Onayla",
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = urlToRedirect;
                }
            });
        }
    </script>
@endsection
