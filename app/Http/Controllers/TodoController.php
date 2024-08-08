<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $todos = Todo::where('user_id', $request->user()->id)->get();
        return view('dashboard', ['todos' => $todos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('todo-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $user = $request->user();

        $todo = new Todo();
        $todo->title = $request->title;
        $user->todos()->save($todo);

        return redirect()->route('dashboard')->with('status', 'Todo created successfully!');

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
        $todo = Todo::find($id);
        return view('todo-edit', ['todo' => $todo]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        // Validate the incoming request
        $request->validate([
            'title' => 'required|string|max:255',
        ]);


        $todo = Todo::find($id);
        $todo->title = $request->title;
        $todo->save();

        return redirect()->route('dashboard')->with('status', 'Todo updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Todo::find($id)->delete();

        return redirect()->route('dashboard')->with('status', 'Todo deleted successfully!');
    }
}
