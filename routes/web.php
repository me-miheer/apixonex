<?php

use App\Http\Controllers\AuthUser;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('blades.home');
})->name('home');

Route::get('/login', function () {
    if(!Auth::check()){
        return view("blades.login");
    }else{
        return redirect()->back();
    }
})->name('login');

Route::post('/loginme', [AuthUser::class,'loginme'])->name('loginme');

Route::get('/signup', function () {
    return view('blades.signup');
})->name('signup');

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function(){
        return view('blades.dashboard');
    })->name('dashboard');

});