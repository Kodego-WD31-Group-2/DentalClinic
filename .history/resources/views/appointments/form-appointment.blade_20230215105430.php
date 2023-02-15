@extends('../layout/' . $layout)

@section('subhead')
    <title>Add Appointments</title>
@endsection

@section('subcontent')
    <div class="container">
        <h3>@auth Add Appointment @else Book an Appointment @endauth</h3>
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{-- <form action="{{ route('appointments.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" class="form-control" name="first_name" placeholder="Enter first name">
            </div>
            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" class="form-control" name="last_name" placeholder="Enter last name">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form> --}}

        <form method="POST" action="{{ route('appointments.store') }}">
          @csrf
          <div class="mt-4">
            <label for="appointment-date" class="text-sm font-medium">Preferred Appointment Date:</label>
            <input value="2023-02-23" type="date" id="appointment-date" name="appointment-date" class="mt-2 border border-gray-400 rounded p-2 w-full">
          </div>
          <div class="mt-4">
            <label for="appointment-time" class="text-sm font-medium">Preferred Appointment Time:</label>
            <select id="appointment-time" name="appointment-time" class="mt-2 border border-gray-400 rounded p-2 w-full">
              <option value="morning">Morning</option>
              <option value="afternoon">Afternoon</option>
            </select>
          </div>
          <div class="form-group">
            <label for="first_name">First Name:</label>
            <input type="text" name="first_name" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="last_name">Last Name:</label>
            <input type="text" name="last_name" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="doctor_id">Doctor's Name:</label>
            <select name="doctor_id" class="form-control" required>
              @foreach($doctors as $doctor)
                <option value="{{ $doctor->doctor_id }}">{{ $doctor->first_name }} {{ $doctor->last_name }}</option>
              @endforeach
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>


    
    @endsection