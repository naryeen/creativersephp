<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\about\AboutController;
use App\Http\Controllers\services\itservices\ITServicesController;
use App\Http\Controllers\services\CreativeContentWritingController\CreativeContentWritingController;
use App\Http\Controllers\services\videoproduction\ViveoProductionController;
use App\Http\Controllers\services\animationproduction\AnimationProductionController;
use App\Http\Controllers\services\graphicdesignandbranding\GraphicDesignAndBrandingController;
use App\Http\Controllers\services\videoediting\VideoEditingController;
use App\Http\Controllers\services\digitalmarketing\digitalMarketingController;
use App\Http\Controllers\contactus\AboutUsController;
use App\Http\Controllers\ourteam\OurTeamController;
use App\Http\Controllers\chatbot\ChatBotController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware'=>'guest'],function(){
    Route::get('login',[AuthController::class,'index'])->name('login');
    Route::post('login',[AuthController::class,'login'])->name('login')->middleware('throttle:2,1');

    Route::get('register',[AuthController::class,'register_view'])->name('register');
    Route::post('register',[AuthController::class,'register'])->name('register')->middleware('throttle:2,1');
});

// middlewar eis used for ensuring the authentcated users
Route::group(['middleware'=>'auth'],function(){
    Route::get('home',[AuthController::class,'home'])->name('home');
    Route::get('logout',[AuthController::class,'logout'])->name('logout');
});

// about sectioin
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Services
Route::get('/services/itservices', [ITServicesController::class, 'index'])->name('itservices');
Route::get('/services', [CreativeContentWritingController::class, 'index'])->name('creativecontentwriting');
Route::get('/services/videoproduction', [ViveoProductionController::class, 'index'])->name('videoproduction');
Route::get('/services/animationproduction', [AnimationProductionController::class, 'index'])->name('animationproduction');
Route::get('/services/graphicdesignandbranding', [GraphicDesignAndBrandingController::class, 'index'])->name('graphicdesignandbranding');
Route::get('/services/videoediting', [VideoEditingController::class, 'index'])->name('videoediting');
Route::get('/services/digitalmarketing', [digitalMarketingController::class, 'index'])->name('digitalmarketing');
Route::get('/services/contactus', [AboutUsController::class, 'index'])->name('contactus');
Route::get('/services/ourteam', [OurTeamController::class, 'index'])->name('ourteam');
Route::get('/chatbot/index', [ChatBotController::class, 'index'])->name('index');