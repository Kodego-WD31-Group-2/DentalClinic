@extends('../layout/' . $layout)

@section('subhead')
    <title>Add Appointments</title>
@endsection

@section('subcontent')




    {{-- <div class="container">
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

        <form method="POST" action="{{ route('appointments.store') }}">
          @csrf
          @include('appointments.info-appointment')          
          @include('appointments.info-patient')
          @include('appointments.info-contact')          
          @include('appointments.info-additional')
          @include('appointments.info-confirmation')

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div> --}}


    
    @endsection