{{-- @extends('../layout/' . $layout)

@section('subhead')
    <title>Add Patient</title>
@endsection

@section('subcontent') --}}

    <div class="container">
        <h3>Appointments</h3>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
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
                        <td>{{ $appointment->appointment_id }}</td>
                        <td>{{ $appointment->first_name }}</td>
                        <td>{{ $appointment->last_name }}</td>
                        <td>{{ $appointment->doctor->first_name }}</td>
                        <td>{{ $appointment->doctor->last_name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

{{-- </x-layout> --}}

