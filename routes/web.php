<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

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
    return view('mainPage', ['jobscount' => Job::count()]);
});
Route::get('/jobs', [JobController::class, 'search']);

Route::get('/job/{job}', [JobController::class, 'show']);

// Route::get('/jobs/job', function () {
//     return view('job');
// });

Route::get('/login', function () {
    return view('login');
});
Route::get('/employer', function () {
    return view('employer');
});
