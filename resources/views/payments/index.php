<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Payment History
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-6xl mx-auto">

            <h1 class="text-red-600 mb-4">TEST BLADE IS LOADED</h1>

            <div class="bg-white p-6 shadow rounded">

                <a href="{{ route('payments.create') }}"
                   class="bg-green-500 text-white px-4 py-2 rounded">
                    + New Payment
                </a>

                <table class="w-full border mt-4">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="p-2">Order</th>
                            <th class="p-2">Paid</th>
                            <th class="p-2">Balance</th>
                            <th class="p-2">Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($payments as $payment)
                            <tr class="border-t">
                                <td class="p-2">{{ $payment->order_id }}</td>
                                <td class="p-2">₱{{ $payment->amount_paid }}</td>
                                <td class="p-2">₱{{ $payment->balance }}</td>
                                <td class="p-2">{{ $payment->status }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center p-4 text-gray-500">
                                    No payments found
                                </td>
                            </tr>
                        @endforelse
                    </tbody>

                </table>

            </div>
        </div>
    </div>
</x-app-layout>