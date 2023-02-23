@extends('../layout/' . $layout)

@section('subhead')
    <title>Appointments Listing - Smileville Dental Services</title>
@endsection

@section('subcontent')
    <h2 class="intro-y text-lg font-medium mt-10">Appointments Listing</h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <a href="{{ url('/appointments/book-appointment') }}" class="btn btn-primary shadow-md mr-2">Set An Appointment</a>
            <div class="hidden md:block mx-auto text-slate-500"></div>
            <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                <div class="w-56 relative text-slate-500">
                    <form action="{{ route('appointments-list') }}" method="GET">
                        <input type="text" class="form-control w-56 box pr-10" placeholder="Search..." name="search">
                        <button type="submit" class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <!-- BEGIN: Appointment Data -->
        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">DATE</th>
                        <th class="whitespace-nowrap">PATIENT'S NAME</th>
                        <th class="whitespace-nowrap">DOCTOR'S NAME</th>
                        <th class="whitespace-nowrap">PROCEDURE</th>
                        <th class="text-center whitespace-nowrap">STATUS</th>
                        <th class="text-center whitespace-nowrap">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($appointments as $appointment)
                        <tr class="intro-x">
                            <td class="w-40">
                                <p href="" class="font-medium whitespace-nowrap">{{ $appointment->appointment_date }}</p>
                                <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{ $appointment->appointment_time }}</div>
                            </td>
                            <td>
                                <a href="" class="font-medium whitespace-nowrap">{{ $appointment->last_name }}, {{ $appointment->first_name }}</a>
                                <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{ $appointment->gender }}, DOB: {{ $appointment->dob }}</div>
                            </td>
                            <td>
                                <a href="" class="font-medium whitespace-nowrap">Dr. {{ $appointment->doctor->first_name }} {{ $appointment->doctor->last_name }}</a>
                            </td>
                            <td>
                                <p class="font-medium whitespace-nowrap">{{ $appointment->appointment_type }}</p>
                            </td>
                            <td class="w-40">
                                <div class="flex items-center justify-center">
                                    {{-- <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> {{ $faker['true_false'][0] ? 'Active' : 'Inactive' }} --}}
                                    {{-- <select class="form-select mt-2 sm:mr-2" aria-label="Default select example">
                                      <option value="Pending" {{ $appointment->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                      <option value="completed" {{ $appointment->status == 'completed' ? 'selected' : '' }}>Completed</option>
                                      <option value="cancelled" {{ $appointment->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                  </select> --}}
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
                            </td>
                            <td class="table-report__action w-56">
                                <div class="flex justify-center items-center">
                                    <a class="flex items-center mr-3" href="/appointments/{{$appointment->appointment_id}}/edit">
                                        <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit
                                    </a>
                                    <form method="POST" action="{{ route('appointments.destroy', $appointment->appointment_id) }}"
                                        onsubmit="return confirm('Are you sure?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="flex items-center text-danger"><i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete 
                                        </button>
                                    </form>
                                    {{-- <form method="POST" action="{{ route('appointments.destroy', $appointment->appointment_id) }}" id="delete-appointment-form" data-bs-target="#delete-confirmation-modal">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="flex items-center text-danger" data-bs-toggle="modal">
                                            <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete
                                        </button>
                                    </form> --}}
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END: Appointment Data -->
        <!-- BEGIN: Pagination -->
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
            <nav class="w-full sm:w-auto sm:mr-auto">
              {{ $appointments->links() }}
            </nav>
        </div>
        <!-- END: Pagination -->
    </div>
    <!-- BEGIN: Delete Confirmation Modal -->
    <div class="modal fade" id="delete-confirmation-modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="p-5 text-center">
                        <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                        <div class="text-3xl mt-5">Are you sure?</div>
                        <div class="text-slate-500 mt-2">Do you really want to delete this appointment? <br>This process cannot be undone.</div>
                    </div>
                    <div class="px-5 pb-8 text-center">
                        <button type="button" data-bs-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                        <button type="button" class="btn btn-danger w-24" id="delete-appointment-button">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Delete Confirmation Modal -->

    {{-- <script>
        console.log('hello');
        document.addEventListener("DOMContentLoaded", function() {
          console.log('Script loaded successfully');
      
          let deleteAppointmentForm = document.getElementById('delete-appointment-form');
          let deleteAppointmentButton = document.querySelector('#delete-confirmation-modal button[type="button"].btn-danger');
      
          deleteAppointmentButton.addEventListener('click', function() {
            console.log('Delete button clicked');
            deleteAppointmentForm.submit();
          });
        });
      </script> --}}



@endsection

