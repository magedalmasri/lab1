<?php

use App\Http\Controllers\TaskController;
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
    return view('welcome');
});
/*
Route::get('/about', function () {
  $name ='maged';
    return view('about', [
        'name' => $name
    ]);
});


Route::get('/about', function () {
    $name ='maged';
      return view('about')->with('name',$name);
  });


Route::get('/about', function () {
    $name = 'maged';
      return view('about', compact('name'));
    });

Route::post('/store', function () {
    $name =request('name');
      return view('about', compact('name'));
    });


Route::get('/tasks', function () {
        $tasks = [
           'first-task' => 'task1',
           'second-task' =>'task2',
           'third-task' => 'task3'
        ];
          return view('tasks', compact('tasks'));
        });

Route::get('/show/{id}', function ($id) {
    $tasks = [
        'first-task' => 'task1',
        'second-task' =>'task2',
        'third-task' => 'task3'
     ];
    $task = $tasks[$id];
              return view('show' , compact('task'));
            });
            */

Route::get('/app', function () {
            return view('layout.app');
});

Route::get('/tasks1', function () {
    return view('tasks1');
});

Route::get('/', [TaskController::class,'index']);
Route::post('/store', [TaskController::class,'store']);
