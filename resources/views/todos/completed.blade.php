<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Completed Todos') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 text-gray-900">

                <!-- Section: Design Block -->
              <section class="mb-32">
                <div class="flex justify-center">
                  <div class="max-w-[700px] text-center">


                  </div>
                </div>

                <div class="mt-8 grid gap-x-6 md:grid-cols-2 lg:grid-cols-4 xl:gap-x-12">
                    @forelse ($todos as $todo)
                        <x-todo.completed :todo="$todo" />
                    @empty
                    <div class="flex mb-4 items-center">No Completed Todos Yet.</div>
                    @endforelse
                </div>
                {{ $todos->links() }}
              </section>

            </div>
        </div>
    </div>
</x-app-layout>

