<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/profile/{id}', [App\Http\Controllers\HomeController::class, 'Profile'])->middleware('role')->name('profile');

// Profile route
Route::get('/profiles', [App\Http\Controllers\ProfileController::class, 'index'])->name('profiles.index');
Route::get('/profiles/create', [App\Http\Controllers\ProfileController::class, 'create'])->name('profiles.create');
Route::post('/profiles', [App\Http\Controllers\ProfileController::class, 'store'])->name('profiles.store');
Route::get('/profiles/{profile}/edit', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profiles.edit');
Route::put('/profiles/{profile}', [App\Http\Controllers\ProfileController::class, 'update'])->name('profiles.update');

// JobPost route
Route::get('job_posts', [App\Http\Controllers\JobPostController::class, 'index'])->name('job_posts.index');
Route::get('job_posts1', [App\Http\Controllers\JobPostController::class, 'index1'])->name('job_posts1.index');
Route::get('job_posts/create', [App\Http\Controllers\JobPostController::class, 'create'])->name('job_posts.create');
Route::post('job_posts/store', [App\Http\Controllers\JobPostController::class, 'store'])->name('job_posts.store');
Route::get('job_posts/{job_post}', [App\Http\Controllers\JobPostController::class, 'show'])->name('job_posts.show');
Route::get('job_posts1/{job_post}', [App\Http\Controllers\JobPostController::class, 'show1'])->name('job_posts1.show');
Route::get('job_posts/{job_post}/edit', [App\Http\Controllers\JobPostController::class, 'edit'])->name('job_posts.edit');
Route::put('job_posts/{job_post}', [App\Http\Controllers\JobPostController::class, 'update'])->name('job_posts.update');
Route::delete('job_posts/{job_post}', [App\Http\Controllers\JobPostController::class, 'destroy'])->name('job_posts.destroy');

// ApplyJob route
Route::group(['middleware' => 'auth'], function () {
    Route::get('/apply-job/{id}', [App\Http\Controllers\ApplyJobController::class, 'apply'])->name('apply.job');
    Route::post('/apply-job/{id}/store', [App\Http\Controllers\ApplyJobController::class, 'store'])->name('apply.store');
    Route::get('/applied-jobs/{id}', [App\Http\Controllers\ApplyJobController::class, 'appliedJobs'])->name('applied.jobs');
});