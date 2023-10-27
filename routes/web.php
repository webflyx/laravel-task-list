<?php

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('tasks.index');
});


Route::get('/tasks', function () {
    $tasks = Task::latest()->get();
    return view('tasks.index', compact('tasks'));
})->name('tasks.index');


Route::view('/tasks/create', 'tasks.create')->name('tasks.create');


Route::get('/tasks/{task}/edit', function (Task $task) {
    return view('tasks.edit', compact('task'));
})->name('tasks.edit');


Route::get('/tasks/{task}', function (Task $task) {
    return view('tasks.show', compact('task'));
})->name('tasks.show');


Route::post('/tasks', function(TaskRequest $request) 
{
    $task = Task::create( $request->validated() );
    return redirect()->route('tasks.show', $task->id)->with('success','Task successfully created!');
})->name('tasks.store');


Route::put('/tasks/{task}', function(Task $task, TaskRequest $request) {
    $task->update( $request->validated() );
    return redirect()->route('tasks.show', $task)->with('success','Task successfully updated!');
})->name('tasks.update');


Route::delete('/tasks/{task}/delete', function(Task $task) {
    $task->delete();
    return redirect()->route('tasks.index')->with('success', 'Tasks successfully deleted!');
})->name('tasks.destroy');