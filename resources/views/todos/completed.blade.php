<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Completed Todos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 text-gray-900">

                <!-- component -->
                <div class="h-100 w-full flex items-center justify-center bg-teal-lightest font-sans">
                    <div class="bg-white rounded shadow p-6 m-4 w-full lg:w-3/4 lg:max-w-lg">
                        <div>
                            @forelse ($todos as $todo)
                            <div class="flex mb-4 items-center">
                                <p class="w-full text-grey-darkest">{{ $todo->description }}</p>
                                <form action="{{ route('todos.destroy', $todo) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure?')"
                                        class="flex-no-shrink p-2 ml-4 mr-2 border-2 rounded hover:text-red-700 text-red-500 border-green hover:bg-green">Delete</button>
                                </form>
                            </div>
                            @empty
                            <div class="flex mb-4 items-center">No Completed Todos Yet.</div>
                            @endforelse

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
