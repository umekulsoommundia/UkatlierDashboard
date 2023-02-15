<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\adminControl;
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
    return view('welcome');
});

Route::get('profile', function () {
    return view('admin.profile');
});

Route::get('admin',[adminControl::class,'login']);

Route::post('loginPost',[adminControl::class,'loginPostfun']);

Route::get('register',[adminControl::class,'register']);



route::post('userRegister',[adminControl::class,'userRegister']);



route::get('addProduct',[adminControl::class,'addProduct']);


route::get('logout',[adminControl::class,'logout']);


route::get("category",[adminControl::class,'category']);

route::post("categoryPost",[adminControl::class,'categoryPost']);

route::get("subcategory",[adminControl::class,"subcategory"]);

route::post("subcategoryPost",[adminControl::class,"subcategoryPost"]);

route::get("product",[adminControl::class,"product"]);

route::post('subCategoryAjax',[adminControl::class,"subCategoryAjax"]);

