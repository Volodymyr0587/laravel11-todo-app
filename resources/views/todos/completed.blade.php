<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Completed Todos') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 text-gray-900">

                <!-- component -->
                <div class="h-100 w-full flex items-center justify-center bg-teal-lightest font-sans">
                    <div class="p-6 m-4 w-full lg:w-3/4 lg:max-w-lg">

                        <div>
                            @forelse ($todos as $todo)
                                <x-todo.completed :todo="$todo" />
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
