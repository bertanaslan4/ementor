@extends('admin.app')
@section('styles')

@endsection
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">

        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Welcome Admin!</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
										<span class="dash-widget-icon text-primary border-primary">
											<i class="fe fe-users"></i>
										</span>
                                <div class="dash-count">
                                    <h3>168</h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">
                                <h6 class="text-muted">Members</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-primary w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
										<span class="dash-widget-icon text-success">
											<i class="fe fe-credit-card"></i>
										</span>
                                <div class="dash-count">
                                    <h3>487</h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">

                                <h6 class="text-muted">Appointments</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-success w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
										<span class="dash-widget-icon text-danger border-danger">
											<i class="fe fe-star-o"></i>
										</span>
                                <div class="dash-count">
                                    <h3>485</h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">

                                <h6 class="text-muted">Mentoring Points</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-danger w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
										<span class="dash-widget-icon text-warning border-warning">
											<i class="fe fe-folder"></i>
										</span>
                                <div class="dash-count">
                                    <h3>$62523</h3>
                                </div>
                            </div>
                            <div class="dash-widget-info">

                                <h6 class="text-muted">Revenue</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-warning w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 d-flex">

                    <!-- Recent Orders -->
                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title">Son Aktif Mentorler</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-center mb-0">
                                    <thead>
                                    <tr>
                                        <th>Mentor İsim Soyisim</th>
                                        <th>Email</th>
                                        <th>İşlem</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($lastMentors as $mentor)
                                        <tr>
                                            <td>{{$mentor->name}}</td>
                                            <td>{{$mentor->email}}</td>
                                            <td class="text-end">
                                                <div class="actions">
                                                    <a  href="{{route('admin.users.detail',$mentor->id)}}" class="btn btn-sm bg-primary-light me-2">
                                                        <i class="fe fe-eye"></i> Detay
                                                    </a>
                                                    <a class="btn btn-sm bg-warning-light me-2 btn-match" data-user-id="{{$mentor->id}}" data-match-name="@if(!$mentor->mentor->isEmpty())  {{$mentor->mentor->first()->mentee->name}} {{$mentor->mentor->first()->mentee->surname}} @endif">
                                                        <i class="fe fe-eye"></i> Eşleşme
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
                    <!-- /Recent Orders -->

                </div>
                <div class="col-md-6 d-flex">

                    <!-- Feed Activity -->
                    <div class="card  card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title">Son Aktif Menteeler</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-center mb-0">
                                    <thead>
                                    <tr>
                                        <th>Mentee İsim Soyisim</th>
                                        <th>Email</th>
                                        <th>İşlem</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($lastMentees as $mentee)
                                        <tr>
                                            <td>{{$mentee->name}}</td>
                                            <td>{{$mentee->email}}</td>
                                            <td class="text-end">
                                                <div class="actions">
                                                    <a href="{{route('admin.users.detail',$mentor->id)}}" class="btn btn-sm bg-primary-light me-2">
                                                        <i class="fe fe-eye"></i> Detay
                                                    </a>
                                                    <a class="btn btn-sm bg-warning-light me-2 btn-match" data-user-id="{{$mentee->id}}" data-match-name="@if(!$mentee->mentee->isEmpty())  {{$mentee->mentee->first()->mentor->name}} @endif">
                                                        <i class="fe fe-eye"></i> Eşleşme
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
                    <!-- /Feed Activity -->

                </div>
            </div>
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
                                                    <a href="href="{{route('admin.users.detail',$mentor->id)}}" " class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/user/user.jpg" alt="User Image"></a>
                                                    <a href="href="{{route('admin.users.detail',$mentor->id)}}" ">{{$users->name}} </a>
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
    <!-- Match Modal -->
    <div class="modal fade" id="matchModal" tabindex="-1" role="dialog" aria-labelledby="matchModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="matchModalLabel">Eşleşme Bilgisi</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="matchInfo"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        $('.btn-match').click(function() {
            var userId = $(this).data('user-id');
            var matchName = $(this).data('match-name');

            if (matchName !== '') {
                $('#matchInfo').html('Eşleştiği Kişi: ' + matchName);
            } else {
                $('#matchInfo').html('Eşleşme Yok');
            }

            $('#matchModal').modal('show');
        });

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
