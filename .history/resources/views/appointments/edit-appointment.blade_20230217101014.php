@extends('../layout/' . $layout)

@section('subhead')
    <title>Edit Appointments</title>
@endsection

@section('subcontent')
    <div class="container">
      <h3>Edit Appointment</h3>
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
      @if (isset($appointment))
      <form action="{{ route('appointments.update', $appointment->appointment_id) }}" method="POST" enctype="multipart/form-data">
        <div class="tab-content mt-6">
          @csrf
          @method('PUT')
          <div class="tab active" data-tab="1">
            @include('appointments.edit-info-appointment') 
            {{--  --}}
            <button type="button" class="next-btn bg-white hover:bg-custom-4 text-custom-1 font-medium py-2 px-4 rounded mt-3">Next</button>
          </div>
          <div class="tab" data-tab="2">
            @include('appointments.edit-info-patient')
            {{--  --}}
            <button type="button" class="prev-btn bg-white hover:bg-custom-4 text-custom-1 font-medium py-2 px-4 rounded mt-3">Previous</button>
            <button type="button" class="next-btn bg-white hover:bg-custom-4 text-custom-1 font-medium py-2 px-4 rounded mt-3">Next</button>
          </div>
          <div class="tab" data-tab="3">
            @include('appointments.edit-info-contact')
            {{--  --}}
            <button type="button" class="prev-btn bg-white hover:bg-custom-4 text-custom-1 font-medium py-2 px-4 rounded mt-3">Previous</button>
            <button type="button" class="next-btn bg-white hover:bg-custom-4 text-custom-1 font-medium py-2 px-4 rounded mt-3">Next</button>
          </div>
          <div class="tab" data-tab="4">
            @include('appointments.edit-info-additional')
            {{--  --}}
            <button type="button" class="prev-btn bg-white hover:bg-custom-4 text-custom-1 font-medium py-2 px-4 rounded mt-3">Previous</button>
            <button type="button" class="next-btn bg-white hover:bg-custom-4 text-custom-1 font-medium py-2 px-4 rounded mt-3">Next</button>
          </div>
          <div class="tab" data-tab="5">
            @include('appointments.edit-info-confirmation')
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