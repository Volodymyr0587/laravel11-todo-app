<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Services\CatsFactsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class TodoController extends Controller
{

    public function __construct(protected CatsFactsService $catsFacts)
    {

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = auth()->user()->todos()->where('completed', false)->orderBy('created_at', 'desc')->paginate(8);
        $catsFacts = $this->catsFacts->getRandomCatFact();

        return view('todos.index', compact('todos', 'catsFacts'));
    }

    public function completed()
    {
        $todos = auth()->user()->todos()->where('completed', true)->orderBy('updated_at', 'desc')->paginate(8);
        return view('todos.completed', compact('todos'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //% validate
        $attributes = $request->validate([
            'description' => ['required', 'min:2', 'max:255'],
        ]);

        auth()->user()->todos()->create($attributes);

        toastr()->info('Todo has been created successfully!', 'Congrats');

        return to_route('todos.index');
    }

    public function complete(Todo $todo)
    {
        Gate::authorize('delete-todo', $todo);

        $todo->completed = true;
        $todo->save();

        toastr()->success('Todo has been completed successfully!', 'Congrats');

        return to_route('todos.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo)
    {
        Gate::authorize('delete-todo', $todo);

        return view('todos.edit', compact('todo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {
        Gate::authorize('delete-todo', $todo);
        //% validate
        $attributes = $request->validate([
            'description' => ['required', 'min:2', 'max:255'],
        ]);

        $todo->update($attributes);

        toastr()->info('Todo has been updated successfully!', 'Congrats');

        return to_route('todos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        Gate::authorize('delete-todo', $todo);

        $todo->delete();

        toastr()->success('Todo has been deleted successfully!', 'Congrats');

        return to_route('todos.completed');
    }
}
