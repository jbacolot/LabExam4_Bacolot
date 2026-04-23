<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Process Payment
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-lg mx-auto">
            <div class="bg-white p-6 shadow rounded">

                <form method="POST" action="{{ route('payments.store') }}">
                    @csrf

                    <div class="mb-4">
                        <label>Order ID</label>
                        <input type="number" name="order_id"
                        class="w-full border p-2">
                    </div>

                    <div class="mb-4">
                        <label>Amount Paid</label>
                        <input type="number" name="amount_paid"
                        class="w-full border p-2">
                    </div>

                    <button class="bg-blue-500 text-white px-4 py-2 rounded">
                        Pay
                    </button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>