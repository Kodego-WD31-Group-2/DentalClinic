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
                @include('appointments.info-appointment') 
                
                <button type="button" class="next-btn bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium py-2 px-4 rounded">Next</button>
              </div>
              <div class="tab" data-tab="2">
                @include('appointments.info-patient')
                <button type="button" class="prev-btn bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium py-2 px-4 rounded">Previous</button>
                <button type="button" class="next-btn bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium py-2 px-4 rounded">Next</button>
              </div>
              <div class="tab" data-tab="3">
                @include('appointments.info-contact')
                <button type="button" class="prev-btn bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium py-2 px-4 rounded">Previous</button>
                <button type="button" class="next-btn bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium py-2 px-4 rounded">Next</button>
              </div>
              <div class="tab" data-tab="4">
                @include('appointments.info-additional')
                <button type="button" class="prev-btn bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium py-2 px-4 rounded">Previous</button>
                <button type="button" class="next-btn bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium py-2 px-4 rounded">Next</button>
              </div>
              <div class="tab" data-tab="5">
                @include('appointments.info-confirmation')
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
  // Get all the tabs and navigation buttons
  var tabs = document.querySelectorAll('.tab');
  var prevBtns = document.querySelectorAll('.prev-btn');
  var nextBtns = document.querySelectorAll('.next-btn');

  // Set the initial active tab
  var activeTab = 0;
  showTab(activeTab);

  // Define the functions to show and hide tabs
  function showTab(n) {
    tabs[n].style.display = "block";
    if (n == 0) {
      prevBtns[n].style.display = "none";
    } else {
      prevBtns[n].style.display = "inline";
    }
    if (n == (tabs.length - 1)) {
      nextBtns[n].style.display = "none";
    } else {
      nextBtns[n].style.display = "inline";
    }
  }

  function hideTab(n) {
    tabs[n].style.display = "none";
  }

  // Define the function to handle clicking the navigation buttons
  function clickTab(n) {
    hideTab(activeTab);
    activeTab += n;
    showTab(activeTab);
  }

  // Attach click event listeners to the navigation buttons
  for (var i = 0; i < prevBtns.length; i++) {
    prevBtns[i].addEventListener("click", function() {
      clickTab(-1);
    });
  }

  for (var i = 0; i < nextBtns.length; i++) {
    nextBtns[i].addEventListener("click", function() {
      clickTab(1);
    });
  }
</script>

  

  
    
@endsection