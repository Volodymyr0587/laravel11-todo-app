<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-center p-6 text-gray-900">
                    <ul>
                        <li class="flex justify-between space-x-8">
                            <span class="text-2xl text-blue-600">{{ __("All todos: ") }}</span>
                            <div
                                class="relative grid items-center px-2 py-1 font-sans text-xs font-bold text-gray-900 uppercase rounded-full select-none whitespace-nowrap bg-gray-900/10">
                                <span>{{ $user->todos->count() }}</span>
                            </div>
                        </li>
                        <li class="flex justify-between space-x-8">
                            <span class="text-2xl text-yellow-600">{{ __("Not completed todos: ") }}</span>
                            <div
                                class="relative grid items-center px-2 py-1 font-sans text-xs font-bold text-gray-900 uppercase rounded-full select-none whitespace-nowrap bg-gray-900/10">
                                <span>{{ $user->todos->where('completed', false)->count() }}</span>
                            </div>
                        </li>
                        <li class="flex justify-between space-x-8">
                            <span class="text-2xl text-green-600">{{ __("Completed todos: ") }}</span>
                            <div
                                class="relative grid items-center px-2 py-1 font-sans text-xs font-bold text-gray-900 uppercase rounded-full select-none whitespace-nowrap bg-gray-900/10">
                                <span>{{ $user->todos->where('completed', true)->count() }}</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
