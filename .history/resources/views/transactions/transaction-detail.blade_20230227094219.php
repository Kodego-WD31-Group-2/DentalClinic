@extends('../layout/' . $layout)

@section('subhead')
    <title>Transaction Detail - Smileville Dental Services</title>
@endsection

@section('subcontent')
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Transaction Details</h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <button class="btn btn-primary shadow-md mr-2">Print</button>
            <div class="dropdown ml-auto sm:ml-0">
                <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                    <span class="w-5 h-5 flex items-center justify-center">
                        <i class="w-4 h-4" data-lucide="plus"></i>
                    </span>
                </button>
                <div class="dropdown-menu w-40">
                    <ul class="dropdown-content">
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-lucide="file" class="w-4 h-4 mr-2"></i> Export Word
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-lucide="file" class="w-4 h-4 mr-2"></i> Export PDF
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- BEGIN: Transaction Details -->
    <div class="intro-y grid grid-cols-11 gap-5 mt-5">
        <div class="col-span-12 lg:col-span-4 2xl:col-span-3">
            <div class="box p-5 rounded-md">
                <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                    <div class="font-medium text-base truncate">Transaction Details</div>
                    <a href="" class="flex items-center ml-auto text-primary">
                        <i data-lucide="edit" class="w-4 h-4 mr-2"></i> Change Status
                    </a>
                </div>
                <div class="flex items-center">
                    <i data-lucide="clipboard" class="w-4 h-4 text-slate-500 mr-2"></i> Transaction ID: {{ $transaction->id }}<a href="" class="underline decoration-dotted ml-1"></a>
                </div>
                <div class="flex items-center mt-3">
                    <i data-lucide="calendar" class="w-4 h-4 text-slate-500 mr-2"></i> Transaction Date: {{ $transaction->transaction_date }}
                </div>
                <div class="flex items-center mt-3">
                    <i data-lucide="clock" class="w-4 h-4 text-slate-500 mr-2"></i> Transaction Status: <span class="bg-success/20 text-success rounded px-2 ml-1">{{ $transaction->payment_status }}</span>
                </div>
            </div>
            <div class="box p-5 rounded-md mt-5">
                <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                    <div class="font-medium text-base truncate">Appointment Details</div>
                    <a href="" class="flex items-center ml-auto text-primary">
                        <i data-lucide="edit" class="w-4 h-4 mr-2"></i> View Details
                    </a>
                </div>
                <div class="flex items-center">
                    <i data-lucide="clipboard" class="w-4 h-4 text-slate-500 mr-2"></i> Name: <a href="" class="underline decoration-dotted ml-1">{{ $transaction->appointment->first_name }} {{ $transaction->appointment->last_name }}</a>
                </div>
                <div class="flex items-center mt-3">
                    <i data-lucide="calendar" class="w-4 h-4 text-slate-500 mr-2"></i> Appointment Type: {{ $transaction->appointment->appointment_type }} 
                </div>
                <div class="flex items-center mt-3">
                    <i data-lucide="calendar" class="w-4 h-4 text-slate-500 mr-2"></i> Phone Number: {{ $transaction->appointment->phone_number }} 
                </div>
                <div class="flex items-center mt-3">
                    <i data-lucide="map-pin" class="w-4 h-4 text-slate-500 mr-2"></i> Email Address: {{ $transaction->appointment->email }} 
                </div>
            </div>
            <div class="box p-5 rounded-md mt-5">
                <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                    <div class="font-medium text-base truncate">Payment Details</div>
                </div>
                <div class="flex items-center">
                    <i data-lucide="clipboard" class="w-4 h-4 text-slate-500 mr-2"></i> Payment Method: <div class="ml-auto">{{ $transaction->payment_method }}</div>
                </div>
                <div class="flex items-center mt-3">
                    <i data-lucide="credit-card" class="w-4 h-4 text-slate-500 mr-2"></i> Total Price (2 items): <div class="ml-auto">${{ $transaction->getTotalCostAttribute() }}</div>
                </div>
                <div class="flex items-center mt-3">
                    <i data-lucide="credit-card" class="w-4 h-4 text-slate-500 mr-2"></i> Other Charges: <div class="ml-auto">$0.00</div>
                </div>
                <div class="flex items-center border-t border-slate-200/60 dark:border-darkmode-400 pt-5 mt-5 font-medium">
                    <i data-lucide="credit-card" class="w-4 h-4 text-slate-500 mr-2"></i> Grand Total: <div class="ml-auto">${{ $transaction->getTotalCostAttribute() }}</div>
                </div>
            </div>

        </div>
        <div class="col-span-12 lg:col-span-7 2xl:col-span-8">
            <div class="box p-5 rounded-md">
                <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                    <div class="font-medium text-base truncate">Order Details</div>
                    <a href="" class="flex items-center ml-auto text-primary">
                        <i data-lucide="plus" class="w-4 h-4 mr-2"></i> Add Notes
                    </a>
                </div>
                <div class="overflow-auto lg:overflow-visible -mt-3">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="whitespace-nowrap">Fee Schedule</th>
                                <th class="text-center whitespace-nowrap">Cost</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($transaction->transactionItems as $transactionItem)
                                <tr>
                                    <td class="font-medium">{{ $transactionItem->feeSchedule->name }}</td>
                                    <td class="text-center">${{ $transactionItem->feeSchedule->amount }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Transaction Details -->
@endsection
