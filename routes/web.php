<?php

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


Route::get('/tasks/{id}', function ($id) {
    $task = Task::findOrFail($id);
    return view('tasks.show', compact('task'));
})->name('tasks.show');


Route::post('/tasks', function(Request $request,) {
    dd($request->all());
})->name('tasks.store');