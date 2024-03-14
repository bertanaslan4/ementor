@include('Chatify::layouts.headLinks')
<div class="messenger">
    {{-- ----------------------Users/Groups lists side---------------------- --}}
   <div style="display: none;">
       <div class="messenger-listView {{ !!$id }}" style="display: none;!important">
           {{-- Header and search bar --}}

           {{-- tabs and lists --}}
           <div class="m-body contacts-container" >
               {{-- Lists [Users/Group] --}}
               {{-- ---------------- [ User Tab ] ---------------- --}}
               <div class="show messenger-tab users-tab app-scroll" data-view="users">
                   {{-- Favorites --}}
                   <div class="favorites-section">
                       <p class="messenger-title"><span>Favorites</span></p>
                       <div class="messenger-favorites app-scroll-hidden"></div>
                   </div>
                   {{-- Saved Messages --}}


                   {{-- Contact --}}
                   <p class="messenger-title"><span>All Messages</span></p>
                   <div class="listOfContacts" style="width: 100%;height: calc(100% - 272px);position: relative;"></div>
               </div>

           </div>
       </div>

   </div>
    {{-- ----------------------Messaging side---------------------- --}}
    <div class="messenger-messagingView">
        {{-- header title [conversation name] amd buttons --}}
        <div class="m-header m-header-messaging">
            <nav class="chatify-d-flex chatify-justify-content-between chatify-align-items-center">
                {{-- header back button, avatar and user name --}}
                <div class="chatify-d-flex chatify-justify-content-between chatify-align-items-center">
                    <a href="#" class="show-listView"><i class="fas fa-arrow-left"></i></a>
                    @if(!is_null($mentor))
                        @if($mentor->photo)
                            <div class=" av-s" style="margin: 0px 10px; margin-top: -5px; margin-bottom: -5px;">
                                <img src="{{asset('images/profile/'.$mentor->photo)}}" width="100%" alt="User Image" class="avatar-img rounded-circle">
                            </div>
                        @else
                            <div class=" av-s" style="margin: 0px 10px; margin-top: -5px; margin-bottom: -5px;">
                                <img src="{{asset('front/img/avatar_photo.jpg')}}" width="100%" alt="User Image" class="avatar-img rounded-circle">
                            </div>

                        @endif
                    @else
                        @if($mentee->photo)
                            <div class=" av-s" style="margin: 0px 10px; margin-top: -5px; margin-bottom: -5px;">
                                <img src="{{asset('images/profile/'.$mentee->photo)}}" width="100%" alt="User Image" class="avatar-img rounded-circle">
                            </div>
                        @else
                            <div class=" av-s" style="margin: 0px 10px; margin-top: -5px; margin-bottom: -5px;">
                                <img src="{{asset('front/img/avatar_photo.jpg')}}" width="100%" alt="User Image" class="avatar-img rounded-circle">
                            </div>

                        @endif
                    @endif


                   @if(!is_null($mentor))
                        <span class="name">{{ $mentor->name }} {{ $mentor->surname }}</span>
                    @else
                        <span class="name">{{ $mentee->name }} {{ $mentee->surname }}</span>
                    @endif
                </div>
                {{-- header buttons --}}
                <nav class="m-header-right">

                    <a href="/"><i class="fas fa-home"></i></a>

                </nav>
            </nav>
            {{-- Internet connection --}}
            <div class="internet-connection">
                <span class="ic-connected">Bağlandı.</span>
                <span class="ic-connecting">Bağlanıyor...</span>
                <span class="ic-noInternet">İnternet Erişiminde Hata !</span>
            </div>
        </div>

        {{-- Messaging area --}}
        <div class="m-body messages-container app-scroll">
            <div class="messages">
                <p class="message-hint center-el"><span>Lütfen Bekleyiniz</span></p>
            </div>
            {{-- Typing indicator --}}
            <div class="typing-indicator">
                <div class="message-card typing">
                    <div class="message">
                        <span class="typing-dots">
                            <span class="dot dot-1"></span>
                            <span class="dot dot-2"></span>
                            <span class="dot dot-3"></span>
                        </span>
                    </div>
                </div>
            </div>

        </div>
        {{-- Send Message Form --}}
        @include('Chatify::layouts.sendForm')
    </div>
    {{-- ---------------------- Info side ---------------------- --}}

</div>

@include('Chatify::layouts.modals')
@include('Chatify::layouts.footerLinks')
