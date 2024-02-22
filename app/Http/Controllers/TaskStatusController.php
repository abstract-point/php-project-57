<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskStatusRequest;
use App\Models\TaskStatus;
use Illuminate\Http\Request;

class TaskStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $statuses = TaskStatus::all();

        return view('status.index', compact('statuses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('status.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskStatusRequest  $request)
    {
        $data = $request->input();
        $status = new TaskStatus();
        $status->fill($data);

        $status->save();

        flash('Статус успешно сохранен!')->success();

        return redirect()
            ->route('task_statuses.index')
            ->with('success', 'Status created successfully');
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
        $status = TaskStatus::findOrFail($id);
        //dd($status);
        return view('status.edit', compact('status'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TaskStatusRequest $request, string $id)
    {
        $data = $request->validated();
        $status = TaskStatus::findOrFail($id);

        $status->fill($data);
        $status->save();

        flash('Статус успешно обновлен!')->success();

        return redirect()->route('task_statuses.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}