<?php

use App\Models\Course;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\LessonController;
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
  $user=auth()->user();
        $cts = Course::get();
  return view('welcome')->with('cts', $cts);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
  $user = auth()->user();
  if ($user->hasRole('instructeur')) {
    return view('instructeur/dashboard');
  }
  if ($user->hasRole('admin')) {
    return view('dash');
  }
  if ($user->hasRole('etudiant')) {
    return view('welcome');
  }
})->name('dashboard');


Route::resource('categories', CategorieController::class);
Route::resource('sections', SectionController::class);
Route::resource('lessons', LessonController::class);
Route::resource('students', StudentController::class);
Route::resource('courses', CourseController::class);
Route::get('admin/courses', function () {
  return view('admin/courses');
});



Route::get('admin/admin_revenue', function () {
  return view('admin/admin_revenue');
});

Route::get('admin/message', function () {
  return view('admin/message');
});

Route::get('Instructeur/dashboard', function () {
  return view('Instructeur/dashboard');
});

Route::get('Instructeur/add_category', function () {
  return view('Instructeur/add_category');
});

Route::get('Instructeur/courses', function () {
  return view('Instructeur/courses');
});

Route::get('Instructeur/add_course', function () {
  return view('Instructeur/add_course');
});

Route::get('Instructeur/instructor_revenue', function () {
  return view('Instructeur/instructor_revenue');
});

Route::get('Instructeur/payment_settings', function () {
  return view('Instructeur/payment_settings');
});

Route::get('Etudiant/my_courses', function () {
  return view('Etudiant/my_courses');
});

Route::get('Etudiant/my_wishlist', function () {
  return view('Etudiant/my_wishlist');
});

Route::get('Etudiant/my_messages', function () {
  return view('Etudiant/my_messages');
});

Route::get('Etudiant/user_profile', function () {
  return view('Etudiant/user_profile');
});

Route::get('Etudiant/user_profile', function () {
  return view('/');
});
Route::get('home/cours', function () {
  return view('coursPage');
});

Route::get('home/cart', function () {
  return view('addtocart');
});
