<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\WriterController;
use App\Http\Controllers\User\DashboardController as UserDashboard;
use App\Http\Controllers\User\OrderController as UserOrder;
use App\Http\Controllers\User\PaymentController as UserPayment;
use App\Http\Controllers\User\SettingsController as UserSettings;
use App\Http\Controllers\Writer\DashboardController as WriterDashboard;
use App\Http\Controllers\Writer\OrderController as WriterOrder;
use App\Http\Controllers\Writer\SettingsController as WriterSettings;
use App\Mail\AdminUserOrder as WriterEmail;
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
Route::get('/email-user', function(){
    return new WriterEmail();
});

Route::get('/', function () {
    return Inertia::render('Web/Index', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
    ]);
})->name('home');

Route::get('about', function(){
    return Inertia::render('Web/About', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
    ]);
})->name('about');

Route::inertia('contact-us', 'Web/Contact')->name('contact');
Route::inertia('how-it-works', 'Web/Works')->name('works');
Route::inertia('writer', 'Web/Writers')->name('writers');
Route::inertia('terms-and-condition', 'Web/Terms')->name('terms');
Route::inertia('privacy-policy', 'Web/Policy')->name('policy');
Route::inertia('faq', 'Web/Faq')->name('faq');
Route::inertia('acceptance-use-policy', 'Web/UsePolicy')->name('usePolicy');

// Admin's Dashboard

Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function(){
    
    Route::get('dashboard', [DashboardController::class, 'dashboardAdmin'])->name('dashboard.admin');

    Route::controller(OrderController::class)->group(function() {
        Route::get('orders', 'ordersAdmin')->name('orders.admin');
        Route::get('completed-orders', 'completeOrders')->name('complete.orders');
        Route::get('all-orders', 'allOrders')->name('all.orders');
        Route::get('{id}/assign-orders', 'assignOrders')->name('assign.orders');
        Route::get('{writerId}/{id}/assign-orders', 'assignWriters')->name('assign.writers');
        Route::get('{order}/order-details', 'orderDetails')->name('order.details');
        Route::get('{user}/user-details', 'userDetails')->name('user.details');
    });

    Route::resource('users', UserController::class);
    Route::resource('writers', WriterController::class);
});

// User's Dashboard

Route::group(['middleware' => ['auth', 'user', 'verified'], 'prefix' => 'user'], function(){

    Route::get('dashboard', [UserDashboard::class, 'dashboardUser'])->name('dashboard.user');

    Route::controller(UserOrder::class)->group(function() {
        Route::get('make-order', 'makeOrder')->name('make.order');
        Route::post('store-order', 'storeOrder')->name('store.order');
        Route::get('orders', 'userOrders')->name('user.orders');
        Route::get('{order}/view-file', 'viewFileUser')->where('order', '[0-9]+')->name('view.file.user');
        Route::get('{order}/view-new-file', 'viewNewFileUser')->where('order', '[0-9]+')->name('view.new.file.user');
    });

    Route::controller(UserPayment::class)->group(function() {
        // The route that the button calls to initialize payment
        Route::post('paystack/initialize', 'initialize')->name('pay');

        // The callback url after a payment
        Route::get('paystack/callback', 'callback')->name('callback');

        Route::get('payment-history', 'paymentHistory')->name('payment.history');
    });

    Route::controller(UserSettings::class)->group(function() {
        Route::get('settings', 'userSettings')->name('user.settings'); 
    });
});

//Writer's Dashboard

Route::group(['middleware' => ['auth', 'writer', 'verified'], 'prefix' => 'writer'], function(){

    Route::get('dashboard', [WriterDashboard::class, 'dashboardWriter'])->name('dashboard.writer');

    Route::controller(WriterOrder::class)->group(function(){
        Route::get('orders', 'writerOrders')->name('writer.orders');
        Route::get('received-orders', 'receivedOrders')->name('received.orders');
        Route::get('{order}/accept-order', 'acceptOrder')->name('accept.order');
        Route::get('{order}/reject-order', 'rejectOrder')->name('reject.order');
        Route::get('{order}/view-file', 'viewFile')->where('order', '[0-9]+')->name('view.file');
        Route::get('{order}/upload-order', 'uploadOrder')->name('upload.order');
        Route::put('{order}/upload-file', 'uploadFile')->name('upload.file');
        Route::get('{order}/order-details', 'orderDetails')->name('order.details.writer');
    });

    Route::controller(WriterSettings::class)->group(function(){
        Route::get('settings', 'writerSettings')->name('writer.settings');
    });
});

require __DIR__.'/auth.php';
