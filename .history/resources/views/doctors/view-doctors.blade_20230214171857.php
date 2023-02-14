@extends('../layout/' . $layout)

@section('subhead')
    <title>View Doctors</title>
@endsection

@section('subcontent')
<div class="bg-custom-2">
  <div class="container pt-24 pb-24 px-6 mx-auto">

    {{-- costume css for image --}}
    <section class="">
      <style>
        @media (min-width: 992px) {
          #image {
            margin-left: 50px;
          }
        }
      </style>
  
      <div class="flex flex-wrap">
        <div class="grow-0 shrink-0 basis-auto w-full lg:w-5/12 mb-12 lg:mb-0">
          <div class="flex lg:py-12">
            <img src='{{ asset('storage/'. $doctor->doctor_image)}}' class="h-2/4 rounded-lg shadow-lg"
              id="image" style="z-index: 10" alt="" />
          </div>
        </div>
  
        <div class="grow-0 shrink-0 basis-auto w-full lg:w-7/12">
          <div
            class="bg-custom-4 h-full rounded-lg p-6 lg:pl-12 text-white flex items-center text-center lg:text-left">
            <div class="lg:pl-12">
              <h2 class="text-3xl font-bold mb-5">Dr. {{$doctor->first_name}} {{$doctor->last_name}}</h2>
              <h2 class="text-lg font-bold mb-10">{{$doctor->specialty}}</h2>
              <div class="flex flex-col md:flex-row md:justify-around xl:justify-start mb-6 mx-auto">
                <p class="flex items-center mb-4 md:mb-2 lg:mb-0 mx-auto md:mx-0 xl:mr-20">
                  {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4 mr-2">
                    <path fill="currentColor"
                      d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                    </path>
                  </svg> --}}
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4 mr-2">
                    <path fill="currentColor" d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 24.1 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"></path>
                  </svg>
                  {{$doctor->email}}
                </p>
  
                <p class="flex items-center mb-4 md:mb-2 lg:mb-0 mx-auto md:mx-0 xl:mr-20">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4 mr-2">
                    <path fill="currentColor"
                      d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                    </path>
                  </svg>
                  Best quality
                </p>
              </div>
              <p class="text-white text-base text-justify-center">
                {{$doctor->description}}
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
</div>
@endsection