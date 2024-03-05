<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todos;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todos::all();
        return view('todos.index', compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'todo' => 'required',
            'description' => 'required',
            'monetary_value' => 'nullable|numeric',
            'success_probability' => 'nullable|in:High,Medium,Low',
            'priority' => 'required|in:High,Medium,Low',
        ]);

        Todos::create($validatedData);

        return redirect()->route('todo')->with('success', 'Todo item created successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $todos = Todos::find($id);
        return view('todos.edit', compact('todos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $todo = Todos::find($id);
        $validatedData = $request->validate([
            'todo' => 'required',
            'description' => 'required',
            'monetary_value' => 'nullable|numeric',
            'success_probability' => 'nullable|numeric',
            'priority' => 'required|in:High,Medium,Low',
        ]);

        $todo->update($validatedData);

        return redirect()->to('/')->with('success', 'Todo item updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $todo = Todos::find($id);
        $todo->delete();

        return redirect()->route('todo')->with('success', 'Todo item deleted successfully!');
    }
}
