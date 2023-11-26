<?php

namespace App\Http\Controllers;

use App\Models\Task;

class DeleteTask extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index');
    }
}
