<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Gate::authorize('isAdmin');

        $todos = Todo::with('user')->paginate(5);
        return view('admin.todos', ['todos' => $todos]);
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
        //
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
    public function edit(string $id)
    {
        Gate::authorize('isAdmin');

        $todo = Todo::findOrFail($id);
        return view('admin.todo-detail', ['todo' => $todo]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Gate::authorize('isAdmin');

        // Validate incoming request data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'is_completed' => 'required|boolean',
        ]);

        $todo = Todo::findOrFail($id);

        $todo->title = $validated['title'];
        $todo->is_completed = $validated['is_completed'];
        $todo->save();

        return redirect()->route('admin.todos')->with('success', 'Todo updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Gate::authorize('isAdmin');

        $todo = Todo::findOrFail($id);
        $todo->delete();

        return redirect()->route('admin.todos')->with('success', 'Todo updated successfully!');
    }
}
