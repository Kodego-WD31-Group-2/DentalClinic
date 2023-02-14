{{-- <x-layout>
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="card">
          
          <div class="card-body">
            <form action="/services/{{$service->id}}" method="post" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="form-group">
                  <label for="service">Service:</label>
                  <input type="text" class="form-control" id="service" name="service" value="{{ old('service', $service->service) }}">
              </div>
              <div class="form-group">
                  <label for="service_description">Service Description:</label>
                  <textarea class="form-control" id="service_description" name="service_description">{{ old('service_description', $service->service_description) }}</textarea>
              </div>
              <div class="form-group">
                  <label for="service_image">Service Image:</label>
                  <input type="file" class="form-control" id="service_image" name="service_image">
                  <img class="w-48 mr-6 mb-6" src="{{$service->service_image ? asset('storage/' . $service->service_image) : asset('images/no-image.png')}}" alt="">
              </div>
              <input type="submit" value="Update Service">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-layout> --}}

@extends('../layout/' . $layout)

@section('subhead')
    <title>Edit Services</title>

  <div class="container my-12 px-6 mx-auto">
      <section class="mb-32 text-gray-800 text-center lg:text-left">
        <div class="px-6 py-12 md:px-12" style="background-color: hsl(0, 0%, 96%)">
          <div class="grid lg:grid-cols-2 gap-12 flex items-center">
            <div class="mt-12 lg:mt-0">
              <h1 class="text-5xl font-bold tracking-tight leading-tight mb-12 text-blue-600">
                Edit Services
              </h1>
              <p class="text-gray-600">
                Use this feature to edit a current service shown on the website.
              </p>
            </div>
            <div class="mb-12 lg:mb-0">
              <div class="block rounded-lg shadow-lg bg-blue-100 px-6 py-12 md:px-12">
                  <form action="/services/{{$service->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                      <div class="mb-4">
                          <label class="block font-medium mb-2" for="service">Service:</label>
                          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="service" id="service" value="{{ old('service', $service->service) }}">
                      </div>
                      <div class="mb-4">
                          <label class="block font-medium mb-2" for="service_description">Service Description:</label>
                          <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline h-56" name="service_description" id="service_description">{{ old('service_description', $service->service_description) }}</textarea>
                      </div>
                      <div class="mb-4">
                          <label class="block font-medium mb-2" for="service_image">Service Image:</label>
                          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="file" name="service_image" id="service_image">
                          <img class="w-48 mr-6 my-6" src="{{$service->service_image ? asset('storage/' . $service->service_image) : asset('images/no-image.png')}}" alt="">
                      </div>
                      <button class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-500 hover:text-white" type="submit">Save</button>
                  </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    @endsection