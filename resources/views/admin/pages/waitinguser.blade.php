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
                        <h3 class="page-title">Bekleyen Listesi</h3>
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
                            <div class="table-responsive">
                                <table class="datatable table table-hover table-center mb-0">
                                    <thead>
                                    <tr>
                                        <th>İsim Soyisim</th>
                                        <th>Email</th>
                                        <th>Rol</th>
                                        <th class="text-center">Durum</th>
                                        <th class="text-center">İşlem</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ®@foreach($waitedUsers as $users)
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="{{route('admin.users.detail',$users->id)}}" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/user/user.jpg" alt="User Image"></a>
                                                    <a href="{{route('admin.users.detail',$users->id)}}">{{$users->name}} </a>
                                                </h2>
                                            </td>
                                            <td>{{$users->email}}</td>

                                            <td>@if($users->role==1) Mentor @else Mentee @endif</td>
                                            <td class="text-center">
                                                @if(is_null($users->email_verified_at))
                                                    <span class="badge badge-pill bg-warning inv-badge">Bekleniyor</span>
                                                @else
                                                    <span class="badge badge-pill bg-success inv-badge">Aktif</span>
                                                @endif

                                            </td>
                                            <td class="text-end">
                                                <div class="actions">
                                                    <a  href="{{route('admin.users.detail',$users->id)}}" class="btn btn-sm bg-primary-light me-2">
                                                        <i class="fe fe-eye"></i> Detay
                                                    </a>
                                                    <a  onclick="confirmation({{$users->id}})"   class="btn btn-sm bg-success-light me-2">
                                                        <i class="fe fe-pencil"></i> Onayla
                                                    </a>
                                                    <a href="{{ route('admin.users.destroy', $users->id) }}" class="btn btn-sm bg-danger-light delete-user-btn"  data-confirm-delete="true">
                                                        <i class="fe fe-trash"></i> Sil
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
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
        function confirmation(id) {
            var urlToRedirect = '/admin/users/approve/' + id;
            console.log(urlToRedirect);
            Swal.fire({
                title: "Kullanıcıyı onaylamak istediğinize emin misiniz?",
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
