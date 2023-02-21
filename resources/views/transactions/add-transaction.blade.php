@extends('../layout/' . $layout)

@section('subhead')
    <title>Accordion - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
<div class="container mx-auto">
    <div class="card">
        <div class="card-header">
            <h2>Add Transaction</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('transactions.store') }}">
                @csrf

                <div class="form-group">
                    <label for="transaction_id">Transaction ID</label>
                    <input id="transaction_id" type="text" class="form-control @error('transaction_id') is-invalid @enderror" name="transaction_id" value="{{ old('transaction_id') }}" required autocomplete="transaction_id" autofocus>

                    @error('transaction_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="fee_schedule_id">Fee Schedule</label>
                    <select id="fee_schedule_id" class="form-control @error('fee_schedule_id') is-invalid @enderror" name="fee_schedule_id" required>
                        <option value="">Select a fee</option>
                        @foreach($fees as $fee)
                            <option value="{{ $fee->id }}" {{ old('fee_schedule_id') == $fee->id ? 'selected' : '' }}>{{ $fee->name }}</option>
                        @endforeach
                    </select>

                    @error('fee_schedule_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
