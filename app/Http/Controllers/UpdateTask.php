<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;

class UpdateTask extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(TaskRequest $request, Task $task)
    {
        $task->update($request->validated());

        return redirect()->route('tasks.index');
    }
}
