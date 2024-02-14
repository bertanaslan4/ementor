@extends('admin.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/select2/css/select2.min.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection

@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- Add details -->
                            <div class="row">
                                <div class="col-12 blog-details">
                                    <form id="relationForm">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Mentorler</label>
                                                    <select class="select js-example-basic-single form-control" id="mentorSelect" tabindex="-1" aria-hidden="true" required>
                                                        <option value="0">Mentor Seçiniz</option>
                                                        @foreach($mentors as $mentor)
                                                            <option value="{{ $mentor->id }}">{{ $mentor->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Menteeler</label>
                                                    <select class="select js-example-basic-single form-control" id="menteeSelect" tabindex="-1" aria-hidden="true">
                                                        <option value="0">Mentee Seçiniz</option>
                                                        @foreach($mentees as $mentee)
                                                            <option value="{{ $mentee->id }}">{{ $mentee->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-t-20 text-center">
                                            <button type="button" id="showRelationModal" class="btn btn-primary btn-block">İlişkilendir</button>
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
    <!-- Modal -->
    <div class="modal fade" id="relationModal" tabindex="-1" role="dialog" aria-labelledby="relationModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="relationModalLabel">İlişki Oluştur</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Seçilen Mentor: <span id="mentorName"></span></p>
                    <p>Seçilen Mentee: <span id="menteeName"></span></p>
                    <form id="hiddenForm" action="{{ route('admin.relations.create') }}" method="POST">
                        @csrf
                        <input type="hidden" name="mentor_id" id="mentorIdInput">
                        <input type="hidden" name="mentee_id" id="menteeIdInput">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                            <button type="submit" id="completeRelation" class="btn btn-primary">Tamamla</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="{{ asset('admin/assets/plugins/select2/js/select2.min.js') }}"></script>
    <script>
        $(".select").select2({
            tags: true,
            theme: "default"
        });
        $('#showRelationModal').click(function() {
            // Seçilen mentor ve mentee bilgilerini al
            var mentorId = $('#mentorSelect').val();
            var mentorName = $('#mentorSelect option:selected').text();
            var menteeId = $('#menteeSelect').val();
            var menteeName = $('#menteeSelect option:selected').text();
            // Mentor ve mentee seçimi kontrolü
            if (mentorId ==='0' || menteeId ==='0'){
                Swal.fire({
                    icon: "error",
                    text: "Lütfen Mentor ve Mentee Seçiniz",
                });
                return false; // İşlemi durdur
            }
            else{
                // Modal içeriğini güncelle
                $('#mentorName').text(mentorName);
                $('#menteeName').text(menteeName);
                $('#mentorIdInput').val(mentorId);
                $('#menteeIdInput').val(menteeId);

                // Modalı göster
                $('#relationModal').modal('show');
            }


        });

    </script>
@endsection
