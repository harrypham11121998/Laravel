<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\TrainersController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\SearchCategory;


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


Route::get('/companies', [CompaniesController::class, 'companies']);
Route::get('/trainers', [TrainersController::class, 'trainers']);
Route::get('/categories', [CategoriesController::class, 'categories']);
Route::get('/searchCatagory', [SearchCategory::class, 'search']);
Route::get('/search', [SearchController::class,'search']);
Route::get('/categoriescompanies', [CategoriesController::class,'categoriesCompanies']);
