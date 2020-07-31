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

/*Route::get('/', function () {
    $name = request('name');

    return view('test',[
    'name' => $name
    ]);
});
*/

Route::get('/', function () {
    return view('home');

});
//Route::get('/{forms}', function (forms $forms) {

//});
//Route::get("/",'Form@show');
//Route::post("/submit",'Form@save');


Route::get('/home', function() {
   //$forms = App\Forms::all();
    return view('home',[
        'forms' => App\Forms::latest()->get()

    //return $forms;
      //return view('home');
   ]); 

  }); 

Route::get('/forms','FormController@index')->name('forms.index');
Route::post('/forms','FormController@store'); 
Route::get('/forms/create','FormController@create');
Route::get('/forms/{forms}','FormController@show')->name('forms.show');
Route::get('/forms/{forms}/edit','FormController@edit');
Route::put('/forms/{forms}','FormController@update');


/*
Route::get('/aarticles',function() {
    //$aarticle = App\Aarticle::latest()->get();

    //return $aarticle;
   return view('aarticles.index',[
        'aarticles'=>App\Aarticle::latest()->get()
   ]);
});
//Route::get('/aatricles/{aarticle}','AatriclesController@show');
*/
/*Route::get('/welcome', function () {
     return view('welcome');

  });
*/
/*Route::get('/', function () {
     return view('contact');

  });

Route::get('/home', function () {
    return view('home');

});
*/
//Route::get('/aatricles','AatriclesController@index');
//Route::get('/aatricles/{aarticle}','AatriclesController@show');

//Route::get('/aatricles/{aarticle}/edit','AatriclesController@edit');
//Route::get('/aatricles/{aarticle}','AatriclesController@update');


 /*Route::get('/posts/{post}', function ($post) {
    $posts = [
       'my-first-post' => 'Hello, this is my first blog post',
       'my-second-post' => 'Now I am hetting the hang of this blogged thing.'
   ];

   if (! array_key_exists($post, $posts)) {
   	abort(404,'sorry, that post was not found,');
   }


   return view('post',[
    'post' => $posts[$post]
    ]);
});
*/


//  Route::get('/posts/{post}','PostController@show');
