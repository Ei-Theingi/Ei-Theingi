<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
class TasksController extends Controller
{
   public function displayTasks () {
        $tasks = Task::orderBy('created_at', 'asc')->get();
        return view('tasks', [
            'tasks' => $tasks
        ]);
      }
    public function addTasks(Request $request) {
      /* $validator = $request ->validated();
        $validator = Validator::make($request->all(), [
          'name' => 'required|max:255',
      ]);
    
      if ($validator->fails()) {
          return redirect('/')
              ->withInput()
              ->withErrors($validator);
      }*/
    
      $task = new Task;
      $task->name = $request->name;
      $task->save();
    
      return redirect('/');
     }
    
      public function deleteTasks($id) {
        Task::findOrFail($id)->delete();
      
        return redirect('/');
      }
}
