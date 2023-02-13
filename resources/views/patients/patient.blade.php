<x-layout>

    <div class="container">
        <h3>{{ $patient->first_name }} {{ $patient->last_name }}</h3>
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
                    <th>Date of Birth</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Image</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>{{ $patient->patient_id }}</td>
                        <td>{{ $patient->first_name }}</td>
                        <td>{{ $patient->last_name }}</td>
                        <td>{{ $patient->date_of_birth }}</td>
                        <td>{{ $patient->gender }}</td>
                        <td>{{ $patient->address }}</td>
                        <td>{{ $patient->phone_number }}</td>
                        <td>{{ $patient->email }}</td>
                        <td><img src="{{ file_exists(public_path('storage/' . $patient->patient_image)) ? asset('storage/' . $patient->patient_image) : asset($patient->patient_image) }}" width="200"></td>
                        <td>{{ $patient->description }}</td>
                    </tr>
            </tbody>
        </table>
    </div>
    

</x-layout>
