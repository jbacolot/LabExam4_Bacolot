<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Rice
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-lg mx-auto">
            <div class="bg-white p-6 shadow rounded">

                <form method="POST" action="{{ route('menus.update', $menu->id) }}">
                    @csrf

                    <div class="mb-4">
                        <label>Name</label>
                        <input type="text" name="name"
                        value="{{ $menu->name }}"
                        class="w-full border p-2">
                    </div>

                    <div class="mb-4">
                        <label>Category</label>
                        <input type="text" name="category"
                        value="{{ $menu->category }}"
                        class="w-full border p-2">
                    </div>

                    <div class="mb-4">
                        <label>Price</label>
                        <input type="number" name="price_per_kilo"
                        value="{{ $menu->price_per_kilo }}"
                        class="w-full border p-2">
                    </div>

                    <div class="mb-4">
                        <label>Stock</label>
                        <input type="number" name="stock"
                        value="{{ $menu->stock }}"
                        class="w-full border p-2">
                    </div>

                    <button class="bg-blue-500 text-white px-4 py-2 rounded">
                        Update
                    </button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>