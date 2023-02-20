@extends('../layout/' . $layout)

@section('subhead')
    <title>Book an Appointment - Smileville Dental Services</title>
@endsection

@section('subcontent')
    {{-- <div class="container">
        <h3>@auth Add Appointment @else Book an Appointment @endauth</h3>
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

        <form method="POST" action="{{ route('appointments.store') }}">
          @csrf
          @include('appointments.info-appointment')          
          @include('appointments.info-patient')
          @include('appointments.info-contact')          
          @include('appointments.info-additional')
          @include('appointments.info-confirmation')

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div> --}}

    <link href="{{ URL::asset('css/styles.css') }}" rel="stylesheet" type="text/css" >
    

  <!-- Container for demo purpose -->
<!-- Container for demo purpose -->
<div>

  <!-- Section: Design Block -->
  <section> 
    <div class="text-center text-black pt-10 px-6">
      <h1 class="text-3xl md:text-4xl xl:text-7xl font-bold tracking-tight mb-12 py-10 bg-blue-100">Book an Appointment</h1>
    </div>
  </section>
  <!-- Section: Design Block -->

</div>
<!-- Container for demo purpose -->

<div class="container my-6 px-6 mx-auto">

  <!-- Section: Design Block -->
  <section class="mb-6 text-gray-800 text-center md:text-left">
    <div class="block rounded-lg shadow-lg bg-gray-800">
      <div class="flex flex-wrap items-center bg-custom-1 p-10 rounded-xl">
        <div class="grow-0 shrink-0 basis-auto block lg:flex w-full lg:w-6/12 xl:w-4/12 bg-custom-5 flex justify-center p-20 rounded-xl">
          <div class="tab-headers flex border-b border-gray-300">
            <div class="tab-header rounded active cursor-pointer px-4 py-2 text-gray-500 font-medium" data-tab="1">Appointment Information</div>
            <div class="tab-header rounded cursor-pointer px-4 py-2 text-gray-500 font-medium" data-tab="2">Patient Information</div>
            <div class="tab-header rounded cursor-pointer px-4 py-2 text-gray-500 font-medium" data-tab="3">Contact Information</div>
            <div class="tab-header rounded cursor-pointer px-4 py-2 text-gray-500 font-medium" data-tab="4">Additional Information</div>
            <div class="tab-header rounded cursor-pointer px-4 py-2 text-gray-500 font-medium" data-tab="5">Confirmation</div>
          </div>
        </div>
        <div class="grow-0 shrink-0 basis-auto w-full lg:w-6/12 xl:w-8/12">
          <div class="px-6 py-12 md:px-12">
            <form action="{{ route('appointments.store') }}" method="post" enctype="multipart/form-data">
              <div class="tab-content mt-6">
                @csrf
                <div class="tab active" data-tab="1">
                  @include('appointments.info-appointment') 
                  {{--  --}}
                  <button type="button" class="next-btn bg-white hover:bg-custom-4 text-custom-1 font-medium py-2 px-4 rounded mt-3">Next</button>
                </div>
                <div class="tab" data-tab="2">
                  @include('appointments.info-patient')
                  {{--  --}}
                  <button type="button" class="prev-btn bg-white hover:bg-custom-4 text-custom-1 font-medium py-2 px-4 rounded mt-3">Previous</button>
                  <button type="button" class="next-btn bg-white hover:bg-custom-4 text-custom-1 font-medium py-2 px-4 rounded mt-3">Next</button>
                </div>
                <div class="tab" data-tab="3">
                  @include('appointments.info-contact')
                  {{--  --}}
                  <button type="button" class="prev-btn bg-white hover:bg-custom-4 text-custom-1 font-medium py-2 px-4 rounded mt-3">Previous</button>
                  <button type="button" class="next-btn bg-white hover:bg-custom-4 text-custom-1 font-medium py-2 px-4 rounded mt-3">Next</button>
                </div>
                <div class="tab" data-tab="4">
                  @include('appointments.info-additional')
                  {{--  --}}
                  <button type="button" class="prev-btn bg-white hover:bg-custom-4 text-custom-1 font-medium py-2 px-4 rounded mt-3">Previous</button>
                  <button type="button" class="next-btn bg-white hover:bg-custom-4 text-custom-1 font-medium py-2 px-4 rounded mt-3">Next</button>
                </div>
                <div class="tab" data-tab="5">
                  @include('appointments.info-confirmation')
                  {{--  --}}
                  <button type="button" class="prev-btn bg-white hover:bg-custom-4 text-custom-1 font-medium py-2 px-4 rounded mt-3">Previous</button>
                  <button type="submit" class="submit-btn bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded mt-3">Submit</button>
                </div>
            </div>
          </form>
            
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->

</div>
<!-- Container for demo purpose --> 
  

{{--   
//<script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script> --}}
{{-- <script type="text/javascript" src="{{ URL::asset('js/scripts.js') }}"></script> --}}

<script>
  const tabHeaders = document.querySelectorAll(".tab-header");
const tabs = document.querySelectorAll(".tab");

tabHeaders.forEach((tabHeader) => {
  tabHeader.addEventListener("click", () => {
    const currentTab = document.querySelector(".tab-header.active");
    currentTab.classList.remove("active");
    tabHeader.classList.add("active");

    const currentContent = document.querySelector(".tab.active");
    currentContent.classList.remove("active");
    const tabId = tabHeader.getAttribute("data-tab");
    const newContent = document.querySelector(`.tab[data-tab="${tabId}"]`);
    newContent.classList.add("active");
  });
});

const prevButtons = document.querySelectorAll(".prev-btn");
prevButtons.forEach((prevButton) => {
  prevButton.addEventListener("click", () => {
    const currentTab = document.querySelector(".tab-header.active");
    const currentTabId = currentTab.getAttribute("data-tab");
    const prevTabId = currentTabId - 1;

    if (prevTabId > 0) {
      currentTab.classList.remove("active");
      const prevTab = document.querySelector(
        ` .tab-header[data-tab="${prevTabId}"]`
      );
      prevTab.classList.add("active");

      const currentContent = document.querySelector(".tab.active");
      currentContent.classList.remove("active");
      const prevContent = document.querySelector(
        `.tab[data-tab="${prevTabId}"]`
      );
      prevContent.classList.add("active");
    }
  });
});

const nextButtons = document.querySelectorAll(".next-btn");
nextButtons.forEach((nextButton) => {
  nextButton.addEventListener("click", () => {
    const currentTab = document.querySelector(".tab-header.active");
    const currentTabId = currentTab.getAttribute("data-tab");
    const nextTabId = parseInt(currentTabId) + 1;
    if (nextTabId <= tabs.length) {
      currentTab.classList.remove("active");
      const nextTab = document.querySelector(
        ` .tab-header[data-tab="${nextTabId}"]`
      );
      nextTab.classList.add("active");
      const currentContent = document.querySelector(".tab.active");
      currentContent.classList.remove("active");
      const nextContent = document.querySelector(
        `.tab[data-tab="${nextTabId}"]`
      );
      nextContent.classList.add("active");
    }
  });
});

</script>


    
@endsection