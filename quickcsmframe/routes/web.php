<?php

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;

Route::get("/",[TasksController::class,'displayTasks']);
Route::post("/task",[TasksController::class,'addTasks']);
Route::delete("/task/{id}",[TasksController::class,'deleteTasks']);

