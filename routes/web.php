<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\SendEmailController;

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

Route::view('upload', 'upload');

Route::post('upload',[UploadController::class, 'index']);

Route::get('/multiuploads', [UploadController::class, 'uploadForm']);

Route::post('/multiuploads', [UploadController::class, 'uploadSubmit']);

Route::get('/sendemail', [ SendEmailController ::class, 'index']);

Route::post('/sendemail/send', [SendEmailController::class, 'send']);
