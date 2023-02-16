@extends('../layout/' . $layout)

@section('subhead')
    <title>Home - Smileville Dental Services</title>
@endsection

@section('subcontent')
<main>
    @include('partials._hero')
    @include('partials._features')
    @include('../layout/components/footer')  
    @include('resources\views\appointments\form-appointment.blade.php')
</main>
    {{-- <div class="intro-y flex items-center mt-8">      
    </div> --}}
@endsection
