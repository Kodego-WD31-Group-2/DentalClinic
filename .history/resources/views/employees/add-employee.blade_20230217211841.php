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

        <!-- Container for demo purpose -->
<div class="container my-24 px-6 mx-auto">

    <!-- Section: Design Block -->
    <section class="mb-32 text-gray-800 text-center md:text-left">
      <div class="block rounded-lg shadow-lg bg-white">
        <div class="flex flex-wrap items-center">
          <div class="grow-0 shrink-0 basis-auto block lg:flex w-full lg:w-6/12 xl:w-4/12">
            <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/126.jpg" alt="Trendy Pants and Shoes"
              class="w-full rounded-t-lg lg:rounded-tr-none lg:rounded-bl-lg" />
          </div>
          <div class="grow-0 shrink-0 basis-auto w-full lg:w-6/12 xl:w-8/12">
            
          </div>
        </div>
      </div>
    </section>
    <!-- Section: Design Block -->
  
  </div>
  <!-- Container for demo purpose -->


        

        
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