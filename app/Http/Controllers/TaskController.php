<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function all()
    {
        $tasks = Task::all();

        return response()->json($tasks);
    }
}