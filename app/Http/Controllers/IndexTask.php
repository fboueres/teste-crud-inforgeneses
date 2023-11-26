<?php

namespace App\Http\Controllers;

use App\Models\Task;

class IndexTask extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $tasks = Task::all();

        return view('pages.tasks.index', compact('tasks'));
    }
}
