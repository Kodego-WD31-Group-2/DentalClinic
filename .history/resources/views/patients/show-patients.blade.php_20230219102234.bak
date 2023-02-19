@extends('../layout/' . $layout)

@section('subhead')
    <title>Show Patient</title>
@endsection

@section('subcontent')
<div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>List of Patients</h1>
        @foreach($users as $user)
          <div class="card mb-3">
            <div class="card-header">
              {{ $user->name }}
            </div>
            <div class="card-body">
              @if(count($user->patients) > 0)
                <table class="table">
                  <thead>
                    <tr>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Date of Birth</th>
                      <th>Gender</th>
                      <th>Address</th>
                      <th>Phone Number</th>
                      <th>Email</th>
                      <th>Description</th>
                      <th>Patient Image</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($user->patients as $patient)
                      <tr>
                        <td>{{ $patient->first_name }}</td>
                        <td>{{ $patient->last_name }}</td>
                        <td>{{ $patient->date_of_birth }}</td>
                        <td>{{ $patient->gender }}</td>
                        <td>{{ $patient->address }}</td>
                        <td>{{ $patient->phone_number }}</td>
                        <td>{{ $patient->email }}</td>
                        <td>{{ $patient->description }}</td>
                        <td>{{ $patient->patient_image }}</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              @else
                <p>No patients found.</p>
              @endif
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection
