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

use App\Http\Controllers\ControllerAdmin;
use App\Http\Controllers\ControllerHome;
//route home
Route::get('/admin', [ControllerAdmin::class, 'index'])->name('admin');
Route::get('/admin/quan-ly-ve', [ControllerAdmin::class, 've']);
Route::get('/admin/lich-su-thanh-toan', [ControllerAdmin::class, 'thanhtoan']);
Route::get('/admin/danh-sach-khach-hang', [ControllerAdmin::class, 'users']);
Route::get('/admin/danh-sach-su-kien', [ControllerAdmin::class, 'sukien']);


//route nguoi dung
Route::get('/', [ControllerHome::class, 'index'])->name('home');
Route::get('/lien-he', [ControllerHome::class, 'lienhe']);
Route::get('/su-kien', [ControllerHome::class, 'sukien']);
Route::get('/thanh-toan', [ControllerHome::class, 'thanhtoan']);