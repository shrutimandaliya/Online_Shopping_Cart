<?php

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
Route::get('sweetAlert', function () {
    return view('sweetAlert');
 });

Route::get('/', function () {
    return view('layouts.admin.dashboard');
 })->middleware('mymiddleware1');
 // });

// Route::get('a', function () {
//     return view('layouts.admin.category');
// });

Auth::routes();
Route::get('mylogin',function(){
	return view('mylogin');
});		//30-01-2019
 Route::group(['middleware'=>'mymiddleware1'],function(){
//category
// Route::get('categoryDetails1',[
// 	"uses"=> 'MyController@categoryDetails',
// 	"as" => "cat"
// ]);
// });
Route::get('categoryDetails','CategoryController@categoryView')->middleware('auth','mymiddleware1');		//30-01-2019
Route::get('categoryForm','CategoryController@categoryForm');		//30-01-2019
Route::post('addNewCategory','CategoryController@addNewCategory');		//30-01-2019
Route::get('editCategory/{id}','CategoryController@editCategory');		//31-01-2019
Route::post('updateCategory/{id}','CategoryController@updateCategory');		//31-01-2019
Route::post('deleteCat/{id}','CategoryController@destroy');		//30-01-2019
Route::get('toggleCat/{id}','CategoryController@toggle');		//05-01-2019

//color

Route::get('colorDetails','ColorController@colorView');		//04-01-2019
Route::get('colorForm','ColorController@colorForm');		//04-01-2019
Route::post('addNewColor','ColorController@addNewColor');		//04-01-2019
Route::get('editColor/{id}','ColorController@editColor');		//04-02-2019
Route::post('updateColor/{id}','ColorController@updateColor');		//04-02-2019
Route::post('deleteColor/{id}','ColorController@destroy');		//04-02-2019
Route::get('toggleColor/{id}','ColorController@toggle');		//06-01-2019

//product
Route::get('productDetails','ProductController@productView');		//06-01-2019
Route::get('productForm','ProductController@productForm');		//06-01-2019
Route::post('addNewProduct','ProductController@addNewProduct');		//06-01-2019
Route::get('editProduct/{id}','ProductController@editProduct');		//06-02-2019
Route::post('updateProduct/{id}','ProductController@updateProduct');		//06-02-2019
Route::get('deleteProduct/{id}','ProductController@destroy');		//06-02-2019
Route::post('deleteCat/{proId}','CategoryController@destroy');		//06-02-2019
Route::get('togglePro/{id}','ProductController@toggle');		//06-01-2019
Route::get('editMultipleImg/{id}','ProductController@editMultipleImg');		//10-02-2019
Route::post('updateMultipleImg/{id}','ProductController@updateMultipleImg');		//10-02-2019
Route::get('deleteMultipleImg/{id}','ProductController@multipleImgDestroy');		//04-02-2019

//Users
Route::get('usersList','UserController@usersList');		//17-02-2019
// Route::get('editUser/{id}','UserController@editUser');		//17-02-2019
// Route::post('updateUser/{id}','UserController@updateUser');		//17-02-2019
Route::get('deleteUser/{id}','UserController@destroy');		//18-02-2019
Route::get('toggleUser/{id}','UserController@toggle');		//06-01-2019






Route::get('/home', 'HomeController@index');

});
// Route::get('header', function () {
//     return view('layouts/header');
// });
Route::post('sendMail','mailController@send');		//13-02-2019
Route::get('resetPass','mailController@resetView');		//13-02-2019
Route::post('updatePass/{id}','mailController@updatePass');		//13-02-2019







// Route::get('login', function () {
//     return view('login');
// });





// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

//user
Route::get('user',function(){
	return view('layouts.user.app');
});		//30-01-2019

// Route::get('laptop',function(){
// 	return view('layouts.user.laptop');
// });		//30-01-2019
Route::get('laptop','LaptopController@laptopList');		//13-02-2019
// Route::get('gridView/{active}','LaptopController@laptopGride');		//26-02-2019
// Route::get('listView/{active}','LaptopController@laptopGride');		//26-02-2019
// Route::get('sort/{sortType}','LaptopController@sort');		//27-02-2019
// Route::get('checked/{selected}','LaptopController@checked');		//27-02-2019
// Route::get('grid','LaptopController@laptopGride');		//26-02-2019
// Route::get('checkedColor/{selectedColor}','LaptopController@checkedColor');		//01-03-2019


Route::get('gridView/{active}','UserDisplayController@loop');		//26-02-2019
Route::get('listView/{active}','UserDisplayController@loop');		//26-02-2019
Route::get('sort/{sortType}','UserDisplayController@loop');		//27-02-2019
Route::get('checked','UserDisplayController@loop');		//27-02-2019
Route::get('grid','UserDisplayController@loop');		//26-02-2019
Route::get('checkedColor','UserDisplayController@loop');		//01-03-2019
Route::get('price/{min}/{max}','UserDisplayController@loop');		//01-03-2019


Route::get('productDetails/{id}','UserDisplayController@productDetails');		//09-03-2019
Route::get('addToCart/{id}','UserDisplayController@addToCart');		//13-03-2019

