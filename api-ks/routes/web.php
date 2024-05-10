<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\Admin_MainController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\menu\MenuController;
use App\Http\Controllers\register\RegisterController;
// use App\Http\Controllers\test;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, '__invoke'])->name('init');

Route::controller(HomeController::class)->group(function () {
    Route::get('/precio', [MenuController::class, 'menu_price'])->name('menu_price');
    Route::get('/publicar', [MenuController::class, 'menu_publicar'])->name('menu_publicar');
    Route::get('/contacto', [MenuController::class, 'menu_contacto'])->name('menu_contacto');
    Route::get('/area-legal', [MenuController::class, 'menu_legal'])->name('menu_legal');
});

// resgistrar usuario
Route::get('/sign-up', [RegisterController::class, 'menu_sign_up'])->name('menu_sign_up');
Route::post('/save_usuario', [RegisterController::class, 'processRegistration'])->name('save_usario');
// end resgistrar usuario

// logear usuario
// Route::get('/login-user', [RegisterController::class, 'menu_login'])->name('menu_login');
// Route::post('/login-user', [RegisterController::class, 'menu_login'])->name('menu_login');
// end logear usuario


// Route::namespace('register')->group(function () {
//     Route::get('login',[RegisterController::class,'login'])->name('login');
//     Route::post('login',[RegisterController::class,'processLogin']);
//     Route::get('register',[RegisterController::class,'registration'])->name('register');
//     Route::post('register',[RegisterController::class,'processRegistration']);
// });

// Route::post('logout',[RegisterController::class,'logout'])
//     ->name('logout')
//     ->middleware('auth');



// Route::get('/dashboard', [Admin_MainController::class, 'admin_main'])->name('admin_main');
Route::get('/dashboard', [AdminController::class, 'admin_user'])->name('admin_main')->middleware('auth');

Route::get('/login-user', function (){ 
    return view('home_web.menu.login');
})->name('menu_login');











// Route::controller(initController::class)->group(function () {
//     Route::get('/create', [CustomerController::class, 'create'])->name('create');
//     Route::post('/save', [CustomerController::class, 'save'])->name('save');
// });

// Route::controller(CustomerController::class)->group(function () {
//     Route::get('/create', [CustomerController::class, 'create'])->name('create');
//     Route::post('/save', [CustomerController::class, 'save'])->name('save');
// });

// Route::get('/age/{id}', [AppController::class, 'index'])->name('age');
// Route::get('/customers', [AppController::class, 'all_customer'])->name('all_customers');
// Route::get('/customer/edit/{id}', [AppController::class, 'edit_customer'])->name('edit_customer');
// Route::put('/customer/edit/{id}', [AppController::class, 'update_customer_age'])->name('customer_up');

// Route::delete('/customer/edit/{id}', [AppController::class, 'delete'])->name('C_A.delete');

// Route::get('/customer/{id}', [AppController::class, 'view_customer'])->name('view_customer');