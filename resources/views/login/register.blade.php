@extends('../layout/' . $layout)

@section('head')
    <title>Register - Smileville Dental Services</title>
@endsection

@section('content')
@include('../layout/components/top-bar')
    <div class="container sm:px-10">
        <div class="block xl:grid grid-cols-2 gap-4">
            <!-- BEGIN: Register Info -->
            <div class="hidden xl:flex flex-col min-h-screen">
                <a href="" class="-intro-x flex items-center pt-5">
                    <img alt="Icewall Tailwind HTML Admin Template" class="w-6" src="{{ asset('assets/img/logo-1.png')}}">
                    <span class="text-white text-lg ml-3">
                        Smileville Dental Services
                    </span>
                </a>           
                <div class="my-auto">
                    <img alt="Icewall Tailwind HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="{{ asset('assets/img/DCBG.png') }}">
                    <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">Healthy teeth, happy life</div>
                    <div class="-intro-x text-white font-medium text-3xl leading-tight mt-1">smile with confidence at our dental clinic.</div>
                    <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400">Creating lasting smiles with quality care.</div>
                </div>
            </div>
            <!-- END: Register Info -->
            <!-- BEGIN: Register Form -->
            <div class="z-50 h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                <div class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">Sign Up</h2>
                    <div class="p-5 intro-x mt-2 text-dark-500 xl:hidden text-center">A few more clicks to sign in to your account. <br> Experience quality dental care that lasts a lifetime.</div>
                    <div class="intro-x mt-8">
                    <form action="/register" method="post">
                        @csrf
                        <div class="intro-x mt-8">
                            <input type="text" name="name" class="intro-x login__input form-control py-3 px-4 block" placeholder="Name" value="{{ old('name') }}">
                            @error('name')
                            <p class="text-red-500">{{ $message }}</p>
                            @enderror
                            <input type="text" name="email" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Email" value="{{ old('email') }}">
                            @error('email')
                            <p class="text-red-500">{{ $message }}</p>
                            @enderror
                            <input type="password" name="password" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Password" value="{{ old('password') }}">
                            @error('password')
                            <p class="text-red-500">{{ $message }}</p>
                            @enderror
                            <input type="password" name="password_confirmation" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Password Confirmation" value="{{ old('password_confirmation') }}">
                            @error('password_confirmation')
                            <p class="text-red-500 mt-2">{{ $message }}</p>
                            @enderror
    
                        </div>
    
                    <div class="intro-x flex items-center text-slate-600 dark:text-slate-500 mt-4 text-xs sm:text-sm">
                        <input id="remember-me" type="checkbox" class="form-check-input border mr-2">
                        <label class="cursor-pointer select-none" for="remember-me">I agree to the Terms and Conditions</label>
                        <a class="text-primary dark:text-slate-200 ml-1" href="">Privacy Policy</a>.
                    </div>
                    <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                        <button type="submit" class="btn btn-outline-secondary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Register</button>
                        <p class="mt-5">Already have an account?</p>
                            <p class="mt-5">
                                <a href="/login" >
                                    <span class="btn btn-outline-secondary py-3 px-4 w-full xl:w-32 mt-3 xl:mt-0 align-top">
                                        Sign in
                                    </span>
                                </a>
                        </p>
                    </div>
                    </div>
                </form>
                </div>
            </div>
            <!-- END: Register Form -->
            
{{-- @include('../layout/components/footer') --}}
        </div>
    </div>
@endsection

