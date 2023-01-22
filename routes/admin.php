<?php

use App\Http\Controllers\Admin\{
    AboutController , BenefitController , CapacityController , ColorController , DashboardController , MessageController ,
    OrderController , ParentController , PrivacyController , ProductController , ProductImageController , ProfileController , 
    ProgramController , RefundController , RegisterationController , SchoolController , SettingController , ShippingController , 
    SliderController , SocialLinkController , TermController , UserController , ProductSpecificationController , AccessoryController ,
    AccessoryImageController , AccessorySpecificationController,
    AramexController,
    BundleAccessoryController,
    BundleController,
    ContentController,
    HomeController,
    OfferController,
    WorkController
};
use Illuminate\Support\Facades\{Auth , Route};

Auth::routes(['register' => false]);

Route::middleware('auth:web')->group(function () {
    Route::get('/' , [DashboardController::class , 'index'])->name('dashboard');

    /**
     * profile routes
     */
    Route::prefix('profile')->name('profile.')->group(function ()
    {
        Route::get('/' , [ProfileController::class , 'index'])->name('index');
        Route::put('/update' , [ProfileController::class , 'update'])->name('update');
    });

    /**
     * settings routes
     */
    Route::prefix('site-settings')->name('settings.')->group(function ()
    {
        Route::get('/' , [SettingController::class , 'index'])->name('index');
        Route::put('/update' , [SettingController::class , 'update'])->name('update');
    });

    /**
     * about us route
     */
    Route::prefix('about-us')->name('about.')->controller(AboutController::class)->group(function ()
    {
        Route::get('/' , 'index')->name('index');
        Route::put('/update' , 'update')->name('update');
    });

    /**
     * messages routes
     */
    Route::prefix('messages')->name('messages.')->group(function ()
    {
        Route::get('/' , [MessageController::class , 'index'])->name('index');
        Route::get('/show/{message}' , [MessageController::class , 'show'])->name('show');
        Route::delete('/destroy/{message}' , [MessageController::class , 'destroy'])->name('delete');
    });

    /**
     * homepage routes
     */
    Route::prefix('home-page')->group(function (){
        /**
         * slider route
         */
        Route::resource('sliders' , SliderController::class)->except('create');

        /**
         * home content routes
         */
        Route::prefix('content')->name('home.')->group(function (){
            Route::get('/' , [HomeController::class , 'index'])->name('index');
            Route::put('/update' , [HomeController::class , 'update'])->name('update');
        });

        /**
         * benefits route
         */
        Route::resource('benefits' , BenefitController::class)->except('create');
    });
    
    /**
     * colors route
     */
    Route::resource('colors' , ColorController::class)->except('create');

    /**
     * capacities route
     */
    Route::resource('capacities' , CapacityController::class)->except('create');

    /**
     * school route
     */
    Route::resource('schools' , SchoolController::class);
    
    /**
     * school program routes
     */
    Route::prefix('school-program')->name('program.')->group(function (){
        Route::get('/' , [ProgramController::class , 'index'])->name('index');
        Route::put('/update' , [ProgramController::class , 'update'])->name('update');
    });

    /**
     * parental program routes
     */
    Route::prefix('parental-program')->name('parental.')->group(function (){
        Route::get('/' , [ParentController::class , 'index'])->name('index');
        Route::put('/update' , [ParentController::class , 'update'])->name('update');
    });

    /**
     * for-parents routes
     */
    Route::prefix('for-parents')->name('content.')->group(function (){
        Route::get('/' , [ContentController::class , 'index'])->name('index');
        Route::put('/update' , [ContentController::class , 'update'])->name('update');
    });
    
    /**
     * registeration requests routes
     */
    Route::prefix('registeration-requests')->name('requests.')->group(function ()
    {
        Route::get('/' , [RegisterationController::class , 'index'])->name('index');
        Route::get('/show/{register}' , [RegisterationController::class , 'show'])->name('show');
        Route::delete('/destroy/{id}' , [RegisterationController::class , 'destroy'])->name('delete');
    });

    /**
     * orders routes
     */
    Route::prefix('orders')->name('orders.')->group(function (){
        Route::get('/' , [OrderController::class , 'index'])->name('index');
        Route::get('/show/{order_no}' , [OrderController::class , 'show'])->name('show');
        Route::delete('/destroy/{id}' , [OrderController::class , 'destroy'])->name('delete');
    });

    Route::prefix('shippment')->name('shippment.')->controller(AramexController::class)->group(function (){
        Route::get('/{id}' , 'index')->name('index');
        Route::post('/shipping/{id}' , 'store')->name('store');
    });

    /**
     * products route
     */
    Route::resource('products' , ProductController::class);
    Route::prefix('/products/images')->name('products.images.')->controller(ProductImageController::class)->group(function (){
        Route::get('/{id}' , 'index')->name('index');
        Route::get('/edit/{id}' , 'edit')->name('edit');
        Route::post('/store/{id}' , 'store')->name('store');
        Route::put('/update/{id}' , 'update')->name('update');
        Route::delete('/destroy/{id}' , 'destroy')->name('destroy');
    });
    Route::prefix('/products/specifications')->name('products.specifications.')->controller(ProductSpecificationController::class)->group(function (){
        Route::get('/{id}' , 'index')->name('index');
        Route::get('/edit/{id}' , 'edit')->name('edit');
        Route::post('/store/{id}' , 'store')->name('store');
        Route::put('/update/{id}' , 'update')->name('update');
        Route::delete('/destroy/{id}' , 'destroy')->name('destroy');
    });

    /**
     * accessories route
     */
    Route::resource('accessories' , AccessoryController::class);
    Route::prefix('/accessories/images')->name('accessories.images.')->controller(AccessoryImageController::class)->group(function (){
        Route::get('/{id}' , 'index')->name('index');
        Route::get('/edit/{id}' , 'edit')->name('edit');
        Route::post('/store/{id}' , 'store')->name('store');
        Route::put('/update/{id}' , 'update')->name('update');
        Route::delete('/destroy/{id}' , 'destroy')->name('destroy');
    });
    Route::prefix('/accessories/specifications')->name('accessories.specifications.')->controller(AccessorySpecificationController::class)->group(function (){
        Route::get('/{id}' , 'index')->name('index');
        Route::get('/edit/{id}' , 'edit')->name('edit');
        Route::post('/store/{id}' , 'store')->name('store');
        Route::put('/update/{id}' , 'update')->name('update');
        Route::delete('/destroy/{id}' , 'destroy')->name('destroy');
    });

    /**
     * bundles route
     */
    Route::resource('bundles' , BundleController::class);
    Route::post('/bundles/products' ,[BundleController::class , 'specifications'])->name('bundles.products');
    Route::prefix('/bundles/accessories')->name('bundles.accessories.')->controller(BundleAccessoryController::class)->group(function (){
        Route::get('/{id}' , 'index')->name('index');
        Route::get('/edit/{id}' , 'edit')->name('edit');
        Route::post('/store/{id}' , 'store')->name('store');
        Route::put('/update/{id}' , 'update')->name('update');
        Route::delete('/destroy/{id}' , 'destroy')->name('destroy');
        Route::post('/specifications' , 'specifications')->name('specifications');
    });

    /**
     * social-links routes
     */
    Route::prefix('social-links')->name('links.')->group(function(){
        Route::get('/' , [SocialLinkController::class , 'index'])->name('index');
        Route::post('/store' , [SocialLinkController::class , 'store'])->name('store');
        Route::get('/edit/{id}' ,[SocialLinkController::class , 'edit'])->name('edit');
        Route::put('/update/{id}' , [SocialLinkController::class , 'update'])->name('update');
        Route::delete('/delete/{id}' , [SocialLinkController::class , 'destroy'])->name('delete');
    });

    /**
     * offers routes
     */
    Route::prefix('offers')->name('offers.')->group(function(){
        Route::get('/{type}' , [OfferController::class , 'index'])->name('index');
        Route::post('/store/{type}' , [OfferController::class , 'store'])->name('store');
        Route::get('/edit/{id}' ,[OfferController::class , 'edit'])->name('edit');
        Route::put('/update/{id}' , [OfferController::class , 'update'])->name('update');
        Route::delete('/delete/{id}' , [OfferController::class , 'destroy'])->name('destroy');
    });

    /**
     * how it works routes
     */
    Route::prefix('how-it-works')->name('work.')->group(function(){
        Route::get('/' , [WorkController::class , 'index'])->name('index');
        Route::post('/store' , [WorkController::class , 'store'])->name('store');
        Route::get('/edit/{id}' ,[WorkController::class , 'edit'])->name('edit');
        Route::put('/update/{id}' , [WorkController::class , 'update'])->name('update');
        Route::delete('/delete/{id}' , [WorkController::class , 'destroy'])->name('destroy');
    });

    /**
     * privacy-policy routes
     */
    Route::prefix('privacy-policy')->name('privacy.')->group(function ()
    {
        Route::get('/' , [PrivacyController::class , 'index'])->name('index');
        Route::put('/update' , [PrivacyController::class , 'update'])->name('update');
    });

    /**
     * terms-and-conditions routes
     */
    Route::prefix('terms-and-conditions')->name('terms.')->group(function ()
    {
        Route::get('/' , [TermController::class , 'index'])->name('index');
        Route::put('/update' , [TermController::class , 'update'])->name('update');
    });

    /**
     * return-and-refund-policy routes
     */
    Route::prefix('return-and-refund-policy')->name('refund.')->group(function ()
    {
        Route::get('/' , [RefundController::class , 'index'])->name('index');
        Route::put('/update' , [RefundController::class , 'update'])->name('update');
    });

    /**
     * delivery-and-shipping-policy routes
     */
    Route::prefix('delivery-and-shipping-policy')->name('shipping.')->group(function ()
    {
        Route::get('/' , [ShippingController::class , 'index'])->name('index');
        Route::put('/update' , [ShippingController::class , 'update'])->name('update');
    });

    Route::prefix('users')->name('users.')->controller(UserController::class)->group(function (){
        Route::get('/' , 'index')->name('index');
        Route::get('/show/{id}' , 'show')->name('show');
        Route::delete('/delete/{id}' , 'destroy')->name('delete');
    });
});
