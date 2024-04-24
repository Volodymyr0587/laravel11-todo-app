@props(['todo'])

<div class="mb-12">
    <div class="flex">
      <div class="shrink-0">

        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 0 0 1.5-.189m-1.5.189a6.01 6.01 0 0 1-1.5-.189m3.75 7.478a12.06 12.06 0 0 1-4.5 0m3.75 2.383a14.406 14.406 0 0 1-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 1 0-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
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
