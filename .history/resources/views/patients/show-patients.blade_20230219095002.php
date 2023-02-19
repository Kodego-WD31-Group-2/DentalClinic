@extends('../layout/' . $layout)

@section('subhead')
    <title>Show Patient</title>
@endsection

@section('subcontent')
    <div class="container">
        <h3>Patients</h3>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>Patient ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>User ID</th>
                    <th>User Name</th>
                    <th>Patient Image</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($patients as $patient)
                <tr>
                    <td>{{ $patient->patient_id }}</td>
                    <td>{{ $patient->first_name }}</td>
                    <td>{{ $patient->last_name }}</td>
                    <td>{{ $patient->user_id }}</td>
                    <td>{{ $patient->user->name }}</td>
                    <td><img src="{{ $patient->patient_image }}" alt="{{ $patient->first_name }}'s image"></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
