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

/*
 * Home
 */

Route::get('/', [
    'uses' => '\SocialAppp\Http\Controllers\HomeController@index',
    'as' => 'home'
]);


/*
 * Authentication
 */

Route::get('/alert', function () {
    return redirect()->route('home')->with('info', 'You Have Sign Up');
});

Route::get('/signup', [
    'uses' => '\SocialAppp\Http\Controllers\AuthController@getSignup',
    'as' => 'auth.signup',
    'middleware' => ['guest'],
]);


Route::post('/signup', [
    'uses' => '\SocialAppp\Http\Controllers\AuthController@postSignup',
    'middleware' => ['guest'],
]);


Route::get('/signin', [
    'uses' => '\SocialAppp\Http\Controllers\AuthController@getSignin',
    'as' => 'auth.signin',
    'middleware' => ['guest'],
]);

Route::post('/signin', [
    'uses' => '\SocialAppp\Http\Controllers\AuthController@postSignin',
    'middleware' => ['guest'],
]);

Route::get('/logout', [
    'uses' => '\SocialAppp\Http\Controllers\AuthController@getSignout',
    'as' => 'auth.logout'
]);


/*
 * Search
 */

Route::get('/search', [
    'uses' => '\SocialAppp\Http\Controllers\SearchController@getResults',
    'as' => 'search.results'
]);

/*
 * user Profile
 */

Route::get('/user/{username}',[
    'uses' => '\SocialAppp\Http\Controllers\ProfileController@getProfile',
    'as' => 'profile.index',
    'middleware'=>['auth'],
]);

Route::get('/profile/edit',[
    'uses' => '\SocialAppp\Http\Controllers\ProfileController@getEdit',
    'as' => 'profile.edit',
    'middleware'=>['auth'],
]);


Route::post('/profile/edit',[
    'uses' => '\SocialAppp\Http\Controllers\ProfileController@postEdit',
    'middleware'=>['auth'],
]);

Route::post('/profile', [
    'uses' => '\SocialAppp\Http\Controllers\ProfileController@update_avatar',
    'as' =>'profile.upload',
]);

/*
 * friends
 */

Route::get('/friends',[
    'uses' => '\SocialAppp\Http\Controllers\FriendController@getIndex',
    'as' => 'friend.index',
    'middleware'=>['auth'],
]);

Route::get('/friends/add/{username}',[
    'uses' => '\SocialAppp\Http\Controllers\FriendController@getAdd',
    'as' => 'friend.add',
    'middleware'=>['auth'],
]);

Route::get('/friends/accept/{username}',[
    'uses' => '\SocialAppp\Http\Controllers\FriendController@getAccept',
    'as' => 'friend.accept',
    'middleware'=>['auth'],
]);

Route::post('/friends/unfriend/{username}',[
    'uses' => '\SocialAppp\Http\Controllers\FriendController@postUnfriend',
    'as' => 'friend.unfriend',
    'middleware'=>['auth'],
]);

Route::post('/friends/CancelFriendRequest/{username}',[
    'uses' => '\SocialAppp\Http\Controllers\FriendController@postCancelFriendRequest',
    'as' => 'friend.cancelfriendqequest',
    'middleware'=>['auth'],
]);

/*
 * Status
 */

Route::post('/status',[
    'uses' => '\SocialAppp\Http\Controllers\StatusController@postStatus',
    'as' => 'status.post',
    'middleware'=>['auth'],
]);

Route::post('/status/{statusId}/reply',[
    'uses' => '\SocialAppp\Http\Controllers\StatusController@postReply',
    'as' => 'status.reply',
    'middleware'=>['auth'],
]);

Route::post('/status/like',[
    'uses' => '\SocialAppp\Http\Controllers\StatusController@postLike',
    'as' => 'status.like',
    'middleware'=>['auth'],
]);

Route::get('/status/delete/{statusId}',[
    'uses' => '\SocialAppp\Http\Controllers\StatusController@getDeleteStatus',
    'as' => 'status.delete',
    'middleware'=>['auth'],
]);

Route::post('/statusedit', [
    'uses' => '\SocialAppp\Http\Controllers\StatusController@postEditStatus',
    'as' => 'status.edit',
    'middleware'=>['auth'],
]);