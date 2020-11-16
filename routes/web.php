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

Route::get('/discount', function () {
    return view('discount');
});
Route::post('/show',function (Illuminate\Http\Request $request){
    $productDescription=$request->input('productDescription');
    $listPrice=$request->input('listPrice');
    $discountPercent=$request->input('discountPercent');
    $discountAmount=$listPrice*$discountPercent*0.01;
    $discountPrice=$listPrice*$discountAmount;

    return view('show',compact(['productDescription','listPrice','discountPercent','discountAmount','discountPrice']));

});


