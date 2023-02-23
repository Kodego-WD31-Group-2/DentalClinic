@extends('../layout/' . $layout)

@section('subhead')
    <title>Inbox - Smileville Dental Services</title>
@endsection

@section('subcontent')

<!-- Container for demo purpose -->
<div class="container my-24 px-6 mx-auto">

    <!-- Section: Design Block -->
    <section class="mb-32 text-gray-800 text-center md:text-left">
      <div class="block rounded-lg shadow-lg bg-white">
        <div>
          <div class="grow-0 shrink-0 basis-auto w-full ">
            <div class="px-6 py-12 md:px-12">
              <h2 class="text-3xl font-bold mb-2 pb-2">From: {{ $contacts->name }}</h2>
              <h3 class="text-xl font-bold mb-4 pb-2"><i class="fa-solid fa-envelope"></i> : {{ $contacts->email }}</h3>
              <p class="text-black font-bold  mb-6 pb-2">
                {{ $contacts->message }}
              </p>
              <a href="/contact/inbox">
                <button type="button"
                class="btn">
                Back
              </button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: Design Block -->
  
  </div>
  <!-- Container for demo purpose -->
  @endsection
  