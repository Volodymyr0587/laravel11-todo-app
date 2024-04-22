@props(['todo'])

<div class="relative flex flex-col mt-6 text-gray-700 bg-white shadow-md bg-clip-border rounded-xl w-96">
    <div class="p-6">
        <h5
            class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
            {{ $todo->description }}
        </h5>
        <p class="mt-2 text-sm font-bold italic">Completed at {{ $todo->updated_at }}</p>
    </div>
    <div class="flex items-center gap-2 p-6 pt-0">
        <form action="{{ route('todos.destroy', $todo) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Are you sure?')"
                class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-red-500 hover:bg-red-700 text-white shadow-md shadow-red-900/10 hover:shadow-lg hover:shadow-red-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none">Delete</button>
        </form>
    </div>
</div>
