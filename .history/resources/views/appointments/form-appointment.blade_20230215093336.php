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

        <h1>Create Appointment</h1>
  <form method="POST" action="/appointments">
    @csrf
    <div class="form-group">
      <label for="name">Patient Name</label>
      <input type="text" name="name" class="form-control" placeholder="Enter patient name">
    </div>

    <div class="form-group">
      <label for="doctor_id">Doctor</label>
      <select name="doctor_id" class="form-control">
        @foreach ($doctor as $doctor)
          <option value="{{ $doctor->doctorid }}">{{ $doctor->first_name }} {{ $doctor->last_name }}</option>
        @endforeach
      </select>
    </div>

    <div class="form-group">
      <label for="date">Appointment Date</label>
      <input type="date" name="date" class="form-control">
    </div>
    <div class="form-group">
      <label for="time">Appointment Time</label>
      <input type="time" name="time" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Create Appointment</button>
  </form>
    </div>


    
    @endsection