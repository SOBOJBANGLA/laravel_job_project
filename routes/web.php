<?php

use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\CompanyController;
use App\Http\Controllers\backend\Employeer\VacancyController;
use App\Http\Controllers\backend\EmployeerController;
use App\Http\Controllers\backend\JobController;
use App\Http\Controllers\backend\JobtypeController;
use App\Http\Controllers\backend\LocationController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\JobslistController;
use App\Http\Controllers\ProfileController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('jobs', [JobslistController::class, 'index'])->name('jobs');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/search', [JobslistController::class, 'search'])->name('search');



// Route::get('front_register', [CandidateController::class, 'register'])->name('candidate_register');

// Route::post('/process-register',[CandidateController::class,'processRegistration'])->name('processRegistration');



Route::group(['prefix' => '/'],function(){

    //guest route
    Route::group(['middleware' => 'guest'],function(){

        Route::get('front_register', [CandidateController::class, 'register'])->name('candidate_register');
        Route::post('front_register', [CandidateController::class, 'store']);

        Route::get('front_login', [CandidateController::class, 'login'])->name('candidate_login_form');
        Route::post('authenticate',[CandidateController::class,'authenticate'])->name('authenticate');  

    });

    //Authenticate route
    Route::group(['middleware' => 'auth'],function(){
        Route::get('logout',[CandidateController::class,'logout'])->name('user_logout');
        Route::get('profile_setting', [HomeController::class, 'profile_setting'])->name('profile_setting'); 
        Route::get('profile_create', [CandidateController::class,'candidateCreate'])->name('profile_create');
         Route::post('profile_store', [CandidateController::class,'candidateStore'])->name('profile_store');
         Route::get('user_profile', [CandidateController::class,'user_profile'])->name('user_profile');
         Route::get('editProfile',[CandidateController::class,'editProfile'])->name('editProfile');
         Route::post('editProfile',[CandidateController::class,'updateProfile'])->name('updateProfile');

//          Route::post('/updateProfile/{user}', [ProfileController::class, 'update'])->name('updateProfile');

// Route::patch('/updateProfile/{user}', [ProfileController::class, 'update'])->name('updateProfile');


    });

});

// Route::middleware('guest:user')->prefix('/')->group( function () {

//     Route::get('front_register', [CandidateController::class, 'register'])->name('candidate_register');
//     Route::post('front_register', [CandidateController::class, 'store']);

//     Route::get('front_login', [CandidateController::class, 'login'])->name('candidate_login_form');
//      Route::post('authenticate',[CandidateController::class,'authenticate'])->name('authenticate');  

// });

// Route::middleware('auth:user')->prefix('/')->group( function () {

//     Route::get('profile_setting', [HomeController::class, 'profile_setting'])->name('profile_setting');
//     Route::get('logout',[CandidateController::class,'logout'])->name('user_logout');


// });

//Admin Dashboard

Route::get('/admin/dashboard', function () {
    return view('backend.admin_dashboard');
})->middleware(['auth:admin'])->name('admin_dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Admin Login:Logout

Route::middleware('guest:admin')->prefix('admin')->group( function () {

    Route::get('login', [App\Http\Controllers\Auth\Admin\LoginController::class, 'login'])->name('admin.login');
    Route::post('login', [App\Http\Controllers\Auth\Admin\LoginController::class, 'check_user']);


});

Route::middleware('auth:admin')->prefix('admin')->group( function () {

    Route::post('logout', [App\Http\Controllers\Auth\Admin\LoginController::class, 'logout'])->name('admin.logout');

    Route::view('/admin/dashboard','backend.admin_dashboard');
    Route::resource('/company',CompanyController::class);
    Route::resource('/category',CategoryController::class);
    Route::resource('/jobtype',JobtypeController::class);
    Route::resource('/location',LocationController::class);
    Route::resource('/job',JobController::class);
    Route::resource('/employeer',EmployeerController::class);
    Route::get('/report-form', [AdminController::class, 'showReportForm'])->name('admin.report.form');
    Route::get('/report', [AdminController::class, 'generateReport'])->name('admin.report');


});

//Doctor routes

Route::middleware('guest:employeer')->prefix('employeer')->group( function () {

    Route::get('login', [App\Http\Controllers\Auth\Employeer\LoginController::class, 'login'])->name('employeer.login');
    Route::post('login', [App\Http\Controllers\Auth\Employeer\LoginController::class, 'check_user']);

    Route::get('register', [App\Http\Controllers\Auth\Employeer\RegisterController::class, 'create'])->name('employeer.register');
    Route::post('register', [App\Http\Controllers\Auth\Employeer\RegisterController::class, 'store']);

    

});

Route::middleware('auth:employeer')->prefix('employeer')->group( function () {
    Route::get('/profile', [App\Http\Controllers\Auth\Employeer\ProfileController::class, 'employeerprofile'])->name('employeer.profile');
    Route::post('/profile/store', [App\Http\Controllers\Auth\Employeer\ProfileController::class, 'employeerprofilestore'])->name('employeer.profile.store');
    Route::post('/profile/store', [App\Http\Controllers\Auth\Employeer\ProfileController::class, 'changepasswordstore'])->name('employeer.profile.store');
    Route::resource('/vacancy',VacancyController::class);
    Route::post('logout', [App\Http\Controllers\Auth\Employeer\LoginController::class, 'logout'])->name('employeer.logout');
    
    Route::view('/dashboard','backend.employeer_dashboard');

});



