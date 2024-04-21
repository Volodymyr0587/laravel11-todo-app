<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Todos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <!-- component -->
                    <div class="h-100 w-full flex items-center justify-center bg-teal-lightest font-sans">
                        <div class="bg-white rounded shadow p-6 m-4 w-full lg:w-3/4 lg:max-w-lg">
                            <div class="mb-4">
                                <h1 class="text-grey-darkest">Todo List</h1>
                                {{-- <div class="flex mt-4"> --}}
                                    <form class="flex mt-4" action="{{ route('todos.store') }}" method="POST">
                                        @csrf
                                        <input type="text" name="description" id="description"
                                            class="shadow appearance-none border rounded w-full py-2 px-3 mr-4 text-grey-darker"
                                            placeholder="Add Todo">
                                        <button type="submit"
                                            class="flex-no-shrink p-2 border-2 rounded text-teal border-teal hover:text-white hover:bg-teal">Add</button>
                                    </form>
                                {{-- </div> --}}
                            </div>
                            <div>
                                @forelse ($todos as $todo)
                                <div class="flex mb-4 items-center">
                                    <p class="w-full text-grey-darkest">{{ $todo->description }}</p>
                                    <form action="{{ route('todos.complete', $todo) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit"
                                        class="flex-no-shrink p-2 ml-4 mr-2 border-2 rounded hover:text-white text-green border-green hover:bg-green">Done</button>
                                    </form>

                                    <button
                                        class="flex-no-shrink p-2 ml-2 border-2 rounded text-red border-red hover:text-white hover:bg-red">Remove</button>
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
    </div>
</x-app-layout>
