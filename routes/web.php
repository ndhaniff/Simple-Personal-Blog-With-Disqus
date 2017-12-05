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
use App\Post;
use Illuminate\Http\Request;

Route::get('/', function (Request $request) {
    if ($request->has('category')){
        $category = $request->category;
        $posts = Post::where('category_id',$category)->paginate(3);
        return view('pages.index')->with('posts',$posts);
    }
    else{
        $posts = Post::paginate(3);
        return view('pages.index')->with('posts',$posts);
    }

});

Route::get('/login-with-fb','Auth\LoginController@redirectToProvider');
Route::get('/login-with-fb-callback','Auth\LoginController@handleProviderCallback');

Route::resource('posts','PostsController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
