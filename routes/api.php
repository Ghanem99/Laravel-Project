<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\ChildController;
use App\Http\Controllers\API\SleepController;
use App\Http\Controllers\NutritionsController;
use App\Http\Controllers\API\ExerciseController;
use App\Http\Controllers\API\UserRoleController;
use App\Http\Controllers\API\BabyNamesController;
use App\Http\Controllers\API\ExercisesController;
use App\Http\Controllers\API\NutritionController;
use App\Http\Controllers\API\PregnancyController;
use App\Http\Controllers\API\GenderTypeController;
use App\Http\Controllers\API\GeneralTopicsController;
use App\Http\Controllers\API\CommonDiseasesController;
use App\Http\Controllers\API\MumRegistrationController;
use App\Http\Controllers\API\PregnantRegistrationController;

Route::post('register',[AuthController::class,'register']);
Route::post('login',[AuthController::class,'login']);
Route::get('get-profile',[AuthController::class,'getProfile'])->middleware('auth:sanctum');
Route::post('update-profile',[AuthController::class,'updateProfile'])->middleware('auth:sanctum');
Route::post('change-password',[AuthController::class,'changePassword'])->middleware('auth:sanctum');

Route::get('BreakfastMeals',[NutritionController::class,'breakfast']);
Route::get('LunchMeals',[NutritionController::class,'lunch']);
Route::get('DinnerMeals',[NutritionController::class,'dinner']);
Route::get('Snacks',[NutritionController::class,'snacks']);
Route::get('Drinks',[NutritionController::class,'drink']);
Route::get('Fruits',[NutritionController::class,'fruit']);
Route::get('/boyNames',[BabyNamesController::class,'getboyname']);
Route::get('/girlNames',[BabyNamesController::class,'getgirlname']);
Route::get('/home/{week}',[PregnancyController::class,'pregnancy']);
Route::get('/exercise',[ExerciseController::class,'exercise']);

Route::group(['middleware' => 'api'], function () {
    Route::get('child_registration', [ChildController::class, 'showRegistrationForm'])->name('child-registration');
    Route::post('child_registration', [ChildController::class, 'processForm'])->name('child-register');
});

Route::group(['middleware' => 'api'], function () {
    Route::get('common_disease', [CommonDiseasesController::class, 'commonDisease'])->name('common_diseases.index');
});

Route::group(['middleware' => 'api'], function () {
    Route::get('exercise', [ExercisesController::class, 'exercise'])->name('exercises.index');
});

Route::group(['middleware' => 'api'], function () {
    Route::get('gender-type', [GenderTypeController::class, 'index'])->name('gender.type.index');
    Route::post('gender-type', [GenderTypeController::class, 'update'])->name('gender.type.update');
});

Route::group(['middleware' => 'api'], function () {
    Route::get('general_topics', [GeneralTopicsController::class, 'generalTopics'])->name('general_topics.index');
});

Route::group(['middleware' => 'api'], function () {
    Route::get('mum-registration', [MumRegistrationController::class, 'showRegistrationForm']);
    Route::post('mum-registration',[MumRegistrationController::class, 'processRegistration']);
});

Route::group(['middleware' => 'api'], function () {
    Route::get('nutrition', [NutritionsController::class, 'nutrition'])->name('nutritions.index');
});

Route::group(['middleware' => 'api'], function () {
    Route::get('pregnant-registration', [PregnantRegistrationController::class, 'showRegistrationForm']);
    Route::post('pregnant-registration', [PregnantRegistrationController::class, 'register']);
});

Route::group(['middleware' => 'api', 'prefix' => 'api'], function () {
    Route::get('sleep', [SleepController::class, 'sleep'])->name('sleep.index');
});

Route::group(['middleware' => 'api', 'pref  ix' => 'api'], function () {
    Route::get('user-role', [UserRoleController::class, 'index'])->name('user-role.index');
    Route::post('user-role', [UserRoleController::class, 'update'])->name('user-role.update');
});

// //use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\API\AuthController;
// use App\Http\Controllers\API\NutritionController;
// use App\Http\Controllers\API\BabyNamesController;
// use App\Http\Controllers\API\PregnancyController;
// use App\Http\Controllers\API\ExerciseController;
// use App\Http\Controllers\API\ChildController;
// use App\Http\Controllers\API\PregnantRegistrationController;
// use App\Http\Controllers\API\UserRoleController;
// use App\Http\Controllers\API\GeneralTopicsController;
// use App\Http\Controllers\API\CommonDiseasesController;
// use App\Http\Controllers\API\GenderTypeController;
// use App\Http\Controllers\API\MumRegistrationController;
// use App\Http\Controllers\API\NutritionController;
// use App\Http\Controllers\API\SleepController;
// use App\Http\Controllers\API\ExercisesController;
// /*
// |--------------------------------------------------------------------------
// | API Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register API routes for your application. These
// | routes are loaded by the RouteServiceProvider and all of them will
// | be assigned to the "api" middleware group. Make something great!
// |
// */



//  Route::post('register',[AuthController::class,'register']);
//  Route::post('login',[AuthController::class,'login']);
//  Route::get('get-profile',[AuthController::class,'getProfile'])->middleware('auth:sanctum');
// // Route::post('update-profile',[AuthController::class,'updateProfile']);
// Route::post('update-profile',[AuthController::class,'updateProfile'])->middleware('auth:sanctum');
// Route::post('change-password',[AuthController::class,'changePassword'])->middleware('auth:sanctum');


// Route::get('BreakfastMeals',[NutritionController::class,'breakfast']);
// Route::get('LunchMeals',[NutritionController::class,'lunch']);
// Route::get('DinnerMeals',[NutritionController::class,'dinner']);
// Route::get('Snacks',[NutritionController::class,'snacks']);
// Route::get('Drinks',[NutritionController::class,'drink']);
// Route::get('Fruits',[NutritionController::class,'fruit']);
// Route::get('/boyNames',[BabyNamesController::class,'getboyname']);
// Route::get('/girlNames',[BabyNamesController::class,'getgirlname']);
// Route::get('/home/{week}',[PregnancyController::class,'pregnancy']);
// Route::get('/exercise',[ExerciseController::class,'exercise']);





// Route::group(['middleware' => 'api'], function () {
//     Route::get('/child_registration', [ChildController::class, 'showRegistrationForm'])->name('child-registration');
//     Route::post('/child_registration', [ChildController::class, 'processForm'])->name('child-register');
// });
// Route::group(['middleware' => 'api', 'prefix' => 'api'], function () {
//     Route::get('common_disease', [CommonDiseasesController::class, 'commonDisease'])->name('common_diseases.index');
// });
// Route::group(['middleware' => 'api', 'prefix' => 'api'], function () {
//     Route::get('exercise', [ExercisesController::class, 'exercise'])->name('exercises.index');
// });
// Route::group(['middleware' => 'api', 'prefix' => 'api'], function () {
//     Route::get('gender-type', [GenderTypeController::class, 'index'])->name('gender.type.index');
//     Route::post('gender-type', [GenderTypeController::class, 'update'])->name('gender.type.update');
// });
// Route::group(['middleware' => 'api', 'prefix' => 'api'], function () {
//     Route::get('general_topics', [GeneralTopicsController::class, 'generalTopics'])->name('general_topics.index');
// });
// Route::group(['middleware' => 'api', 'prefix' => 'api'], function () {
//     Route::get('mum-registration', [MumRegistrationController::class, 'showRegistrationForm']);
//     Route::post('mum-registration', [MumRegistrationController::class, 'processRegistration']);
// });
// Route::group(['middleware' => 'api', 'prefix' => 'api'], function () {
//     Route::get('nutrition', [NutritionController::class, 'nutrition'])->name('nutritions.index');
// });
// Route::group(['middleware' => 'api', 'prefix' => 'api'], function () {
//     Route::get('pregnant-registration', [PregnantRegistrationController::class, 'showForm'])->name('pregnant-registration');
//     Route::post('pregnant-registration', [PregnantRegistrationController::class, 'processForm']);
// });
// Route::group(['middleware' => 'api', 'prefix' => 'api'], function () {
//     Route::get('sleep', [SleepController::class, 'sleep'])->name('sleep.index');
// });
// Route::group(['middleware' => 'api', 'prefix' => 'api'], function () {
//     Route::get('user-role', [UserRoleController::class, 'index'])->name('user-role.index');
//     Route::post('user-role', [UserRoleController::class, 'update'])->name('user-role.update');
// });

