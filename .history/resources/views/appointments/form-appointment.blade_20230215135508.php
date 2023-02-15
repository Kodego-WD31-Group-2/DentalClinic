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
          @include('appointments.info-appointment')          
          @include('appointments.info-patient')
          @include('appointments.info-contact')
          @include('appointments.info-contact')

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>


    
    @endsection