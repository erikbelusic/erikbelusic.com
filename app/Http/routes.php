<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/article/{slug}', 'ArticlesController@show');

class Article
{
    public $title;
    public $published_at;

    function __construct($title, $published_at)
    {
        $this->published_at = $published_at;
        $this->title = $title;
    }


}

Route::get('/test', function(){
    $articles = [
      new Article('this is an article', '2015-06-15'),
        new Article('this is another article', '2013-05-15'),
        new Article('article article article', '2014-06-15')
    ];
    $collection = collect($articles);
    dd($collection->sortByDesc('published_at'));
});