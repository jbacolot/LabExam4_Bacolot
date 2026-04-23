<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add Rice Product
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-lg mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-lg p-6">

                @if(session('success'))
                <div class="mb-4 text-green-600">
                    {{ session('success') }}
                </div>
                @endif

                <form action="{{ route('menus.store') }}" method="POST">
                    @csrf

                    <!-- Name -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-medium mb-1">Rice Name</label>
                        <input type="text" name="name"
                        class="w-full border rounded px-3 py-2 focus:ring"
                        placeholder="e.g. Jasmine" required>
                    </div>

                    <!-- Category -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-medium mb-1">Category</label>
                        <input type="text" name="category"
                        class="w-full border rounded px-3 py-2 focus:ring"
                        placeholder="Regular / Premium" required>
                    </div>

                    <!-- Price -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-medium mb-1">Price per Kilo</label>
                        <input type="number" step="0.01" name="price_per_kilo"
                        class="w-full border rounded px-3 py-2 focus:ring"
                        placeholder="Enter price" required>
                    </div>

                    <!-- Stock -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-medium mb-1">Stock</label>
                        <input type="number" name="stock"
                        class="w-full border rounded px-3 py-2 focus:ring"
                        placeholder="Enter stock" required>
                    </div>

                    <!-- Buttons -->
                    <div class="flex justify-between">
                        <a href="{{ route('menus.index') }}"
                        class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded">
                            Back
                        </a>

                        <button type="submit"
                        class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                            Add Rice
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</x-app-layout>