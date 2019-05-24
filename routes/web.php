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


Auth::routes();
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');
Route::resource('/vote', 'PollController');
Route::get('/events', 'EventController@index')->name('events.index');
Route::get('/events/{id}', 'EventController@show')->name('events.show');
Route::get('/news', 'NewsController@index')->name('news.index');
Route::get('/news/{id}', 'NewsController@show')->name('news.show');
Route::get('/search', 'EventController@search')->name('search');
Route::get('/overview', 'AboutusController@overview')->name('aboutus.overview');
Route::get('/scholarship', 'AboutusController@scholarship')->name('scholarship.scholarship');

Route::get('/poll/home', ['uses' => 'PollController@home', 'as' => 'poll.home']);
Route::get('/poll/result', ['uses' => 'PollController@result', 'as' => 'poll.result']);

Route::get('/create_poll', ['uses' => 'PollController@create', 'as' => 'poll.create']);

Route::post('/store/polls', ['uses' => 'PollController@store', 'as' => 'poll.store']);

Route::get('/poll/index', ['uses' => 'PollController@index', 'as' => 'poll.index']);

Route::get('/polls/{poll}/edit', ['uses' => 'PollController@edit', 'as' => 'poll.edit']);
Route::patch('/polls/{poll}/update', ['uses' => 'PollController@update', 'as' => 'poll.update']);
Route::delete('/polls/{poll}/remove', ['uses' => 'PollController@remove', 'as' => 'poll.remove']);
Route::patch('/polls/{poll}/lock', ['uses' => 'PollController@lock', 'as' => 'poll.lock']);
Route::patch('/polls/{poll}/unlock', ['uses' => 'PollController@unlock', 'as' => 'poll.unlock']);
Route::get('/polls/{poll}/options/add', ['uses' => 'OptionController@push', 'as' => 'poll.options.push']);
Route::post('/polls/{poll}/options/add', ['uses' => 'OptionController@add', 'as' => 'poll.options.add']);
Route::get('/polls/{poll}/options/remove', ['uses' => 'OptionController@delete', 'as' => 'poll.options.remove']);
Route::delete('/polls/{poll}/options/remove', ['uses' => 'OptionController@remove', 'as' => 'poll.options.remove']);

Route::post('/polls/{poll}/vote', 'VoteController@vote')->name('poll.vote');
Route::get('/survey', ['uses' => 'SurveyController@create', 'as' => 'survey.create']);
Route::post('/create_survey', ['uses' => 'SurveyController@store', 'as' => 'survey.store']);
// Route::get('/poll_home', ['uses' => 'PollController@home', 'as' => 'poll.home']);
// Route::get('/create_poll', ['uses' => 'PollController@create', 'as' => 'poll.create']);
// Route::post('/store/polls', ['uses' => 'PollController@store', 'as' => 'poll.store']);
// Route::get('/poll/index', ['uses' => 'PollController@index', 'as' => 'poll.index']);
// Route::get('/admin/polls/{poll}', ['uses' => '\vendor\inani\larapoll\http\controllers\PollManagerController@edit', 'as' => 'poll.edit']);
// Route::patch('/polls/{poll}/update', ['uses' => 'PollController@update', 'as' => 'poll.update']);
// Route::delete('/polls/{poll}/remove', ['uses' => 'PollController@remove', 'as' => 'poll.remove']);
// Route::patch('/polls/{poll}/lock', ['uses' => 'PollController@lock', 'as' => 'poll.lock']);
// Route::patch('/polls/{poll}/unlock', ['uses' => 'PollController@unlock', 'as' => 'poll.unlock']);
// Route::get('/polls/{poll}/options/add', ['uses' => 'OptionController@push', 'as' => 'poll.options.push']);
// Route::post('/polls/{poll}/options/add', ['uses' => 'OptionController@add', 'as' => 'poll.options.add']);
// Route::get('/polls/{poll}/options/remove', ['uses' => 'OptionController@delete', 'as' => 'poll.options.remove']);
// Route::delete('/polls/{poll}/options/remove', ['uses' => 'OptionController@remove', 'as' => 'poll.options.remove']);
// Route::post('/polls/{poll}/vote', 'VoteController@vote')->name('poll.vote');
