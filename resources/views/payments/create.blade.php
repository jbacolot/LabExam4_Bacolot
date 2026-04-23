<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Process Payment
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-xl mx-auto">
            <div class="bg-white shadow rounded-lg p-6">

                <form method="POST" action="{{ route('payments.store') }}">
                    @csrf

                    <div class="mb-4">
                        <label class="block">Select Order</label>
                        <select name="order_id" class="w-full border p-2 rounded">
                            @foreach($orders as $order)
                                <option value="{{ $order->id }}">
                                    Order {{ $order->id }} - ₱{{ $order->total_cost }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="block">Amount Paid</label>
                        <input type="number" name="amount_paid"
                               class="w-full border p-2 rounded" required>
                    </div>

                    <button class="bg-purple-500 text-white px-4 py-2 rounded">
                        Submit Payment
                    </button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>