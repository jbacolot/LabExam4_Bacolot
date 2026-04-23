<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Order Summary
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-6xl mx-auto">
            <div class="bg-white shadow rounded-lg p-6">

                <a href="{{ route('orders.create') }}"
                class="bg-green-500 text-white px-4 py-2 rounded">
                    + Create Order
                </a>

                <table class="w-full border mt-4">
                    <tr class="bg-gray-200">
                        <th class="p-2">Rice</th>
                        <th class="p-2">Quantity</th>
                        <th class="p-2">Total</th>
                        <th class="p-2">Status</th>
                    </tr>

                    @foreach($orders as $order)
                    <tr>
                        <td class="p-2">{{ $order->menu->name }}</td>
                        <td class="p-2">{{ $order->quantity }}</td>
                        <td class="p-2">₱{{ $order->total_cost }}</td>
                        <td class="p-2">{{ $order->status }}</td>
                    </tr>
                    @endforeach
                </table>

            </div>
        </div>
    </div>
</x-app-layout>