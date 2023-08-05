<?php

use App\Http\Controllers\api\StoreRatingController;
use App\Http\Controllers\api_store\ApiStoreLoginController;
use App\Models\Store;
use App\Models\Product;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\ApiAuthController;
use App\Http\Controllers\api\ApiHomeController;
use App\Http\Controllers\api\ApiOrderController;
use App\Http\Controllers\api\ApiStoreController;
use App\Http\Controllers\api\ApiReportController;
use App\Http\Controllers\api\ApiWilayaController;
use App\Http\Controllers\api\ApiCommuneController;
use App\Http\Controllers\api\ApiProductController;
use App\Http\Controllers\api\ApiSettingController;
use App\Http\Controllers\api\ApiCategoryController;
use App\Http\Controllers\api\ApiCustomerController;
use App\Http\Controllers\admin\SliderOffresController;
use App\Http\Controllers\api_store\ApiUniteController;
use App\Http\Controllers\api\ApiCustomerLoginController;
use App\Http\Controllers\api_store\ApiStoreHomeController;
use App\Http\Controllers\api_store\ApiStoreOffreController;
use App\Http\Controllers\api_store\ApiStoreOrdersController;
use App\Http\Controllers\api_store\ApiStoreProfileController;
use App\Http\Controllers\api_store\ApiProductImagesController;
use App\Http\Controllers\api_store\ApiStoreCategoryController;
use App\Http\Controllers\api_store\ApiStoreProductsController;
use App\Http\Controllers\api\ApiCustomerNotificationController;
use App\Http\Controllers\api_store\ApiStoreNotificationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
  return $request->user();
});


Route::get('/token_store', function (Request $request) {
  $cust = Store::first();
  return $cust->createToken($cust->name)->plainTextToken;
});
Route::get('/token_store/{id}', function (Request $request, $id) {
  $cust = Store::findOrFail($id);
  return $cust->createToken($cust->name)->plainTextToken;
});
Route::get('/token_user', function (Request $request) {
  $cust = Customer::first();
  return $cust->createToken($cust->name)->plainTextToken;
});
Route::get('/token_user/{id}', function (Request $request, $id) {
  $cust = Customer::findOrFail($id);
  return $cust->createToken($cust->name)->plainTextToken;
});
Route::get('/prod', function (Request $request) {
  $cust = Product::with('images')->first();
  return $cust;
});

Route::get('/get_customers', function (Request $request) {
  return Customer::all();
});
Route::get('/delete_customer/{id}', function (Request $request, $id) {
  $bb = Customer::findOrFail($id)->delete();
  return $bb ? 'success' : 'error';
});
Route::get('/delete_all_customers', function (Request $request) {
  $bb = Customer::all();
  foreach ($bb as $value) {
    $value->delete();
  }
  return 'success';
});

// Customer apis
Route::get('/search', [ApiProductController::class, 'api_search']);
Route::get('/products_stor', [ApiProductController::class, 'api_products_stor']);
Route::get('/home', [ApiHomeController::class, 'api_home']);
Route::get('/categories_all', [ApiCategoryController::class, 'api_categories']);
Route::get('/categories_by_store/{id}', [ApiCategoryController::class, 'api_categories_by_store']);
Route::get('/soucategory', [ApiCategoryController::class, 'api_soucategory']);
Route::get('/magasins', [ApiStoreController::class, 'api_magasins']);
Route::get('/wilaya', [ApiWilayaController::class, 'api_wilaya']);
Route::get('/commune', [ApiCommuneController::class, 'api_commune']);
Route::get('/Termes', [ApiSettingController::class, 'api_Termes']);
Route::get('/about', [ApiSettingController::class, 'api_about']);
Route::get('/questions', [ApiSettingController::class, 'api_questions']);
Route::get('/info_app', [ApiSettingController::class, 'api_info_app']);
Route::post('/confirmation_commande', [ApiOrderController::class, 'api_confirmation_commande']);
Route::get('/store_info_by_id/{id}', [StoreController::class, 'show']);

Route::middleware('auth:customer')->group(function () {
  Route::get('/favorites', [ApiProductController::class, 'api_favorites']);
  Route::post('/set_favorite', [ApiProductController::class, 'api_set_favorite']);
  Route::post('/remove_favorite', [ApiProductController::class, 'api_remove_favorite']);
  Route::get('/get_my_info', [ApiCustomerController::class, 'api_get_my_info']);
  Route::post('/set_my_info', [ApiCustomerController::class, 'api_set_my_info']);
  Route::get('/commands', [ApiOrderController::class, 'api_commands']);
  Route::get('/info_command', [ApiOrderController::class, 'api_info_command']);
  Route::get('/notifications', [ApiCustomerNotificationController::class, 'api_notifications']);
  Route::get('/notification_read', [ApiCustomerNotificationController::class, 'api_read_notification']);
  Route::post('/cancel_order', [ApiOrderController::class, 'api_cancel_order']);
  Route::post('/rate', [StoreRatingController::class, 'store']);
  Route::get('/{storeId}/ratings', [StoreRatingController::class, 'show']);
  Route::get('/logout', [ApiCustomerLoginController::class, 'logout']);
});
Route::get('/products_category', [ApiProductController::class, 'api_products_category']);

Route::post('/register', [ApiAuthController::class, 'register']);
Route::post('/sendcode', [ApiAuthController::class, 'sendCode'])->middleware('auth:sanctum');
Route::post('/confirmcode', [ApiAuthController::class, 'confirmcode'])->middleware('auth:sanctum');

Route::post('/report', [ApiReportController::class, 'report'])->middleware('auth:sanctum');

Route::post('/resetpassword', [ApiAuthController::class, 'resetpassword']);
Route::post('/changepassword', [ApiAuthController::class, 'changepassword']);

Route::post('/login', [ApiCustomerLoginController::class, 'login']);
Route::post('/first_login', [ApiCustomerLoginController::class, 'first_login']);

Route::get('/store_info_by_id/{id}', [ApiStoreController::class, 'show']);

// Store apis
Route::prefix('store')->group(function () {
  Route::middleware('auth:store')->group(function () {
    Route::get('/home', [ApiStoreHomeController::class, 'home']);
    Route::get('/logout', [ApiStoreLoginController::class, 'logout']);
    Route::get('/get_my_info', [ApiStoreProfileController::class, 'api_get_my_info']);
    Route::post('/set_my_info', [ApiStoreProfileController::class, 'api_set_my_info']);
    Route::post('/delivery', [ApiStoreProfileController::class, 'api_delivery']);

    Route::get('/get_delivery_wilayas', [ApiStoreProfileController::class, 'api_delivery_get_wilayas']);
    Route::post('/add_wilayas', [ApiStoreProfileController::class, 'api_delivery_add_wilayas']);
    Route::post('/update_commune_wilaya', [ApiStoreProfileController::class, 'api_delivery_update_commune_wilaya']);
    Route::post('/delete_communes', [ApiStoreProfileController::class, 'api_delivery_delete_communes']);

    Route::get('/notifications', [ApiStoreNotificationController::class, 'api_notifications']);
    Route::get('/notification_read', [ApiStoreNotificationController::class, 'api_read_notification']);
  });
  Route::get('/sliders_offers', [ApiStoreOffreController::class, 'index']);
  Route::post('/login', [ApiStoreLoginController::class, 'login']);
});

Route::prefix('product')->group(function () {
  Route::middleware('auth:store')->group(function () {
    Route::post('/delete', [ApiStoreProductsController::class, 'delete']);
  });
});

Route::prefix('products')->group(function () {
  Route::middleware('auth:store')->group(function () {
    Route::get('/', [ApiStoreProductsController::class, 'products']);
    Route::get('/image/delete/{id}', [ApiProductImagesController::class, 'delete']);
    Route::post('/store', [ApiStoreProductsController::class, 'store']);
    Route::post('/update', [ApiStoreProductsController::class, 'update']);
  });
});

Route::prefix('categories')->group(function () {
  Route::middleware('auth:store')->group(function () {
    Route::get('/', [ApiStoreCategoryController::class, 'bystore']);
  });
});

Route::middleware('auth:store')->group(function () {
  Route::get('/orders', [ApiStoreOrdersController::class, 'orders']);
  Route::get('/one_order', [ApiStoreOrdersController::class, 'api_one_command']);
  Route::post('/order/change_status', [ApiStoreOrdersController::class, 'change_status']);
});

Route::resource('unites', ApiUniteController::class);



Route::post('/test/notification', function (Request $request) {
  $fields = $request->validate([
    "store_token" => 'string|nullable',
    "store_id" => 'integer|nullable',
    "customer_id" => 'integer|nullable',
    "customer_token" => 'string|nullable',
  ]);

  notificationStatusOrder($request->input('store_token'), $request->input('store_id'), $request->input('customer_id'), $request->input('customer_token'));
  return response('done', 200);
});
