{{-- @extends('../layout/' . $layout)

@section('subhead')
    <title>Add Patient</title>
@endsection

@section('subcontent') --}}
    {{-- @include('partials._hero') --}}
    {{-- @include('partials._features') --}}
{{-- @endsection --}}







@extends('../layout/' . $layout)

@section('subhead')
    <title>Home - Smileville Dental Services</title>
@endsection

@section('subcontent')
<main>
    @include('partials._hero')
</main>
    <div class="intro-y flex items-center mt-8">
        @include('partials._features')
        @include('../layout/components/footer')        
    </div>
@endsection
