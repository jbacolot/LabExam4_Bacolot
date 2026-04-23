<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Rice Ordering System Dashboard
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto grid grid-cols-3 gap-6">

            <a href="{{ route('menus.index') }}"
            class="bg-white p-6 shadow rounded text-center hover:bg-gray-100">
                Menu Management
            </a>

            <a href="{{ route('orders.index') }}"
            class="bg-white p-6 shadow rounded text-center hover:bg-gray-100">
                Orders
            </a>

            <a href="{{ route('payments.index') }}"
            class="bg-white p-6 shadow rounded text-center hover:bg-gray-100">
                Payments
            </a>

        </div>
    </div>
</x-app-layout>