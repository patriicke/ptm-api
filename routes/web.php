<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\PrincipleController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NewsController;


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


Route::get('/', function () {
    return view('landing-page');
})->name('login');


Route::get('login', [AuthenticationController::class, 'index']);

Route::post('login', [AuthenticationController::class, 'login']);


// Route::get('/dashboard', function () {
//     return view('index');
// })->name('index');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('index');
Route::get('/schools', [SchoolController::class, 'index']);
Route::get('/add-school', [SchoolController::class, 'create'])->name('add-school');
Route::post('/store-school', [SchoolController::class, 'store']);
Route::get('/edit-school/{id}', [SchoolController::class, 'edit']);
Route::post('/update-school', [SchoolController::class, 'update']);

Route::get('/admins', [AdminController::class, 'index']);
Route::get('/add-admin', [AdminController::class, 'create']);
Route::post('/store-admin', [AdminController::class, 'store']);
Route::get('/edit-admin/{id}', [AdminController::class, 'edit']);
Route::post('/update-admin', [AdminController::class, 'update']);
Route::post('/change/password',[AdminController::class,'change_password']);


Route::get('/principles', [PrincipleController::class, 'index']);
Route::get('/add-principle', [PrincipleController::class, 'create'])->name('add-principle');
Route::post('/store-principle', [PrincipleController::class, 'store']);
Route::get('/edit-principle/{id}', [PrincipleController::class, 'edit']);
Route::post('/update-principle', [PrincipleController::class, 'update']);

Route::get('/teachers', [TeacherController::class, 'index']);
Route::get('/add-teacher', [TeacherController::class, 'create'])->name('add-teacher');
Route::post('/store-teacher', [TeacherController::class, 'store']);
Route::get('/edit-teacher/{id}', [TeacherController::class, 'edit'])->name('edit-teacher');
Route::post('/update-teacher', [TeacherController::class, 'update']);

Route::get('/parents', [ParentController::class, 'index']);
Route::get('/add-parent', [ParentController::class, 'create'])->name('add-parent');
Route::post('/store-parent', [ParentController::class, 'store']);
Route::get('/edit-parent/{id}', [ParentController::class, 'edit'])->name('edit-parent');
Route::post('/update-parent', [ParentController::class, 'update']);



Route::get('/students', [StudentController::class, 'index'])->name('student');
Route::get('/add-student', [StudentController::class, 'create'])->name('add-student');
Route::post('/store-student', [StudentController::class, 'store']);
Route::get('/edit-student/{id}', [StudentController::class, 'edit'])->name('edit-student');
Route::get('/student-details/{id}', [StudentController::class, 'details'])->name('student-details');
Route::post('/update-student', [StudentController::class, 'update']);

Route::get('/news', [NewsController::class, 'index']);
Route::get('/add-news', [NewsController::class, 'create']);
Route::post('/store-news', [NewsController::class, 'store']);
Route::get('/edit-news/{id}', [NewsController::class, 'edit']);
Route::get('/news-details/{id}', [NewsController::class, 'details']);
Route::post('/update-news', [NewsController::class, 'update']);
Route::post('/destroy-news', [NewsController::class, 'destroy']);







// Route::get('/home', function () {
//     return view('index');
// });







Route::get('/subjects', function () {
    return view('subjects');
})->name('subjects');

Route::get('/add-subject', function () {
    return view('add-subject');
})->name('add-subject');

Route::get('/edit-subject', function () {
    return view('edit-subject');
})->name('edit-subject');





Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/forgot-password', function () {
    return view('forgot-password');
})->name('forgot-password');

Route::get('/change-password', function () {
    return view('change-password');
})->name('change-password');

Route::get('/error-404', function () {
    return view('error-404');
})->name('error-404');

Route::get('/blank-page', function () {
    return view('blank-page');
})->name('blank-page');


Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/student-dashboard', function () {
    return view('student-dashboard');
})->name('student-dashboard');
// Route::get('/student-details', function () {
//     return view('student-details');
// })->name('student-details');

Route::get('/teacher-details', function () {
    return view('teacher-details');
})->name('teacher-details');

Route::get('/teacher-dashboard', function () {
    return view('teacher-dashboard');
})->name('teacher-dashboard');

Route::get('/principle-dashboard', function () {

    return view('principle-dashboard');
})->name('principle-dashboard');

// Route::get('/news', function () {
//     return view('news.index');
// })->name('news');
// Route::get('/news', function () {
//     return view('news.index');
// })->name('news');
// Route::get('/add-news', function () {
//     return view('news.create');
// });