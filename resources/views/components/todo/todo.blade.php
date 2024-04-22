@props(['todo'])

{{-- <div class="relative flex flex-col mt-6 text-gray-700 bg-white shadow-md bg-clip-border rounded-xl w-96">
    <div class="p-6">
        <h5
            class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
            {{ $todo->description }}
        </h5>
        <p class="mt-2 text-sm font-bold italic">Created at {{ $todo->created_at }}</p>
        <p class="mt-2 text-sm font-bold italic">Updated at {{ $todo->updated_at }}</p>
    </div>
    <div class="flex items-center gap-2 p-6 pt-0">
        <form action="{{ route('todos.complete', $todo) }}" method="POST">
            @csrf
            @method('PUT')
            <button type="submit"
                class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-green-500 hover:bg-green-700 text-white shadow-md shadow-green-900/10 hover:shadow-lg hover:shadow-green-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none">
                Done
            </button>
        </form>
        <a href="{{ route('todos.edit', $todo) }}"
            class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-blue-500 hover:bg-blue-700 text-white shadow-md shadow-blue-900/10 hover:shadow-lg hover:shadow-blue-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none">Edit</a>
    </div>
</div> --}}

<div class="mb-12">
    <div class="flex">
      <div class="shrink-0">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
          stroke="currentColor" class="mr-3 h-5 w-5 text-success">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
      </div>
      <div class="ml-2 grow">
        <p class="mb-1 font-bold">{{ $todo->description }}</p>
        <p class="text-neutral-500 text-sm">
            Created at {{ $todo->created_at }}
        </p>
        <p class="text-neutral-500 text-sm">
            Updated at {{ $todo->updated_at }}
        </p>
        <div class="mt-2 flex items-center justify-between">
            <form action="{{ route('todos.complete', $todo) }}" method="POST">
                @csrf
                @method('PUT')
                <button type="submit"
                    class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-green-500 hover:bg-green-700 text-white shadow-md shadow-green-900/10 hover:shadow-lg hover:shadow-green-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none">
                    Done
                </button>
            </form>
            <a href="{{ route('todos.edit', $todo) }}"
                class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-blue-500 hover:bg-blue-700 text-white shadow-md shadow-blue-900/10 hover:shadow-lg hover:shadow-blue-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none">Edit</a>
        </div>
      </div>
    </div>
  </div>
