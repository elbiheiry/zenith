<?php

use App\Http\Controllers\Site\{AboutController , AccessoryController, BundleController, CartController , CheckoutController , HomeController , PageController , ParentalController , PaymentController, ProfileController , StoreController};

use App\Http\Controllers\Site\Auth\{ForgotPasswordController , LoginController , RegisterController , ResetPasswordController , VerificationController};
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function()
{
    // Authentication Routes...
    Route::get('signin', [LoginController::class , 'showLoginForm'])->name('login');
    Route::post('signin', [LoginController::class , 'login']);
    Route::post('logout', [LoginController::class , 'logout'])->name('logout');

    // Registration Routes...
    Route::get('register', [RegisterController::class , 'showRegistrationForm'])->name('register');
    Route::post('register', [RegisterController::class , 'register']);

    // Password Reset Routes...
    Route::get('password/reset', [ForgotPasswordController::class , 'showLinkRequestForm'])->name('password.request');
    Route::post('password/email', [ForgotPasswordController::class , 'sendResetLinkEmail'])->name('password.email');
    Route::get('password/reset/{token}', [ResetPasswordController::class , 'showResetForm'])->name('password.reset');
    Route::post('password/reset', [ResetPasswordController::class , 'reset'])->name('password.update');

    // //social login routes..
    // Route::post('/facebook-login/{provider}' , [LoginController::class , 'facebook_login'])->name('login.facebook');
    // Route::get('/social-login//{provider}', [LoginController::class , 'redirectToProvider'])->name('login.redirect');
    // Route::get('/social-login/{provider}/callback', [LoginController::class , 'handleProviderCallback'])->name('login.callback');
    
    //verify email routes
    Route::get('email/verify', [VerificationController::class , 'show'])->name('verification.notice');
	Route::get('email/verify/{id}/{hash}', [VerificationController::class , 'verify'])->name('verification.verify');
	Route::post('email/resend',  [VerificationController::class , 'resend'])->name('verification.resend');

    //home page route
    Route::get('/' , [HomeController::class , 'index'])->name('index');

    //about us route
    Route::get('/about-us' , [AboutController::class , 'index'])->name('about');

    //parental purchse program route
    Route::get('/parental-purchase-program' , [ParentalController::class , 'index'])->name('parent');

    //school program route
    Route::get('school-program' , [ParentalController::class , 'program'])->name('school');
    Route::post('school-program' , [ParentalController::class , 'store'])->name('school');

    //static pages routes
    Route::get('/parental-program' , [PageController::class , 'parent'])->name('parent.program');
    Route::get('/privacy-policy' , [PageController::class , 'privacy'])->name('privacy');
    Route::get('/terms-and-conditions' , [PageController::class , 'terms'])->name('terms');
    Route::get('/return-and-refund-policy' , [PageController::class , 'refund'])->name('refund');
    Route::get('/delivery-and-shipping-policy' , [PageController::class , 'shipping'])->name('shipping');
    Route::get('/contact-us' , [PageController::class , 'contact'])->name('contact');
    Route::post('/contact-us/store' , [PageController::class , 'store'])->name('contact.store');

    //products routes
    Route::name('store')->prefix('store')->controller(StoreController::class)->middleware(['auth:site' , 'verified'])->group(function (){
        Route::get('/{slug}' , 'index');
        Route::get('/products/{slug}' , 'show')->name('.product');
        Route::post('/slider/change' , 'change_image')->name('.product.slider');
        Route::get('/search' , 'search')->name('.product.search');
        Route::post('/connectivities/{id}' , 'connectivities')->name('.product.connectivities');
        Route::post('/price/{id}' , 'price')->name('.product.price');        
    });

    //accessories routes
    Route::get('/store/accessories/{slug}' , [AccessoryController::class , 'show'])->name('store.accessory')->middleware(['auth:site' , 'verified']);
    Route::post('/store/accessories/price/{id}' , [AccessoryController::class , 'price'])->name('store.accessory.price')->middleware(['auth:site' , 'verified']);
    Route::post('/store/accessories/add-to-cart/{id}' , [AccessoryController::class , 'add_to_cart'])->name('store.accessory.cart.add');

    //bundle routes
    Route::get('/store/bundles/{slug}' , [BundleController::class , 'index'])->name('store.bundle');
    Route::post('/store/bundles/add-to-cart/{id}' , [BundleController::class , 'add_to_cart'])->name('store.bundle.cart.add');

    //cart routes
    Route::post('/add-to-cart/{id}' , [StoreController::class , 'add_to_cart'])->name('cart.add');
    Route::get('/cart' ,[CartController::class , 'index'])->name('cart');
    Route::get('/remove-from-cart/{id}' , [CartController::class , 'delete'])->name('cart.delete');
    Route::put('/update-cart' , [CartController::class , 'update_cart'])->name('cart.update');

    //checkout routes
    Route::name('checkout.')->prefix('checkout')->middleware(['auth:site' , 'verified'])->group(function (){
        Route::get('/' , [CheckoutController::class , 'index'])->name('index');
        Route::post('/store' , [CheckoutController::class , 'store'])->name('store');
    });

    //payment routes
    Route::name('payment.')->prefix('payment')->middleware(['auth:site' , 'verified'])->group(function (){
        Route::get('/' , [PaymentController::class , 'index'])->name('index');
        Route::get('/show-payment/{id}' , [PaymentController::class , 'showForm'])->name('showForm');
        Route::get('/callback', [PaymentController::class, 'callback'])->name('callback');
    });
    
    //profile routes
    Route::name('profile.')->prefix('profile')->middleware(['auth:site' , 'verified'])->group(function (){
        Route::get('/' , [ProfileController::class , 'index'])->name('index');
        Route::get('/orders-history' , [ProfileController::class , 'orders'])->name('orders');
        Route::get('/settings' , [ProfileController::class , 'settings'])->name('settings');
        Route::get('/edit' , [ProfileController::class , 'edit_profile'])->name('edit');
        Route::get('/orders/{id}', [ProfileController::class , 'show_order'])->name('orders.show');
        Route::get('/children' , [ProfileController::class , 'children'])->name('children');

        Route::post('/add-child' , [ProfileController::class , 'addChild'])->name('child');
        Route::get('/edit-child/{id}' , [ProfileController::class , 'showChild'])->name('child.edit');
        Route::put('/update-child/{id}' , [ProfileController::class , 'editChild'])->name('child.update');
        Route::put('/update' , [ProfileController::class , 'update_profile'])->name('update');
        Route::put('/update_password' , [ProfileController::class , 'update_password'])->name('update.password');
        Route::put('/update_email' , [ProfileController::class , 'update_email'])->name('update.email');

        Route::get('/delete-child/{id}' , [ProfileController::class , 'removeChild'])->name('child.remove');
    });
});