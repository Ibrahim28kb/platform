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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'SiteController@index')->name('index');
Route::get('/results', 'SiteController@search')->name('search');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard ', 'HomeController@dashboard')->name('dashboard');
Auth::routes();



Route::group(['prefix' => 'user', 'middleware' => 'auth'], function (){
//Post
Route::get('/posts', 'postsController@index')->name('posts');
Route::get('/post/trashed', 'postsController@trashed')->name('post.trashed');
Route::get('/post/fdelete/{id}', 'postsController@fdelete')->name('post.fdelete');
Route::get('/post/restore/{id}', 'postsController@restore')->name('post.restore');
Route::get('/post/create', 'postsController@create')->name('post.create');
Route::post('/post/store', 'postsController@store')->name('post.store');

Route::get('/post/edit/{id}', 'postsController@edit')->name('post.edit');
Route::get('/post/delete/{id}', 'postsController@destroy')->name('post.delete');
Route::post('/post/update/{id}', 'postsController@update')->name('post.update');
//Category
Route::get('categories'  ,    'CategoriesController@index')->name('categories');
Route::get('/category/create', 'CategoriesController@create')->name('category.create');
Route::post('/category/store', 'CategoriesController@store')->name('category.store');

Route::get('/category/edit/{id}', 'CategoriesController@edit')->name('category.edit');
Route::get('/category/delete/{id}', 'CategoriesController@destroy')->name('category.delete');
Route::post('/category/update/{id}', 'CategoriesController@update')->name('category.update');

//Tag
Route::get('tags'  ,    'TagController@index')->name('tags');
Route::get('/tag/create', 'TagController@create')->name('tag.create');
Route::post('/tag/store', 'TagController@store')->name('tag.store');

Route::get('/tag/edit/{id}', 'TagController@edit')->name('tag.edit');
Route::get('/tag/delete/{id}', 'TagController@destroy')->name('tag.delete');
Route::post('/tag/update/{id}', 'TagController@update')->name('tag.update');
// Route::resource('tag','TagController'); 

//User
Route::get('/users'  , 'UsersController@index')->name('users');
Route::get('/users/admin/{id}' , 'UsersController@admin')->name('users.admin');
Route::get('/users/notAdmin/{id}' , 'UsersController@notAdmin')->name('users.notAdmin');
Route::get('/users/create', 'UsersController@create')->name('users.create');
Route::post('/users/store', 'UsersController@store')->name('users.store');

 //profile
 Route::get('/users/profile', 'ProfilesController@index')->name('users.profile');
 Route::post('/users/profile/update', 'ProfilesController@update')->name('users.profile.update');

  //setting
  Route::get('/settings', 'SettingsController@index')->name('settings');
  Route::post('/settings/update', 'SettingsController@update')->name('settings.update');
  Route::get('/', 'SiteController@index')->name('index');
  // Show
  Route::get('/{slug}', 'SiteController@showPost')->name('post.show');

  // show category
  Route::get('/{slug}', 'SiteController@showPost')->name('post.show');
  Route::get('/category/{id}', 'SiteController@showCategory')->name('category.show');

  //tag
  Route::get('/tag/{id}', 'SiteController@showTag')->name('tag.show');

  //search
  Route::get('/post/{slug} ', 'SiteController@showPost')->name('post.show');
  //dashboard
  
  
  Route::resource('skill1 ', 'Skill1Controller');
    
   
  });



Route::get('/mohammed',function(){

    // dd(App\Category::find(1)->posts());
   // return App\Post::find(1)->category;
    return App\User::find(1)->profile;

})->name('mohammed');
