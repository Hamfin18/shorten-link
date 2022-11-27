<?php

use App\Http\Controllers\Dashboard;
use App\Models\LinkList;
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

Route::get('/',[Dashboard::class,'index']);
Route::get('/about',function(){
    return view('about.index');
});

Route::get('/{id}',[Dashboard::class,'linked']);


Route::get('/greeting/now', function () {
    return LinkList::get();
});

