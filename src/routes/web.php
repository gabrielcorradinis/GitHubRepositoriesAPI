<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\GitHubController;

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/auth/redirect', [GitHubController::class, 'redirectToProvider']);
Route::get('/auth/callback', [GitHubController::class, 'handleProviderCallback']);
Route::get('/dashboard', [GitHubController::class, 'listRepos']);
Route::get('/commits/{name}', [GitHubController::class, 'listCommits'])->name('commits');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

});
