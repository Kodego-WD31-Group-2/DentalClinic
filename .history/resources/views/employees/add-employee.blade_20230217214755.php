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

        
  <div class="container my-12 px-6 mx-auto">
    <section class="mb-32 text-gray-800 text-center lg:text-left">
      <div class="px-6 py-12 md:px-12" style="background-color: hsl(0, 0%, 96%)">
        <div class="grid lg:grid-cols-2 gap-12 flex items-center">
            <div class="grow-0 shrink-0 basis-auto block lg:flex w-full lg:w-6/12 xl:w-4/12">
              <img src="https://source.unsplash.com/random/800x600/?dental+clinic+blue" alt="Dental"
                class="w-full rounded-t-lg lg:rounded-tr-none lg:rounded-bl-lg" />
            </div>
          <div class="mb-12 lg:mb-0">
            <div class="block rounded-lg shadow-lg bg-blue-100 px-6 py-12 md:px-12">
                <form action="{{ route('employees.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-inline my-3">
                        <label for="first_name">First Name:</label>
                        <input type="text" class="form-control ml-3" name="first_name" placeholder="Enter first name">
                    </div>
                    <div class="form-inline my-3">
                        <label for="last_name">Last Name:</label>
                        <input type="text" class="form-control ml-3" name="last_name" placeholder="Enter last name">
                    </div>
                    <div class="form-inline my-3">
                        <label for="position">Position:</label>
                        <input type="text" class="form-control ml-3" name="position" placeholder="Enter position">
                    </div>
                    <div class="form-inline my-3">
                        <label for="employee_image">Image:</label>
                        <input type="file" class="form-control ml-3" name="employee_image">
                    </div>
                    <button type="submit" class="btn btn-secondary">Submit</button>
                </form>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>

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
                            <div class="form-inline my-3">
                                <label for="first_name">First Name:</label>
                                <input type="text" class="form-control ml-3" name="first_name" placeholder="Enter first name">
                            </div>
                            <div class="form-inline my-3">
                                <label for="last_name">Last Name:</label>
                                <input type="text" class="form-control ml-3" name="last_name" placeholder="Enter last name">
                            </div>
                            <div class="form-inline my-3">
                                <label for="position">Position:</label>
                                <input type="text" class="form-control ml-3" name="position" placeholder="Enter position">
                            </div>
                            <div class="form-inline my-3">
                                <label for="employee_image">Image:</label>
                                <input type="file" class="form-control ml-3" name="employee_image">
                            </div>
                            <button type="submit" class="btn btn-secondary">Submit</button>
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