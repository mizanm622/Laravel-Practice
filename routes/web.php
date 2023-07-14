<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\AdminController::class, 'admin'])->name('home.route');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('homecontent.route');
Route::get('/add-category', [App\Http\Controllers\CategoryController::class, 'addCategory'])->name('homecontent.route');
Route::post('/save-category', [App\Http\Controllers\CategoryController::class, 'saveCategory'])->name('homecontent.route');
Route::get('/manage-category', [App\Http\Controllers\CategoryController::class, 'manageCategory'])->name('homecontent.route');

Route::get('/edit-category/{edit_id}', [App\Http\Controllers\CategoryController::class, 'editCategory'])->name('homecontent.route');

Route::post('/update-category', [App\Http\Controllers\CategoryController::class, 'updateCategory'])->name('homecontent.route');

Route::get('/delete-category/{id}', [App\Http\Controllers\CategoryController::class, 'deleteCategory'])->name('homecontent.route');



Route::get('/add-product', [App\Http\Controllers\ProductController::class, 'addProduct'])->name('homecontent.route');

Route::post('/save-product',[App\Http\Controllers\ProductController::class, 'saveProduct'])->name('homecontent.route');

Route::get('/manage-product', [App\Http\Controllers\ProductController::class, 'manageProduct'])->name('homecontent.route');

Route::get('/edit-product/{p_id}',[App\Http\Controllers\ProductController::class, 'editProduct'])->name('homecontent.route');

Route::post('/update-product',[App\Http\Controllers\ProductController::class, 'updateProduct'])->name('homecontent.route');

Route::get('/delete-product/{p_id}',[App\Http\Controllers\ProductController::class, 'deleteProduct'])->name('homecontent.route');

Route::get('/view-product/{p_id}',[App\Http\Controllers\ProductController::class, 'viewProduct'])->name('homecontent.route');


//Resource Routing

Route::resource('course',CourseController::class)->middleware('course');

