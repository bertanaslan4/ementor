@extends('admin.app')
@section('styles')
    <!-- -->
@endsection

@section('content')

    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <div class="profile-header">
                        <div class="row align-items-center">
                            <div class="col-auto profile-image">
                                <a href="#">
                                    <img class="rounded-circle" alt="User Image" src="assets/img/profiles/avatar-12.jpg">
                                </a>
                            </div>
                            <div class="col ms-md-n2 profile-user-info">
                                <h4 class="user-name mb-0">Allen Davis</h4>
                                <h6 class="text-muted"><a href="https://mentoring.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b0d1dcdcd5ded4d1c6d9c3f0d1d4ddd9de9ed3dfdd">[email&#160;protected]</a></h6>
                                <div class="pb-3"><i class="fa fa-map-marker"></i> Florida, United States</div>
                                <div class="about-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                            </div>
                            <div class="col-auto profile-btn">
                            </div>
                        </div>
                    </div>
                    <div class="profile-menu">
                        <ul class="nav nav-tabs nav-tabs-solid">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#per_details_tab">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#password_tab">Password</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content profile-tab-cont">

                        <!-- Personal Details Tab -->
                        <div class="tab-pane fade show active" id="per_details_tab">

                            <!-- Personal Details -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title d-flex justify-content-between">
                                                <span>Personal Details</span>
                                                <a class="edit-link" data-bs-toggle="modal" href="#edit_personal_details"><i class="fa fa-edit me-1"></i>Edit</a>
                                            </h5>
                                            <div class="row">
                                                <p class="col-sm-2 text-muted mb-0 mb-sm-3">Name</p>
                                                <p class="col-sm-10">Allen Davis</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-2 text-muted mb-0 mb-sm-3">Date of Birth</p>
                                                <p class="col-sm-10">24 Jul 1983</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-2 text-muted mb-0 mb-sm-3">Email ID</p>
                                                <p class="col-sm-10"><a href="https://mentoring.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7f1e13131a111b1e09160c3f1a071e120f131a511c1012">[email&#160;protected]</a></p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-2 text-muted mb-0 mb-sm-3">Mobile</p>
                                                <p class="col-sm-10">305-310-5857</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-2 text-muted mb-0">Address</p>
                                                <p class="col-sm-10 mb-0">4663  Agriculture Lane,<br>
                                                    Miami,<br>
                                                    Florida - 33165,<br>
                                                    United States.</p>
                                            </div>
                                        </div>
                                    </div>


                                </div>


                            </div>
                            <!-- /Personal Details -->

                        </div>
                        <!-- /Personal Details Tab -->

                        <!-- Change Password Tab -->
                        <div id="password_tab" class="tab-pane fade">

                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Change Password</h5>
                                    <div class="row">
                                        <div class="col-md-10 col-lg-6">
                                            <form>
                                                <div class="form-group">
                                                    <label>Old Password</label>
                                                    <input type="password" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>New Password</label>
                                                    <input type="password" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Confirm Password</label>
                                                    <input type="password" class="form-control">
                                                </div>
                                                <button class="btn btn-primary" type="submit">Save Changes</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Change Password Tab -->

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /Page Wrapper -->
@endsection

@section('scripts')
    <!-- -->
@endsection
