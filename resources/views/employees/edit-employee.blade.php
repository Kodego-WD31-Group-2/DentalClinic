@extends('../layout/' . $layout)

@section('subhead')
    <title>Edit Employees</title>
@endsection

@section('subcontent')
    <div class="container">
      <h3>Edit Employee</h3>
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
      @if (isset($employee))
      <form action="{{ route('employees.update', $employee->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="first_name">First Name:</label>
          <input type="text" class="form-control" name="first_name" value="{{ old('first_name', $employee->first_name) }}">
        </div>
        <div class="form-group">
          <label for="last_name">Last Name:</label>
          <input type="text" class="form-control" name="last_name" value="{{ old('last_name', $employee->last_name) }}">
        </div>
        <div class="form-group">
          <label for="employee_image">Image:</label>
          <input type="file" class="form-control" name="employee_image">
          <img src="{{ asset($employee->employee_image) }}" width="50">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      @endif
    </div>
    @endsection
