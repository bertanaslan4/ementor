@extends('front.layout.dashtemp')

@section('content')
    <div class="col-md-7 col-lg-8 col-xl-9">

        <div class="row">
            <div class="col-md-12 col-lg-4 dash-board-list blue">
                <div class="dash-widget">
                    <div class="circle-bar">
                        <div class="icon-col">
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                    <div class="dash-widget-info">
                        <h3>23</h3>
                        <h6>Members</h6>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-4 dash-board-list yellow">
                <div class="dash-widget">
                    <div class="circle-bar">
                        <div class="icon-col">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                    </div>
                    <div class="dash-widget-info">
                        <h3>33</h3>
                        <h6>Appointments</h6>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-4 dash-board-list pink">
                <div class="dash-widget">
                    <div class="circle-bar">
                        <div class="icon-col">
                            <i class="fas fa-wallet"></i>
                        </div>
                    </div>
                    <div class="dash-widget-info">
                        <h3>$14</h3>
                        <h6>Total Earned</h6>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h4 class="mb-4">Mentee Lists</h4>
                <div class="card card-table">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-center mb-0">
                                <thead>
                                <tr>
                                    <th>BASIC INFO</th>
                                    <th>CREATED DATE</th>
                                    <th class="text-center">TAGS</th>
                                    <th class="text-center">ACTION</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/user/user2.jpg" alt="User Image"></a>
                                            <a href="profile.html">Tyrone Roberts<span><span class="__cf_email__" data-cfemail="f5818c879a9b90879a9790878186b594919a9790db969a98">[email&#160;protected]</span></span></a>
                                        </h2>
                                    </td>
                                    <td>08 April 2020</td>
                                    <td class="text-center"><span class="pending">PENDING</span></td>
                                    <td class="text-center"><a href="profile.html" class="btn btn-sm bg-info-light"><i class="far fa-eye"></i> View</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/user/user1.jpg" alt="User Image"></a>
                                            <a href="profile.html">Julie Pennington <span><span class="__cf_email__" data-cfemail="9ef4ebf2f7fbdefffaf1fcfbb0fdf1f3">[email&#160;protected]</span></span></a>
                                        </h2>
                                    </td>
                                    <td>08 April 2020</td>
                                    <td class="text-center"><span class="pending">PENDING</span></td>
                                    <td class="text-center"><a href="profile.html" class="btn btn-sm bg-info-light"><i class="far fa-eye"></i> View</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/user/user3.jpg" alt="User Image"></a>
                                            <a href="profile.html">Allen Davis <span><span class="__cf_email__" data-cfemail="e1808d8d848f8580978892a180858e8384cf828e8c">[email&#160;protected]</span></span></a>
                                        </h2>
                                    </td>
                                    <td>08 April 2020</td>
                                    <td class="text-center"><span class="pending">PENDING</span></td>
                                    <td class="text-center"><a href="profile.html" class="btn btn-sm bg-info-light"><i class="far fa-eye"></i> View</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/user/user4.jpg" alt="User Image"></a>
                                            <a href="profile.html">Patricia Manzi <span><span class="__cf_email__" data-cfemail="16667762647f757f777b77786c7f5677727974733875797b">[email&#160;protected]</span></span></a>
                                        </h2>
                                    </td>
                                    <td>08 April 2020</td>
                                    <td class="text-center"><span class="accept">ACCEPTED</span></td>
                                    <td class="text-center"><a href="profile.html" class="btn btn-sm bg-info-light"><i class="far fa-eye"></i> View</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/user/user5.jpg" alt="User Image"></a>
                                            <a href="profile.html">Olive Lawrence <span><span class="__cf_email__" data-cfemail="0f606366796a636e787d6a616c6a4f6e6b606d6a216c6062">[email&#160;protected]</span></span></a>
                                        </h2>
                                    </td>
                                    <td>08 April 2020</td>
                                    <td class="text-center"><span class="accept">ACCEPTED</span></td>
                                    <td class="text-center"><a href="profile.html" class="btn btn-sm bg-info-light"><i class="far fa-eye"></i> View</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/user/user6.jpg" alt="User Image"></a>
                                            <a href="profile.html">Frances Foster <span><span class="__cf_email__" data-cfemail="ea8c988b84898f99aa8b8e85888fc4898587">[email&#160;protected]</span></span></a>
                                        </h2>
                                    </td>
                                    <td>08 April 2020</td>
                                    <td class="text-center"><span class="accept">ACCEPTED</span></td>
                                    <td class="text-center"><a href="profile.html" class="btn btn-sm bg-info-light"><i class="far fa-eye"></i> View</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/user/user7.jpg" alt="User Image"></a>
                                            <a href="profile.html">Deloris Briscoe <span><span class="__cf_email__" data-cfemail="f49091989b869d8796869d87979b91b495909b9691da979b99">[email&#160;protected]</span></span></a>
                                        </h2>
                                    </td>
                                    <td>08 April 2020</td>
                                    <td class="text-center"><span class="reject">REJECTED</span></td>
                                    <td class="text-center"><a href="profile.html" class="btn btn-sm bg-info-light"><i class="far fa-eye"></i> View</a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
