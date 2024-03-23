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
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Menü Listesi</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Dashboard</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
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
                                    <p id="sender"></p>
                                    <p id="receiver"></p>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>

            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->
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
                            openModal2("{{ $meeting->meeting_time }}", "{{ $meeting->meeting_date }}", "{{ $meeting->status }}", meetingTitle,"{{$meeting->sender->name}}","{{$meeting->receiver->name}}"));
                    }
                    @endforeach
                }
            }

            function openModal(day, month, year) {
                modal.style.display = "block";
                document.getElementById("selectedDate").value = `${year}-${String(month).padStart(2, "0")}-${String(day).padStart(2, "0")}`;
            }
            function openModal2(time,date,status,title,sender,receiver) {
                modal2.style.display = "block";
                document.getElementById("title").textContent = title;
                document.getElementById("meetingDate").textContent = date;
                document.getElementById("meetingTime").textContent = time;
                if(status == 0){
                    status = 'Beklemede';
                }else if(status == 1){
                    status = 'Onaylandı';
                }
                document.getElementById("status").textContent = status;
                document.getElementById("sender").textContent = sender;
                document.getElementById("receiver").textContent = receiver;
            }
            span2.onclick = function () {
                modal2.style.display = "none";
            };

            renderCalendar();
        });
    </script>
@endsection
@section('scripts')

@endsection
