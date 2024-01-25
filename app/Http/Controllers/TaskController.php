<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request) {
        return response()->json(Task::all());
    }

    // https://youtu.be/9FJeoq5z1_Y?si=EVRhtXl_OUr5CeDY 
}
