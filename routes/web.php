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

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('home.index');

    Route::group(['middleware' => ['guest']], function () {
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

        /**
         * Forgot Password Routes
         */
        Route::get('/forgot-password', 'PasswordResetController@requestPassword')->name('password.request');
        Route::post('/forgot-password', 'PasswordResetController@emailPassword')->name('password.email');
        Route::get('/reset-password/{token}', 'PasswordResetController@resetPassword')->name('password.reset');
        Route::post('/reset-password', 'PasswordResetController@updatePassword')->name('password.update');
    });

    Route::group(['middleware' => ['auth', 'permission']], function () {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

        /**
         * User Routes
         */
        Route::group(['prefix' => 'users'], function () {
            Route::get('/', 'UsersController@index')->name('users.index');
            Route::get('/create', 'UsersController@create')->name('users.create');
            Route::post('/create', 'UsersController@store')->name('users.store');
            Route::get('/{user}/show', 'UsersController@show')->name('users.show');
            Route::get('/{user}/edit', 'UsersController@edit')->name('users.edit');
            Route::patch('/{user}/update', 'UsersController@update')->name('users.update');
            Route::delete('/{user}/delete', 'UsersController@destroy')->name('users.destroy');
            Route::post('/{userId}/send-password-link', 'UsersController@sendPasswordLink')->name('users.send_password_link');
        });

        Route::group(['prefix' => 'profile'], function () {
            Route::get('/', 'ProfileController@index')->name('profile.index');
        });


        /**
         * Employee Routes
         */
        Route::group(['prefix' => 'employees'], function () {
            Route::get('/', 'EmployeesController@index')->name('employees.index');
            Route::get('/create', 'EmployeesController@create')->name('employees.create');
            Route::post('/create', 'EmployeesController@store')->name('employees.store');
            Route::get('/{employee}/show', 'EmployeesController@show')->name('employees.show');
            Route::get('/{employee}/edit', 'EmployeesController@edit')->name('employees.edit');
            Route::patch('/{employee}/update', 'EmployeesController@update')->name('employees.update');
            Route::delete('/{employee}/delete', 'EmployeesController@destroy')->name('employees.destroy');

            Route::get('/{employee}/tags/create', 'EmployeesSupervisorsController@showTagForm')->name('employees_supervisors.tags.create');
            Route::post('/{employee}/tags', 'EmployeesSupervisorsController@storeTag')->name('employees_supervisors.tags.store');
            Route::get('/{employee}/tags', 'EmployeesSupervisorsController@showTaggedEmployees')->name('employees_supervisors.tags.index');
            Route::delete('/{employee}/tags/delete/{employee_id}', 'EmployeesSupervisorsController@destroy')->name('employees_supervisors.tags.destroy');

            Route::get('/{employee}/tags/search', 'EmployeesSupervisorsController@searchEmployees')->name('employees_supervisors.tags.search');
        });

        /**
         * Test Post Routes
         */
        Route::group(['prefix' => 'posts'], function () {
            Route::get('/', 'PostsController@index')->name('posts.index');
            Route::get('/create', 'PostsController@create')->name('posts.create');
            Route::post('/create', 'PostsController@store')->name('posts.store');
            Route::get('/{post}/show', 'PostsController@show')->name('posts.show');
            Route::get('/{post}/edit', 'PostsController@edit')->name('posts.edit');
            Route::patch('/{post}/update', 'PostsController@update')->name('posts.update');
            Route::delete('/{post}/delete', 'PostsController@destroy')->name('posts.destroy');
        });

        /**
         * Competency Category Routes
         */

        Route::group(['prefix' => 'competency-categories'], function () {
            Route::get('/', 'CompetencyCategoriesController@index')->name('competency_categories.index');
            Route::get('/create', 'CompetencyCategoriesController@create')->name('competency_categories.create');
            Route::post('/create', 'CompetencyCategoriesController@store')->name('competency_categories.store');
            Route::get('/{competency_category}/show', 'CompetencyCategoriesController@show')->name('competency_categories.show');
            Route::get('/{competency_category}/edit', 'CompetencyCategoriesController@edit')->name('competency_categories.edit');
            Route::patch('/{competency_category}/update', 'CompetencyCategoriesController@update')->name('competency_categories.update');
            Route::delete('/{competency_category}/delete', 'CompetencyCategoriesController@destroy')->name('competency_categories.destroy');
        });

        /**
         * Competency Routes
         */

        Route::group(['prefix' => 'competencies'], function () {
            Route::get('/', 'CompetenciesController@index')->name('competencies.index');
            Route::get('/create', 'CompetenciesController@create')->name('competencies.create');
            Route::post('/create', 'CompetenciesController@store')->name('competencies.store');
            Route::get('/{competency}/show', 'CompetenciesController@show')->name('competencies.show');
            Route::get('/{competency}/edit', 'CompetenciesController@edit')->name('competencies.edit');
            Route::patch('/{competency}/update', 'CompetenciesController@update')->name('competencies.update');
            Route::delete('/{competency}/delete', 'CompetenciesController@destroy')->name('competencies.destroy');
        });

        /**
         * Behavioral Indicator Routes
         */

        Route::group(['prefix' => 'behavioral-indicators'], function () {
            Route::get('/', 'BehavioralIndicatorsController@index')->name('behavioral_indicators.index');
            Route::get('/create', 'BehavioralIndicatorsController@create')->name('behavioral_indicators.create');
            Route::post('/create', 'BehavioralIndicatorsController@store')->name('behavioral_indicators.store');
            Route::get('/{behavioralIndicator}/show', 'BehavioralIndicatorsController@show')->name('behavioral_indicators.show');
            Route::get('/{behavioralIndicator}/edit', 'BehavioralIndicatorsController@edit')->name('behavioral_indicators.edit');
            Route::patch('/{behavioralIndicator}/update', 'BehavioralIndicatorsController@update')->name('behavioral_indicators.update');
            Route::delete('/{behavioralIndicator}/delete', 'BehavioralIndicatorsController@destroy')->name('behavioral_indicators.destroy');
        });

        /**
         * Role Routes
         */

        Route::resource('roles', RolesController::class);
        Route::group(['prefix' => 'roles-assign'], function () {
            Route::get('/', 'RolesAssignController@index')->name('roles_assign.index');
            Route::get('/{user}/get-user-roles', 'RolesAssignController@getUserRoles')->name('get_user_roles');
        });


        Route::resource('permissions', PermissionsController::class);




        //Employee Competency Assessment Routes

        /**
         * Competency Assessment Routes
         */

        Route::group(['prefix' => 'competency-assessment'], function () {
            Route::get('/about', 'CompetencyAssessmentController@about')->name('competency_assessment.about');
            Route::get('/dictionary', 'CompetencyAssessmentController@dictionary')->name('competency_assessment.dictionary');
            Route::get('/rating_scale', 'CompetencyAssessmentController@ratingScale')->name('competency_assessment.rating_scale');
            Route::get('/employee_profile', 'CompetencyAssessmentController@getEmployeeProfileDetails')->name('competency_assessment.employee_profile');
            Route::get('/instructions', 'CompetencyAssessmentController@instructions')->name('competency_assessment.instructions');
            Route::get('/core_competency', 'CompetencyAssessmentController@coreCompetencies')->name('competency_assessment.core_competency');
            Route::get('/technical_competency', 'CompetencyAssessmentController@technicalCompetencies')->name('competency_assessment.technical_competency');
            Route::get('/leadership_competency', 'CompetencyAssessmentController@leadershipCompetencies')->name('competency_assessment.leadership_competency');

           
        });
        /**
         * Divisions Routes
        */
        Route::group(['prefix' => 'divisions'], function () {
            Route::get('/', 'DivisionsController@index')->name('divisions.index');
            Route::get('/create', 'DivisionsController@create')->name('divisions.create');
            Route::post('/create', 'DivisionsController@store')->name('divisions.store');
            Route::get('/{division}/show', 'DivisionsController@show')->name('divisions.show');
            Route::get('/{division}/edit', 'DivisionsController@edit')->name('divisions.edit');
            Route::patch('/{division}/update', 'DivisionsController@update')->name('divisions.update');
            Route::delete('/{division}/delete', 'DivisionsController@destroy')->name('divisions.destroy');

           
        });

        /**
         * Positions Routes
         */
        Route::group(['prefix' => 'positions'], function () {
            Route::get('/', 'PositionsController@index')->name('positions.index');
            Route::get('/create', 'PositionsController@create')->name('positions.create');
            Route::post('/create', 'PositionsController@store')->name('positions.store');
            Route::get('/{position}/show', 'PositionsController@show')->name('positions.show');
            Route::get('/{position}/edit', 'PositionsController@edit')->name('positions.edit');
            Route::patch('/{position}/update', 'PositionsController@update')->name('positions.update');
            Route::delete('/{position}/delete', 'PositionsController@destroy')->name('positions.destroy');

           
        });

        /**
         * Positions Routes
         */
        Route::group(['prefix' => 'functionalgroups'], function () {
            Route::get('/', 'functionalgroupsController@index')->name('functionalgroups.index');
            Route::get('/create', 'functionalgroupsController@create')->name('functionalgroups.create');
            Route::post('/create', 'functionalgroupsController@store')->name('functionalgroups.store');
            Route::get('/{functionalgroup}/show', 'functionalgroupsController@show')->name('functionalgroups.show');
            Route::get('/{functionalgroup}/edit', 'functionalgroupsController@edit')->name('functionalgroups.edit');
            Route::patch('/{functionalgroup}/update', 'functionalgroupsController@update')->name('functionalgroups.update');
            Route::delete('/{functionalgroup}/delete', 'functionalgroupsController@destroy')->name('functionalgroups.destroy');

           
        });

        /**
         * Bureau Office Routes
         */
        Route::group(['prefix' => 'bureaus-offices'], function () {
            Route::get('/', 'BureausOfficesController@index')->name('bureaus_offices.index');
            Route::get('/create', 'BureausOfficesController@create')->name('bureaus_offices.create');
            Route::post('/create', 'BureausOfficesController@store')->name('bureaus_offices.store');
            Route::get('/{bureau_office}/show', 'BureausOfficesController@show')->name('bureaus_offices.show');
            Route::get('/{bureau_office}/edit', 'BureausOfficesController@edit')->name('bureaus_offices.edit');
            Route::patch('/{bureau_office}/update', 'BureausOfficesController@update')->name('bureaus_offices.update');
            Route::delete('/{bureau_office}/delete', 'BureausOfficesController@destroy')->name('bureaus_offices.destroy');

           
        });
    });
});
