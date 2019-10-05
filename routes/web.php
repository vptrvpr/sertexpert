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

/**
 * Pages
 */
Route::get( '/', 'PageController@index' )->name( 'general' );
Route::get( '/news', 'PageController@news' )->name( 'news' );
Route::get( '/about', 'PageController@about' )->name( 'about' );
Route::get( '/questions', 'PageController@questions' )->name( 'questions' );
Route::get( '/article', 'PageController@article' )->name( 'article' );
Route::get( '/search', 'PageController@search' )->name( 'search' );
Route::get( '/contacts', 'PageController@contacts' )->name( 'contacts' );

/**
 * sender
 */
Route::post( '/sender/contact-send', 'SenderController@sendEmail' )->name( 'contacts' );
Route::post( '/sender/contact-send-2', 'SenderController@sendEmail2' )->name( 'contacts2' );

Auth::routes();
Route::get( '/home', 'HomeController@index' )->name( 'home' );


/**
 * Articles
 */
Route::get( '/{category}/{title}_{id}', 'ArticleController@showArticle' )->name( 'showArticle' );
Route::post( '/articles/load-image', 'ArticleController@loadImageArticle' )->name( 'loadImageArticle' );
Route::post( '/articles/create', 'ArticleController@createArticle' )->name( 'createArticle' );
Route::get( '/article/edit/show/{articleId}', 'ArticleController@editIndex' );
Route::get( '/article/get/{articleId}', 'ArticleController@getArticleById' );
Route::post( '/articles/get/', 'ArticleController@getArticles' )->name( 'getArticles' );
Route::get( '/articles/delete/{id}', 'ArticleController@deleteArticles' )->name( 'deleteArticles' );
Route::post( '/articles/save', 'ArticleController@saveArticles' )->name( 'saveArticles' );

/**
 * admin
 */
Route::group( [ 'prefix' => 'admin' ], function() {

    Route::get( '/', 'Admin\PageController@index' )->name( 'admin' );
    Route::get( '/create-article', 'Admin\PageController@createArticle' )->name( 'adminCreateArticle' );
    Route::get( '/questions', 'Admin\PageController@questions' )->name( 'adminQuestions' );
    Route::get( '/contacts', 'Admin\PageController@contacts' )->name( 'adminContacts' );

} );


/**
 * Questions for admin
 */
Route::get('/questions/get','QuestionsController@get');
Route::post('/questions/create','QuestionsController@create');
Route::post('/questions/edit','QuestionsController@edit');
Route::delete('/questions/{id}','QuestionsController@destroy');


/**
 * Contacts for admin
 */
Route::get('/contacts/get','ContactsController@get');
Route::post('/contacts/create','ContactsController@create');
Route::post('/contacts/edit','ContactsController@edit');
Route::delete('/contacts/{id}','ContactsController@destroy');
Route::get('/contacts/by-city','ContactsController@getContactByCity');
