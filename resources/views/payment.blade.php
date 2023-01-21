<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-sm text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Post Payment!") }}
                    <form action="{{route('payments')}}" method="POST">
                        @csrf
                        <input type="text" name="name" class="rounded-md dark:text-gray-800">
                        <button class="bg-orange-400 m-2 p-2 rounded-md hover:bg-gray-200">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
