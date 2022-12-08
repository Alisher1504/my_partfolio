<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Admin\AdminCantroller;

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
//     return view('frontend.index');
// });

Route::get('/', [FrontendController::class, 'index'])->name('/');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('admin')->middleware('auth', 'is_admin')->group(function() {

    Route::get('/dashboard', [AdminCantroller::class, 'index'])->name('dashboard');
    Route::get('/category', [AdminCantroller::class, 'category'])->name('category');
    Route::post('create', [AdminCantroller::class, 'create_category'])->name('creates');
    Route::get('editcategory/{id}', [AdminCantroller::class, 'edit_category'])->name('editcategory');
    Route::put('updatecategory/{id}', [AdminCantroller::class, 'update_category'])->name('updatecategory');
    Route::get('deletecategory/{id}', [AdminCantroller::class, 'delete_category'])->name('deletecategory');

    Route::get('/sidebar', [AdminCantroller::class, 'sidebar'])->name('sidebar');
    Route::post('create-sidebar', [AdminCantroller::class, 'create_sidebar'])->name('create-sidebar');
    Route::get('editsidebar/{id}', [AdminCantroller::class, 'edit_sidebar'])->name('editsidebar');
    Route::put('updatesidebar/{id}', [AdminCantroller::class, 'update_sidebar'])->name('updatesidebar');
    Route::get('deletesidebar/{id}', [AdminCantroller::class, 'delete_sidebar'])->name('deletesidebar');

    Route::get('/about', [AdminCantroller::class, 'about'])->name('about');
    Route::post('aboutcreates', [AdminCantroller::class, 'create_about'])->name('aboutcreates');
    Route::get('editabout/{id}', [AdminCantroller::class, 'edit_about'])->name('editabout');
    Route::put('aboutupdate/{id}', [AdminCantroller::class, 'update_about'])->name('aboutupdate');
    Route::get('aboutdelete/{id}', [AdminCantroller::class, 'delete_about'])->name('aboutdelete');

    Route::get('/progres', [AdminCantroller::class, 'progres'])->name('progres');
    Route::post('progrescreates', [AdminCantroller::class, 'prog_creates'])->name('progrescreates');
    Route::get('editprog/{id}', [AdminCantroller::class, 'prog_edit'])->name('editprog');
    Route::put('progresupdate/{id}', [AdminCantroller::class, 'progres_update'])->name('progresupdate');
    Route::get('deleteprog/{id}', [AdminCantroller::class, 'delete_prog'])->name('deleteprog');


});
