<?php

use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\BotManController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home')->middleware(['cache-response']);
Route::get('about-us', [HomeController::class, 'about'])->name('about')->middleware(['cache-response']);
Route::get('forms-policies', [HomeController::class, 'ourPolicies'])->name('fp')->middleware(['cache-response']);
Route::get('contact-us', [HomeController::class, 'contactNta'])->name('contact')->middleware(['cache-response']);
Route::get('blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('blogs/{slug}', [BlogController::class, 'blogDetails'])->name('blogDetail')->middleware(['cache-response']);
Route::get('/download/{fileName}', [PolicyController::class, 'downloadPolicy'])->name('policyFile');

Route::get('diploma-in-beauty-therapy', [CoursesController::class, 'BeautyDiploma'])->name('diplomaInBeauty')->middleware(['cache-response']);
Route::get('certificate-IV-in-beauty-therapy', [CoursesController::class, 'BeautyTherapy_superseded'])->name('BeautyTherapy_superseded')->middleware(['cache-response']);
Route::get('diploma-in-remedial-massage', [CoursesController::class, 'remedial'])->name('diplomaInRemedial')->middleware(['cache-response']);

Route::get('certificate-iii-in-hairdressing', [CoursesController::class, 'hairderssing'])->name('hairdressing')->middleware(['cache-response']);
Route::get('certificate-iv-in-beauty-therapy', [CoursesController::class, 'BeautyTherapy'])->name('beautyTherapy')->middleware(['cache-response']);
Route::get('certificate-iv-in-hairdressing', [CoursesController::class, 'hairdrerssing_four'])->name('hairdressing.four')->middleware(['cache-response']);
Route::get('diploma-of-beauty-therapy', [CoursesController::class, 'diploma_beauty_therapy'])->name('diploma_beauty.therapy')->middleware(['cache-response']);
Route::get('child-youth-family', [CoursesController::class, 'child_youth_family'])->name('child_youth.family')->middleware(['cache-response']);
Route::get('mental-health', [CoursesController::class, 'mental_health'])->name('mental.health')->middleware(['cache-response']);
Route::get('leisure-health', [CoursesController::class, 'leisure_health'])->name('leisure.health')->middleware(['cache-response']);
Route::get('youth-work', [CoursesController::class, 'youth_work'])->name('youth.work')->middleware(['cache-response']);
Route::get('diploma-of-counselling', [CoursesController::class, 'diploma_of_counselling'])->name('diploma.counselling')->middleware(['cache-response']);
Route::get('diploma-of-mental-health', [CoursesController::class, 'diploma_of_mental_health'])->name('diploma.mental_health')->middleware(['cache-response']);
Route::get('health-services-assistance', [CoursesController::class, 'health_services_assistance'])->name('health.services_assistance')->middleware(['cache-response']);
Route::get('health-admin', [CoursesController::class, 'health_admin'])->name('health.admin')->middleware(['cache-response']);
Route::get('allied-health-service', [CoursesController::class, 'health_service'])->name('health.service')->middleware(['cache-response']);


Route::get('superseded_beauty',[CoursesController::class,'old_beautytherapy'])->name('superseded.beauty_certificateIV');
//Mail Controllers
Route::post('contact-us', [MailController::class, 'contactUs'])->name('contactus');
Route::post('applyNow', [MailController::class, 'courseApply'])->name('apply');
Route::post('check-eligibility', [MailController::class, 'checkEligibility']);
Route::post('/upload', [AdminBlogController::class, 'uploadFile']);


/**
 * Pages That should only made for
 * lead generation
 */
Route::view('check-your-rpl-eligibility', 'pages.rpl-eligibility')->name('check-your-rpl-eligibility');
Route::view('check-your-rpl-eligibility-remedial-massage', 'pages.rpl-eligibility-2');
Route::view('check-your-rpl-eligibility-for-beauty-industry', 'pages.rpl_eligibility_SHB40115_SHB50115');

Route::view('rpl/success', 'pages.rpl_success')->name('rpl.success');

//messenger route
Route::match(['get', 'post'], '/botman', [BotManController::class, "handle"]);

/**
 * Admin Routes
 */
Route::middleware(['auth:sanctum', 'verified'])->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminHomeController::class, 'index'])->name('home');

    //Blogs
    Route::resource('blog', AdminBlogController::class);
    //Atributes
    Route::prefix('attributes')->group(function () {
        //Category
        Route::get('categories', [CategoryController::class, 'index'])->name('category');
        Route::post('categories', [CategoryController::class, 'store'])->name('category.add');
        Route::get('categories/{id}/edit', [CategoryController::class, 'edit']);
        Route::put('categories/update', [CategoryController::class, 'update'])->name('category.update');
        Route::delete('categories/{id}', [CategoryController::class, 'destroy']);
    });

    //Settings
    Route::prefix('settings')->group(function () {
        //Profile
        Route::get('profile', [AdminHomeController::class, 'profile'])->name('userProfile');
        Route::post('profile', [AdminHomeController::class, 'profileUpdate'])->name('userProfileUpdate');
    });
});

Route::get('faq', [HomeController::class, 'faqPage'])->name('faq')->middleware(['cache-response']);

Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('cache:clear');
    Cache::flush();
    return redirect()->route('home');
});
