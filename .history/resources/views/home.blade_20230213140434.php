<x-layout>
    @include('partials._hero')
    @include('partials._features')
</x-layout>







@extends('../layout/' . $layout)

@section('subhead')
    <title>Accordion - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Test</h2>    
    </div>
@endsection
