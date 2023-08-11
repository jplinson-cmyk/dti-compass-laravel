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

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('home.index');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth', 'permission']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

        /**
         * User Routes
         */
        Route::group(['prefix' => 'users'], function() {
            Route::get('/', 'UsersController@index')->name('users.index');
            Route::get('/create', 'UsersController@create')->name('users.create');
            Route::post('/create', 'UsersController@store')->name('users.store');
            Route::get('/{user}/show', 'UsersController@show')->name('users.show');
            Route::get('/{user}/edit', 'UsersController@edit')->name('users.edit');
            Route::patch('/{user}/update', 'UsersController@update')->name('users.update');
            Route::delete('/{user}/delete', 'UsersController@destroy')->name('users.destroy');
        });

        /**
         * User Routes
         */
        Route::group(['prefix' => 'posts'], function() {
            Route::get('/', 'PostsController@index')->name('posts.index');
            Route::get('/create', 'PostsController@create')->name('posts.create');
            Route::post('/create', 'PostsController@store')->name('posts.store');
            Route::get('/{post}/show', 'PostsController@show')->name('posts.show');
            Route::get('/{post}/edit', 'PostsController@edit')->name('posts.edit');
            Route::patch('/{post}/update', 'PostsController@update')->name('posts.update');
            Route::delete('/{post}/delete', 'PostsController@destroy')->name('posts.destroy');
        });

        Route::group(['prefix' => 'competency_categories'], function() {
            Route::get('/', 'CompetencyCategoriesController@index')->name('competency_categories.index');
            Route::get('/create', 'CompetencyCategoriesController@create')->name('competency_categories.create');
            Route::post('/create', 'CompetencyCategoriesController@store')->name('competency_categories.store');
            Route::get('/{competency_category}/show', 'CompetencyCategoriesController@show')->name('competency_categories.show');
            Route::get('/{competency_category}/edit', 'CompetencyCategoriesController@edit')->name('competency_categories.edit');
            Route::patch('/{competency_category}/update', 'CompetencyCategoriesController@update')->name('competency_categories.update');
            Route::delete('/{competency_category}/delete', 'CompetencyCategoriesController@destroy')->name('competency_categories.destroy');
        });

        Route::group(['prefix' => 'competencies'], function() {
            Route::get('/', 'CompetenciesController@index')->name('competencies.index');
            Route::get('/create', 'CompetenciesController@create')->name('competencies.create');
            Route::post('/create', 'CompetenciesController@store')->name('competencies.store');
            Route::get('/{competency}/show', 'CompetenciesController@show')->name('competencies.show');
            Route::get('/{competency}/edit', 'CompetenciesController@edit')->name('competencies.edit');
            Route::patch('/{competency}/update', 'CompetenciesController@update')->name('competencies.update');
            Route::delete('/{competency}/delete', 'CompetenciesController@destroy')->name('competencies.destroy');
        });

        Route::resource('roles', RolesController::class);
        Route::resource('permissions', PermissionsController::class);
    });
});