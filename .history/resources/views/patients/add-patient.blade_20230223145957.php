@extends('../layout/' . $layout)

@section('subhead')
<title>Add Patient</title>
@endsection

@section('subcontent')
<div class="container">
<h3>Add Patient</h3>
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
<form action="{{ route('patients.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="form-group">
<label for="first_name">First Name:</label>
<input type="text" class="form-control" name="first_name" placeholder="Enter first name" value="{{ old('first_name') }}">
</div>
<div class="form-group">
<label for="last_name">Last Name:</label>
<input type="text" class="form-control" name="last_name" placeholder="Enter last name" value="{{ old('last_name') }}">
</div>
<div class="form-group">
<label for="date_of_birth">Date of Birth:</label>
<input type="date" class="form-control" name="date_of_birth" placeholder="Enter date of birth" value="{{ old('date_of_birth') }}">
</div>
<div class="form-group">
<label for="gender">Gender:</label>
<select name="gender" class="form-control">
<option value="">Select Gender</option>
<option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
<option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
</select>
</div>
<div class="form-group">
<label for="address">Address:</label>
<input type="text" class="form-control" name="address" placeholder="Enter address" value="{{ old('address') }}">
</div>
<div class="form-group">
<label for="phone_number">Phone Number:</label>
<input type="text" class="form-control" name="phone_number" placeholder="Enter phone number" value="{{ old('phone_number') }}">
</div>
<div class="form-group">
<label for="email">Email:</label>
<input type="email" class="form-control" name="email" placeholder="Enter email" value="{{ old('email') }}">
</div>
<div class="form-group">
<label for="patient">Patient:</label>
<input type="text" class="form-control" name="patient" placeholder="Enter patient" value="{{ old('patient') }}">
</div>
<div class="form-group">
<label for="description">Description:</label>
<textarea name="description" class="form-control" placeholder="Enter description">{{ old('description') }}</textarea>
</div>
<div class="form-group">
<label for="patient_image">Image:</label>
<input type="file" class="form-control" name="patient_image">
</div>
<button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    @endsection