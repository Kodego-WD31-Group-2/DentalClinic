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
                  <div class="mt-4">
                    <label for="appointment-date" class="text-sm font-medium">Preferred Appointment Date:</label>
                    <input value="2023-02-23" type="date" id="appointment-date" name="appointment-date" class="mt-2 border border-gray-400 rounded p-2 w-full">
                  </div>
                  <div class="mt-4">
                    <label for="appointment-time" class="text-sm font-medium">Preferred Appointment Time:</label>
                    <select id="appointment-time" name="appointment-time" class="mt-2 border border-gray-400 rounded p-2 w-full">
                      <option value="morning">Morning</option>
                      <option value="afternoon">Afternoon</option>
                    </select>
                  </div>
                  <div class="mt-4">
                    <label for="appointment-type" class="text-sm font-medium">Type of Appointment:</label>
                    <select id="appointment-type" name="appointment-type" class="mt-2 border border-gray-400 rounded p-2 w-full">
                      <option value="regular-check-up">Regular Check-up</option>
                      <option value="cleaning">Cleaning</option>
                      <option value="emergency" selected>Emergency</option>
                    </select>
                  </div>
                  <div class="mt-4">
                    <label for="reason" class="text-sm font-medium">Reason for Appointment:</label>
                    <textarea id="reason" name="reason" class="mt-2 border border-gray-400 rounded p-2 w-full">test</textarea>
                  </div>
                  <div class="mt-4">
                    <label for="dental-history" class="text-sm font-medium">Previous Dental History:</label>
                    <textarea id="dental-history" name="dental-history" class="mt-2 border border-gray-400 rounded p-2 w-full">test</textarea>
                  </div>
                  

                  {{--  --}}
                  <button type="button" class="next-btn bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium py-2 px-4 rounded">Next</button>
                </div>
                <div class="tab" data-tab="2">
                  {{-- @include('appointments.info-patient') --}}
                  <h3 class="text-lg font-medium">Patient Information:</h3>
  <div class="mb-4">
    <label class="block font-medium mb-2" for="first-name">First Name:</label>
    <input value="test" class="w-full border border-gray-400 p-2" type="text" id="first-name" name="first-name">
  </div>
  <div class="mb-4">
    <label class="block font-medium mb-2" for="last-name">Last Name:</label>
    <input value="test" class="w-full border border-gray-400 p-2" type="text" id="last-name" name="last-name">
  </div>
  <fieldset class="mb-4">
    <legend class="block font-medium mb-2">Gender:</legend>
    <label class="inline-flex items-center mr-4">
      <input type="radio" class="form-radio" name="gender" value="male">
      <span class="ml-2">Male</span>
    </label>
    <label class="inline-flex items-center">
      <input type="radio" class="form-radio" name="gender" value="female" checked>
      <span class="ml-2">Female</span>
    </label>
  </fieldset>
  <div class="mb-4">
    <label class="block font-medium mb-2" for="dob">Date of Birth:</label>
    <input value="2000-02-23" class="w-full border border-gray-400 p-2" type="date" id="dob" name="dob">
  </div>

<h3 class="text-lg font-medium mt-6">Medical Information:</h3>
  <div class="mb-4">
    <label class="block font-medium mb-2" for="medications">List of current medications:</label>
    <textarea class="w-full border border-gray-400 p-2" id="medications" name="medications">test</textarea>
  </div>
  <div class="mb-4">
    <label class="block font-medium mb-2" for="allergies">Allergies (if any):</label>
    <textarea class="w-full border border-gray-400 p-2" id="allergies" name="allergies">test</textarea>
  </div>
  <div class="mb-4">
    <label class="block font-medium mb-2" for="medical-conditions">Medical conditions that may affect dental treatment:</label>
    <textarea class="w-full border border-gray-400 p-2" id="medical-conditions" name="medical-conditions">test</textarea>
  </div>

                  {{--  --}}
                  <button type="button" class="prev-btn bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium py-2 px-4 rounded">Previous</button>
                  <button type="button" class="next-btn bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium py-2 px-4 rounded">Next</button>
                </div>
                <div class="tab" data-tab="3">
                  {{-- @include('appointments.info-contact') --}}
                  <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2" for="phone-number">
                      Phone Number:
                    </label>
                    <input value="828-203-8204"
                      class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                      type="tel"
                      id="phone-number"
                      name="phone-number"
                    >
                  </div>
                  <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2" for="email">
                      Email Address:
                    </label>
                    <input value=test@test.com
                      class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                      type="email"
                      id="email"
                      name="email"
                    >
                  </div>
                  <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2" for="emergency-contact-name">
                      Emergency Contact Name:
                    </label>
                    <input
                      class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                      type="text"
                      id="emergency-contact-name"
                      name="emergency-contact-name"
                    >
                  </div>
                  <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2" for="emergency-contact-number">
                      Emergency Contact Phone Number:
                    </label>
                    <input
                      class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                      type="tel"
                      id="emergency-contact-number"
                      name="emergency-contact-number"
                    >
                  </div>

                  {{--  --}}
                  <button type="button" class="prev-btn bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium py-2 px-4 rounded">Previous</button>
                  <button type="button" class="next-btn bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium py-2 px-4 rounded">Next</button>
                </div>
                <div class="tab" data-tab="4">
                  {{-- @include('appointments.info-additional') --}}
                  <div class="mb-6">
                    <label class="block font-medium mb-2" for="special-instructions">Special instructions or requests:</label>
                    <textarea class="border border-gray-400 p-2 rounded-lg w-full" id="special-instructions" name="special-instructions"></textarea>
                  </div>
                  <div class="mb-6">
                    <label class="block font-medium mb-2" for="referral-source">Referral source (if referred by another individual or office):</label>
                    <input class="border border-gray-400 p-2 rounded-lg w-full" type="text" id="referral-source" name="referral-source">
                  </div>
                  <div class="mb-6">
                    <label class="block font-medium mb-2" for="hear-about-practice">How did you hear about our practice?:</label>
                    <select class="border border-gray-400 p-2 rounded-lg w-full" id="hear-about-practice" name="hear-about-practice">
                      <option value="">-- Please select an option --</option>
                      <option value="Search Engine">Search Engine</option>
                      <option value="Social Media">Social Media</option>
                      <option value="Friend or Family">Friend or Family</option>
                      <option value="Advertisement">Advertisement</option>
                      <option value="Other">Other</option>
                    </select>
                  </div>

                  {{--  --}}
                  <button type="button" class="prev-btn bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium py-2 px-4 rounded">Previous</button>
                  <button type="button" class="next-btn bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium py-2 px-4 rounded">Next</button>
                </div>
                <div class="tab" data-tab="5">
                  {{-- @include('appointments.info-confirmation') --}}
                  <div class="mb-5">
                    <label class="block text-gray-700 font-medium mb-2" for="signature-confirm">
                      <input type="checkbox" id="signature-confirm" name="signature-confirm">
                      I confirm the appointment details and consent for treatment.
                    </label>
                  </div>
                  <div class="mb-5">
                    <label class="block text-gray-700 font-medium mb-2" for="reminders-consent">
                      <input type="checkbox" id="reminders-consent" name="reminders-consent">
                      I consent to receive text or email reminders.
                    </label>
                  </div>
                  <div class="mb-5">
                    <label class="block text-gray-700 font-medium mb-2" for="release-signature">
                      <input type="checkbox" id="release-signature" name="release-signature">
                      I authorize the release of dental and medical information.
                    </label>
                  </div>
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