@extends('admin.app')
@section('styles')
    <!-- -->
@endsection
@section('content')
    <div class="container">

        <div class="row">
            <div class="col-8">
                <div class="calendar">
                    <div class="calendar-header">
                        <button id="prevMonth">&lt;</button>
                        <h2 id="currentMonthYear"></h2>
                        <button id="nextMonth">&gt;</button>
                    </div>
                    <div class="calendar-body" id="calendarBody"></div>
                </div>

                <div id="meetingModal" class="modal">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Randevu Detayı</h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span id="span2" aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2 id="title"></h2>
                                <p id="meetingDate"></p>
                                <p id="meetingTime"></p>
                                <p id="status"></p>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
            <div class="col-4">
                <!-- Latest Posts -->
                <div class="card post-widget" style="margin-top: 70px;">
                    <div class="card-header">
                        <h4 class="card-title">Talep Edilen Randevular</h4>
                    </div>
                    <div class="card-body">
                        <ul class="latest-posts">
                            @if($meetingsTalep->count() > 0)
                                @foreach($meetingsTalep as $meeting)
                                    <li>

                                        <div class="row">
                                            @php
                                                $backgroundColor = $meeting->status == 0 ? 'orange' : 'limegreen';
                                            @endphp
                                            <div class="col-1" style="background-color: {{ $backgroundColor }}">
                                                <!-- İçerik -->
                                            </div>
                                            <div class="col-11">
                                                <div class="row">
                                                    <div class="col-9">
                                                        <h4>
                                                            {{$meeting->title}}
                                                        </h4>
                                                    </div>
                                                    <div class="col-3">
                                                        <a href="{{route('calendar.delete',$meeting->id)}}" data-confirm-delete="true" class="btn btn-danger btn-sm">İptal</a>
                                                    </div>
                                                </div>
                                                <p>{{$meeting->meeting_date}} {{$meeting->meeting_time ? substr($meeting->meeting_time, 0, 5) : ''}}</p>
                                            </div>
                                        </div>

                                    </li>

                                @endforeach
                            @else
                                <p>Randevu Bulunmuyor</p>
                            @endif
                        </ul>
                    </div>
                </div>
                <!-- /Latest Posts -->
                <div class="card post-widget" style="margin-top: 10px;">
                    <div class="card-header">
                        <h4 class="card-title">Bekleyen Randevular</h4>
                    </div>
                    <div class="card-body">
                        <ul class="latest-posts">
                            @if($meetingsWait->count() > 0)
                                @foreach($meetingsWait as $meeting)
                                    <li>

                                        <div class="row">
                                            <div class="col-8">
                                                <h4>
                                                    {{$meeting->title}}
                                                </h4>
                                                <p>{{$meeting->meeting_date}} {{$meeting->meeting_time ? substr($meeting->meeting_time, 0, 5) : ''}}</p>

                                            </div>
                                            <div class="col-2">
                                                <form>
                                                    <input type="hidden" name="meeting_id" value="{{$meeting->id}}">
                                                    <button type="submit" style="width: 100%;height: 100%" class="btn btn-success btn-sm"><i class="fa fa-plus"></i></button>
                                                </form>
                                            </div>
                                            <div class="col-2">
                                                <form>
                                                    <input type="hidden" name="meeting_id" value="{{$meeting->id}}">
                                                    <button type="submit" style="width: 100%;height: 100%" class="btn btn-danger btn-sm"><i class="fa fa-ban"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </li>

                                @endforeach
                            @else
                                <p>Randevu Bulunmuyor</p>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
@section('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const currentDate = new Date();
            let currentMonth = currentDate.getMonth();
            let currentYear = currentDate.getFullYear();

            const prevMonthBtn = document.getElementById("prevMonth");
            const nextMonthBtn = document.getElementById("nextMonth");
            const currentMonthYear = document.getElementById("currentMonthYear");
            const calendarBody = document.getElementById("calendarBody");
            const modal = document.getElementById("myModal");
            const modal2 = document.getElementById("meetingModal");
            const span = document.getElementById("span1");
            const span2 = document.getElementById("span2");
            const meetingTimeInput = document.getElementById("meetingTime");
            const requestMeetingBtn = document.getElementById("requestMeeting");

            prevMonthBtn.addEventListener("click", () => {
                currentMonth--;
                if (currentMonth < 0) {
                    currentMonth = 11;
                    currentYear--;
                }
                renderCalendar();
            });

            nextMonthBtn.addEventListener("click", () => {
                currentMonth++;
                if (currentMonth > 11) {
                    currentMonth = 0;
                    currentYear++;
                }
                renderCalendar();
            });

            function renderCalendar() {
                calendarBody.innerHTML = "";
                const firstDayOfMonth = new Date(
                    currentYear,
                    currentMonth,
                    1
                ).getDay();
                const daysInMonth = new Date(
                    currentYear,
                    currentMonth + 1,
                    0
                ).getDate();

                currentMonthYear.textContent = new Date(
                    currentYear,
                    currentMonth
                ).toLocaleDateString("tr-tr", { month: "long", year: "numeric" });

                for (let i = 0; i < firstDayOfMonth; i++) {
                    const emptyDay = document.createElement("div");
                    emptyDay.classList.add("day");
                    calendarBody.appendChild(emptyDay);
                }

                for (let i = 1; i <= daysInMonth; i++) {

                    console.log('day : ', i, 'month : ', currentMonth + 1, 'year : ', currentYear);
                    const day = document.createElement("div");

                    day.classList.add("day");


                    calendarBody.appendChild(day);
                    const dayNumber = document.createElement("div");
                    day.appendChild(dayNumber);
                    dayNumber.textContent = i;
                    dayNumber.classList.add("day-number");
                    const currentDate2 = new Date(currentYear, currentMonth, i);
                    if (currentDate2 > new Date()) {
                        dayNumber.addEventListener("click", () =>
                            openModal(i, currentMonth + 1, currentYear)
                        );
                        dayNumber.classList.add('past-day');
                    }

                    const meetingDay = document.createElement("div");
                    day.appendChild(meetingDay);
                    meetingDay.classList.add("meeting-1");
                    @foreach($meetings as $meeting)
                    if (new Date("{{ $meeting->meeting_date }}").getDate() === i && new Date("{{ $meeting->meeting_date }}").getMonth() === currentMonth && new Date("{{ $meeting->meeting_date }}").getFullYear() === currentYear) {
                        console.log('meeting date : ', new Date("{{ $meeting->meeting_date }}").getDate() );
                        const meetingTitle = '{{ $meeting->title }}';
                        meetingDay.classList.add("meeting");
                        meetingDay.textContent = "Randevu Var";
                        meetingDay.addEventListener("click", () =>
                            openModal2("{{ $meeting->meeting_time }}", "{{ $meeting->meeting_date }}", "{{ $meeting->status }}", meetingTitle));
                    }
                    @endforeach
                }
            }

            function openModal(day, month, year) {
                modal.style.display = "block";
                document.getElementById("selectedDate").value = `${year}-${String(month).padStart(2, "0")}-${String(day).padStart(2, "0")}`;
            }
            function openModal2(time,date,status,title) {
                modal2.style.display = "block";
                document.getElementById("title").textContent = title;
                document.getElementById("meetingDate").textContent = date;
                document.getElementById("meetingTime").textContent = time;
                document.getElementById("status").textContent = status;
            }

            span.onclick = function () {
                modal.style.display = "none";

            };
            span2.onclick = function () {
                modal2.style.display = "none";
            };

            // window.onclick = function (event) {
            //     if (event.target == modal) {
            //         modal.style.display = "none";
            //     }
            // };
            // window.onclick = function (event) {
            //     if (event.target == modal2) {
            //         modal2.style.display = "none";
            //     }
            // };

            {{--requestMeetingBtn.onclick = function () {--}}
            {{--    const meetingTime = meetingTimeInput.value;--}}
            {{--    const formData = new FormData();--}}
            {{--    formData.append("meeting_time", meetingTime);--}}

            {{--    fetch("{{ route('calendar.store') }}", {--}}
            {{--        method: "POST",--}}
            {{--        body: formData,--}}
            {{--    })--}}
            {{--        .then((response) => response.json())--}}
            {{--        .then((data) => {--}}
            {{--            // Handle response data as needed--}}
            {{--            console.log(data);--}}
            {{--        })--}}
            {{--        .catch((error) => console.error("Error:", error));--}}

            {{--    modal.style.display = "none";--}}
            {{--};--}}

            renderCalendar();
        });
    </script>
@endsection
