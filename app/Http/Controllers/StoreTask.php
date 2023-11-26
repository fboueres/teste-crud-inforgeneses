<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;

class StoreTask extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(TaskRequest $request)
    {
        Task::create($request->validated());

        return redirect()->route('tasks.index');
    }
}
