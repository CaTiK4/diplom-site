<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DisabilityController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\OtherJobController;
use App\Http\Controllers\NotJobController;
use App\Http\Controllers\ContinueStudyArmyController;
use App\Http\Controllers\PracticeController;

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
    return view('Authorization/Authorization');
})->name('Authorization');


Route::resource('/Info-Students', StudentController::class);

Route::get('/Information-About-Disability', [DisabilityController::class, 'index'])->name('Information-About-Disability');

Route::resource('Job', JobController::class);
Route::resource('Other-Job', OtherJobController::class);
Route::resource('Not-Job', NotJobController::class);
Route::resource('Continue-Study-Army', ContinueStudyArmyController::class);
Route::resource('Practice', PracticeController::class);

Route::get('/Resume', function () {
    return view('Resume/Resume');
})->name('Resume');


