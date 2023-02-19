@extends('../layout/' . $layout)

@section('subhead')
    <title>Show Patients</title>
@endsection

@section('subcontent')
    <div class="container">
        <h3>Patients</h3>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Patient ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>User ID</th>
                    <th>User Name</th>
                    <th>Patient Image</th>
                    <th>Action</th>
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
                        <td>
                            <img src="{{ asset($patient->patient_image) }}" width="100" height="100">
                        </td>
                        <td>
                            <a class="btn btn-primary" href="{{ url('patients/'.$patient->patient_id) }}">View</a>
                            <a class="btn btn-primary" href="{{ url('patients/'.$patient->patient_id.'/edit') }}">Edit</a>
                            <form action="{{ url('patients/'.$patient->patient_id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
