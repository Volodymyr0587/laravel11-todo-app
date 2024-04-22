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
                                    class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-yellow-500 hover:bg-yellow-700 text-white shadow-md shadow-yellow-900/10 hover:shadow-lg hover:shadow-yellow-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none">Add</button>
                            </form>

                            @error('description')
                            <div class="mt-4 text-sm text-red-500">{{ $message }}</div>
                            @enderror

                        </div>
                        <div>
                            @forelse ($todos as $todo)
                                <x-todo.todo :todo="$todo" />
                            @empty
                                <div class="flex mb-4 items-center">No Todos Yet.</div>
                            @endforelse
                        </div>
                        <div>
                            {{ $todos->links() }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
