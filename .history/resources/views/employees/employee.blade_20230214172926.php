@extends('../layout/' . $layout)

@section('subhead')
    <title>Employees</title>
@endsection

@section('subcontent')
    <div class="container">
        <h3>{{ $employee->first_name }} {{ $employee->last_name }}</h3>
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
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>{{ $employee->id }}</td>
                        <td>{{ $employee->first_name }}</td>
                        <td>{{ $employee->last_name }}</td>
                        <td><img src="{{ file_exists(public_path('storage/' . $employee->employee_image)) ? asset('storage/' . $employee->employee_image) : asset($employee->employee_image) }}" width="200"></td>

         </tr>
            </tbody>
        </table>
    </div>

    @endsection
