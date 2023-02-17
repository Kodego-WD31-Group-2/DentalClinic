@extends('../layout/' . $layout)

@section('subhead')
    <title>Edit Appointments</title>
@endsection

@section('subcontent')
    <div class="container">
      <h3>Edit Appointment</h3>
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
      @if (isset($appointment))
      <form action="{{ route('appointments.update', $appointment->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="first_name">First Name:</label>
          <input type="text" class="form-control" name="first_name" value="{{ old('first_name', $appointment->first_name) }}">
        </div>
        <div class="form-group">
          <label for="last_name">Last Name:</label>
          <input type="text" class="form-control" name="last_name" value="{{ old('last_name', $appointment->last_name) }}">
        </div>
        <div class="form-group">
          <label for="appointment_image">Image:</label>
          <input type="file" class="form-control" name="appointment_image">
          <img src="{{ asset($appointment->appointment_image) }}" width="50">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      @endif
    </div>
    @endsection
