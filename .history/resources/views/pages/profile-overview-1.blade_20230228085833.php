@extends('../layout/' . $layout)

@section('subhead')
    <title>Profile - Smileville Dental Services</title>
@endsection

@section('subcontent')

    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Profile</h2>
    </div>
    <!-- BEGIN: Profile Info -->
    <!-- Display any other fields from your users table as needed -->       
    <div class="intro-y box px-5 pt-5 mt-5">
        <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
            <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
                <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
                    <img  class="rounded-full" src="{{ file_exists(public_path('storage/' . Auth::user()->photo)) ? asset('storage/' . Auth::user()->photo) : asset(Auth::user()->photo) }}" width="200">
                    <div class="absolute mb-1 mr-1 flex items-center justify-center bottom-0 right-0 bg-primary rounded-full p-2">
                        <i class="w-4 h-4 text-white" data-lucide="camera"></i>
                    </div>
                </div>
                <div class="ml-5">
                    <div class="w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-lg">{{ Auth::user()->name }}</div>
                    @if (auth()->check() && auth()->user()->role == 'admin')
                    <div class="text-slate-500">You are logged in as an Admin!</div>
                    <p>"With great power, comes great responsibility"</p>
                    @elseif (auth()->check() && auth()->user()->role != 'admin')
                    <div class="text-slate-500">You are a User!</div>
                    @endif
                </div>
            </div>
            <div class="mt-6 lg:mt-0 flex-1 px-5 border-l border-r border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                <div class="font-medium text-center lg:text-left lg:mt-3">Contact Details</div>
                <div class="flex flex-col justify-center items-center lg:items-start mt-4">
                    <div class="truncate sm:whitespace-normal flex items-center">
                        <i data-lucide="mail" class="w-4 h-4 mr-2"></i> {{ Auth::user()->email }}
                    </div>
                    <div class="truncate sm:whitespace-normal flex items-center mt-3">
                        <i data-lucide="phone" class="w-4 h-4 mr-2"></i> {{ Auth::user()->phone_number }}
                    </div>
                    {{-- <div class="truncate sm:whitespace-normal flex items-center mt-3">
                        <i data-lucide="twitter" class="w-4 h-4 mr-2"></i> Twitter {{ $fakers[0]['users'][0]['name'] }}
                    </div> --}}
                </div>
            </div>
            <div class="mt-6 lg:mt-0 flex-1 px-5 border-t lg:border-0 border-slate-200/60 dark:border-darkmode-400 pt-5 lg:pt-0">
                <div class="font-medium text-center lg:text-left lg:mt-5">Quote of the Day</div>
                <div class="flex items-center justify-center lg:justify-start mt-2">
                    <div class="mr-2 flex">
                        <p>"Kamusta, mga Tropang Potchi?!"</p>                        
                    </div>
                </div>
                <div class="flex items-center justify-center lg:justify-start mt-2">
                    <div class="mr-2 flex">
                        <p><span class="ml-3 font-medium text-black">- Ryan Azur</span></p>                        
                    </div>
                    {{-- <div class="w-3/4">
                        <div class="h-[55px]">
                            <canvas class="simple-line-chart-1 -mr-5"></canvas>
                        </div>
                    </div> --}}
                </div>
                {{-- <div class="flex items-center justify-center lg:justify-start">
                    <div class="mr-2 w-20 flex">
                        STP: <span class="ml-3 font-medium text-danger">-2%</span>
                    </div>
                    <div class="w-3/4">
                        <div class="h-[55px]">
                            <canvas class="simple-line-chart-2 -mr-5"></canvas>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        <ul
            class="nav nav-link-tabs flex-col sm:flex-row justify-center lg:justify-start text-center"
            role="tablist"
        >
            <li id="dashboard-tab" class="nav-item" role="presentation">
                <a
                    href="javascript:;"
                    class="nav-link py-4 active"
                    data-tw-target="#dashboard"
                    aria-controls="dashboard"
                    aria-selected="true"
                    role="tab"
                >
                    Dashboard
                </a>
            </li>
            {{-- <li id="account-and-profile-tab" class="nav-item" role="presentation">
                <a
                    href="javascript:;"
                    class="nav-link py-4"
                    data-tw-target="#account-and-profile"
                    aria-selected="false"
                    role="tab"
                >
                    Account & Profile
                </a>
            </li>
            <li id="activities-tab" class="nav-item" role="presentation">
                <a
                    href="javascript:;"
                    class="nav-link py-4"
                    data-tw-target="#activities"
                    aria-selected="false"
                    role="tab"
                >
                    Activities
                </a>
            </li>
            <li id="tasks-tab" class="nav-item" role="presentation">
                <a
                    href="javascript:;"
                    class="nav-link py-4"
                    data-tw-target="#tasks"
                    aria-selected="false"
                    role="tab"
                >
                    Tasks
                </a>
            </li> --}}
        </ul>
    </div>
    <!-- END: Profile Info -->
    
    <div class="intro-y tab-content mt-5">
        <div id="dashboard" class="tab-pane active" role="tabpanel" aria-labelledby="dashboard-tab">
            <div class="grid grid-cols-12 gap-6">

                {{-- #1 --}}
                <!-- START: Admin - Todays Appt  -->
                @if (auth()->check() && auth()->user()->role == 'admin')
                <div class="intro-y box col-span-12 lg:col-span-6">
                    <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">Today's Appointments</h2>
                        <div class="dropdown ml-auto">
                            <button class="btn btn-outline-secondary hidden sm:flex">
                                <a href="appointments/book-appointment">
                                    <div class="flex">
                                        <i data-lucide="plus" class="w-4 h-4 mr-2"></i> New Appointment
                                    </div>
                                </a>
                            </button>
                        </div>
                    </div>
                    <div class="p-5">
                        @foreach ($appointmentsTodayList as $appointment)
                        <div class="flex flex-col sm:flex-row my-2">
                            <div class="mr-auto">
                                <div class="font-medium">Patient:{{ $appointment->first_name }} {{ $appointment->last_name }}</div>
                                <a href="" class="font-medium text-slate-500 text-xs mt-0.5">Doctor: {{ $appointment->doctor_first_name }} {{ $appointment->doctor_last_name }}</a>
                            </div>
                            <div class="flex mr-5 items-center">
                                <div class="font-medium">{{ $appointment->appointment_type }}</div> 
                            </div>
                            <div class="flex items-center">
                                <div class="text-center ">
                                    <div class="bg-warning/20 text-warning rounded px-2 mt-1.5">
                                        @if($appointment->status === 'completed')
                                        <a class="flex items-center mr-3 text-green-700" >
                                            <i data-lucide="check-square" class="w-4 h-4 mr-1"> </i>Completed
                                        </a>
                                        @elseif($appointment->status === 'pending')
                                        <a class="flex items-center mr-3 text-yellow-500" >
                                            <i data-lucide="clipboard-list" class="w-4 h-4 mr-1"></i> Pending
                                        </a>
                                        @elseif($appointment->status === 'cancelled')
                                        <a class="flex items-center mr-3 text-red-700">
                                            <i data-lucide="slash" class="w-4 h-4 mr-1"></i> Cancelled
                                        </a>
                                        @elseif($appointment->status === 'verified')
                                        <a class="flex items-center mr-3 text-blue-700">
                                            <i data-lucide="shield-check" class="w-4 h-4 mr-1"></i> Verified
                                        </a>
                                        @else
                                        <span>{{ $status }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        @endforeach
                        <div class="mt-4">
                            {{ $appointmentsTodayList->appends(['today_page' => $appointmentsTodayList->currentPage()])->links() }}
                        </div>
                    </div>
                </div>
                <!-- END: Admin - Todays Appt  -->
                @elseif (auth()->check() && auth()->user()->role != 'admin')
                <!-- BEGIN: Auth - Upcoming Appt  -->
                <div class="intro-y box col-span-12 lg:col-span-6">
                    <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">Upcoming Appointments</h2>
                        <div class="dropdown ml-auto">
                            <button class="btn btn-outline-secondary hidden sm:flex">
                                <a href="appointments/book-appointment">
                                    <div class="flex">
                                        <i data-lucide="plus" class="w-4 h-4 mr-2"></i> New Appointment
                                    </div>
                                </a>
                            </button>
                        </div>
                    </div>
                    <div class="p-5">
                        @foreach ($pendingAppointments as $appointment)
                        <div class="flex flex-col sm:flex-row my-2">
                            <div class="mr-auto">
                                <div class="font-medium">Patient:{{ $appointment->first_name }} {{ $appointment->last_name }}</div>
                                <a href="" class="font-medium text-slate-500 text-xs mt-0.5">Schedule: {{ $appointment->appointment_date }} - {{ $appointment->appointment_time }}</a>
                            </div>
                            <div class="flex">
                                <div class="text-center">
                                    <div class="bg-warning/20 text-warning rounded px-2 mt-1.5">
                                        @if($appointment->status === 'completed')
                                        <a class="flex items-center mr-3 text-green-700" >
                                            <i data-lucide="check-square" class="w-4 h-4 mr-1"> </i>Completed
                                        </a>
                                        @elseif($appointment->status === 'pending')
                                        <a class="flex items-center mr-3 text-yellow-500" >
                                            <i data-lucide="clipboard-list" class="w-4 h-4 mr-1"></i> Pending
                                        </a>
                                        @elseif($appointment->status === 'cancelled')
                                        <a class="flex items-center mr-3 text-red-700">
                                            <i data-lucide="slash" class="w-4 h-4 mr-1"></i> Cancelled
                                        </a>
                                        @elseif($appointment->status === 'verified')
                                        <a class="flex items-center mr-3 text-blue-700">
                                            <i data-lucide="shield-check" class="w-4 h-4 mr-1"></i> Verified
                                        </a>
                                        @else
                                        <span>{{ $status }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>                    
                        @endforeach
                        <div class="mt-4">
                            {{ $pendingAppointments->appends(['pending_page' => $pendingAppointments->currentPage()])->links() }}
                        </div>
                    </div>
                </div>
                <!-- END: Auth - Upcoming Appt  -->
                @endif
                
                {{-- #2 --}}
                <!-- BEGIN: Tomorrows Appt -->
                @if (auth()->check() && auth()->user()->role == 'admin')
                <div class="intro-y box col-span-12 lg:col-span-6">
                    <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">Tomorrow's Appointments</h2>
                        <div class="dropdown ml-auto">
                            <button class="btn btn-outline-secondary hidden sm:flex">
                                <a href="appointments/book-appointment">
                                    <div class="flex">
                                        <i data-lucide="plus" class="w-4 h-4 mr-2"></i> New Appointment
                                    </div>
                                </a>
                            </button>
                        </div>
                    </div>  
                    <div class="p-5">
                        @foreach ($appointmentsTomorrowList as $appointment)
                        <div class="flex flex-col sm:flex-row my-2">
                            <div class="mr-auto">
                                <div class="font-medium">Patient:{{ $appointment->first_name }} {{ $appointment->last_name }}</div>
                                <a href="" class="font-medium text-slate-500 text-xs mt-0.5">Doctor: {{ $appointment->doctor_first_name }} {{ $appointment->doctor_last_name }}</a>
                            </div>
                            <div class="flex mr-5 items-center">
                                <div class="font-medium ">{{ $appointment->appointment_type }}</div> 
                            </div>
                            <div class="flex items-center">
                                <div class="text-center">
                                    <div class="bg-warning/20 text-warning rounded px-2 mt-1.5">
                                        @if($appointment->status === 'completed')
                                        <a class="flex items-center mr-3 text-green-700" >
                                            <i data-lucide="check-square" class="w-4 h-4 mr-1"> </i>Completed
                                        </a>
                                        @elseif($appointment->status === 'pending')
                                        <a class="flex items-center mr-3 text-yellow-500" >
                                            <i data-lucide="clipboard-list" class="w-4 h-4 mr-1"></i> Pending
                                        </a>
                                        @elseif($appointment->status === 'cancelled')
                                        <a class="flex items-center mr-3 text-red-700">
                                            <i data-lucide="slash" class="w-4 h-4 mr-1"></i> Cancelled
                                        </a>
                                        @elseif($appointment->status === 'verified')
                                        <a class="flex items-center mr-3 text-blue-700">
                                            <i data-lucide="shield-check" class="w-4 h-4 mr-1"></i> Verified
                                        </a>
                                        @else
                                        <span>{{ $status }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        @endforeach
                        <div class="mt-4">
                            {{ $appointmentsTomorrowList->appends(['tomorrow_page' => $appointmentsTomorrowList->currentPage()])->links() }}
                        </div>
                    </div>          
                </div>  
                <!-- END: Tomorrows Appt -->
                @elseif (auth()->check() && auth()->user()->role != 'admin')
                <!-- BEGIN: Previous -->
                <div class="intro-y box col-span-12 lg:col-span-6">
                    <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">Previous Appointments</h2>
                        <div class="dropdown ml-auto">
                            <button class="btn btn-outline-secondary hidden sm:flex">
                                <a href="appointments/book-appointment">
                                    <div class="flex">
                                        <i data-lucide="plus" class="w-4 h-4 mr-2"></i> New Appointment
                                    </div>
                                </a>
                            </button>
                        </div>
                    </div>
                    <div class="p-5">
                        @foreach ($previousAppointments as $appointment)
                        <div class="flex flex-col sm:flex-row my-2">
                            <div class="mr-auto">
                                <div class="font-medium">Patient:{{ $appointment->first_name }} {{ $appointment->last_name }}</div>
                                <a href="" class="font-medium text-slate-500 text-xs mt-0.5">Schedule: {{ $appointment->appointment_date }} - {{ $appointment->appointment_time }}</a>
                            </div>
                            <div class="flex">
                                <div class="text-center">
                                    <div class="bg-warning/20 text-warning rounded px-2 mt-1.5">
                                        @if($appointment->status === 'completed')
                                        <a class="flex items-center mr-3 text-green-700" >
                                            <i data-lucide="check-square" class="w-4 h-4 mr-1"> </i>Completed
                                        </a>
                                        @elseif($appointment->status === 'pending')
                                        <a class="flex items-center mr-3 text-yellow-500" >
                                            <i data-lucide="clipboard-list" class="w-4 h-4 mr-1"></i> Pending
                                        </a>
                                        @elseif($appointment->status === 'cancelled')
                                        <a class="flex items-center mr-3 text-red-700">
                                            <i data-lucide="slash" class="w-4 h-4 mr-1"></i> Cancelled
                                        </a>
                                        @elseif($appointment->status === 'verified')
                                        <a class="flex items-center mr-3 text-blue-700">
                                            <i data-lucide="shield-check" class="w-4 h-4 mr-1"></i> Verified
                                        </a>
                                        @else
                                        <span>{{ $status }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>                    
                        @endforeach
                        <div class="mt-4">
                            {{ $pendingAppointments->appends(['previous_page' => $pendingAppointments->currentPage()])->links() }}
                        </div>
                    </div>
                </div>
                <!-- END: Previous -->
                @endif

                {{-- #3 --}}
                <!-- BEGIN: Users List -->
                @if (auth()->check() && auth()->user()->role == 'admin')
                <div class="intro-y box col-span-12 lg:col-span-9">
                    <div class="flex items-center px-5 py-5 sm:py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">Users List</h2>
                        <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                            <div class="w-56 relative text-slate-500">
                                <form action="{{ route('profile.overview') }}" method="GET">
                                    <input type="text" class="form-control w-56 box pr-10" placeholder="Search..." name="search">
                                    <button type="submit" class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-auto">
                        <table class="table table-report -mt-2">
                            <thead>
                                <tr>
                                    <th class="whitespace-wrap">USERNAME</th>
                                    {{-- <th class="whitespace-nowrap">FIRST NAME</th>
                                    <th class="whitespace-nowrap">LAST NAME</th> --}}
                                    <th class="text-center whitespace-nowrap">NAME</th>
                                    <th class="text-center whitespace-nowrap">ROLE</th>
                                    <th class="text-center whitespace-nowrap">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr class="intro-x">
                                        <td class="w-5">
                                            {{$user->email}}            
                                        </td>
    
                                        {{-- <td>
                                            {{$user->first_name}}
                                        </td> --}}
    
                                        <td class="text-center">{{$user->first_name}} {{$user->last_name}}</td>
    
                                        <td class="table-report__action">
                                            <div class="flex items-center justify-center text-center">
                                                <form action="{{ route('users.update', $user) }}" method="POST" class="inline-block">
                                                    @csrf
                                                    @method('PATCH')
                                                    <div class="form-group inline-flex">
                                                        <select name="role" class="form-control w-20 {{ $user->role === 'admin' ? 'text-success' : 'text-pending' }}">
                                                            <option value="user" {{ $user->role === 'user' ? 'selected' : '' }} class="text-pending">User</option>
                                                            <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }} class="text-success">Admin</option>
                                                        </select>
                                                    </div>
                                                    <button type="submit" class="ml-2 text-primary"><i data-lucide="pencil" class="w-4 h-4 mr-1"></i></button>
                                                </form>
                                            </div>
                                        </td>
    
                                        <td class="table-report__action">
                                            <div class="flex justify-center items-center nowrap">
                                                
                                                
                                                <div>
                                                    <form action="{{ route('users.destroy', $user) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="sunmit" class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal">
                                                            <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete
                                                        </button>
                                                    </form>
                                                </div>                                                
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach 
                            </tbody>
                        </table>
                    </div>
                    <div class="m-4">
                        {{ $users->appends(['user_page' => $users->currentPage()])->links() }}
                    </div>
                </div>
                <!-- END: Users List -->
                @elseif (auth()->check() && auth()->user()->role != 'admin')
                <!-- BEGIN: Patients on Acct  -->
                <div class="intro-y box col-span-12 lg:col-span-6">
                    <div class="flex items-center px-5 py-5 sm:py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">Patients On This Account</h2>
                        <div class="dropdown ml-auto sm:hidden">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                <i data-lucide="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                            </a>
                            <div class="dropdown-menu w-40">
                                <ul class="dropdown-content">
                                    <li>
                                        <a href="javascript:;" class="dropdown-item">
                                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Download Excel
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <button class="btn btn-outline-secondary hidden sm:flex">
                            <a href="/patients/add">
                                <div class="flex">
                                    <i data-lucide="plus" class="w-4 h-4 mr-2"></i> New Patient
                                </div>
                            </a>
                        </button>
                    </div>
                    <div class="p-5">
                        @foreach ($patients as $patient)
                        <div class="relative flex items-center mt-4">
                            <div class="w-12 h-12 flex-none image-fit">
                                <img alt="{{ $patient->first_name }} {{ $patient->last_name }}" class="rounded-full" src="{{ file_exists(public_path('storage/' . $patient->patient_image)) ? asset('storage/' . $patient->patient_image) : asset($patient->patient_image) }}">
                            </div>
                            <div class="ml-4 mr-auto">
                                <a href="" class="font-medium">{{ $patient->first_name }} {{ $patient->last_name }}</a>
                                {{-- <div class="text-slate-500 mr-5 sm:mr-5">{{ $patient->email }}</div> --}}
                            </div>
                            {{-- <div class="font-medium text-slate-600 dark:text-slate-500">{{ $patient->gender }}</div> --}}
                        </div>
                    @endforeach
                    <div class="mt-6">
                        {{ $patients->appends(['patient_page' => $patients->currentPage()])->links() }}
                    </div>
                    </div>
                </div>
                <!-- END: Patient on Acct-->
                @endif

                {{-- #4 --}}
                <!-- BEGIN: Important Notes -->
                @if (auth()->check() && auth()->user()->role == 'admin')
                <div class="intro-x col-span-12 lg:col-span-3">
                    <div class="intro-x flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-auto pl-4">Important Notes</h2>
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
                                </div>
                                <div class="p-5">
                                    <div class="text-base font-medium truncate">Work Schedule Changes</div>
                                    <div class="text-slate-400 mt-1">Office Scheduler</div>
                                    <div class="text-slate-500 text-justify mt-1">we would like to inform you that there will be a change in your work schedule starting March 1, 2023. Your new schedule will be from 9AM to 6PM and we appreciate your flexibility in accommodating this change.</div>
                                </div>
                                <div class="p-5">
                                    <div class="text-base font-medium truncate">Employee Appreciation Notice</div>
                                    <div class="text-slate-400 mt-1">Human Resources</div>
                                    <div class="text-slate-500 text-justify mt-1">To All Employees: We would like to express our appreciation for your hard work and dedication to our dental clinic. Your efforts have contributed to our success and we want to thank you for being a valuable member of our team.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Important Notes -->
                @elseif (auth()->check() && auth()->user()->role != 'admin')
                <!-- BEGIN: Billing History -->
                <div class="intro-y box col-span-12 lg:col-span-6">
                    <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60">
                        <h2 class="font-medium text-base mr-auto">Billing History</h2>
                        {{-- <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                            <label class="form-check-label ml-0" for="show-example-3">Show example code</label>
                            <input id="show-example-3" data-target="#hoverable-table" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                        </div> --}}
                    </div>
                    <div class="p-5" id="hoverable-table">
                        <div class="preview">
                            <div class="overflow-x-auto">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="whitespace-nowrap">Date</th>
                                            <th class="whitespace-nowrap">Name</th>
                                            <th class="whitespace-nowrap">Total</th>
                                            <th class="whitespace-nowrap">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($transactions as $transaction)
                                        <tr>
                                            <td>{{ $transaction->appointment->appointment_date }}</td>
                                            <td>{{ $transaction->appointment->first_name }} {{ $transaction->appointment->last_name }}</td>
                                            <td>{{ $transaction->getTotalCostAttribute() }}</td>
                                            <td>Completed</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="mt-4">
                                    {{ $transactions->appends(['billing_page' => $transactions->currentPage()])->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Latest Tasks -->
                @endif
            </div>
        </div>
    </div>
@endsection
