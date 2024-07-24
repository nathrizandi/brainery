<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminCourseController;
use App\Http\Controllers\AdminUserController;
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


Route::get('/login', [UserController::class, 'loginView'])->name('loginView');
Route::post('/user/login', [UserController::class, 'login'])->name('UserLogin');

Route::get('/register', [UserController::class, 'registerView']);
Route::post('/user/register', [UserController::class, 'register'])->name('UserRegister');

Route::get('/bootcamp', function () {
    return view('bootcamp.bootcamp');
});

Route::prefix('bootcamp')->group(function () {
    Route::get('/menu', [BootcampController::class, 'bootcampMenu']);
    Route::get('/list', [BootcampController::class, 'bootcampList']);
    Route::get('/detail/{id}', [BootcampController::class, 'bootcampDetail'])->name('bootcampDetail');
    Route::post('/join/{id}', [BootcampController::class, 'joinBootcamp'])->name('joinBootcamp');
});

Route::post('/checkout', [SubscriptionController::class, 'checkoutSubs'])->name('checkout');
Route::post('/checkout-success-confirmation', [SubscriptionController::class, 'checkoutSuccess'])->name('checkout.success');
Route::get('/checkout-success', [SubscriptionController::class, 'checkoutSuccessPage'])->name('payment.success');


Route::get('/search-result', [CourseController::class, 'search'])->name('search');

Route::prefix('/profile')->group(function () {
    Route::get('/manage', [UserController::class, 'manage'])->name('manage');
    Route::get('/edit', [UserController::class, 'edit'])->name('profile.edit');
    Route::post('/edit/change-username', [UserController::class, 'changeUsername'])->name('changeUsername');
    Route::post('/edit/change-password', [UserController::class, 'changePassword'])->name('changePassword');
    Route::post('/edit/change-email', [UserController::class, 'changeEmail'])->name('changeEmail');
    Route::get('/certificate', [UserController::class, 'certificate'])->name('certificate');
});

Route::prefix('course')->group(function () {
    Route::get('/subs', [SubscriptionController::class, 'getSubs'])->name('subs');
    Route::get('/menu', [CourseController::class, 'courseMenu']);
    Route::get('/list', [CourseController::class, 'courseList']);
    Route::get('/view/{id}', [CourseController::class, 'courseView'])->name('courseView');
    Route::get('/detail/{id}', [CourseMaterialController::class, 'courseMaterial'])->name('courseMaterial');
    Route::get('/media/{id}', [CourseMaterialDetailController::class, 'courseMedia'])->name('courseMedia');
    Route::post('/course/join/{id}', [CourseController::class, 'joinCourse'])->name('joinCourse');
});

Route::get('/mylearning', [OwnCourseController::class, 'myLearning'])->name('myLearning');


Route::prefix('admin')->group(function () {
    Route::get("/login", [AdminController::class, "login"])->name("AdminLoginView");
    Route::post("/login", [AdminController::class, "loginAdmin"])->name("AdminLogin");
    Route::get("/home", [AdminController::class, "index"])->name("AdminHome");
    Route::get("/profile", [AdminController::class, "profile"])->name("Profile");
    Route::get("/user", [AdminController::class, "manageUser"])->name("User");
    Route::post('/profile/change-username', [AdminController::class, 'changeUsername'])->name('admin.changeUsername');
    Route::post('/profile/change-password', [AdminController::class, 'changePassword'])->name('admin.changePassword');
    Route::post('/profile/change-email', [AdminController::class, 'changeEmail'])->name('admin.changeEmail');

    Route::get("/user", [AdminUserController::class, "index"])->name("User");
    Route::delete("/user/delete-user/{uid}", [AdminUserController::class, "destroy"])->name("User.delete");
    Route::post("/user/create-user", [AdminUserController::class, "store"])->name("User.store");
    Route::put("/user/update-user/{uid}", [AdminUserController::class, "update"])->name("User.update");
    Route::get("/user/edit-user/{uid}/edit", [AdminUserController::class, "edit"])->name("User.edit");


    Route::get("/course", [AdminCourseController::class, "manageCourse"])->name("Course");
    Route::post("/course/create-course", [AdminCourseController::class, "store"])->name("Course.store");
    Route::delete("/course/delete-course/{cId}", [AdminCourseController::class, "destroy"])->name("Course.delete");
    Route::put("/course/edit-course/{cId}", [AdminCourseController::class, "update"])->name("Course.update");

    Route::get("/purchase", [AdminController::class, "managePurchaseHistory"])->name("Purchase");
    Route::get("/bootcamp", [AdminController::class, "manageBootcamp"])->name("Bootcamp");
});
