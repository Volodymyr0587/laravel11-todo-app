<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Todos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 text-gray-900">

                <!-- component -->
                <div class="h-100 w-full flex items-center justify-center bg-teal-lightest font-sans">
                    <div class="bg-white rounded shadow p-6 m-4 w-full lg:w-3/4 lg:max-w-lg">
                        <div class="mb-4">

                            <form class="flex mt-4" action="{{ route('todos.store') }}" method="POST">
                                @csrf
                                <input type="text" name="description" id="description"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 mr-4 text-grey-darker"
                                    placeholder="Add Todo" value="{{ old('description') }}">
                                <button type="submit"
                                    class="flex-no-shrink p-2 border-2 rounded text-teal border-teal hover:text-blue-500 hover:bg-teal">Add</button>
                            </form>

                            @error('description')
                            <div class="mt-4 text-sm text-red-500">{{ $message }}</div>
                            @enderror

                        </div>
                        <div>
                            @forelse ($todos as $todo)
                            <div class="flex mb-4 items-center justify-between">
                                <div>
                                    <p class="w-full text-grey-darkest text-lg">{{ $todo->description }}</p>
                                    <p class="mt-2 text-sm font-bold italic">Created at {{ $todo->created_at }}</p>
                                    <p class="mt-2 text-sm font-bold italic">Updated at {{ $todo->updated_at }}</p>
                                </div>
                                <div class="flex justify-between">
                                    <form action="{{ route('todos.complete', $todo) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit"
                                            class="flex-no-shrink p-2 ml-4 mr-2 border-2 rounded hover:text-blue-500">Done</button>
                                    </form>
                                    <a href="{{ route('todos.edit', $todo) }}" class="flex-no-shrink p-2 border-2 rounded text-teal border-teal hover:text-blue-500 hover:bg-teal">Edit</a>
                                </div>

                            </div>
                            @empty
                            <div class="flex mb-4 items-center">No Todos Yet.</div>
                            @endforelse

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
