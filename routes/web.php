<?php



use App\Http\Controllers\AboutusController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\LoginDash;
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
use App\Http\Controllers\ContactusController;










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
Route::resource('/category',CategoryContoller::class)->middleware('isLoggedIn');
Route::resource('/product',ProductController::class)->middleware('isLoggedIn');
Route::resource('/users',UserController::class)->middleware('isLoggedIn');
Route::resource('/admin',AdminController::class)->middleware('isLoggedIn');
Route::resource('/dash',DashController::class)->middleware('isLoggedIn');
Route::resource('/profileAdmin',ProfileDashController::class)->middleware('isLoggedIn');
// Route::get('/image',[ProfileDashController::class,'image']);
Route::resource('/vendor',VendorrController::class)->middleware('isLoggedIn');
Route::resource('/discount',DiscountController::class)->middleware('isLoggedIn');
// -------logindash--------
Route::get('/logindash',[LoginDash::class,'login'])->name('logindash')->middleware('alreadyLoggedIn');
Route::post('/logindashboard',[LoginDash::class,'logindash'])->name('dash');
Route::get('/dashboard',[LoginDash::class,'dashboard'])->middleware('isLoggedIn');
Route::get('/logout',[LoginDash::class,'logout'])->name('logoutt');








//--------Home page------------
Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/aboutus',[AboutusController::class,'index'])->name('about');
Route::get('/contactus',[ContactusController::class,'index'])->name('contact');
Route::get('/shop/{id}',[ShopController::class,'index'])->name('allproduct');
Route::get('/detail/{id}',[ShopController::class,'singleproduct'])->name('productdetail');
