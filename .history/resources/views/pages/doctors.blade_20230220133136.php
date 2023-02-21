@extends('../layout/' . $layout)


@section('subhead')
    <title>Doctors - Smileville Dental Services</title>
@endsection

@section('subcontent')

    <section>
      @auth
      
      @else
      <svg
        xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink"
        class="fixed-top h-full w-full"
        style="margin: auto; z-index: -10;"
        height="100"
        preserveAspectRatio="none"
        viewBox="0 0 1920 880"
      >
        <g transform="translate(960,440) scale(1,1) translate(-960,-440)">
          <linearGradient
            id="lg-0.047955344060927496"
            x1="0"
            x2="1"
            y1="0"
            y2="0"
          >
            <stop stop-color="hsl(205, 92%, 25%)" offset="0"></stop>
            <stop stop-color="hsl(204, 67%, 75%)" offset="1"></stop>
          </linearGradient>
          <path d="" fill="url(#lg-0.047955344060927496)" opacity="0.4">
            <animate
              attributeName="d"
              dur="33.333333333333336s"
              repeatCount="indefinite"
              keyTimes="0;0.333;0.667;1"
              calcmod="spline"
              keySplines="0.2 0 0.2 1;0.2 0 0.2 1;0.2 0 0.2 1"
              begin="0s"
              values="M0 0L 0 804.2328934685746Q 320 597.3613372284876  640 571.0708916590191T 1280 512.0661063245175T 1920 301.8788007488083L 1920 0 Z;M0 0L 0 877.6839081951588Q 320 668.0720922803877  640 649.0018928349388T 1280 328.7087077664202T 1920 162.95038242563396L 1920 0 Z;M0 0L 0 724.9886210051687Q 320 661.4364572061575  640 623.2173947479624T 1280 359.20353038907734T 1920 135.51673041732283L 1920 0 Z;M0 0L 0 804.2328934685746Q 320 597.3613372284876  640 571.0708916590191T 1280 512.0661063245175T 1920 301.8788007488083L 1920 0 Z"
            ></animate>
          </path>
          <path d="" fill="url(#lg-0.047955344060927496)" opacity="0.4">
            <animate
              attributeName="d"
              dur="33.333333333333336s"
              repeatCount="indefinite"
              keyTimes="0;0.333;0.667;1"
              calcmod="spline"
              keySplines="0.2 0 0.2 1;0.2 0 0.2 1;0.2 0 0.2 1"
              begin="-6.666666666666667s"
              values="M0 0L 0 765.7607191473613Q 320 641.7853945676919  640 624.2534689988059T 1280 365.27264408032966T 1920 190.38947978522663L 1920 0 Z;M0 0L 0 842.1984196370487Q 320 570.6690721707517  640 540.6844954979398T 1280 439.92879442880593T 1920 200.29713960445451L 1920 0 Z;M0 0L 0 796.6802345094818Q 320 721.9216894353016  640 696.8815669355181T 1280 373.6367381440213T 1920 196.63169821789495L 1920 0 Z;M0 0L 0 765.7607191473613Q 320 641.7853945676919  640 624.2534689988059T 1280 365.27264408032966T 1920 190.38947978522663L 1920 0 Z"
            ></animate>
          </path>
          <path d="" fill="url(#lg-0.047955344060927496)" opacity="0.4">
            <animate
              attributeName="d"
              dur="33.333333333333336s"
              repeatCount="indefinite"
              keyTimes="0;0.333;0.667;1"
              calcmod="spline"
              keySplines="0.2 0 0.2 1;0.2 0 0.2 1;0.2 0 0.2 1"
              begin="-13.333333333333334s"
              values="M0 0L 0 801.7562714943509Q 320 634.0247183381232  640 605.7090791951217T 1280 503.9393370140325T 1920 224.7551247480177L 1920 0 Z;M0 0L 0 821.0401780336218Q 320 670.8690783540507  640 637.0744123031742T 1280 456.40745286432224T 1920 278.1294357804296L 1920 0 Z;M0 0L 0 744.0534225112256Q 320 637.6425395409125  640 593.2079605185819T 1280 457.03995196824286T 1920 254.87693899994804L 1920 0 Z;M0 0L 0 801.7562714943509Q 320 634.0247183381232  640 605.7090791951217T 1280 503.9393370140325T 1920 224.7551247480177L 1920 0 Z"
            ></animate>
          </path>
          <path d="" fill="url(#lg-0.047955344060927496)" opacity="0.4">
            <animate
              attributeName="d"
              dur="33.333333333333336s"
              repeatCount="indefinite"
              keyTimes="0;0.333;0.667;1"
              calcmod="spline"
              keySplines="0.2 0 0.2 1;0.2 0 0.2 1;0.2 0 0.2 1"
              begin="-20s"
              values="M0 0L 0 817.8603658675457Q 320 592.9404308081629  640 559.1126621853513T 1280 428.9912604821798T 1920 209.017381620229L 1920 0 Z;M0 0L 0 802.0504889976935Q 320 561.3963273210122  640 537.6024084387631T 1280 430.41283267566695T 1920 256.1972069733954L 1920 0 Z;M0 0L 0 789.4448177495887Q 320 561.9675446430498  640 531.6192318019404T 1280 414.76018143244175T 1920 265.9163329632971L 1920 0 Z;M0 0L 0 817.8603658675457Q 320 592.9404308081629  640 559.1126621853513T 1280 428.9912604821798T 1920 209.017381620229L 1920 0 Z"
            ></animate>
          </path>
          <path d="" fill="url(#lg-0.047955344060927496)" opacity="0.4">
            <animate
              attributeName="d"
              dur="33.333333333333336s"
              repeatCount="indefinite"
              keyTimes="0;0.333;0.667;1"
              calcmod="spline"
              keySplines="0.2 0 0.2 1;0.2 0 0.2 1;0.2 0 0.2 1"
              begin="-26.666666666666668s"
              values="M0 0L 0 844.0541574423102Q 320 623.0697081316591  640 592.8483890737847T 1280 469.85448734523794T 1920 190.81850676853674L 1920 0 Z;M0 0L 0 871.4928294956283Q 320 618.9784567388518  640 593.1183717103518T 1280 376.5051942642811T 1920 141.32293927545027L 1920 0 Z;M0 0L 0 782.0118384610068Q 320 727.3267836497654  640 694.0476176759635T 1280 518.1545471640493T 1920 276.0053882957168L 1920 0 Z;M0 0L 0 844.0541574423102Q 320 623.0697081316591  640 592.8483890737847T 1280 469.85448734523794T 1920 190.81850676853674L 1920 0 Z"
            ></animate>
          </path>
        </g>
      </svg>
      @endauth

      {{-- Doctors Team Info --}}
      <div class="container mx-auto px-6 md:px-6 xl:px-16" >
        <div class="text-center text-gray-800">
          <div class="block rounded-lg shadow-lg px-6 py-12 md:py-16 md:px-12" style="margin-top: 50px; background-color: hsla(0, 0%, 100%, 0.8);backdrop-filter: saturate(200%) blur(25px);">
            <h1 class="text-lg md:text-6xl xl:text-7xl font-bold tracking-tight mb-12">Meet The <span class="text-blue-600">Doctors Of Smileville</span></h1>
            <p class="text-black text-lg text-justify-center">
              Welcome to Smileville! We are a team of dedicated and skilled dental professionals,
               committed to providing exceptional care to patients of all ages. Our team is passionate
                about providing high-quality dental services, and we take the time to listen to each 
                patient's unique concerns and needs. We are committed to staying up to date on the 
                latest advancements in dental technology, ensuring that our patients receive the most
                 effective and comfortable treatment possible. Whether you need a routine cleaning or
                  complex restorative work, you can trust our team to provide the best possible care 
                  for your oral health. We look forward to meeting you and helping you achieve your 
                  optimal oral health!
            </p>
          </div>
        </div>
      </div>

      {{-- Doctors Here --}}
      <div class="container px-6 py-6 mx-auto">
        <section class="my-10 text-gray-800 text-center">
          <div class="grid md:grid-cols-3 gap-10 gap-x-6 lg:gap-x-12">
    
              {{-- 1 --}}
              @foreach ($doctor as $doctor)
              <div class="mb-6 lg:mb-0">
                <div class="bg-white block rounded-lg shadow-lg">
                  <div class="relative overflow-hidden bg-no-repeat bg-cover">
                    <a href="/doctors/{{$doctor->doctor_id}}/view">
                    <img src="{{ file_exists(public_path('storage/' . $doctor->doctor_image)) ? asset('storage/' . $doctor->doctor_image) : asset($doctor->doctor_image) }}" class="w-full rounded-t-lg" />
                    
                      <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"></div>
                    
                    <svg class="absolute" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"
                      style="left: 0; bottom: 0">
                      <path fill="#fff"
                        d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                      </path>
                    </svg>
                  </div>  
                  <div class="p-6">
                    <h5 class="text-lg font-bold mb-4">Dr. {{$doctor->first_name}} {{$doctor->last_name}}</h5>
                    <p class="text-black-500 mb-4">{{$doctor->specialty}}</p>
                  </div>
                </a>
                </div>
              </div>
              @endforeach
          </div>
       </section>
      </div>
    </section>
    @endsection