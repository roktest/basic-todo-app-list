<?php

use App\Http\Controllers\Error404Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

class Task
{
  public function __construct(
    public int $id,
    public string $title,
    public string $description,
    public ?string $long_description,
    public bool $completed,
    public string $created_at,
    public string $updated_at
  ) {
  }
}

$tasks = [
  new Task(
    1,
    'Buy groceries',
    'Task 1 description',
    'Task 1 long description',
    false,
    '2023-03-01 12:00:00',
    '2023-03-01 12:00:00'
  ),
  new Task(
    2,
    'Sell old stuff',
    'Task 2 description',
    null,
    false,
    '2023-03-02 12:00:00',
    '2023-03-02 12:00:00'
  ),
  new Task(
    3,
    'Learn programming',
    'Task 3 description',
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    true,
    '2023-03-03 12:00:00',
    '2023-03-03 12:00:00'
  ),
  new Task(
    4,
    'Take dogs for a walk',
    'Task 4 description',
    null,
    false,
    '2023-03-04 12:00:00',
    '2023-03-04 12:00:00'
  ),
];

Route::get('/task', function () use($tasks) {
    return view('main', ['tasks' => $tasks]);
})->name('main');

Route::get('/task/{id}', function ($id) use($tasks) {
    $task = collect($tasks)->firstWhere('id', $id);
    if (!$task) {
        return (new Error404Controller)->error404();
    }
    return view('taskdetails.show', ['task' => $task]);
})->name('taskdetails.show');

Route::get('/about', function () {
    return view('about.index');
})->name('about.index');

Route::get('/greet/{name}', function ($name) {
    return view('greet.index', ['name' => $name]);
})->name('greet.index');

Route::fallback([Error404Controller::class, 'error404'])->name('error.404');
