@extends('../layout/' . $layout)

@section('subhead')
    <title>Add Employees</title>
@endsection

@section('subcontent')
    <div class="container">
        <h3>Add Employee</h3>
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

        <div class="source-code hidden">
            <button data-target="#copy-input-state" class="copy-code btn py-1 px-2 btn-outline-secondary">
                <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code
            </button>
            <div class="overflow-y-auto mt-3 rounded-md">
                <div>
                    <label for="input-state-1" class="form-label">Input Success</label>
                    <input id="input-state-1" type="text" class="form-control border-success" placeholder="Input text">
                    <div class="w-full grid grid-cols-12 gap-4 h-1 mt-3">
                        <div class="col-span-3 h-full rounded bg-success"></div>
                        <div class="col-span-3 h-full rounded bg-success"></div>
                        <div class="col-span-3 h-full rounded bg-success"></div>
                        <div class="col-span-3 h-full rounded bg-slate-100 dark:bg-darkmode-800"></div>
                    </div>
                    <div class="text-success mt-2">Strong password</div>
                </div>
                <div class="mt-3">
                    <label for="input-state-2" class="form-label">Input Warning</label>
                    <input id="input-state-2" type="text" class="form-control border-warning" placeholder="Input text">
                    <div class="text-warning mt-2">Attempting to reconnect to server...</div>
                </div>
                <div class="mt-3">
                    <label for="input-state-3" class="form-label">Input Error</label>
                    <input id="input-state-3" type="text" class="form-control border-danger" placeholder="Input text">
                    <div class="text-danger mt-2">This field is required</div>
                </div>
            </div>





        <form action="{{ route('employees.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" class="form-control" name="first_name" placeholder="Enter first name">
            </div>
            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" class="form-control" name="last_name" placeholder="Enter last name">
            </div>
            <div class="form-group">
                <label for="position">Position:</label>
                <input type="text" class="form-control" name="position" placeholder="Enter position">
            </div>
            <div class="form-group">
                <label for="employee_image">Image:</label>
                <input type="file" class="form-control" name="employee_image">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    @endsection