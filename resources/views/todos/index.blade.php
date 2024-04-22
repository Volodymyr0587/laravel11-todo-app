<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Todos') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 text-gray-900">


                <!-- Section: Design Block -->
  <section class="mb-32">
    <div class="flex justify-center">
      <div class="max-w-[700px] text-center">
        <p class="mb-6 font-bold uppercase text-primary dark:text-primary-400">
          Features
        </p>
        <h2 class="mb-6 text-3xl font-bold">Why is it so great?</h2>


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
  <!-- Section: Design Block -->


                <!-- component -->
                {{-- <div class="h-100 w-full flex items-center justify-center bg-teal-lightest font-sans">
                    <div class="p-6 m-4 w-full lg:w-3/4 lg:max-w-lg">
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
                        <div class="mt-4">
                            {{ $todos->links() }}
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>
</x-app-layout>
