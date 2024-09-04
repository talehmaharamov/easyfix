<?php

use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\SitemapGenerator;

Route::group(['middleware' => 'auth:admin', 'as' => 'backend.'], function () {
//General
    Route::get('/', [App\Http\Controllers\Backend\HomeController::class, 'index'])->name('index');
    Route::get('dashboard', [App\Http\Controllers\Backend\HomeController::class, 'index'])->name('dashboard');
    Route::get('change-language/{lang}', [\App\Http\Controllers\Backend\System\LanguageController::class, 'switchLang'])->name('switchLang');
    Route::get('delete/photo/{model}/{id}', [App\Http\Controllers\Backend\HomeController::class, 'deletePhoto'])->name('deletePhoto');
    Route::resource('/information', \App\Http\Controllers\Backend\System\InformationController::class);
    Route::post('/clear-cache',[\App\Http\Controllers\Backend\HomeController::class,'clearCache'])->name('clear-cache');
    Route::get('/generate-sitemap', function () {
        SitemapGenerator::create('https://techfoz.az')->writeToFile(public_path('sitemap.xml'));
    });

    //Content
    Route::resource('/content', App\Http\Controllers\Backend\ContentController::class);
    Route::get('content/{id}/delete', [App\Http\Controllers\Backend\ContentController::class, 'delete'])->name('contentDelete');
    Route::get('content/{id}/change-status', [App\Http\Controllers\Backend\ContentController::class, 'status'])->name('contentStatus');

    //Categories
    Route::resource('/category', App\Http\Controllers\Backend\CategoryController::class);
    Route::get('category/{id}/delete', [App\Http\Controllers\Backend\CategoryController::class, 'delete'])->name('categoryDelete');
    Route::get('category/{id}/change-status', [App\Http\Controllers\Backend\CategoryController::class, 'status'])->name('categoryStatus');

    //Seo
    Route::resource('/seo', App\Http\Controllers\Backend\MetaController::class);
    Route::get('/seo/{id}/delete', [App\Http\Controllers\Backend\MetaController::class, 'delSeo'])->name('delSeo');
    Route::get('/seo/{id}/change-status', [App\Http\Controllers\Backend\MetaController::class, 'seoStatus'])->name('seoStatus');

    //Users
    Route::resource('/admins', \App\Http\Controllers\Backend\System\AdminController::class);
    Route::get('/admins/{id}/delete', [\App\Http\Controllers\Backend\System\AdminController::class, 'delAdmin'])->name('delAdmin');
    //Blog
    Route::resource('/blog', App\Http\Controllers\Backend\BlogController::class);
    Route::get('blog/{id}/delete', [App\Http\Controllers\Backend\BlogController::class, 'delete'])->name('blogDelete');
    Route::get('blog/{id}/change-status', [App\Http\Controllers\Backend\BlogController::class, 'status'])->name('blogStatus');
    //Settings
    Route::resource('/settings', App\Http\Controllers\Backend\SettingController::class);
    Route::get('/settings/{id}/delete', [App\Http\Controllers\Backend\SettingController::class, 'delSetting'])->name('settingsDelete');
    Route::get('/settings/{id}/change-status', [App\Http\Controllers\Backend\SettingController::class, 'settingStatus'])->name('settingsStatus');
    //Partners
    Route::resource('/partner', App\Http\Controllers\Backend\PartnerController::class);
    Route::get('partner/{id}/delete', [App\Http\Controllers\Backend\PartnerController::class, 'delete'])->name('partnerDelete');
    Route::get('partner/{id}/change-status', [App\Http\Controllers\Backend\PartnerController::class, 'status'])->name('partnerStatus');
    //About
    Route::resource('/about', App\Http\Controllers\Backend\AboutController::class);
    Route::get('about/{id}/delete', [App\Http\Controllers\Backend\AboutController::class, 'delete'])->name('aboutDelete');
    Route::get('about/{id}/change-status', [App\Http\Controllers\Backend\AboutController::class, 'status'])->name('aboutStatus');
    //Site Languages
    Route::resource('/site-languages', \App\Http\Controllers\Backend\System\SiteLanguageController::class);
    Route::get('/site-languages/{id}/delete', [\App\Http\Controllers\Backend\System\SiteLanguageController::class, 'delSiteLang'])->name('site-languagesDelete');
    Route::get('/site-language/{id}/change-status', [\App\Http\Controllers\Backend\System\SiteLanguageController::class, 'siteLanStatus'])->name('site-languagesStatus');
    //Mail
    Route::resource('/mail', \App\Http\Controllers\Backend\System\MailController::class);
    Route::get('mail/{id}/delete', [\App\Http\Controllers\Backend\System\MailController::class, 'delete'])->name('mailDelete');
    Route::get('mail/{id}/change-status', [\App\Http\Controllers\Backend\System\MailController::class, 'status'])->name('mailStatus');
    //Faq
    Route::resource('/faq', \App\Http\Controllers\Backend\System\FaqController::class);
    Route::get('faq/{id}/delete', [\App\Http\Controllers\Backend\System\FaqController::class, 'delete'])->name('faqDelete');
    Route::get('faq/{id}/change-status', [\App\Http\Controllers\Backend\System\FaqController::class, 'status'])->name('faqStatus');
    //Meta
    Route::resource('/meta', App\Http\Controllers\Backend\MetaController::class);
    Route::get('meta/{id}/delete', [App\Http\Controllers\Backend\MetaController::class, 'delete'])->name('metaDelete');
    Route::get('meta/{id}/change-status', [App\Http\Controllers\Backend\MetaController::class, 'status'])->name('metaStatus');
    //Contact Us
    Route::resource('/contact', \App\Http\Controllers\Backend\System\ContactController::class);
    Route::get('contact/{id}/read', [\App\Http\Controllers\Backend\System\ContactController::class, 'readContact'])->name('readContact');
    Route::get('/contact/{id}/delete', [\App\Http\Controllers\Backend\System\ContactController::class, 'delContactUS'])->name('delContactUS');
    //Newsletter
    Route::resource('/newsletter', App\Http\Controllers\Backend\NewsletterController::class);
    Route::get('/newsletter/{id}/delete', [App\Http\Controllers\Backend\NewsletterController::class, 'delNewsletter'])->name('delNewsletter');
    Route::get('newsletter/history', [App\Http\Controllers\Backend\NewsletterController::class, 'newsletterHistory'])->name('newsletterHistory');
    //Slider
    Route::resource('/slider', \App\Http\Controllers\Backend\System\SliderController::class);
    Route::get('/slider/{id}/delete', [\App\Http\Controllers\Backend\System\SliderController::class, 'delSlider'])->name('sliderDelete');
    Route::get('/slider/{id}/change-status', [\App\Http\Controllers\Backend\System\SliderController::class, 'sliderStatus'])->name('sliderStatus');
    Route::get('slider/{id}/change-order', [\App\Http\Controllers\Backend\System\SliderController::class, 'sliderOrder'])->name('sliderOrder');
    //Permissions
    Route::resource('/permissions', App\Http\Controllers\Backend\PermissionController::class);
    Route::get('/permission/{id}/delete', [App\Http\Controllers\Backend\PermissionController::class, 'delPermission'])->name('permissionsDelete');
    Route::get('give-permission', [App\Http\Controllers\Backend\PermissionController::class, 'givePermission'])->name('givePermission');
    Route::get('give-permission-to-user/{user}', [App\Http\Controllers\Backend\PermissionController::class, 'giveUserPermission'])->name('giveUserPermission');
    Route::post('give-permission-to-user-update', [App\Http\Controllers\Backend\PermissionController::class, 'giveUserPermissionUpdate'])->name('givePermissionUserUpdate');
    Route::get('/permissions/{id}/change-status', function () {
        return redirect()->back();
    })->name('permissionsStatus');
    //Reports
    Route::get('/report/{id}/delete', [\App\Http\Controllers\Backend\System\ReportController::class, 'delReport'])->name('delReport');
    Route::get('/report/clean-all', [\App\Http\Controllers\Backend\System\ReportController::class, 'cleanAllReport'])->name('cleanAllReport');
    Route::get('reports', [\App\Http\Controllers\Backend\System\ReportController::class, 'index'])->name('report');

    Route::get('content/photo/{id}/delete', [App\Http\Controllers\Backend\ContentController::class, 'deletePhoto'])->name('contentPhotoDelete');


});
Route::fallback(function () {
    return view('backend.errors.404');
});
Route::group(['name' => 'auth'], function () {
    Route::get('/login', [\App\Http\Controllers\Backend\System\AuthController::class, 'showLoginForm'])->name('login');
    Route::post('loginAdmin', [\App\Http\Controllers\Backend\System\AuthController::class, 'login'])->name('loginPost');
    Route::get('logout/system', [\App\Http\Controllers\Backend\System\AuthController::class, 'logout'])->name('logout');
});
