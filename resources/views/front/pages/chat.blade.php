@extends('front.app')
@section('styles')
    <!-- -->
@endsection
@section('content')
    <!-- Page Content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12 mb-4">
                    <div class="chat-window">
                        <!-- Chat Right -->
                        <div class="chat-cont-right">
                            <div class="chat-header">
                                <a id="back_user_list" href="javascript:void(0)" class="back-user-list">
                                    <i class="material-icons">chevron_left</i>
                                </a>
                                <div class="media d-flex">
                                    <div class="media-img-wrap flex-shrink-0">
                                        <div class="avatar avatar-online">
                                            <img src="assets/img/user/user.jpg" alt="User Image" class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="media-body flex-grow-1">
                                        <div class="user-name">Jonathan Doe</div>
                                    </div>
                                </div>
                                <div class="chat-options">
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#voice_call">
                                        <i class="material-icons">local_phone</i>
                                    </a>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#video_call">
                                        <i class="material-icons">videocam</i>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                </div>
                            </div>
                            <div class="chat-body">
                                <div class="chat-scroll">
                                    <ul class="list-unstyled">
                                        <li class="media sent">
                                            <div class="media-body">
                                                <div class="msg-box">
                                                    <div>
                                                        <p>Hello. What can I do for you?</p>
                                                        <ul class="chat-msg-info">
                                                            <li>
                                                                <div class="chat-time">
                                                                    <span>8:30 AM</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media received d-flex">
                                            <div class="avatar flex-shrink-0">
                                                <img src="assets/img/user/user.jpg" alt="User Image" class="avatar-img rounded-circle">
                                            </div>
                                            <div class="media-body flex-grow-1">
                                                <div class="msg-box">
                                                    <div>
                                                        <p>I'm just looking around.</p>
                                                        <p>Will you tell me something about yourself?</p>
                                                        <ul class="chat-msg-info">
                                                            <li>
                                                                <div class="chat-time">
                                                                    <span>8:35 AM</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="msg-box">
                                                    <div>
                                                        <p>Are you there? That time!</p>
                                                        <ul class="chat-msg-info">
                                                            <li>
                                                                <div class="chat-time">
                                                                    <span>8:40 AM</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="msg-box">
                                                    <div>
                                                        <div class="chat-msg-attachments">
                                                            <div class="chat-attachment">
                                                                <img src="assets/img/img-02.jpg" alt="Attachment">
                                                                <div class="chat-attach-caption">placeholder.jpg</div>
                                                                <a href="#" class="chat-attach-download">
                                                                    <i class="fas fa-download"></i>
                                                                </a>
                                                            </div>
                                                            <div class="chat-attachment">
                                                                <img src="assets/img/img-03.jpg" alt="Attachment">
                                                                <div class="chat-attach-caption">placeholder.jpg</div>
                                                                <a href="#" class="chat-attach-download">
                                                                    <i class="fas fa-download"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="chat-msg-info">
                                                            <li>
                                                                <div class="chat-time">
                                                                    <span>8:41 AM</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media sent">
                                            <div class="media-body">
                                                <div class="msg-box">
                                                    <div>
                                                        <p>Where?</p>
                                                        <ul class="chat-msg-info">
                                                            <li>
                                                                <div class="chat-time">
                                                                    <span>8:42 AM</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="msg-box">
                                                    <div>
                                                        <p>OK, my name is Limingqiang. I like singing, playing basketballand so on.</p>
                                                        <ul class="chat-msg-info">
                                                            <li>
                                                                <div class="chat-time">
                                                                    <span>8:42 AM</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="msg-box">
                                                    <div>
                                                        <div class="chat-msg-attachments">
                                                            <div class="chat-attachment">
                                                                <img src="assets/img/img-04.jpg" alt="Attachment">
                                                                <div class="chat-attach-caption">placeholder.jpg</div>
                                                                <a href="#" class="chat-attach-download">
                                                                    <i class="fas fa-download"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="chat-msg-info">
                                                            <li>
                                                                <div class="chat-time">
                                                                    <span>8:50 AM</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media received d-flex">
                                            <div class="avatar flex-shrink-0">
                                                <img src="assets/img/user/user.jpg" alt="User Image" class="avatar-img rounded-circle">
                                            </div>
                                            <div class="media-body flex-grow-1">
                                                <div class="msg-box">
                                                    <div>
                                                        <p>You wait for notice.</p>
                                                        <p>Consectetuorem ipsum dolor sit?</p>
                                                        <p>Ok?</p>
                                                        <ul class="chat-msg-info">
                                                            <li>
                                                                <div class="chat-time">
                                                                    <span>8:55 PM</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="chat-date">Today</li>
                                        <li class="media received d-flex">
                                            <div class="avatar flex-shrink-0">
                                                <img src="assets/img/user/user.jpg" alt="User Image" class="avatar-img rounded-circle">
                                            </div>
                                            <div class="media-body flex-grow-1">
                                                <div class="msg-box">
                                                    <div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
                                                        <ul class="chat-msg-info">
                                                            <li>
                                                                <div class="chat-time">
                                                                    <span>10:17 AM</span>
                                                                </div>
                                                            </li>
                                                            <li><a href="#">Edit</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media sent">
                                            <div class="media-body">
                                                <div class="msg-box">
                                                    <div>
                                                        <p>Lorem ipsum dollar sit</p>
                                                        <div class="chat-msg-actions dropdown">
                                                            <a href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fe fe-elipsis-v"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">Delete</a>
                                                            </div>
                                                        </div>
                                                        <ul class="chat-msg-info">
                                                            <li>
                                                                <div class="chat-time">
                                                                    <span>10:19 AM</span>
                                                                </div>
                                                            </li>
                                                            <li><a href="#">Edit</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media received d-flex">
                                            <div class="avatar flex-shrink-0">
                                                <img src="assets/img/user/user.jpg" alt="User Image" class="avatar-img rounded-circle">
                                            </div>
                                            <div class="media-body flex-grow-1">
                                                <div class="msg-box">
                                                    <div>
                                                        <div class="msg-typing">
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="chat-footer">
                                <div class="input-group">
                                    <div class="btn-file btn">
                                        <i class="fa fa-paperclip"></i>
                                        <input type="file">
                                    </div>
                                    <input type="text" class="input-msg-send form-control" placeholder="Type something">
                                    <button type="button" class="btn msg-send-btn">Send</button>
                                </div>
                            </div>
                        </div>
                        <!-- /Chat Right -->

                    </div>
                </div>
            </div>
            <!-- /Row -->

        </div>

    </div>
    <!-- /Page Content -->
@endsection
@section('scripts')
    <!-- -->
@endsection
