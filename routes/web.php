<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminCourseController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseMaterialController;
use App\Http\Controllers\CourseMaterialDetailController;
use App\Http\Controllers\BootcampController;
use App\Http\Controllers\OwnCourseController;

Route::get('/', function () {
    return view('/template/layout');
});

Route::get('/home', function () {
    return view('home');
})->name('home');


Route::get('/login', [UserController::class, 'loginView']);
Route::post('/user/login', [UserController::class, 'login'])->name('UserLogin');

Route::get('/register', [UserController::class, 'registerView']);
Route::post('/user/register', [UserController::class, 'register'])->name('UserRegister');

Route::get('/bootcamp', function () {
    return view('bootcamp.bootcamp');
});

Route::prefix('bootcamp')->group(function(){
    Route::get('/menu', [BootcampController::class,'bootcampMenu']);
    Route::get('/list', [BootcampController::class,'bootcampList']);
    Route::get('/detail/{id}', [BootcampController::class,'bootcampDetail'])->name('bootcampDetail');
});

Route::post('/checkout', [SubscriptionController::class, 'checkoutSubs'])->name('checkout');
Route::post('/checkout-success', [SubscriptionController::class, 'checkoutSuccess'])->name('checkoutSuccess');


Route::get('/search-result', [CourseController::class, 'search'])->name('search');

Route::prefix('/profile')->group(function(){
    Route::get('/manage', function () {
        return view('profile.manage');
    });
    Route::get('/edit', function () {
        return view('profile.edit');
    });
    Route::get('/certificate', function () {
        return view('profile.certificate');
    });
});

Route::prefix('course')->group(function(){
    Route::get('/subs',[SubscriptionController::class, 'getSubs']);
    Route::get('/menu', [CourseController::class,'courseMenu']);
    Route::get('/view/{id}', [CourseController::class,'courseView'])->name('courseView');
    Route::get('/detail/{id}', [CourseMaterialController::class,'courseMaterial'])->name('courseMaterial');
    Route::get('/media', function () {
        return view('course.media');
    });
});

Route::get('/mylearning', [OwnCourseController::class, 'myLearning']);


Route::prefix('admin')->group(function(){
    // Route::get("/login", [AdminController::class, "login"])->name("AdminLogin");
    Route::get("/home", [AdminController::class, "index"]) ->name("AdminHome");
    Route::get("/profile", [AdminController::class, "profile"]) ->name("Profile");
    Route::get("/user", [AdminController::class, "manageUser"]) ->name("User");
    Route::get("/course", [AdminCourseController::class, "manageCourse"]) ->name("Course");
    Route::get("/purchase", [AdminController::class, "managePurchaseHistory"]) ->name("Purchase");
    Route::get("/bootcamp", [AdminController::class, "manageBootcamp"]) ->name("Bootcamp");
});
