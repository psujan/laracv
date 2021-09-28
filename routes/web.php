<?php

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Frontend Crud routes
Route::group(['middleware' => 'auth'], function () {    
    Route::post('workExperience',[App\Http\Controllers\Front\ExperienceController::class, 'store'])->name('workExperience.store');
    Route::post('education',[App\Http\Controllers\Front\EducationController::class, 'store'])->name('education.store');
    Route::post('skill',[App\Http\Controllers\Front\SkillController::class, 'store'])->name('skill.store');
    Route::post('generalInfo',[App\Http\Controllers\Front\UserInformationController::class, 'store'])->name('userInfo.store');
    Route::get('myProfile',[App\Http\Controllers\Front\ProfileController::class,'index'])->name('user.profile');
    Route::get('myProfile/edit',[App\Http\Controllers\Front\ProfileController::class,'edit'])->name('user.profile.edit');
});
