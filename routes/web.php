<?php

use App\Http\Controllers\Checkout;
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



Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('user/delete/{user_id}', 'HomeController@userdelete')->name('user.delete');

// Profile controller route start
Route::resource('profile','ProfileController');
Route::post('profile/name/post', 'ProfileController@profilenamechange')->name('profile.name.post');
Route::post('profile/photo/post', 'ProfileController@profilephotopost')->name('profile.photo.post');
Route::post('profile/password/post', 'ProfileController@profilepasswordpost')->name('profile.password.post');

// FrontendController route start
Route::get('/', 'FrontendController@index')->name('/');
Route::get('about', 'FrontendController@about')->name('about');
Route::get('music', 'FrontendController@music')->name('music');
Route::get('shop', 'FrontendController@shop')->name('shope');
Route::get('product/details/{id}', 'FrontendController@productdetails')->name('product.details');
Route::get('customer/register', 'FrontendController@customerregister')->name('customer.register');
Route::get('customer/login', 'FrontendController@customerlogin')->name('customer.login');
Route::get('contact', 'FrontendController@contact')->name('contact');
Route::post('contact/store', 'FrontendController@contactstore')->name('contact.store');
Route::post('customer/add/register/', 'FrontendController@customerregisterstore')->name('customer.register.store');
Route::post('review/add','FrontendController@reviewpost')->name('review.post');


// cart controller start
Route::post('cart/store', 'CartController@cartadd')->name('cart.store');
Route::get('cart', 'CartController@index')->name('cart.index');
Route::get('cart/remove/{id}', 'CartController@remove')->name('cart.remove');
Route::post('cart/update', 'CartController@update')->name('cart.update');


// Customer route start
Route::get('customer/dashboard', 'CustomerController@dashboard')->name('customer.dashbaord');
Route::get('customer/invoice/download/{id}', 'CustomerController@customerinvoicedownload')->name('customer.invoice.download');


// checkout controller route start
Route::get('checkout','CheckoutController@index')->name('checkout.index');
Route::post('checkout/store','CheckoutController@store')->name('checkout.store');


// Contact Messages controller route start
Route::get('deshboard/contact/messages', 'Contact_message@contactmessage')->name('contact.message');
Route::get('deshboard/contact/messages/delete/{id}', 'Contact_message@contactmessagesdelete')->name('contact.messages.delete');
Route::get('deshboard/contact/messages/view/{id}', 'Contact_message@contactmessagesview')->name('contact.messages.view');

// stripecontroller  route start
Route::get('stripe', 'StripePaymentController@stripe');
Route::post('stripe', 'StripePaymentController@stripePost')->name('stripe.post');



// Order controller route starty
Route::resource('order', 'OrderController');
Route::get('order/cancel/{id}', 'OrderController@ordercancel')->name('order.cancel');

