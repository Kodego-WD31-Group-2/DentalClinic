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
          <div class="form-group">
            <label for="appointment_date" class="text-sm font-medium">Preferred Appointment Date:</label>
            <input type="date" id="appointment_date" name="appointment_date" class="mt-2 border border-gray-400 rounded p-2 w-full">
          </div>
          <div class="form-group">
            <label for="appointment_time" class="text-sm font-medium">Preferred Appointment Time:</label>
            <select id="appointment_time" name="appointment_time" class="mt-2 border border-gray-400 rounded p-2 w-full">
              <option value="Morning">Morning</option>
              <option value="Afternoon">Afternoon</option>
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
          <div class="form-group">
            <label for="appointment_type" class="text-sm font-medium">Type of Appointment:</label>
            <select id="appointment_type" name="appointment_type" class="mt-2 border border-gray-400 rounded p-2 w-full">
              <option value="regular-check-up">Regular Check-up</option>
              <option value="cleaning">Cleaning</option>
              <option value="emergency">Emergency</option>
            </select>
          </div>
          <div class="form-group">
            <label for="reason" class="text-sm font-medium">Reason for Appointment:</label>
            <textarea id="reason" name="reason" class="mt-2 border border-gray-400 rounded p-2 w-full"></textarea>
          </div>
          <div class="form-group">
            <label for="dental_history" class="text-sm font-medium">Previous Dental History:</label>
            <textarea id="dental_history" name="dental_history" class="mt-2 border border-gray-400 rounded p-2 w-full"></textarea>
          </div>
          @include('appointments.info-contact')
          @include('appointments.info-contact')

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>


    
    @endsection