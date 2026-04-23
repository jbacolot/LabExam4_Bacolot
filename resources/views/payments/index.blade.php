<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Payment History
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto">
            <div class="bg-white shadow rounded-lg p-6">

                <div class="mb-4">
                    <a href="{{ route('payments.create') }}"
                       class="bg-purple-500 text-white px-4 py-2 rounded">
                        + New Payment
                    </a>
                </div>

                <table class="w-full border">
                    <tr class="bg-gray-200">
                        <th class="p-2">Order</th>
                        <th class="p-2">Amount Paid</th>
                        <th class="p-2">Balance</th>
                        <th class="p-2">Status</th>
                    </tr>

                    @foreach($payments as $payment)
                    <tr>
                        <td class="p-2">Order #{{ $payment->order_id }}</td>
                        <td class="p-2">₱{{ $payment->amount_paid }}</td>
                        <td class="p-2">₱{{ $payment->balance }}</td>
                        <td class="p-2">{{ $payment->status }}</td>
                    </tr>
                    @endforeach

                </table>

            </div>
        </div>
    </div>
</x-app-layout>