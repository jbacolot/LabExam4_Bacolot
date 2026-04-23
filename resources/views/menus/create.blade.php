<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add Rice Product
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-xl mx-auto">
            <div class="bg-white shadow rounded-lg p-6">

                <form method="POST" action="{{ route('menus.store') }}">
                    @csrf

                    <div class="mb-4">
                        <label class="block">Rice Name</label>
                        <input name="name" class="w-full border p-2 rounded" required>
                    </div>

                    <div class="mb-4">
                        <label class="block">Category</label>
                        <input name="category" class="w-full border p-2 rounded" required>
                    </div>

                    <div class="mb-4">
                        <label class="block">Price per Kilo</label>
                        <input type="number" name="price_per_kilo"
                               class="w-full border p-2 rounded" required>
                    </div>

                    <div class="mb-4">
                        <label class="block">Stock</label>
                        <input type="number" name="stock"
                               class="w-full border p-2 rounded" required>
                    </div>

                    <button class="bg-blue-500 text-white px-4 py-2 rounded">
                        Save
                    </button>

                </form>

            </div>
        </div>
    </div>
</x-app-layout>