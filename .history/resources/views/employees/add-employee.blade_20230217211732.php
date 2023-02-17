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


        
  <div class="container my-12 px-6 mx-auto">
    <section class="mb-32 text-gray-800 text-center lg:text-left">
      <div class="px-6 py-12 md:px-12" style="background-color: hsl(0, 0%, 96%)">
        <div class="grid lg:grid-cols-2 gap-12 flex items-center">
          <div class="mt-12 lg:mt-0">
            <h1 class="text-5xl font-bold tracking-tight leading-tight mb-12 text-blue-600">
              Add Doctor
            </h1>
            <p class="text-gray-600">
              Use this feature to add a doctor shown on the website.
            </p>
          </div>
          <div class="mb-12 lg:mb-0">
            <div class="block rounded-lg shadow-lg bg-blue-100 px-6 py-12 md:px-12">
                <form action="{{ route('doctors.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label class="block font-medium mb-2" for="first_name">First Name:</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="first_name" id="first_name">
                    </div>
                    <div class="mb-4">
                      <label class="block font-medium mb-2" for="last_name">Last Name:</label>
                      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="last_name" id="last_name">
                    </div>
                    <div class="mb-4">
                      <label class="block font-medium mb-2" for="specialty">Specialty:</label>
                      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="specialty" id="specialty">
                    </div>
                    <div class="mb-4">
                      <label class="block font-medium mb-2" for="email">Email:</label>
                      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="email" name="email" id="email">
                    </div>
                    <div class="mb-4">
                        <label class="block font-medium mb-2" for="description">Description:</label>
                        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline h-56" name="description" id="description"></textarea>
                    </div>
                    <div class="mb-4">
                        <label class="block font-medium mb-2" for="doctor_image">Doctor Image:</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="file" name="doctor_image" id="doctor_image">
                    </div>
                    <button class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-500 hover:text-white" type="submit">Save</button>
                </form>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>

        
            <!-- BEGIN: Horizontal Form -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Horizontal Form</h2>
                </div>
                <div id="horizontal-form" class="p-5">
                    <div class="preview">                        
                        <form action="{{ route('employees.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                        <div class="form-inline">
                            <label for="first_name" class="form-label sm:w-20 my-2">First Name:</label>
                            <input id="first_name" type="text" class="form-control my-2" placeholder="example@gmail.com">
                        </div>
                        <div class="form-inline">
                            <label for="horizontal-form-1" class="form-label sm:w-20 my-2">Last Name:</label>
                            <input id="horizontal-form-1" type="text" class="form-control my-2" placeholder="example@gmail.com">
                        </div>
                        <div class="form-inline">
                            <label for="horizontal-form-1" class="form-label sm:w-20 my-2">Position:</label>
                            <input id="horizontal-form-1" type="text" class="form-control my-2" placeholder="example@gmail.com">
                        </div>
                        <div class="form-inline my-2">
                            <label for="employee_image" class="form-label sm:w-20 my-2">Image:</label>
                            <input type="file" class="form-control my-2" name="employee_image">
                        </div>
                        <div class="sm:ml-20 sm:pl-5 mt-5">
                            <button type="submit" class="btn btn-secondary">Submit</button>
                        </div>
                    </form>
                    </div>

                </div>
            </div>
            <!-- END: Horizontal Form -->
        {{-- <form action="{{ route('employees.store') }}" method="POST" enctype="multipart/form-data">
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
        </form> --}}
    </div>
    @endsection