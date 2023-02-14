{{-- @extends('../layout/' . $layout)

@section('subhead')
    <title>Add Patient</title>
@endsection

@section('subcontent') --}}
    @include('partials._hero')
    @include('partials._features')
{{-- @endsection --}}







@extends('../layout/' . $layout)

@section('subhead')
    <title>Accordion - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        @include('partials._hero')
        @include('partials._features') 
    </div>
@endsection
