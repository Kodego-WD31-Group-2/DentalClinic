@extends('../layout/' . $layout)

@section('subhead')
    <title>Book an Appointment</title>
@endsection

@section('subcontent')
    <link href="{{ URL::asset('css/styles.css') }}" rel="stylesheet" type="text/css">
    <div class="container my-24 px-6 mx-auto">
        <form method="POST" action="{{ route('appointment.submit') }}">
            @csrf
            <section class="mb-32 text-gray-800 text-center md:text-left">
                <div class="block rounded-lg shadow-lg bg-white">
                    <div class="flex flex-wrap items-center bg-custom-5 p-10 rounded">
                        <div class="grow-0 shrink-0 basis-auto block lg:flex w-full lg:w-6/12 xl:w-4/12 bg-custom-2 flex justify-center p-20 rounded">
                            <div class="tab-headers flex border-b border-gray-300">
                                <div class="tab-header active cursor-pointer px-4 py-2 text-gray-700 font-medium" data-tab="1">Appointment Information</div>
                                <div class="tab-header cursor-pointer px-4 py-2 text-gray-500 font-medium" data-tab="2">Patient Information</div>
                                <div class="tab-header cursor-pointer px-4 py-2 text-gray-500 font-medium" data-tab="3">Contact Information</div>
                                <div class="tab-header cursor-pointer px-4 py-2 text-gray-500 font-medium" data-tab="4">Additional Information</div>
                                <div class="tab-header cursor-pointer px-4 py-2 text-gray-500 font-medium" data-tab="5">Confirmation</div>
                            </div>
                        </div>
                        <div class="grow-0 shrink-0 basis-auto w-full lg:w-6/12 xl:w-8/12">
                            <div class="px-6 py-12 md:px-12">
                                <div class="tab-content mt-6">
                                    <div class="tab active" data-tab="1">
                                        @include('appointments.info-appointment')
                                        <button class="next-btn bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium py-2 px-4 rounded">Next</button>
                                    </div>
                                    <div class="tab" data-tab="2">
                                        @include('appointments.info-patient')
                                        <button class="prev-btn bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium py-2 px-4 rounded">Previous</button>
                                        <button class="next-btn bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium py-2 px-4 rounded">Next</button>
                                    </div>
                                    <div class="tab" data-tab="3">
                                        @include('appointments.info-contact')
                                        <button class="prev-btn bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium py-2 px-4 rounded">Previous</button>
                                        <button class="next-btn bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium py-2 px-4 rounded">Next</button>
                                    </div>
                                    <div class="tab" data-tab="4">
    <form method="POST" action="{{ route('submitAppointment') }}">
        @csrf
        @include('appointments.info-additional')
        <button class="prev-btn bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium py-2 px-4 rounded" type="button" onclick="prevTab(3)">Previous</button>
        <button class="submit-btn bg-blue-500 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded" type="submit">Submit</button>
    </form>
</div>
