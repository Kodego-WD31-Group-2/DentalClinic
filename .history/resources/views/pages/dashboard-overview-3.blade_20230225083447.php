@extends('../layout/' . $layout)

@section('subhead')
    <title>Dashboard - Smileville Dental Services</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: Todays Appointment Report -->
                <div class="col-span-12 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Appointment Summary for {{ date('F j, Y') }}</h2>
                        <a href="" class="ml-auto flex items-center text-primary">
                            <i data-lucide="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data
                        </a>
                    </div>
                    <div class="grid grid-cols-12 gap-6 mt-5 ">
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="clipboard" class="report-box__icon text-primary"></i>
                                        <div class="ml-auto">
                                            <div class="report-box__indicator bg-danger tooltip cursor-pointer" title="33% Higher than last month">
                                                33% <i data-lucide="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6 text-center">
                                        {{-- {{ $appointmentsToday }} --}}
                                    </div>
                                    <div class="text-base text-slate-500 mt-1 text-center">Today's Total Appointments</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="clipboard-check" class="report-box__icon text-pending"></i>
                                        <div class="ml-auto">
                                            <div class="report-box__indicator bg-danger tooltip cursor-pointer" title="2% Lower than last month">
                                                2% <i data-lucide="chevron-down" class="w-4 h-4 ml-0.5"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6 text-center">
                                        {{-- {{ $appointmentsCompletedToday }} --}}
                                    </div>
                                    <div class="text-base text-slate-500 mt-1 text-center">Completed Appointments</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="clipboard-list" class="report-box__icon text-warning"></i>
                                        <div class="ml-auto">
                                            <div class="report-box__indicator bg-success tooltip cursor-pointer" title="12% Higher than last month">
                                                12% <i data-lucide="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6 text-center">
                                        {{-- {{ $appointmentsPendingToday }} --}}
                                    </div>
                                    <div class="text-base text-slate-500 mt-1 text-center">Pending Appointments</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="clipboard-x" class="report-box__icon text-success"></i>
                                        <div class="ml-auto">
                                            <div class="report-box__indicator bg-success tooltip cursor-pointer" title="22% Higher than last month">
                                                22% <i data-lucide="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6 text-center">
                                        {{-- {{ $appointmentsCancelledToday }} --}}
                                    </div>
                                    <div class="text-base text-slate-500 mt-1 text-center">Cancelled Appointments</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Todays Appointment Report -->
                <!-- BEGIN: Overall Appt Report -->
                <div class="col-span-12 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Overall Appointment Summary</h2>
                        <a href="" class="ml-auto flex items-center text-primary">
                            <i data-lucide="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data
                        </a>
                    </div>
                    <div class="grid grid-cols-12 gap-6 mt-5">
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="clipboard" class="report-box__icon text-primary"></i>
                                        <div class="ml-auto">
                                            <div class="report-box__indicator bg-success tooltip cursor-pointer" title="33% Higher than last month">
                                                33% <i data-lucide="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6 text-center">
                                        {{-- {{ $totalAppointments }} --}}
                                    </div>
                                    <div class="text-base text-slate-500 mt-1 text-center">Total of Appointments</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="clipboard-check" class="report-box__icon text-pending"></i>
                                        <div class="ml-auto">
                                            <div class="report-box__indicator bg-danger tooltip cursor-pointer" title="2% Lower than last month">
                                                2% <i data-lucide="chevron-down" class="w-4 h-4 ml-0.5"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6 text-center">
                                        {{-- {{ $appointmentsCompleted }} --}}
                                    </div>
                                    <div class="text-base text-slate-500 mt-1 text-center">All Completed Appointments</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="clipboard-list" class="report-box__icon text-warning"></i>
                                        <div class="ml-auto">
                                            <div class="report-box__indicator bg-success tooltip cursor-pointer" title="12% Higher than last month">
                                                12% <i data-lucide="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6 text-center">
                                        {{-- {{ $appointmentsPending }} --}}
                                    </div>
                                    <div class="text-base text-slate-500 mt-1 text-center">All Pending Appointments</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="clipboard-x " class="report-box__icon text-success"></i>
                                        <div class="ml-auto">
                                            <div class="report-box__indicator bg-success tooltip cursor-pointer" title="22% Higher than last month">
                                                22% <i data-lucide="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6 text-center">
                                        {{-- {{ $appointmentsCancelled }} --}}
                                    </div>
                                    <div class="text-base text-slate-500 mt-1 text-center">All Cancelled Appointments</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Overall Appt Report -->     
                <!-- BEGIN: Appointment by Service (PIE CHART)-->
                <div class="col-span-12 sm:col-span-6 lg:col-span-6 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Appointment by Service Type</h2>
                    </div>
                    <div class="intro-y box p-5 mt-5">
                        <div class="mt-3">
                            <div class="h-[213px]">
                                <canvas id="report-pie-chart" data-regularcheckup-percentage="{{ $regularCheckupPercentage }}" data-emergency-percentage="{{ $emergencyPercentage }}" data-cleaning-percentage="{{ $cleaningPercentage }}">></canvas>
                            </div>
                        </div>
                        <div class="w-52 sm:w-auto mx-auto mt-8">
                            <div class="flex items-center">
                                <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                                <span class="truncate">Regular Checkup</span>
                                <span class="font-medium ml-auto">{{ $regularCheckupPercentage }}%</span>
                            </div>
                            <div class="flex items-center mt-4">
                                <div class="w-2 h-2 bg-danger rounded-full mr-3"></div>
                                <span class="truncate">Emergency</span>
                                <span class="font-medium ml-auto">{{ $emergencyPercentage }}%</span>
                            </div>
                            <div class="flex items-center mt-4">
                                <div class="w-2 h-2 bg-warning rounded-full mr-3"></div>
                                <span class="truncate">Cleaning</span>
                                <span class="font-medium ml-auto">{{ $cleaningPercentage }}%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Appointment by Service (PIE CHART)-->
                <!-- BEGIN: Appointment Chart (DONUT CHART)-->
                <div class="col-span-12 sm:col-span-6 lg:col-span-6 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Appointment Chart</h2>
                    </div>
                    <div class="intro-y box p-5 mt-5">
                        <div class="mt-3">
                            <div class="h-[213px]">
                                <canvas id="report-donut-chart" 
                                {{-- data-completed-percentage="{{ $completedPercentage }}" data-pending-percentage="{{ $pendingPercentage }}" data-cancelled-percentage="{{ $cancelledPercentage }}" --}}
                                ></canvas>
                            </div>
                        </div>
                        <div class="w-52 sm:w-auto mx-auto mt-8">
                            <div class="flex items-center">
                                <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                                <span class="truncate">Completed</span>
                                <span class="font-medium ml-auto">
                                    {{-- {{ $completedPercentage }}% --}}
                                </span>
                            </div>
                            <div class="flex items-center mt-4">
                                <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                                <span class="truncate">Pending</span>
                                <span class="font-medium ml-auto">
                                    {{-- {{ $pendingPercentage }}% --}}
                                </span>
                            </div>
                            <div class="flex items-center mt-4">
                                <div class="w-2 h-2 bg-danger rounded-full mr-3"></div>
                                <span class="truncate">Cancelled</span>
                                <span class="font-medium ml-auto">
                                    {{-- {{ $cancelledPercentage }}% --}}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Appointment Chart (DONUT CHART)-->
                <!-- BEGIN: App by Doc -->
                <div class="col-span-12 xl:col-span-12 mt-6">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Appointments by Doctors</h2>
                    </div>
                    <div class="mt-5">
                        @foreach ($appointmentsByDoctor as $doctor)
                        
                            <div class="intro-y">
                                <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                                    <div class="ml-4 mr-auto">
                                        <div class="font-medium"> {{ ($doctor->first_name) }} {{ $doctor->last_name }}</div>
                                        <div class="text-slate-500 text-xs mt-0.5">{{ $doctor->specialty }}</div>
                                    </div>
                                    <button><div class="py-1 px-2 rounded-full text-xs bg-success text-white cursor-pointer font-medium">{{ $doctor->total_appointments }} Appointments</div></button>
                                </div>
                                {{-- Hideable Info (WIP)--}}
                                {{-- <div class="hidden-info-{{ $doctor->doctor_id }} hidden"> 
                                    <p>Specialty: {{ $doctor->specialty }} </p>
                                    <p>Total Appointments: {{ $doctor->total_appointments }}</p>
                                    <p>Other Info: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div> --}}
                            </div>
                            {{-- Hideable Info (WIP)--}}
                            {{-- <script>
                                let buttons = document.querySelectorAll('.intro-y button');
                                buttons.forEach(function(button) {
                                    button.addEventListener('click', function() {
                                        let hiddenDiv = this.closest('.intro-y').querySelector('.hidden-info-{{ $doctor->doctor_id }}');
                                        if (hiddenDiv.classList.contains('hidden')) {
                                            hiddenDiv.classList.remove('hidden');
                                        } else {
                                            hiddenDiv.classList.add('hidden');
                                        }
                                    });
                                });
                            </script>  --}}

                        @endforeach
                        <a href="" class="intro-y w-full block text-center rounded-md py-4 border border-dotted border-slate-400 dark:border-darkmode-300 text-slate-500">View More</a>
                    </div>
                </div>
                <!-- END: App Doc -->
            </div>
        </div>
        <div class="col-span-12 2xl:col-span-3">
            <div class="2xl:border-l -mb-10 pb-10">
                <div class="2xl:pl-6 grid grid-cols-12 gap-x-6 2xl:gap-x-0 gap-y-6">
                    <!-- BEGIN: Today's Appointment -->
                    <div class="col-span-12 md:col-span-6 xl:col-span-4 2xl:col-span-12 mt-3 2xl:mt-8">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">Today's Patients</h2>
                        </div>
                        <div class="mt-5">
                            @foreach ($appointmentsTodayList as $appointment)
                                <div class="intro-x">
                                    <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                        <div class="ml-4 mr-auto">
                                            <div class="font-medium">{{ $appointment->first_name }} {{ $appointment->last_name }}</div>
                                            <div class="text-slate-500 text-xs mt-0.5">{{ $appointment->appointment_type }}</div>
                                            <div class="font-medium">Dr. {{ $appointment->doctor_first_name }} {{ $appointment->doctor_last_name }}</div>
                                        </div>
                                        <div>
                                            @switch($appointment->status)
                                                @case('pending')
                                                    <p class="text-yellow-500">{{ ucfirst($appointment->status) }}</p>
                                                    @break
                                                @case('completed')
                                                    <p class="text-green-500">{{ ucfirst($appointment->status) }}</p>
                                                    @break
                                                @case('cancelled')
                                                    <p class="text-red-500">{{ ucfirst($appointment->status) }}</p>
                                                    @break
                                                @default
                                                    <p>Unknown Status</p>
                                            @endswitch
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <a href="" class="intro-x w-full block text-center rounded-md py-3 border border-dotted border-slate-400 dark:border-darkmode-300 text-slate-500">View More</a>
                        </div>
                    </div>
                    <!-- END: Today's Appointment -->
                    
                    <!-- BEGIN: Important Notes -->
                    <div class="col-span-12 md:col-span-6 xl:col-span-12 xl:col-start-1 xl:row-start-1 2xl:col-start-auto 2xl:row-start-auto mt-3">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-auto">Important Notes</h2>
                            <button data-carousel="important-notes" data-target="prev" class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2">
                                <i data-lucide="chevron-left" class="w-4 h-4"></i>
                            </button>
                            <button data-carousel="important-notes" data-target="next" class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2">
                                <i data-lucide="chevron-right" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <div class="mt-5 intro-x">
                            <div class="box zoom-in">
                                <div class="tiny-slider" id="important-notes">
                                    <div class="p-5">
                                        <div class="text-base font-medium truncate">Safe Work Environment</div>
                                        <div class="text-slate-400 mt-1">Office Director</div>
                                        <div class="text-slate-500 text-justify mt-1">We want to remind you of the importance of maintaining a safe work environment. Please be sure to follow all safety procedures and report any concerns or incidents to your supervisor immediately. Thank you for your commitment to maintaining a safe workplace.</div>
                                        {{-- <div class="font-medium flex mt-5">
                                            <button type="button" class="btn btn-secondary py-1 px-2">View Notes</button>
                                            <button type="button" class="btn btn-outline-secondary py-1 px-2 ml-auto ml-auto">Dismiss</button>
                                        </div> --}}
                                    </div>
                                    <div class="p-5">
                                        <div class="text-base font-medium truncate">Work Schedule Changes</div>
                                        <div class="text-slate-400 mt-1">Office Scheduler</div>
                                        <div class="text-slate-500 text-justify mt-1">we would like to inform you that there will be a change in your work schedule starting March 1, 2023. Your new schedule will be from 9AM to 6PM and we appreciate your flexibility in accommodating this change.</div>
                                        {{-- <div class="font-medium flex mt-5">
                                            <button type="button" class="btn btn-secondary py-1 px-2">View Notes</button>
                                            <button type="button" class="btn btn-outline-secondary py-1 px-2 ml-auto ml-auto">Dismiss</button>
                                        </div> --}}
                                    </div>
                                    <div class="p-5">
                                        <div class="text-base font-medium truncate">Employee Appreciation Notice</div>
                                        <div class="text-slate-400 mt-1">Human Resources</div>
                                        <div class="text-slate-500 text-justify mt-1">To All Employees: We would like to express our appreciation for your hard work and dedication to our dental clinic. Your efforts have contributed to our success and we want to thank you for being a valuable member of our team.</div>
                                        {{-- <div class="font-medium flex mt-5">
                                            <button type="button" class="btn btn-secondary py-1 px-2">View Notes</button>
                                            <button type="button" class="btn btn-outline-secondary py-1 px-2 ml-auto ml-auto">Dismiss</button>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Important Notes -->
                    <!-- BEGIN: Calendar -->
                    <div class="col-span-12 md:col-span-6 xl:col-span-4 2xl:col-span-12 xl:col-start-1 xl:row-start-2 2xl:col-start-auto 2xl:row-start-auto mt-3">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">Calendar</h2>
                            {{-- <a href="" class="ml-auto text-primary truncate flex items-center">
                                <i data-lucide="plus" class="w-4 h-4 mr-1"></i> Add New Schedules
                            </a> --}}
                        </div>
                        <div class="mt-5">
                            <div class="intro-x box">
                                <div class="p-5">
                                    <div class="flex">
                                        <i data-lucide="chevron-left" class="w-5 h-5 text-slate-500"></i>
                                        <div class="font-medium text-base mx-auto">{{date('F')}}</div>
                                        <i data-lucide="chevron-right" class="w-5 h-5 text-slate-500"></i>
                                    </div>
                                    <div class="grid grid-cols-7 gap-4 mt-5 text-center">
                                        <div class="font-medium">Su</div>
                                        <div class="font-medium">Mo</div>
                                        <div class="font-medium">Tu</div>
                                        <div class="font-medium">We</div>
                                        <div class="font-medium">Th</div>
                                        <div class="font-medium">Fr</div>
                                        <div class="font-medium">Sa</div>
                                        <div class="py-0.5 rounded relative text-slate-500">29</div>
                                        <div class="py-0.5 rounded relative text-slate-500">30</div>
                                        <div class="py-0.5 rounded relative text-slate-500">31</div>
                                        <div class="py-0.5 rounded relative">1</div>
                                        <div class="py-0.5 rounded relative">2</div>
                                        <div class="py-0.5 rounded relative">3</div>
                                        <div class="py-0.5 rounded relative">4</div>
                                        <div class="py-0.5 rounded relative">5</div>
                                        <div class="py-0.5 rounded relative">6</div>
                                        <div class="py-0.5 rounded relative">7</div>
                                        <div class="py-0.5 rounded relative">8</div>
                                        <div class="py-0.5 rounded relative">9</div>
                                        <div class="py-0.5 rounded relative">10</div>
                                        <div class="py-0.5 rounded relative">11</div>
                                        <div class="py-0.5 rounded relative">12</div>
                                        <div class="py-0.5 rounded relative">13</div>
                                        <div class="py-0.5 rounded relative">14</div>
                                        <div class="py-0.5 rounded relative">15</div>
                                        <div class="py-0.5 rounded relative">16</div>
                                        <div class="py-0.5 rounded relative">17</div>
                                        <div class="py-0.5 rounded relative">18</div>
                                        <div class="py-0.5 rounded relative">19</div>
                                        <div class="py-0.5 rounded relative">20</div>
                                        <div class="py-0.5 rounded relative">21</div>
                                        <div class="py-0.5 rounded relative">22</div>
                                        <div class="py-0.5 rounded relative">23</div>
                                        <div class="py-0.5 bg-pending/20 dark:bg-pending/30 rounded relative">24</div>
                                        <div class="py-0.5 rounded relative">25</div>
                                        <div class="py-0.5 rounded relative">26</div>
                                        <div class="py-0.5 rounded relative">27</div>
                                        <div class="py-0.5 rounded relative">28</div>
                                        <div class="py-0.5 rounded relative">29</div>
                                        <div class="py-0.5 rounded relative">30</div>
                                        <div class="py-0.5 rounded relative text-slate-500">1</div>
                                        <div class="py-0.5 rounded relative text-slate-500">2</div>
                                        <div class="py-0.5 rounded relative text-slate-500">3</div>
                                        <div class="py-0.5 rounded relative text-slate-500">4</div>
                                        <div class="py-0.5 rounded relative text-slate-500">5</div>
                                        <div class="py-0.5 rounded relative text-slate-500">6</div>
                                        <div class="py-0.5 rounded relative text-slate-500">7</div>
                                        <div class="py-0.5 rounded relative text-slate-500">8</div>
                                        <div class="py-0.5 rounded relative text-slate-500">9</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Calendar -->
                </div>
            </div>
        </div>
    </div>
@endsection
