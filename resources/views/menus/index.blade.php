<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Rice Menu List
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto">
            <div class="bg-white shadow rounded-lg p-6">

                <div class="mb-4">
                    <a href="{{ route('menus.create') }}"
                       class="bg-blue-500 text-white px-4 py-2 rounded">
                        + Add Rice
                    </a>
                </div>

                <table class="w-full border">
                    <tr class="bg-gray-200">
                        <th class="p-2">Name</th>
                        <th class="p-2">Category</th>
                        <th class="p-2">Price</th>
                        <th class="p-2">Stock</th>
                        <th class="p-2">Action</th>
                    </tr>

                    @foreach($menus as $menu)
                    <tr>
                        <td class="p-2">{{ $menu->name }}</td>
                        <td class="p-2">{{ $menu->category }}</td>
                        <td class="p-2">₱{{ $menu->price_per_kilo }}</td>
                        <td class="p-2">{{ $menu->stock }}</td>

                        <td class="p-2 flex gap-2">

                            <!-- EDIT -->
                            <a href="{{ route('menus.edit', $menu->id) }}"
                               class="text-blue-500">
                               Edit
                            </a>

                            <!-- DELETE -->
                            <form action="{{ route('menus.destroy', $menu->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-500"
                                        onclick="return confirm('Delete this item?')">
                                    Delete
                                </button>
                            </form>

                        </td>
                    </tr>
                    @endforeach

                </table>

            </div>
        </div>
    </div>
</x-app-layout>