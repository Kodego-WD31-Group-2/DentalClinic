@extends('../layout/' . $layout)

@section('subhead')
    <title>Edit Patient</title>

    <div class="container">
        <h3>Edit Patient</h3>
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
        @if (isset($patient))
            <form action="{{ route('patients.update', $patient->patient_id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="first_name">First Name:</label>
                    <input type="text" class="form-control" name="first_name" value="{{ old('first_name', $patient->first_name) }}">
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name:</label>
                    <input type="text" class="form-control" name="last_name" value="{{ old('last_name', $patient->last_name) }}">
                </div>
                <div class="form-group">
                    <label for="date_of_birth">Date of Birth:</label>
                    <input type="date" class="form-control" name="date_of_birth" value="{{ old('date_of_birth', $patient->date_of_birth) }}">
                </div>
                <div class="form-group">
                    <label for="gender">Gender:</label>
                    <select class="form-control" name="gender">
                        <option value="">Select Gender</option>
                        <option value="male" {{ $patient->gender == 'male' ? 'selected' : '' }}>Male</option>
                        <option value="female" {{ $patient->gender == 'female' ? 'selected' : '' }}>Female</option>
                        <option value="other" {{ $patient->gender == 'other' ? 'selected' : '' }}>Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control" name="address" value="{{ old('address', $patient->address) }}">
                </div>
                <div class="form-group">
                    <label for="phone_number">Phone Number:</label>
                    <input type="text" class="form-control" name="phone_number" value="{{ old('phone_number', $patient->phone_number) }}">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" value="{{ old('email', $patient->email) }}">
                </div>
                
                    <div class="form-group">
                    <label for="patient_image">Image:</label>
                    <input type="file" class="form-control" name="patient_image">
                    <img src="{{ asset($patient->patient_image) }}" width="50">
                    </div>
                    <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea name="description" class="form-control">{{ old('description', $patient->description) }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    @endif
                    </div>
                    @endsection
