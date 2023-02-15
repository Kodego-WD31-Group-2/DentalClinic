@extends('../layout/' . $layout)

@section('subhead')
    <title>Book an Appointment</title>
@endsection

@section('subcontent')

  <link href="{{ URL::asset('css/styles.css') }}" rel="stylesheet" type="text/css" >

  <!-- Container for demo purpose -->
<div class="container my-24 px-6 mx-auto">

  <!-- Section: Design Block -->
  <section class="mb-32 text-gray-800 text-center md:text-left">
    <div class="block rounded-lg shadow-lg bg-white">
      <div class="flex flex-wrap items-center bg-custom-5 p-10 rounded">
        <div class="grow-0 shrink-0 basis-auto block lg:flex w-full lg:w-6/12 xl:w-4/12 bg-custom-2 flex justify-center p-20 rounded">
          <div class="tab-headers flex border-b border-gray-300">
            <div class="tab-header active cursor-pointer px-4 py-2 text-gray-700 font-medium" data-tab="1">Appointment Information</div>
            <div class="tab-header cursor-pointer px-4 py-2 text-gray-500 font-medium" data-tab="2">Patient Information</div>
            <div class="tab-header cursor-pointer px-4 py-2 text-gray-500 font-medium" data-tab="3">Contact Information</div>
            <div class="tab-header cursor-pointer px-4 py-2 text-gray-500 font-medium" data-tab="4">Additional Information</div>
            <div class="tab-header cursor-pointer px-4 py-2 text-gray-500 font-medium" data-tab="5">Confirmation</div>
          </div>
        </div>
        <div class="grow-0 shrink-0 basis-auto w-full lg:w-6/12 xl:w-8/12">
          <div class="px-6 py-12 md:px-12">
            <div class="tab-content mt-6">
              <form method="post" action="{{ route('appointments.store') }}">
                @csrf
                <div class="tab active" data-tab="1">
                  {{-- @include('appointments.info-appointment')  --}}
                  
                  {{--  --}}
                  <button type="button" class="next-btn bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium py-2 px-4 rounded">Next</button>
                </div>
                <div class="tab" data-tab="2">
                  {{-- @include('appointments.info-patient') --}}
                  {{--  --}}
                  <button type="button" class="prev-btn bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium py-2 px-4 rounded">Previous</button>
                  <button type="button" class="next-btn bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium py-2 px-4 rounded">Next</button>
                </div>
                <div class="tab" data-tab="3">
                  {{-- @include('appointments.info-contact') --}}
                  {{--  --}}
                  <button type="button" class="prev-btn bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium py-2 px-4 rounded">Previous</button>
                  <button type="button" class="next-btn bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium py-2 px-4 rounded">Next</button>
                </div>
                <div class="tab" data-tab="4">
                  {{-- @include('appointments.info-additional') --}}
                  {{--  --}}
                  <button type="button" class="prev-btn bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium py-2 px-4 rounded">Previous</button>
                  <button type="button" class="next-btn bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium py-2 px-4 rounded">Next</button>
                </div>
                <div class="tab" data-tab="5">
                  {{-- @include('appointments.info-confirmation') --}}
                  {{--  --}}
                  <button type="button" class="prev-btn bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium py-2 px-4 rounded">Previous</button>
                  <button type="submit" class="submit-btn bg-green-500 hover:bg-green-600 text-white font-medium py-2 px-4 rounded">Submit</button>
                </div>
              </form>
            </div>
            
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