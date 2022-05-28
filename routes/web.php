<?php

use App\Http\Controllers\blogConntroller;
use App\Http\Controllers\commentConntroller;
use App\Models\blog;
use App\Models\comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

Route::get('/', [blogConntroller::class, "index"]);
Route::get('addBlogs', [blogConntroller::class, "create"]);
Route::post('addBlogs', [blogConntroller::class, 'store']);
Route::get('Delete', [blogConntroller::class, "destroy"]);
Route::get('Edit', [blogConntroller::class, 'show']);
Route::post('Edit', [blogConntroller::class, 'edit']);

Route::get('Comments', [commentConntroller::class, "index"]);
Route::post('AddComment', [commentConntroller::class, "create"]);