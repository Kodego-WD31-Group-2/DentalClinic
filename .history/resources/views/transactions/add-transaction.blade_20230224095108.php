@extends('../layout/' . $layout)

@section('subhead')
    <title>Accordion - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
{{-- <div class="container">
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
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div> --}}

  <section class="h-full">
    <div class="h-full">
      <div
        class="g-6 flex h-full flex-wrap items-center justify-center lg:justify-evenly">
        <div
          class="shrink-1 mb-12 grow-0 basis-auto md:mb-0 md:w-6/12 md:shrink-0 lg:w-4/12 xl:w-4/12">
          <img
            src="{{ asset('assets/img/transacBG.png') }}"
            class="w-full"
            alt="Sample image" />
        </div>
        
            <div class="mb-12 md:mb-0 md:w-8/12 lg:w-5/12 xl:w-5/12 bg-custom-2 py-24 px-24 rounded">
                <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">Add Transaction</h2>
                <form method="POST" action="{{ route('transactions.store') }}">
                    @csrf
                    <div class="form-group m-2">
                        <label for="transaction_id">Transaction ID</label>
                        <input id="transaction_id" type="text" class="form-control mt-2 p-2.5 @error('transaction_id') is-invalid @enderror" name="transaction_id" value="{{ old('transaction_id') }}" required autocomplete="transaction_id" autofocus>
                        @error('transaction_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group m-2">
                        <label for="fee_schedule_id">Fee Schedule</label>
                        <select id="fee_schedule_id" class="form-control mt-2 p-2.5 @error('fee_schedule_id') is-invalid @enderror" name="fee_schedule_id" required>
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
                    <div class="p-2.5">
                        <button
                    type="button"
                    class="inline-block mt-3 rounded border-2 border-custom-1 px-6 pt-2 pb-[6px] text-xs font-medium uppercase leading-normal text-light transition duration-150 ease-in-out hover:border-primary-600 hover:bg-neutral-500 hover:bg-opacity-50 hover:text-primary-600 focus:border-primary-600 focus:text-primary-600 focus:outline-none focus:ring-0 active:border-primary-700 active:text-primary-700 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
                    data-te-ripple-init>
                    Submit
                    </button>
                    </div>
                    
                </form>
            </div>

      </div>
    </div>
  </section>
@endsection
