@extends('../layout/' . $layout)

@section('subhead')
    <title>Show Doctors</title>
@endsection

@section('subcontent')
    <div class="container px-6 py-6 mx-auto">
        <section class="my-10 text-gray-800 text-center">
          <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 gap-x-6 lg:gap-x-12">
            @foreach ($doctor as $doctor)
                <div class="box">
                    <div class="p-5">
                        <div class="h-40 2xl:h-56 image-fit rounded-md overflow-hidden before:block before:absolute before:w-full before:h-full before:top-0 before:left-0 before:z-10 before:bg-gradient-to-t before:from-black before:to-black/10">
                            <img alt="Midone - HTML Admin Template" class="rounded-md" src="{{ file_exists(public_path('storage/' . $doctor->doctor_image)) ? asset('storage/' . $doctor->doctor_image) : asset($doctor->doctor_image) }}">
                            
                            <div class="absolute bottom-0 text-white px-5 pb-6 z-10">
                                <a href="" class="block font-medium text-base">{{ $doctor->doctor }}</a>
                            </div>
                        </div>
                        <div class="text-slate-600 dark:text-slate-500 mt-5">
                            <h2>{{ $doctor->description }}</h2>
                        </div>
                    </div>
                    <div class="flex justify-center lg:justify-end items-center p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                        
                        <a class="flex items-center mr-3" href="/doctors/{{$doctor->id}}/edit">
                            <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit
                        </a>
                        <form method="POST" action="/doctors/{{$doctor->id}}" class="flex items-center text-danger">
                            <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i>
                            @csrf
                                @method('DELETE')
                                <button>Delete</button> 
                        </form>
                    </div>
                </div>

        @endforeach
          </div>
        </section>
      </div>
    </div> 
@endsection