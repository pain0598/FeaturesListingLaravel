<?php

use App\Http\Controllers\RenterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[RenterController::class,'index'])->name('home');
Route::get('property-listing',[RenterController::class,'propertyListing'])->name('property-listing');
Route::get('renter-dashboard',[RenterController::class,'renterDashboard'])->name('renter-dashboard');
Route::get('add-property',[RenterController::class,'addProperty'])->name('add-property');
Route::get('add-property-details',[RenterController::class,'addPropertyDetails'])->name('add-property-details');

Route::get('login',[RenterController::class,'login'])->name('login');
Route::get('register',[RenterController::class,'register'])->name('register');
Route::get('about-us',[RenterController::class,'aboutUs'])->name('about-us');
Route::get('contact-us',[RenterController::class,'contactUs'])->name('contact-us');
Route::get('privacy-terms',[RenterController::class,'privacyTerms'])->name('privacy-terms');
Route::get('equal-housing',[RenterController::class,'equalHousing'])->name('equal-housing');
Route::get('my-favorites',[RenterController::class,'myFavorites'])->name('my-favorites');
Route::get('dashboard',[RenterController::class,'dashboard'])->name('dashboard');
Route::get('notes-messages',[RenterController::class,'noteMessages'])->name('notes-messages');
