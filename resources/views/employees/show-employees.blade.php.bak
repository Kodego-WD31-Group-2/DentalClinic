@extends('../layout/' . $layout)

@section('subhead')
    <title>Show Employee</title>
@endsection

@section('subcontent')
    <div class="container">
        <h3>Employees</h3>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
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
                @foreach ($employees as $employee)
                    <tr>
                        <td>{{ $employee->id }}</td>
                        <td>{{ $employee->first_name }}</td>
                        <td>{{ $employee->last_name }}</td>
                        <td><img src="{{ file_exists(public_path('storage/' . $employee->employee_image)) ? asset('storage/' . $employee->employee_image) : asset($employee->employee_image) }}" width="200"></td>
                        <td>
                            <form action="{{ url('employees/'.$employee->id) }}" method="POST">
                                <a class="btn btn-primary" href="{{ url('employees/'.$employee->id) }}">View</a>
                                <a class="btn btn-primary" href="{{ url('employees/'.$employee->id.'/edit') }}">Edit</a>
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
