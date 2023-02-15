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
        <form action="{{ route('appointments.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" class="form-control" name="first_name" placeholder="Enter first name">
            </div>
            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" class="form-control" name="last_name" placeholder="Enter last name">
            </div>
            <div class="mt-4">
              <label for="appointment-type" class="text-sm font-medium">Doctor:</label>
              @foreach($doctors as $doctor)
              <select id="appointment-type" name="appointment-type" class="mt-2 border border-gray-400 rounded p-2 w-full">
                
                <option value="regular-check-up">Dr. {{$doctor->first_name}} {{$doctor->last_name}}</option>
                @endforeach

              </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    @endsection