{{-- @extends('../layout/' . $layout)

@section('subhead')
    <title>Add Patient</title>
@endsection

@section('subcontent') --}}

    {{-- <div class="container">
        <h3>Appointments</h3>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Date and Time</th>
                    <th>Appointment ID</th>
                    <th>Patient's First Name</th>
                    <th>Patient's Last Name</th>
                    <th>Doctor's First Name</th>
                    <th>Doctor's Last Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach($appointments as $appointment)
                    <tr>
                        <td>{{ $appointment->appointment_date}} in the {{ $appointment->appointment_time }}</td>
                        <td>{{ $appointment->appointment_id }}</td>
                        <td>{{ $appointment->first_name }}</td>
                        <td>{{ $appointment->last_name }}</td>
                        <td>{{ $appointment->doctor->first_name }}</td>
                        <td>{{ $appointment->doctor->last_name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div> --}}
<x-layout>
    <div class="flex flex-col m-auto">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
              <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                  <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Date
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Time
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Patient
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Doctor
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Type
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Status
                    </th>
                    <th scope="col" class="relative px-6 py-3">
                      <span class="sr-only">Action</span>
                    </th>
                  </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                  @foreach ($appointments as $appointment)
                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <div class="text-sm font-medium text-gray-900">{{ $appointment->appointment_date }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <div class="text-sm font-medium text-gray-900">{{ $appointment->appointment_time }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <div class="text-sm font-medium text-gray-900">{{ $appointment->first_name }} {{ $appointment->last_name }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <div class="text-sm font-medium text-gray-900">{{ $appointment->doctor->first_name }} {{ $appointment->doctor->last_name }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <div class="text-sm font-medium text-gray-900">{{ $appointment->appointment_type }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <select name="status" id="status" class="border-gray-400 rounded-sm shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                            <option value="Pending" {{ $appointment->status == 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="completed" {{ $appointment->status == 'completed' ? 'selected' : '' }}>Completed</option>
                            <option value="cancelled" {{ $appointment->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                        </select>
                      </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                      <a href="/appointments/{{$appointment->appointment_id}}/edit">Edit</a>
                      {{-- <a href="/appointments/{{$appointment->id}}/edit">Edit</a> --}}
                      {{-- <a href="/appointments/{{ $appointment->id }}/edit">Edit</a> --}}
                      {{-- <a href="{{ route('appointments.edit', ['appointment' => $appointment->appointment_id]) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a> --}}
                    </td>
                    



                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      

</x-layout>

