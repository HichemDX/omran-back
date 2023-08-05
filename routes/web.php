<?php

use App\Models\Order;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\StoreController;
use App\Http\Controllers\Admin\UniteController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\SliderOffresController;

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

Route::get('/stg', function(){
    $targetFolder = $_SERVER['DOCUMENT_ROOT'].'/storage/app/public';
    $linkFolder = $_SERVER['DOCUMENT_ROOT'].'/public/storage';
    symlink($targetFolder, $linkFolder);
    return 'success';
});


Route::get('/', function () {
    return view('welcome');
    // return redirect('/admin');
})->name('welcome');

Route::get('/privacy', function () {
    return view('privacy');
});



Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->name('language');


/** Start Admin Routes*/
Route::prefix('admin')->group(function () {

    Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'loginPost'])->name('admin.loginpost');


    Route::middleware('admin')->group(function () {
        Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');

        Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');

        Route::prefix('stores')->group(function () {

            Route::get('/', [StoreController::class, 'allStores'])->name('admin.stores.all');
            Route::get('/datatables', [StoreController::class, 'allStoresDatatables'])->name('admin.stores.alldatatables');

            Route::get('/new', [StoreController::class, 'newStores'])->name('admin.stores.new');
            Route::get('/newdatatables', [StoreController::class, 'newStoresDatatables'])->name('admin.stores.newdatatables');

            Route::get('/pendingdatatables', [StoreController::class, 'pendingStoresDatatables'])->name('admin.stores.pendingdatatables');

            Route::get('/confirmed', [StoreController::class, 'confirmedStores'])->name('admin.stores.confirmed');
            Route::get('/confirmeddatatables', [StoreController::class, 'confirmedStoresDatatables'])->name('admin.stores.confirmeddatatables');

            Route::get('/refused', [StoreController::class, 'refusedStores'])->name('admin.stores.refused');
            Route::get('/refuseddatatables', [StoreController::class, 'refusedStoresDatatables'])->name('admin.stores.refuseddatatables');

            Route::get('/banned', [StoreController::class, 'bannedStores'])->name('admin.stores.banned');
            Route::get('/banneddatatables', [StoreController::class, 'bannedStoresDatatables'])->name('admin.stores.banneddatatables');
            Route::get('/banneddatatables/{status}', [StoreController::class, 'bannedStoresDatatablesstatus'])->name('admin.stores.banneddatatablesstatus');

            Route::patch('status/{id}', [StoreController::class, 'updateStatus'])->name('admin.stores.updateStatus');
            Route::patch('statusBan/{id}', [StoreController::class, 'updateStatusBan'])->name('admin.stores.updateStatusBan');
            Route::post('ban', [StoreController::class, 'updateBan'])->name('admin.stores.updateBan');


            Route::get('/details/{id}', [StoreController::class, 'oneStores'])->name('admin.stores.one');
        });

        Route::get('/categories', [CategoryController::class, 'categories'])->name('admin.categories');
        Route::patch('/categoriesonoff/{id}', [CategoryController::class, 'categoriesonoff'])->name('admin.categoriesonoff');
        Route::get('/categoriesdatatables', [CategoryController::class, 'categoriesDatatables'])->name('admin.categoriesdatatables');
        Route::get('/subCategories', [CategoryController::class, 'subCategories'])->name('admin.subCategories');
        Route::get('/subCategoriesdatatables', [CategoryController::class, 'subCategoriesDatatables'])->name('admin.subCategoriesdatatables');
        Route::post('/deletecategories', [CategoryController::class, 'deletecategories'])->name('admin.deletecategories');
        Route::post('/updatecategories', [CategoryController::class, 'updatecategories'])->name('admin.updatecategories');
        Route::post('/categories', [CategoryController::class, 'postcategories'])->name('admin.postcategories');
        Route::prefix('customers')->group(function () {
            Route::get('/', [CustomerController::class, 'allCustomers'])->name('admin.customers.all');
            Route::get('/datatables', [CustomerController::class, 'allCustomersDatatables'])->name('admin.customers.alldatatables');

            Route::get('/banned', [CustomerController::class, 'bannedCustomers'])->name('admin.customers.banned');
            Route::get('/banneddatatables', [CustomerController::class, 'bannedCustomersDatatables'])->name('admin.customers.banneddatatables');

            Route::post('ban', [CustomerController::class, 'updateBan'])->name('admin.customers.updateBan');
            Route::get('/details/{id}', [CustomerController::class, 'oneCustomer'])->name('admin.customers.one');

        });

        Route::get('/products', [ProductController::class, 'products'])->name('admin.products');
        Route::get('/productsdatatables', [ProductController::class, 'allProductsDatatables'])->name('admin.productsdatatables');
        Route::get('/productsdatatables/{id}', [ProductController::class, 'allProductsByStoreDatatables'])->name('admin.productsbystoredatatables');
        Route::get('/products/details/{id}', [ProductController::class, 'oneProducts'])->name('admin.products.one');
        Route::post('/deleteproducts', [ProductController::class, 'deleteproducts'])->name('admin.deleteproducts');

        Route::prefix('images')->group(function () {
            Route::post('/delete', [ImageController::class, 'delete'])->name('admin.images.delete');
        });

        Route::get('/orders', [OrderController::class, 'orders'])->name('admin.orders');
        Route::get('/ordersdatatables', [OrderController::class, 'allOrdersDatatables'])->name('admin.ordersdatatables');
        Route::get('/ordersstoredatatables/{id}', [OrderController::class, 'allOrderByStoreDatatables'])->name('admin.orderbystoredatatables');
        Route::get('/orderscustomerdatatables/{id}', [OrderController::class, 'allOrdersByCustomerDatatables'])->name('admin.ordersbycustomerdatatables');
        Route::get('orders/details/{id}', [OrderController::class, 'oneOrder'])->name('admin.orders.one');

        Route::prefix('settings')->group(function () {
            Route::get('/privacy', [SettingController::class, 'privacy'])->name('admin.settings.privacy');
            Route::post('/privacy', [SettingController::class, 'postprivacy'])->name('admin.settings.postprivacy');
            Route::get('/terms', [SettingController::class, 'terms'])->name('admin.settings.terms');
            Route::post('/terms', [SettingController::class, 'postterms'])->name('admin.settings.postterms');
            Route::get('/about', [SettingController::class, 'about'])->name('admin.settings.about');
            Route::post('/about', [SettingController::class, 'postabout'])->name('admin.settings.postabout');
            Route::get('/informations', [SettingController::class, 'informations'])->name('admin.settings.informations');
            Route::post('/postinformations', [SettingController::class, 'postinformations'])->name('admin.settings.postinformations');
        });

        Route::prefix('sliders')->group(function () {
            Route::get('/', [SliderController::class, 'all'])->name('admin.sliders.all');
            Route::get('/slidersdatatables', [SliderController::class, 'allSlidersDatatables'])->name('admin.sliders.alldatatables');
            Route::post('/postslider', [SliderController::class, 'postslider'])->name('admin.sliders.postslider');
            Route::post('/deletesliders', [SliderController::class, 'deletesliders'])->name('admin.sliders.deletesliders');
            Route::post('/updatesliders', [SliderController::class, 'updatesliders'])->name('admin.sliders.updatesliders');
        });

        Route::prefix('offres')->group(function () {
            Route::get('/', [SliderOffresController::class, 'all'])->name('admin.offres.all');
            Route::get('/offresdatatables', [SliderOffresController::class, 'allOffresDatatables'])->name('admin.offres.alldatatables');
            Route::post('/postoffre', [SliderOffresController::class, 'postoffre'])->name('admin.offres.postoffre');
            Route::post('/deleteoffres', [SliderOffresController::class, 'deleteoffres'])->name('admin.offres.deleteoffres');
            Route::post('/updateoffres', [SliderOffresController::class, 'updateoffres'])->name('admin.offres.updateoffres');
        });

        Route::prefix('profile')->group(function () {
            Route::get('/', [ProfileController::class, 'profile'])->name('admin.profile.profile');
            Route::post('/updateemail', [ProfileController::class, 'updateemail'])->name('admin.profile.updateemail');
            Route::post('/updatepassword', [ProfileController::class, 'updatepassword'])->name('admin.profile.updatepassword');
        });

        Route::prefix('reports')->group(function () {
            Route::get('/store', [ReportController::class, 'onstores'])->name('admin.reports.store');
            Route::get('/general', [ReportController::class, 'general'])->name('admin.reports.general');
            Route::get('/reportsdatatables', [ReportController::class, 'reportsDatatables'])->name('admin.reports.reportsdatatables');
            Route::get('/allreportsdatatables', [ReportController::class, 'allreportsDatatables'])->name('admin.reports.allreportsdatatables');
            Route::post('/deletereport', [ReportController::class, 'deletereport'])->name('admin.reports.deletereport');
        });

        Route::prefix('unites')->group(function () {
            Route::get('/', [UniteController::class, 'all'])->name('admin.unites.all');
            Route::post('/updateunite', [UniteController::class, 'updateunite'])->name('admin.unites.updateunite');
            Route::post('/deleteunite', [UniteController::class, 'deleteunite'])->name('admin.unites.deleteunite');
            Route::post('/postunite', [UniteController::class, 'postunite'])->name('admin.unites.postunite');
            Route::get('/unitesdatatables', [UniteController::class, 'unitesDatatables'])->name('admin.unites.unitesdatatables');
        });

    });

});
/** End AdminRoutes */
