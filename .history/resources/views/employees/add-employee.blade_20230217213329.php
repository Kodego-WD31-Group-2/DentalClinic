@extends('../layout/' . $layout)

@section('subhead')
    <title>Add Employees</title>
@endsection

@section('subcontent')
    {{-- <div class="container"> --}}
        {{-- <h3>Add Employee</h3> --}}
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

        <!-- Container for demo purpose -->
<div class="container my-24 px-6 mx-auto">

    <!-- Section: Design Block -->
    <section class="mb-32 text-gray-800 text-center md:text-left">
      <div class="block rounded-lg shadow-lg bg-white">
        <div class="flex flex-wrap items-center">
          <div class="grow-0 shrink-0 basis-auto block lg:flex w-full lg:w-6/12 xl:w-4/12">
            <img src="https://source.unsplash.com/random/800x600/?dental+clinic+blue" alt="Dental"
              class="w-full rounded-t-lg lg:rounded-tr-none lg:rounded-bl-lg" />
          </div>
          <div class="grow-0 shrink-0 basis-auto w-full lg:w-6/12 xl:w-8/12">
            <!-- BEGIN: Horizontal Form -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Add Employee</h2>
                </div>
                <div id="horizontal-form" class="p-5">
                    <div class="preview">                        
                        <form action="{{ route('employees.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                        <div class="form-inline">
                            <label for="first_name" class="form-label sm:w-20 my-2">First Name:</label>
                            <input id="first_name" type="text" class="form-control my-2" placeholder="Enter first name">
                        </div>
                        <div class="form-inline">
                            <label for="last_name" class="form-label sm:w-20 my-2">Last Name:</label>
                            <input id="last_name" type="text" class="form-control my-2" placeholder="Enter last name">
                        </div>
                        <div class="form-inline">
                            <label for="position" class="form-label sm:w-20 my-2">Position:</label>
                            <input id="position" type="text" class="form-control my-2" placeholder="Enter position">
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
            
          </div>
        </div>
      </div>
    </section>
    <!-- Section: Design Block -->
  
  </div>
  <!-- Container for demo purpose -->


        

        

    </div>
    @endsection