<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Todos') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 text-gray-900">

                <div class="flex items-center gap-x-4 px-2 mb-6 font-bold uppercase text-primary dark:text-primary-400">
                        <img src="{{ asset('storage/images/cat.gif') }}">
                        <h2 class="mb-6 text-sm font-bold">{{ $catsFacts }}</h2>
                </div>

                <!-- Section: Design Block -->
              <section class="mb-32">
                <div class="flex justify-center">
                  <div class="max-w-[700px] text-center">

                    <form class="mb-2 flex flex-row" action="{{ route('todos.store') }}" method="POST">
                        @csrf
                        <input type="text" name="description" id="description"
                            class="shadow appearance-none border rounded w-full py-2 px-3 mr-4 text-grey-darker"
                            placeholder="Add Todo" value="{{ old('description') }}">
                        <button type="submit"
                            class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-yellow-500 hover:bg-yellow-700 text-white shadow-md shadow-yellow-900/10 hover:shadow-lg hover:shadow-yellow-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none">Add</button>
                    </form>

                    @error('description')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                  </div>
                </div>

                <div class="mt-8 grid gap-x-6 md:grid-cols-2 lg:grid-cols-4 xl:gap-x-12">
                    @forelse ($todos as $todo)
                        <x-todo.todo :todo="$todo" />
                    @empty
                    <div class="flex mb-4 items-center">No Todos Yet.</div>
                    @endforelse
                </div>
                {{ $todos->links() }}
              </section>

            </div>
        </div>
    </div>
</x-app-layout>
