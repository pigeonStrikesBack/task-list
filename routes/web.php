<?php

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use App\Models\Task;
use Illuminate\Http\Request;

// Class Task {
//     public function __construct(
//         public int $id,
//         public string $title,
//         public string $description,
//         public ?string $long_description,
//         public bool $completed,
//         public string $created_at,
//         public string $updated_at,
//     ) {

//     }
// }

Route::get('/', fn() => redirect()->route('tasks.index'));

Route::get('/tasks', function () {
    $tasks = Task::all();
    return view('index', [
        'tasks' => Task::latest()->get()
    ]);
})->name('tasks.index');

Route::view('/tasks/create', 'create');

Route::get('/tasks/{id}', function ($id) {
    return view('show', [
        'task' => Task::findOrFail($id)
    ]);
})->name('tasks.show');

Route::post('/tasks', function (Request $request) {
    dd($request->all());
})->name('tasks.store');

// Route::get('/', function () {
//     return view('index', [
//         'name' => 'Mauro',
//         'XSS' => '<b>Safe against cross site-scripting</b>',
//     ]);
// });

// Route::get('/xxx', fn() => ''
//     . '<p>Hello, World!</p>'
//     . '<p><a href="/">Root</a></p>'
// )->name('hello');

// Route::get('/hallo', fn() => redirect()->route('hello') );

// Route::get('/greet/{name}', fn($name) => ""
//     . "<p>Hello $name!</p>"
//     . "</p><a href=\"/\">Root</a></p>"
// );

Route::fallback(fn() => "The missing you were thing is finding");
