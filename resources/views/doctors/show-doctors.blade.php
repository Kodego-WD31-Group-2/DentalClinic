@extends('../layout/' . $layout)

@section('subhead')
    <title>Show Doctors</title>

    <div class="container px-6 py-6 mx-auto">
        <section class="my-10 text-gray-800 text-center">
          <div class="grid sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-3 gap-10 gap-x-6 lg:gap-x-12">
            @foreach ($doctor as $doctor)
            <div class="mb-6 lg:mb-0">
              <div class="bg-white block rounded-lg shadow-lg">
                <div class="relative overflow-hidden bg-no-repeat bg-cover">
                  <img src='{{ asset('storage/' . $doctor->doctor_image) }}' class="w-full rounded-t-lg" />
                  <svg class="absolute" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"
                    style="left: 0; bottom: 0">
                    <path fill="#fff"
                      d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                    </path>
                  </svg>
                </div>
                <div class="p-6">
                  <h5 class="text-lg font-bold mb-4">Dr. {{$doctor->first_name}} {{$doctor->last_name}}</h5>
                  <p class="text-black-500 mb-4">{{$doctor->specialty}}</p>
                <ul class="grid md:grid-cols-3 gap-2 gap-x-6 lg:gap-x-12">
                  {{-- View Button --}}
                  <li><a type="button" class="inline-block px-3 py-3 mb-2 md:mb-0 mr-0 md:mr-2 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" href="/doctors/{{$doctor->doctor_id}}/view">View</a></li>
                  {{-- EDIT BUTTON --}}
                  <li><a type="button" class="inline-block px-3 py-3 mb-2 md:mb-0 mr-0 md:mr-2 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" href="/doctors/{{$doctor->doctor_id}}/edit">Edit</a></li>
                  {{-- DELETE BUTTON --}}
                  <li><form method="POST" class="inline-block px-3 py-3 mb-2 md:mb-0 mr-0 md:mr-2 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" action="/doctors/{{$doctor->doctor_id}}">
                    @csrf
                    @method('DELETE')
                      <button>DELETE</button>
                  </form></li>
                  {{-- <li><form method="POST" class="inline-block px-7 py-3 mb-2 md:mb-0 mr-0 md:mr-2 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" action="/doctors/{{$doctor->doctor_id}}">
                    @csrf
                    @method('DELETE')
                      <button>Delete</button>
                  </form></li> --}}
                </ul>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </section>
      </div>
    </div> 
    @endsection