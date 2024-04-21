<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Todo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 text-gray-900">

                <!-- component -->
                <div class="h-100 w-full flex items-center justify-center bg-teal-lightest font-sans">
                    <div class="bg-white rounded shadow p-6 m-4 w-full lg:w-3/4 lg:max-w-lg">
                        <div class="mb-4">

                            <form class="flex mt-4" action="{{ route('todos.update', $todo->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="text" name="description" id="description" value="{{ $todo->description }}"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 mr-4 text-grey-darker"
                                    placeholder="Add Todo">
                                <button type="submit"
                                    class="flex-no-shrink p-2 border-2 rounded text-teal border-teal hover:text-blue-500 hover:bg-teal">Update</button>
                            </form>

                            @error('description')
                            <div class="mt-4 text-sm text-red-500">{{ $message }}</div>
                            @enderror

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
