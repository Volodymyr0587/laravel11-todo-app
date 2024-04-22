<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Completed Todos') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 text-gray-900">

                <!-- component -->
                <div class="h-100 w-full flex items-center justify-center bg-teal-lightest font-sans">
                    <div class=" p-6 m-4 w-full lg:w-3/4 lg:max-w-lg">
                        <div>
                            @forelse ($todos as $todo)
                            <div class="flex items-center bg-white rounded shadow p-6 m-4">
                                <p class="w-full text-grey-darkest">{{ $todo->description }}</p>
                                <p class="text-sm font-bold italic">Completed at {{ $todo->updated_at }}</p>
                                <form action="{{ route('todos.destroy', $todo) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure?')"
                                        class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-red-500 hover:bg-red-700 text-white shadow-md shadow-red-900/10 hover:shadow-lg hover:shadow-red-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none">Delete</button>
                                </form>
                            </div>
                            @empty
                            <div class="flex mb-4 items-center">No Completed Todos Yet.</div>
                            @endforelse

                        </div>
                        <div class="mt-4">
                            {{ $todos->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
