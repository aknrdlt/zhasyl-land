<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;


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

Route::get('/', [MainController::class, 'index']);

Route::get('/send', [MailController::class, 'send']);

Route::get('locale/{lang}', [\App\Http\Controllers\LocalizationController::class, 'setLang']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
