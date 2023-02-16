<div
class="relative bg-fixed overflow-hidden h-full bg-no-repeat bg-cover"
style="
  background-position: 50%;
  background-image: url('{{ asset('assets/img/BGservices.jpg')}}');
  height: 100%;
"
>
<div
  class=" top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden"
  style="background-color: rgba(0, 0, 0, 0.4)"
>
<div class="container my-12 px-6 my-20 mx-auto">

  <section class="mb-22 text-gray-800">
    <style>
      .zoom:hover img {
        transform: scale(1.1);
      }
    </style>

    <div class="flex justify-center items-center mb-5">
      <div class="text-center text-white px-6 md:px-12">
        <h1 class="text-4xl md:text-5xl xl:text-6xl font-bold tracking-tight mb-10">
          Our <span class="text-custom-2">Services</span>
        </h1>
        <p class="text-lg">SmileCare Dental Clinic is a top-notch facility providing quality dental care to
          patients of all ages in a warm and welcoming environment. Our team of experienced 
          professionals offers a wide range of services, from routine check-ups to advanced
           treatments such as implants and Invisalign. We use the latest technology for the
            highest standards of care. Our goal is to help patients achieve and maintain 
            optimal oral health, with a focus on comfort and patient satisfaction.
        </p>
        <a href="/services"
          type="button"
          class="inline-block px-7 py-3 m-5 border-2 border-white text-white font-medium text-sm leading-snug uppercase rounded hover:bg-custom-2 hover:bg-opacity-75 focus:outline-none focus:ring-0 transition duration-150 ease-in-out"
          data-mdb-ripple="true"
          data-mdb-ripple-color="light"
        >
          Know More
        </a>
      </div>
    </div>

    <div class="grid lg:grid-cols-3 gap-6">
      {{-- S1 --}}
      @foreach  ($services as $service)
      <div class="zoom shadow-lg rounded-lg relative overflow-hidden bg-no-repeat bg-cover"
        style="background-position: 50%;">
        <img src="{{ file_exists(public_path('storage/' . $service->service_image)) ? asset('storage/' . $service->service_image) : asset($service->service_image) }}"
          class="w-full transition duration-300 ease-linear align-middle" />
          <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
            style="background-color: rgba(0, 0, 0, 0.1)">
            <div class="flex justify-start items-end h-full">
              <h5 class="text-2xl font-bold text-white m-6"></h5>
            </div>
          </div>
          <div class="hover-overlay">
            <div
              class="mask absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"
              style="background-color: rgba(253, 253, 253, 0.15)"></div>
          </div>
        </a>
      </div>
      @endforeach
      {{-- S2 --}}
      {{-- <div class="zoom shadow-lg rounded-lg relative overflow-hidden bg-no-repeat bg-cover"
        style="background-position: 50%;">
        <img src='{{ asset('assets/img/Services/extraction.jpg')}}'
          class="w-full transition duration-300 ease-linear align-middle" />
          <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
            style="background-color: rgba(0, 0, 0, 0.1)">
            <div class="flex justify-start items-end h-full">
              <h5 class="text-2xl font-bold text-white m-6">Dental Extraction</h5>
            </div>
          </div>
          <div class="hover-overlay">
            <div
              class="mask absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"
              style="background-color: rgba(253, 253, 253, 0.15)"></div>
          </div>
        </a>
      </div> --}}
      {{-- S3 --}}
      {{-- <div class="zoom shadow-lg rounded-lg relative overflow-hidden bg-no-repeat bg-cover"
        style="background-position: 50%;">
        <img src='{{ asset('assets/img/Services/rootcanal.jpg')}}'
          class="w-full transition duration-300 ease-linear align-middle" />
          <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
            style="background-color: rgba(0, 0, 0, 0.1)">
            <div class="flex justify-start items-end h-full">
              <h5 class="text-2xl font-bold text-white m-6">Root Canal Therapy</h5>
            </div>
          </div>
          <div class="hover-overlay">
            <div
              class="mask absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"
              style="background-color: rgba(253, 253, 253, 0.15)"></div>
          </div>
        </a>
      </div> --}}
      {{-- S4 --}}
      {{-- <div class="zoom shadow-lg rounded-lg relative overflow-hidden bg-no-repeat bg-cover"
        style="background-position: 50%;">
        <img src='{{ asset('assets/img/Services/ortho.jpg')}}'
          class="w-full transition duration-300 ease-linear align-middle" />
          <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
            style="background-color: rgba(0, 0, 0, 0.1)">
            <div class="flex justify-start items-end h-full">
              <h5 class="text-2xl font-bold text-white m-6">Orthodontist</h5>
            </div>
          </div>
          <div class="hover-overlay">
            <div
              class="mask absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"
              style="background-color: rgba(253, 253, 253, 0.15)"></div>
          </div>
        </a>
      </div> --}}
      {{-- S5 --}}
      {{-- <div class="zoom shadow-lg rounded-lg relative overflow-hidden bg-no-repeat bg-cover"
        style="background-position: 50%;">
        <img src='{{ asset('assets/img/Services/filling.jpg')}}'
          class="w-full transition duration-300 ease-linear align-middle" />
          <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
            style="background-color: rgba(0, 0, 0, 0.1)">
            <div class="flex justify-start items-end h-full">
              <h5 class="text-2xl font-bold text-white m-6">Teeth Restoration</h5>
            </div>
          </div>
          <div class="hover-overlay">
            <div
              class="mask absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"
              style="background-color: rgba(253, 253, 253, 0.15)"></div>
          </div>
        </a>
      </div> --}}
      {{-- S6 --}}
      {{-- <div class="zoom shadow-lg rounded-lg relative overflow-hidden bg-no-repeat bg-cover"
        style="background-position: 50%;">
        <img src='{{ asset('assets/img/Services/cleaning.jpg')}}'
          class="w-full transition duration-300 ease-linear align-middle" />
          <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
            style="background-color: rgba(0, 0, 0, 0.1)">
            <div class="flex justify-start items-end h-full">
              <h5 class="text-2xl font-bold text-white m-6">Braces and Dentures</h5>
            </div>
          </div>
          <div class="hover-overlay">
            <div
              class="mask absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"
              style="background-color: rgba(253, 253, 253, 0.15)"></div>
          </div>
        </a>
      </div> --}}
    </div>
    
  </section>
  
</div>
</div>
</div>