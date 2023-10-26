<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EnterpriseController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\RoleTypeController;
use App\Http\Controllers\Admin\SectionController;
use App\Http\Controllers\Admin\ShowProductController;
use App\Http\Controllers\Admin\SocialController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\SubSubCategoryController;
use App\Http\Controllers\Front\CartController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\OrderDetailsController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\WishController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\UserInfoController;
use App\Http\Controllers\Admin\ShippingController;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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


    Route::middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified'
    ])->group(function () {

        Route::resource('/dashboard', DashboardController::class);
        Route::resource('/company-info', CompanyController::class);
        Route::get('/user', [PermissionController::class,'index'])->name('user.index');
        Route::get('/user/status/{id}', [PermissionController::class,'status'])->name('user.status');
        Route::get('/user/edit/{id}', [PermissionController::class,'edit'])->name('user.edit');
        Route::put('/user/update/{id}', [PermissionController::class,'update'])->name('user.update');
        Route::get('/user/{id}', [PermissionController::class,'destroy'])->name('user.delete');
        Route::resource('/roletype', RoleTypeController::class);
        Route::resource('/role', RoleController::class);
        Route::resource('/section', SectionController::class);
        Route::resource('/social', SocialController::class);
        Route::resource('/userInfo', UserInfoController::class);
        Route::resource('/category', CategoryController::class);
        Route::resource('/sub-category', SubCategoryController::class);
        Route::resource('/sub-sub-category', SubSubCategoryController::class);
        Route::resource('/entrepreneurs', EnterpriseController::class);
        Route::resource('/product', ProductController::class);
        Route::resource('/banner', BannerController::class);
        Route::resource('/blog', BlogController::class);
        Route::resource('/show-product', ShowProductController::class);
        Route::resource('/cart', CartController::class);
        Route::get('/order', [OrderDetailsController::class,'index'])->name('order.index');
        Route::post('/role_getuser', [RoleController::class, 'roleGetuser'])->name('role.getuser');
        Route::post('/cart/update', [CartController::class, 'updateQuantity'])->name('cart.updateQuantity');
        Route::post('/get-sub-sub-category', [ProductController::class, 'getSubSubCategory'])->name('get-sub-sub-category');
        Route::post('/get-sub-category', [SubSubCategoryController::class, 'getSubCategory'])->name('get-sub-category');
        Route::post('/role_getuser', [RoleController::class, 'roleGetuser'])->name('role.getuser');
        Route::post('/order/details', [OrderDetailsController::class, 'storeOrderDetals'])->name('order.details');
        // Route::resource('/order', OrderDetailsController::class);


        //Route for shippings
        Route::get('/shippig',[ShippingController::class,'index'])->name('shipping.index');
        Route::get('/shippig/create',[ShippingController::class,'show'])->name('shipping.show');
        Route::POST('/store',[ShippingController::class,'store'])->name('shipping.store');
        Route::get('/shipping/{id}',[ShippingController::class,'delete'])->name('shipping.delete');
    });

    Route::get('/', [HomeController::class, 'home'])->name('home.index');
    Route::get('/single/product/{id}', [HomeController::class, 'show'])->name('single.product.show');
    Route::get('/wishproduct/{id}', [WishController::class, 'wishproduct'])->name('wishproduct.store');
    Route::resource('/wish', WishController::class);
    Route::get('/wish-delete', [WishController::class, 'delete'])->name('wish.delete');
    Route::get('/search', [HomeController::class, 'search'])->name('search');
    Route::get('/subCategory/{id}', [HomeController::class, 'subCategoryProduct'])->name('subCategoryProduct');
    Route::get('/search/category/{id}', [HomeController::class, 'categoryProduct'])->name('categoryProduct');
    Route::resource('/review', ReviewController::class);

    // SSLCOMMERZ Start
    Route::get('/checkout', [SslCommerzPaymentController::class, 'exampleEasyCheckout'])->name('order.now');
    Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

    Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
    Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

    Route::post('/success', [SslCommerzPaymentController::class, 'success']);
    Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
    Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

    Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
    //SSLCOMMERZ END

