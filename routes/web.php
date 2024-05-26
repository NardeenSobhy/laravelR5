<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController; 
use App\Http\Controllers\ClientController; 
use App\Http\Controllers\StudentController; 



Route::get('test20', [MyController::class, 'my_data']);

Route::post('insertClient', [ClientController::class, 'store'])->name('insetClient');
Route::get('addClient', [ClientController::class, 'create'])->name('addClient');
Route::get('clients', [ClientController::class, 'index'])->name('clients');
Route::get('editClient/{id}', [ClientController::class, 'edit'])->name('editclient');
Route::put('updateClient/{id}', [ClientController::class, 'update'])->name('updateclient');
Route::get('showClient/{id}', [ClientController::class, 'show'])->name('showClient');
Route::delete('delClient', [ClientController::class, 'destroy'])->name('delClient');
Route::get('trashClients', [ClientController::class, 'trash'])->name('trashClients');
Route::get('restoreClient/{id}', [ClientController::class, 'restore'])->name('restoreClient');
Route::delete('forceDelClient', [ClientController::class, 'forceDelete'])->name('forceDelClient');


Route::post('insetStudent', [StudentController::class, 'store'])->name('insetStudent');
Route::get('addStudent', [StudentController::class, 'create'])->name('addStudent');
Route::get('students', [StudentController::class, 'index'])->name('students');
Route::get('editStudent/{id}', [StudentController::class, 'edit'])->name('editStudent');
Route::put('updateStudent/{id}', [StudentController::class, 'update'])->name('updateStudent');
Route::get('showStudent/{id}', [StudentController::class, 'show'])->name('showStudent');
Route::delete('delStudent', [StudentController::class, 'destroy'])->name('delStudent');
Route::get('trashStudents', [StudentController::class, 'trash'])->name('trashStudents');
Route::get('restoreStudent/{id}', [StudentController::class, 'restore'])->name('restoreStudent');
Route::delete('forceDelStudent', [StudentController::class, 'forceDelete'])->name('forceDelStudent');

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('nardeen/{id?}', function ($id = 0) {  // ? -> optional constrain with a default given value
    return 'Welcome to my website' .$id;
}) -> where(['id'=> '[0-9]+']);*/

/*Route::get('nardeen/{id?}', function ($id = 0) {
    return 'Welcome to my website' .$id;
}) -> whereNumber('id');*/

/*Route::get('course/{name}', function ($name) {
    return 'My name is' .$name;
}) -> whereAlpha('name');*/

/*Route::get('course/{name}', function ($name) {
    return "The name is: " . $name;
    })->whereIn('name',['Peter', 'Tony']);*/   //it's case sensetive

/*Route::prefix('cars')->group(function(){
    Route::get('bmw', function(){
        return 'Category is BMW';
    });

    Route::get('mercedes', function(){
        return 'Category is Mercedes';
    });
});*/

/*Route::get('test20', function () {
    return view('test'); //test20 -> link, test -> view
});*/

Route::get('form1', function () {
    return view('form1'); 
});

Route::post('recForm1', [MyController::class,'recieveData'])->name('recieveForm1');

/*Route::fallback(function(){
    //return('The requested page is not found');
    return redirect('/');  //return to home page
});*/



    