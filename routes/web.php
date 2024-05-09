<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController; 

Route::get('test20', [MyController::class, 'my_data']);

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

Route::post('recForm1/{id1}/{id2}', function ($id1, $id2) {
    return ('Name is: ' . $id1 . " " . $id2)->withInput();     
})->name('recieveForm1');

/*Route::fallback(function(){
    //return('The requested page is not found');
    return redirect('/');  //return to home page
});*/



    