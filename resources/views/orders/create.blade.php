<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Order
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-lg mx-auto">
            <div class="bg-white shadow-md rounded-lg p-6">

                <form action="{{ route('orders.store') }}" method="POST">
                    @csrf

                    <!-- Select Rice -->
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-1">Select Rice</label>
                        <select name="menu_id"
                        class="w-full border rounded px-3 py-2">
                            @foreach($menus as $menu)
                                <option value="{{ $menu->id }}">
                                    {{ $menu->name }} - ₱{{ $menu->price_per_kilo }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Quantity -->
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-1">Quantity (kg)</label>
                        <input type="number" name="quantity"
                        class="w-full border rounded px-3 py-2"
                        required>
                    </div>

                    <div class="flex justify-between">
                        <a href="{{ route('orders.index') }}"
                        class="bg-gray-500 text-white px-4 py-2 rounded">
                            Back
                        </a>

                        <button class="bg-green-500 text-white px-4 py-2 rounded">
                            Create Order
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</x-app-layout>