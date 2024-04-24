@props(['todo'])

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
            Completed at {{ $todo->updated_at }}
        </p>
        <div class="mt-2 flex items-center justify-between">
            <form action="{{ route('todos.destroy', $todo) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure?')"
                    class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-red-500 hover:bg-red-700 text-white shadow-md shadow-red-900/10 hover:shadow-lg hover:shadow-red-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none">
                    Delete
                </button>
            </form>
        </div>
      </div>
    </div>
  </div>
