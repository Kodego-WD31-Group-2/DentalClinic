@extends('../layout/' . $layout)

@section('subhead')
    <title>Show Patient</title>
@endsection

@section('subcontent')
    <div class="container">
        <h3>Patients</h3>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        
        <div class="mt-4">
            <label for="appointment-type" class="text-sm font-medium">Doctor:</label>
            
                
            <select id="appointment-type" name="appointment-type" class="mt-2 border border-gray-400 rounded p-2 w-full">
              <option value="regular-check-up">Regular Check-up</option>
              <option value="cleaning">Cleaning</option>
              <option value="emergency" selected>Emergency</option>
            </select>
          </div>

          @foreach ($patients as $patient)
          <option value="{{ $patient->patient_id }}"></option>
          <p>{{ $patient->patient_id }}</p>                 
          @endforeach


        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Image</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($patients as $patient)
                    <tr>
                        <td>{{ $patient->patient_id }}</td>
                        <td>{{ $patient->first_name }}</td>
                        <td>{{ $patient->last_name }}</td>
                        <td><img src="{{ file_exists(public_path('storage/' . $patient->patient_image)) ? asset('storage/' . $patient->patient_image) : asset($patient->patient_image) }}" width="200"></td>
                        <td>
                            <form action="{{ url('patients/'.$patient->patient_id) }}" method="POST">
                                <a class="btn btn-primary" href="{{ url('patients/'.$patient->patient_id) }}">View</a>
                                <a class="btn btn-primary" href="{{ url('patients/'.$patient->patient_id.'/edit') }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @endsection