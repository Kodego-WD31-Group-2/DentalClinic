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
      <form action="{{ route('appointments.update', $appointment->appointment_id) }}" method="POST" enctype="multipart/form-data">
        <div class="tab-content mt-6">
          @csrf
          @method('PUT')
          <div class="tab active" data-tab="1">
            @include('appointments.edit-info-appointment') 
            {{--  --}}
            <button type="button" class="next-btn bg-white hover:bg-custom-4 text-custom-1 font-medium py-2 px-4 rounded mt-3">Next</button>
          </div>
          <div class="tab" data-tab="2">
            @include('appointments.edit-info-patient')
            {{--  --}}
            <button type="button" class="prev-btn bg-white hover:bg-custom-4 text-custom-1 font-medium py-2 px-4 rounded mt-3">Previous</button>
            <button type="button" class="next-btn bg-white hover:bg-custom-4 text-custom-1 font-medium py-2 px-4 rounded mt-3">Next</button>
          </div>
          <div class="tab" data-tab="3">
            @include('appointments.edit-info-contact')
            {{--  --}}
            <button type="button" class="prev-btn bg-white hover:bg-custom-4 text-custom-1 font-medium py-2 px-4 rounded mt-3">Previous</button>
            <button type="button" class="next-btn bg-white hover:bg-custom-4 text-custom-1 font-medium py-2 px-4 rounded mt-3">Next</button>
          </div>
          <div class="tab" data-tab="4">
            @include('appointments.edit-info-additional')
            {{--  --}}
            <button type="button" class="prev-btn bg-white hover:bg-custom-4 text-custom-1 font-medium py-2 px-4 rounded mt-3">Previous</button>
            <button type="button" class="next-btn bg-white hover:bg-custom-4 text-custom-1 font-medium py-2 px-4 rounded mt-3">Next</button>
          </div>
          <div class="tab" data-tab="5">
            @include('appointments.edit-info-confirmation')
            {{--  --}}
            <button type="button" class="prev-btn bg-white hover:bg-custom-4 text-custom-1 font-medium py-2 px-4 rounded mt-3">Previous</button>
            <button type="submit" class="submit-btn bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded mt-3">Submit</button>
          </div>
      </div>
      </form>
      @endif
    </div>
    @endsection
