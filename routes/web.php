<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\StudentsController;
use App\Http\Middleware\CheckLogin;
use Illuminate\Support\Facades\App;
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

// Route -> Login
Route::get('/login', AuthController::class . '@loginView');

Route::redirect('/', 'ar/app');

// Route -> App (Students)
Route::middleware([CheckLogin::class])->prefix('{locale}/app')->group(function () {

    $locale = request()->route('locale');

    // ضبط اللغة في التطبيق
    App::setLocale('en');

    // Route -> Index
    Route::get('/', [StudentsController::class, 'indexView'])->name('index');
    Route::redirect('/index', '/');

    // Route -> Exams
    Route::get('/exams', [StudentsController::class, 'examsView'])->name('exams');
    Route::get('/exams/exam', [ExamController::class, 'examView'])->name('exam');

    // Route -> Books
    Route::get('/books', [StudentsController::class, 'booksView'])->name('books');

    // Route -> Exercises
    Route::get('/exercises', [StudentsController::class, 'exercisesView'])->name('exercises');
    Route::get('/exercises/{exercise}', [StudentsController::class, 'exerciseView'])->name('exercise');
    Route::get('/exercises/{exercise}/{ex_module?}', [ExerciseController::class, 'exerciseViewModule'])->name('exModule');
});
