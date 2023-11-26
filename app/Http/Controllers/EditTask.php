<?php

namespace App\Http\Controllers;

use App\Models\Task;

class EditTask extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Task $task)
    {
        return view('pages.tasks.edit', compact('task'));
    }
}
