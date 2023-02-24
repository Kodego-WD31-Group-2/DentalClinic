@extends('../layout/' . $layout)

@section('subhead')
    <title>Contact Us</title>
@endsection

@section('subcontent')


<section class="container  bg-custom-5 shadow-lg px-6 mx-auto">
    <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-black">Contact Us</h2>
        <p class="mb-8 lg:mb-16 font-light text-center text-black sm:text-xl">Want to send feedback about us?Let us know.</p>
        {{-- <form action="{{ route('contacts.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8"> 
           @csrf
            <div>
                <label for="name"  class="block mb-2 text-sm font-medium text-white ">Your Name</label>
                <input type="text" id="name" name="name" class="block p-3 w-full text-sm mt-2 border border-gray-400 rounded p-2 w-full " placeholder="Batang Quiapo" required>
            </div>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-white ">Your email</label>
                <input type="email" id="email" name="email" class="block p-3 w-full text-sm mt-2 border border-gray-400 rounded p-2 w-full" placeholder="name@gmail.com" required>
            </div>
            <div class="sm:col-span-2">
                <label for="message" class="block mb-2 text-sm font-medium text-white ">Your message</label>
                <textarea id="message" name="message" rows="6" class="block p-3 w-full text-sm mt-2 border border-gray-400 rounded p-2 w-full" placeholder="Leave a comment..."></textarea>
            </div>
            <button type="submit" class="btn btn-secondary"">Send message</button>
        </form> --}}

        <form action="{{ route('contacts.store') }}" method="post" enctype="multipart/form-data" class="space-y-8">
            @csrf
            {{-- Name --}}
            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-black">Your Name</label>
                <input type="text" id="name" name="name" class="block p-3 w-full text-sm mt-2 border border-gray-400 rounded p-2 w-full " placeholder="Enter Your Name..." required>
            </div>
            {{-- Email --}}
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-black">Your email</label>
                <input type="email" id="email" name="email" class="block p-3 w-full text-sm mt-2 border border-gray-400 rounded p-2 w-full " placeholder="Enter Your Email..." required>
            </div>
            {{-- Message --}}
            <div class="sm:col-span-2">
                <label for="message" class="block mb-2 text-sm font-medium text-black">Your message</label>
                <textarea id="message" name="message" rows="6" class="block p-3 w-full text-sm mt-2 border border-gray-400 rounded p-2 w-full " placeholder="Leave a message..."></textarea>
            </div>
            {{-- Send Button --}}
            <button type="submit" class="btn btn-secondary text-black">Send message</button>
        </form>
    </div>
  </section>
  @endsection