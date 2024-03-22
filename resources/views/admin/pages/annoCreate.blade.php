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
                        <h3 class="page-title">Duyuru Ekle</h3>
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
                                    <form action="{{route('admin.anno.store')}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label>Duyuru Başlık</label>
                                            <input class="form-control" name="title" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label>Kısa Açıklama</label>
                                            <textarea cols="30" name="short_desc" rows="6" class="form-control"></textarea>
                                        </div>


                                        <div class="form-group">
                                            <label>Açıklama</label>
                                            <textarea cols="30" name="desc" rows="6" class="form-control"></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div>
                                                    <label class="custom_check">
                                                        <input type="checkbox" name="mentor" >
                                                        <span class="checkmark"></span> <h6>Mentorler</h6>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div>
                                                    <label class="custom_check">
                                                        <input type="checkbox" name="mentee" >
                                                        <span class="checkmark"></span> <h6>Menteeler</h6>
                                                    </label>
                                                </div>
                                            </div>
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
    <!-- /Page Wrapper -->
@endsection
@section('scripts')
    {{--   <script>--}}
    {{--           ClassicEditor--}}
    {{--           .create( document.querySelector( '#content' ),{--}}
    {{--               minHeight: '10em'--}}
    {{--           } )--}}
    {{--           .catch( error => {--}}
    {{--           console.error( error );--}}
    {{--       } );--}}
    {{--    </script>--}}
@endsection
