

@extends('../layout/' . $layout)

@section('subhead')
    <title>Accordion - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')

{{-- @extends('../layout/' . $layout)

@section('subhead')
    <title>Add Patient</title>
@endsection

@section('subcontent') --}}
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
</x-layout>
