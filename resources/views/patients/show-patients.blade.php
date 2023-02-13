<x-layout>

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
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Image</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($patients as $patient)
                    <tr>
                        <td>{{ $patient->patient_id }}</td>
                        <td>{{ $patient->first_name }}</td>
                        <td>{{ $patient->last_name }}</td>
                        <td><img src="{{ file_exists(public_path('storage/' . $patient->patient_image)) ? asset('storage/' . $patient->patient_image) : asset($patient->patient_image) }}" width="200"></td>
                        <td>
                            <form action="{{ url('patients/'.$patient->patient_id) }}" method="POST">
                                <a class="btn btn-primary" href="{{ url('patients/'.$patient->patient_id) }}">View</a>
                                <a class="btn btn-primary" href="{{ url('patients/'.$patient->patient_id.'/edit') }}">Edit</a>
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

</x-layout>
