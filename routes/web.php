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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'UI\HomeController@home');

Route::get('/partners', 'UI\HomeController@partners');

Route::get('/book_demo', 'UI\HomeController@book_demo');





// Admin



Route::group(['prefix' => '/admin'], function () {

    Route::get('/login', 'Admin\AdminController@login');

Route::get('/dashboard', 'Admin\AdminController@dashboard');

Route::get('/classes', 'Admin\AdminController@classes');

Route::get('/partners', 'Admin\AdminController@partners');

Route::get('/inquiry', 'Admin\AdminController@inquiry');

Route::post('/admin_login', 'Admin\AuthendicationController@admin_login');

Route::get('/admin_logout', 'Admin\AuthendicationController@admin_logout');
});

Route::group(['prefix' => '/admin/teachers'], function () {

    Route::get('/dashboard', 'Admin\AdminController@dashboard');
    
    Route::get('/teachers_lists', 'Admin\TeachersController@teachers_lists');

    Route::get('/add_teacher', 'Admin\TeachersController@add_teacher');

    Route::get('/edit_teacher/{id}', 'Admin\TeachersController@edit_teacher');

    Route::post('/update_teachers', 'Admin\TeachersController@update_teachers');

    Route::post('/store_teachers', 'Admin\TeachersController@store_teachers');

    Route::get('/teacher_logout', 'Admin\AuthendicationController@teacher_logout');

    Route::post('/change_status', 'Admin\TeachersController@ChangeStatus');
});


Route::group(['prefix' => '/admin/courses'], function () {

    Route::get('/list', 'Admin\CoursesController@courses_lists');

    Route::get('/add_courses', 'Admin\CoursesController@add_courses');

    Route::get('/edit_courses/{id}', 'Admin\CoursesController@edit_courses');

    Route::post('/update_courses', 'Admin\CoursesController@update_courses');

    Route::post('/store_courses', 'Admin\CoursesController@store_courses');

    Route::post('/change_status', 'Admin\CoursesController@ChangeStatus');
});




