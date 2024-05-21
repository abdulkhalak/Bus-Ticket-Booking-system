<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CounterController;
use App\Http\Controllers\Backend\LocationController;
use App\Http\Controllers\Backend\PassengerController;
use App\Http\Controllers\Backend\PaymentController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\RouteController;
use App\Http\Controllers\Backend\TicketController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\WebpageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\ReportController;
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



// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END

//for webpage
Route::get('/', [WebpageController::class, 'homepage'])->name('homepage');
// CoustomerRegistration
Route::get('/userregistration', [UserController::class, 'customerlogin'])->name('coustomer.login');
Route::post('/coustomer-do-login', [UserController::class, 'coustomerdoLogin'])->name('coustomer.do.login');

// CoustomerLogin
Route::get('/loginuser', [UserController::class, 'loginuser'])->name('login.user');
Route::post('/user-do-login', [UserController::class, 'userdoLogin'])->name('user.do.login');

Route::get('/search', [WebpageController::class, 'search'])->name('search.form');

Route::get('/userseat', [WebpageController::class, 'userseat'])->name('user.seat');

Route::get('/seat/delete/{id}', [WebpageController::class, 'seatDelete'])->name('seat.delete');

Route::get('/all-products', [ProductController::class, 'allProducts'])->name('all.products');

Route::get('/about', [AboutController::class, 'about'])->name('about');

// Route::get('/report/list', [ProductController::class, 'list'])->name('product.list');
// Route::get('/report/create/form', [ProductController::class, 'createForm'])->name('product.create.form');

//About Page
Route::get('/about', [AboutController::class, 'about'])->name('about');

//Contact Page
Route::get('/contact', [AboutController::class, 'contact'])->name('contact');

//Brance Location Page
Route::get('/brancelocation', [AboutController::class, 'brancelocation'])->name('brance.location');

Route::group(['middleware' => 'passengerAuth'], function () {

    Route::get('/seat/{routeId}', [WebpageController::class, 'seat'])->name('seat');
    Route::post('/bookseat/{routeId}', [WebpageController::class, 'storebookseat'])->name('bookseat');
    //Coustomer UserProfile
    Route::get('/userprofile', [UserController::class, 'userprofile'])->name('user.profile');
    Route::get('/booking/details/{id}', [UserController::class, 'bookingDetails'])->name('booking.details');

    // Coustomer Logout
    Route::get('log-out', [UserController::class, 'logout'])->name('do.logout');
});


Route::group(['prefix' => 'admin'], function () {

    Route::get('/login', [UserController::class, 'login'])->name('admin.login');
    Route::post('/do-login', [UserController::class, 'doLogin'])->name('admin.do.login');

    Route::group(['middleware' => 'auth'], function () {

        Route::get('/', [HomeController::class, 'showHomePage'])->name('dashboard');

        Route::get('/order/list', [HomeController::class, 'orderList'])->name('order.list');

        //bus

        Route::get('/category/list', [CategoryController::class, 'list'])->name('category.list');
        Route::get('/category/form', [CategoryController::class, 'categoryForm'])->name('category.form');
        Route::post('/category/store', [CategoryController::class, 'categoryStore'])->name('category.store');
        //bus Edit
        Route::get('/category/edit/{id}', [CategoryController::class, 'categoryEdit'])->name('category.edit');

        Route::post('/category/update/{id}', [CategoryController::class, 'categoryUpdate'])->name('category.update');

        //bus delete
        Route::get('/bus/delete/{id}', [CategoryController::class, 'busdelete'])->name('bus.delete');

        //location

        Route::get('/location', [LocationController::class, 'Viewlocation'])->name('location');
        Route::post('/location/store', [LocationController::class, 'locationStore'])->name('location.store');
        Route::get('/location/data', [LocationController::class, 'locationData'])->name('location.data');

        //route

        Route::get('/route', [RouteController::class, 'viewRoute'])->name('route');
        Route::post('/route/store', [RouteController::class, 'storeRoute'])->name('route.store');
        Route::get('/route/data', [RouteController::class, 'routeData'])->name('route.data');

        //route view
        Route::get('/route/view/{id}', [RouteController::class, 'routeView'])->name('route.view');

        //route delet
        Route::get('/route/delete/{id}', [RouteController::class, 'routeDelete'])->name('route.delete');

        // route edit

        Route::get('/route/edit/{id}', [RouteController::class, 'routeEditview'])->name('route.edit.view');

        Route::put('/route/edit/update/{id}', [RouteController::class, 'routeEditViewUpdate'])->name('route.edit.view.update');

        //counter

        Route::get('/counter', [CounterController::class, 'ViewCounter'])->name('counter');
        Route::post('/counter/store', [CounterController::class, 'StoreCounter'])->name('counter.store');
        Route::get('/counter/data', [CounterController::class, 'CounterData'])->name('counter.data');

        //ticket
        Route::get('/ticket', [TicketController::class, 'ViewTicket'])->name('ticket');

      //passenger
        Route::get('/passenger', [PassengerController::class, 'ViewPassenger'])->name('passenger');

        //payment
        Route::get('/payment', [PaymentController::class, 'ViewPayment'])->name('payment');

        //report
        Route::get('/report', [ReportController::class, 'ViewReport'])->name('report');

        Route::get('sign-out', [UserController::class, 'signout'])->name('do.signout');
    });
});
