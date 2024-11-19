<?php

namespace App\Http\Controllers;

use App\Models\TaskList;
use Illuminate\Http\Request;

class TaskListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('public.pages.lists.index');
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
        $list = $request->validate([
            'name' => 'required',
            'description' => 'nullable',
        ]);

        TaskList::create($list);

        return back()->with('status', 'The List added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(TaskList $taskList)
    {
        return view('public.pages.lists.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TaskList $taskList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TaskList $taskList)
    {
        $list = $request->validate([
            'name' => 'required',
            'description' => 'nullable',
        ]);

        $taskList->update($list);

        return back()->with('status', 'The List updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TaskList $taskList)
    {
        $taskList->delete();
        return back()->with('status', 'The List deleted successfully.');
    }
}
