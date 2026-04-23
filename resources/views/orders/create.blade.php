<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Order (POS)
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-xl mx-auto">
            <div class="bg-white shadow rounded-lg p-6">

                <form method="POST" action="{{ route('orders.store') }}">
                    @csrf

                    <div class="mb-4">
                        <label class="block">Select Rice</label>
                        <select name="menu_id" class="w-full border p-2 rounded">
                            @foreach($menus as $menu)
                                <option value="{{ $menu->id }}">
                                    {{ $menu->name }} - ₱{{ $menu->price_per_kilo }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="block">Quantity (kg)</label>
                        <input type="number" name="quantity"
                               class="w-full border p-2 rounded" required>
                    </div>

                    <button class="bg-green-500 text-white px-4 py-2 rounded">
                        Create Order
                    </button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>