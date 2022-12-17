<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ContinentController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\BridgeController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\GalaryController;
use App\Http\Controllers\Admin\TypebridgeController;
use App\Http\Controllers\Admin\PostController;
//Auth
use App\Http\Controllers\Auth\LoginController;

//Front
use App\Http\Controllers\Front\FGalaryController;
use App\Http\Controllers\Front\FBridgeController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\FPostController;
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
Route::get('/', [FBridgeController::class,'index']);



Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/index2', function () {
    return view('index2');
});
// Route::get('/', function () {
//     return view('admin.master');
// });
Route::prefix('front')->name('front.')->group(function () {
    Route::controller(HomeController::class)->group(function () {
        Route::get('contact', 'contact')->name('contact');
        
    });
    //Route::get('contact', 'HomeController@contact')->name('contact');

    Route::prefix('galary')->name('galary.')->controller(FGalaryController::class)->group(function () {
       
        Route::get('index', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');
        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });
    
    Route::prefix('bridge')->name('bridge.')->controller(FBridgeController::class)->group(function () {
       
        Route::get('index', 'index')->name('index');
        Route::get('detail/{id}', 'detail')->name('detail');
    });
    
    Route::prefix('post')->name('post.')->controller(FPostController::class)->group(function () {
        Route::get('index', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');
       
    });
});


Route::prefix('auth')->name('auth.')->group(function () {
    Route::get('login', [LoginController::class, 'showLogin'])->name('showLogin'); 
    Route::post('login', [LoginController::class, 'login'])->name('loginmodules'); 
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    
    Route::get('registration', [LoginController::class, 'show_registration'])->name('showCreateAcount'); //show
    Route::post('registrationCheck', [LoginController::class, 'registration'])->name('check_account'); //xu li 
});
//root của admin
Route::prefix('admin')->name('admin.')->group(function () {

    Route::prefix('continent')->name('continent.')->controller(ContinentController::class)->group(function () {
        Route::get('index', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');
        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });
    Route::prefix('typebridge')->name('typebridge.')->controller(TypebridgeController::class)->group(function () {
        Route::get('index', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');
        Route::get('destroy/{id}', 'destroy')->name('destroy');
       
    });
    Route::prefix('user')->middleware(['check-login-admin'])->name('user.')->controller(UserController::class)->group(function () {
        Route::get('index', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');
        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });

    Route::prefix('country')->name('country.')->controller(CountryController::class)->group(function () {
        Route::get('index', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');
        Route::get('destroy/{id}', 'destroy')->name('destroy');
        Route::get('getContinent', 'getContinent')->name('getContinent');
    });

    Route::prefix('bridge')->name('bridge.')->controller(BridgeController::class)->group(function () {
        Route::get('index', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');
        Route::get('destroy/{id}', 'destroy')->name('destroy');
        Route::get('gettype', 'gettype')->name('gettype');
        Route::get('getCountry', 'getCountry')->name('getCountry');

    });
    Route::prefix('post')->name('post.')->controller(PostController::class)->group(function () {
        Route::get('index', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');
        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });

    Route::prefix('comment')->name('comment.')->controller(CommentController::class)->group(function () {
        Route::get('index', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');
        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });

    Route::prefix('galary')->name('galary.')->controller(GalaryController::class)->group(function () {
        Route::get('index', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');
        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });
    Route::prefix('distance')->name('distance.')->controller(GalaryController::class)->group(function () {
        Route::get('index', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');
        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });
});
//root của front


