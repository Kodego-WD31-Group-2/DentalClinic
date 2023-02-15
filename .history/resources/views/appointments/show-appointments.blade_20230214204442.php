{{-- @extends('../layout/' . $layout)

@section('subhead')
    <title>Add Patient</title>
@endsection

@section('subcontent') --}}

    <div class="container">
        <h3>Appointments</h3>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-bordered">
            
        </table>
    </div>

{{-- </x-layout> --}}

