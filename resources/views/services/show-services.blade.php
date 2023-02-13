<x-layout>
    <div class="flex flex-col">
        <div class="overflow-none sm:mx-0.5 lg:mx-0.5">
          <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden">
            {{-- @if (session('success'))
            <div class="alert alert-success">
            {{ session('success') }}
            </div>
            @endif --}}
              <h1 class="text-center text-3xl font-semibold my-3">Services</h1>
              <table class="min-w-full">
                <thead class="bg-blue-300 border-b">
                  <tr>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-center">
                      Image
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-center">
                      Service
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-center">
                      Description
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-center">
                      Action
                    </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($service as $service)  
                  <tr class="bg-gray-100 border-b">
                    <td class="px-6 py-4 whitespace-wrap text-sm font-medium text-gray-900">
                        <img src="{{ file_exists(public_path('storage/' . $service->service_image)) ? asset('storage/' . $service->service_image) : asset($service->service_image) }}" width="200">
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-wrap">
                        {{ $service->service }}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-wrap">
                        {{ $service->service_description }}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-wrap">
                        <div class="inline-block mx-auto sm:flex">
                            <a type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-xs px-3 py-2 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" href="/services/{{$service->id}}">View</a>
                            <a type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-xs px-3 py-2 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" href="/services/{{$service->id}}/edit">Edit</a>
                            <form method="POST" action="/services/{{$service->id}}">
                                @csrf
                                @method('DELETE')
                                <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-xs px-3 py-2 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>
</x-layout>
      


{{-- <a href="/services" class="inline-block text-black ml-4 mb-4"
><i class="fa-solid fa-arrow-left"></i> Back
</a>
<div class="mx-4">
<x-card class="p-10">
<div
class="flex flex-col items-center justify-center text-center"
>
<img
    class="w-48 mr-6 mb-6"
    src="{{$service->service_image ? asset('storage/' . $service->service_image) : asset('images/no-image.png')}}"
    alt=""
/>

<h3 class="text-2xl mb-2">{{$service->service}}</h3>


<div class="border border-gray-200 w-full mb-6"></div>
<div>
    <h3 class="text-3xl font-bold mb-4">
        Service Description
    </h3>
    <div class="text-lg space-y-6">
        <p>
            {{$service->service_description}}
        </p>
    </div>
    <a
      href="/services/{{$service->id}}/edit"
      type="button"
      class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
      data-mdb-ripple="true"
      data-mdb-ripple-color="light"
    >
      Edit
    </a>
    <form method="POST" action="/services/{{$service->id}}">
      @csrf
      @method('DELETE')
      <button class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
          Delete
      </button>
  </form>
</div>
</div>
</x-card>
</div>
--}}







