<?php



use App\Http\Controllers\AboutusController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\VendorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryContoller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\ProfileDashController;
use App\Http\Controllers\VendorrController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DiscountController;










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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


//-----------DASHBOARD---------
Route::resource('/category',CategoryContoller::class);
Route::resource('/product',ProductController::class);
Route::resource('/users',UserController::class);
Route::resource('/admin',AdminController::class);
Route::resource('/dash',DashController::class);
Route::resource('/profileAdmin',ProfileDashController::class);
Route::resource('/vendor',VendorrController::class);
Route::resource('/discount',DiscountController::class);







//--------Home page------------
Route::get('/index',[HomeController::class,'index']);

Route::get('/aboutus',[AboutusController::class,'index']);
Route::get('/shop/{id}',[ShopController::class,'index'])->name('allproduct');
// Route::match(['get', 'post'], '/allproduct/{id}', [ShopController::class, 'show_product'])->name('allproduct');
