<?php

use App\Http\Contriller\LdtAccountController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting', function(){
    return "<h1> Hello , Lam Duc Tai </h1>";
});

#Redirect
Route::Redirect('/here','/there');

Route::get('/there',function() {
    return "<h1> Redirect to there </h1>";
});


#Route return view
Route::get('/duc-tai',function(){
    return view ('ductai');
});

#Route parameter
Route::get('/devmaster/{id}',function($id){
    return "<h1> Devmaster ".$id ."</h1>";
});

#Optional parameter
Route::get('/dev/{name?}',function($name="Đức Tài"){
    return "<h1> Xin Chào ".$name ."</h1>";
});


Route::get('/ldt-account',[LdtAccountController::class,'index'])->name('LdtAccount.index');

Route::get('/ldt-account-create',[LdtAccountController::class,'create']);
