<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Models\DrinkMenu;
use App\Models\FoodMenu;

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

Route::get('/', function () {
    return view('welcome');
});
// FRONT END ROUTES
// about us
Route::resource('/about', 'App\Http\Controllers\FrontEnd\FrontEndAboutController');

// company profile 
Route::get('/profile', 'App\Http\Controllers\FrontEnd\FrontEndPagesController@profile');


Route::resource('/project', 'App\Http\Controllers\FrontEnd\FrontEndProjectController');

// testimonials
Route::resource('/testimonials', 'App\Http\Controllers\FrontEnd\FrontEndTestimonialController');
// services
Route::resource('/works', 'App\Http\Controllers\FrontEnd\FrontEndServiceController');
// gallery
Route::resource('/pictures', 'App\Http\Controllers\FrontEnd\FrontEndGalleryController');
//food menu
//drinks menu
//posts
Route::resource('/articles', 'App\Http\Controllers\FrontEnd\FrontEndPostController');
//bookings
Route::resource('/book', 'App\Http\Controllers\FrontEnd\FrontEndBookingController');
//contact 
Route::resource('/contact', 'App\Http\Controllers\FrontEnd\FrontEndContactController');







// BACKEND ROUTES

Auth::routes();

// middleware auth 
Route::group(['middleware' => ['auth']], function() {
// users
Route::resource('/users', 'App\Http\Controllers\UserController');
// Roles
Route::resource('/roles', 'App\Http\Controllers\RoleController');
// permissions
Route::resource('/permissions', 'App\Http\Controllers\PermissionController');
// posts
Route::resource('/posts', 'App\Http\Controllers\BackEnd\PostController');
// Post category
Route::resource('/post_categories', 'App\Http\Controllers\BackEnd\PostCategoryController');

// Admin dashboard 
Route::resource('/dashboard', 'App\Http\Controllers\BackEnd\DashboardController');
// Bookings
Route::resource('/bookings', 'App\Http\Controllers\BackEnd\BookingController');
// Feedbacks
Route::resource('/feedbacks', 'App\Http\Controllers\BackEnd\FeedbackController');
// Orders
Route::resource('/orders', 'App\Http\Controllers\BackEnd\OrderController');

Route::resource('/gallery_categories', 'App\Http\Controllers\BackEnd\GalleryCategoryController');
// Gallery 
Route::resource('/galleries', 'App\Http\Controllers\BackEnd\GalleryController');
// Services category
Route::resource('/service_categories', 'App\Http\Controllers\BackEnd\ServiceCategoryController');
// Services 
Route::resource('/services', 'App\Http\Controllers\BackEnd\ServiceController');
// Project category
Route::resource('/project_categories', 'App\Http\Controllers\BackEnd\ProjectCategoryController');
// Projects
Route::resource('/projects', 'App\Http\Controllers\BackEnd\ProjectController');




});





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Logout
Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('login');
 });
