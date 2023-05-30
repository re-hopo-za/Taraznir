<?php

use App\Http\Livewire\Pages\AboutPage;
use App\Http\Livewire\Pages\BlogPage;
use App\Http\Livewire\Pages\BlogSingle;
use App\Http\Livewire\Pages\CatalogPage;
use App\Http\Livewire\Pages\CatalogSingle;
use App\Http\Livewire\Pages\ContactPage;
use App\Http\Livewire\Pages\ExhibitionPage;
use App\Http\Livewire\Pages\HomePage;
use App\Http\Livewire\Pages\ProductPage;
use App\Http\Livewire\Pages\ProductSingle;
use App\Http\Livewire\Pages\ProjectPage;
use App\Http\Livewire\Pages\ProjectSingle;
use App\Http\Livewire\Pages\ResourcePage;
use App\Http\Livewire\Pages\SearchPage;
use App\Http\Livewire\Pages\ServicePage;
use App\Http\Livewire\Pages\ServiceSingle;
use App\Http\Livewire\Pages\StandardPage;
use App\Http\Livewire\Pages\StandardSingle;
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


Route::get('/' , HomePage::class )
    ->name('/');

Route::get('/contact' , ContactPage::class )
    ->name('Contact');

Route::get('/about' , AboutPage::class )
    ->name('About');

Route::get('/search' , SearchPage::class )
    ->name('search');

Route::get('/exhibition' , ExhibitionPage::class )
    ->name('exhibition');

Route::group(['prefix' => '/service'] , function(){
    Route::get('/' , ServicePage::class )
        ->name('Service');
    Route::get('/{slug}' , ServiceSingle::class )
        ->name('SingleService');
    Route::get('/category/{category}' , ServicePage::class )
        ->name('CategoryService');
});


Route::group(['prefix' => '/project'] , function(){
    Route::get('/' , ProjectPage::class )
        ->name('Project');
    Route::get('/{slug}' , ProjectSingle::class )
        ->name('SingleProject');
    Route::get('/category/{category}' , ProjectPage::class )
        ->name('CategoryProject');
});


Route::group(['prefix' => '/blog'] , function(){
    Route::get('/' , BlogPage::class )
        ->name('Blog');
    Route::get('/{slug}' , BlogSingle::class )
        ->name('SingleBlog');
    Route::get('/category/{category}' , BlogPage::class )
        ->name('CategoryBlog');
});


Route::group(['prefix' => '/product'] , function(){
    Route::get('/' , ProductPage::class )
        ->name('Product');
    Route::get('/{slug}' , ProductSingle::class )
        ->name('SingleProduct');
    Route::get('/category/{category}' ,ProductPage::class )
        ->name('CategoryProduct');
});

Route::group(['prefix' => '/resource'] , function(){
    Route::get('/' , ResourcePage::class )
        ->name('Resource');
});

Route::group(['prefix' => '/standard'] , function(){
    Route::get('/' ,StandardPage::class )
        ->name('Standard');
    Route::get('/{slug}' ,StandardSingle::class )
        ->name('SingleStandard');
});


Route::group(['prefix' => '/catalog'] , function(){
    Route::get('/' ,CatalogPage::class )
        ->name('Catalog');
    Route::get('/{slug}' ,CatalogSingle::class )
        ->name('SingleCatalog');
});



Route::middleware([
    'auth:sanctum',config('jetstream.auth_session'), 'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/dashboard' , function(){
    return redirect()->route('/');
});

Route::get('/pdf-viewer' , [\App\Http\Controllers\Controller::class, 'pdfViewer']);




Route::permanentRedirect('/product/کلمپ-ارت/'  , '/');
Route::permanentRedirect('/product/باسبار-های-ارت-(ترمینال-های-ارت)'  , '/');
Route::permanentRedirect('/product/صاعقه-گیر-الکترونیکی-لیوا-liva'  , '/');
Route::permanentRedirect('/catalog/کاتالوگ صاعقه گیر'  , '/');
Route::permanentRedirect('/product/دریچه-بازدید'  , '/');
Route::permanentRedirect('/blog/obo-mcd-50-b-3'  , '/');
Route::permanentRedirect('/wp-content/uploads/2021/03/IEC-60076-2-2011.pdf'  , '/');
Route::permanentRedirect('/standard/ieee-guide-for-measuring-earth-resistivity-ground-impedance-and-earth-surface-potentials-of-a-grounding-system'  , '/');
Route::permanentRedirect('/product/دکل-های-گالوانیزه-گرم-خودایستا/'  , '/');
Route::permanentRedirect('/project/شرکت-توسه-راهبرد-سلامت-برکت'  , '/');
Route::permanentRedirect('/blog/obo-mcd-50b-os'  , '/');
Route::permanentRedirect('/blog/انواع-الکترود-زمین-(الکترود-ارت-)-و-فرمول-محاسبه-آن:'  , '/');
Route::permanentRedirect('/project/ارتینگ'  , '/');
Route::permanentRedirect('/project/بهمن-موتور'  , '/');
Route::permanentRedirect('/blog/میله-ارت-استیل'  , '/');
Route::permanentRedirect('/product/ekf-ارستر-برند'  , '/');
Route::permanentRedirect('/catalog/محصولات-جوش-احتراقی-یا-اگزوترمیک-(cadweld)'  , '/');
Route::permanentRedirect('/blog/ارت-چیست-و-چه-کاربردی-دارد؟'  , '/');
Route::permanentRedirect('/blog/حفاظت-تجهيزات-در-مقابل-اضافه-ولتاژهاي-گذرا-وسرج'  , '/');
Route::permanentRedirect('/project/شرکت-کارآوران-صنعت-خاورمیانه'  , '/');
Route::permanentRedirect('/product/صفحات-هم-پتانسیل-(ارت-مت)'  , '/');
Route::permanentRedirect('/blog/اتصال-زمین-مشترک-بین-تابلوها-در-محل-پست-توزیع-هوایی'  , '/');
Route::permanentRedirect('/catalog/ekf'  , '/');
Route::permanentRedirect('/catalog/spd-ارستر-برقگیر'  , '/');
Route::permanentRedirect('/product/صاعقه-گیرهای-الکترونیک-خازنی-برند-forend-مدل-petex-–-s'  , '/');
Route::permanentRedirect('/contact-us/'  , '/');
Route::permanentRedirect('/catalog/کاتالوگ-ارت/'  , '/');
Route::permanentRedirect('/storage/29/7YvaHBzFm8NYyP3ptZxJHjySjso6zS-metaRUtGIChQZXJzaWFuKS5wZGY=-.pdf'  , '/');
Route::permanentRedirect('/product/category/product/برقگیر-استیل-چندشاخه'  , '/');
Route::permanentRedirect('/product/صاعقه-گیرهای-الکترونیک-خازنی-برند-forend-مدل-eu–m'  , '/');
Route::permanentRedirect('/product/صاعقه-گیرهای-الکترونیک-خازنی-برند-forend-مدل-petex-–l'  , '/');
Route::permanentRedirect('/product/مفتول-(راندوایر)-گالوانیزه-گرم'  , '/');
Route::permanentRedirect('/approval-earth/'  , '/');
Route::permanentRedirect('/blog/الزامات-تولید-و-تست-مواد-کاهنده-مقاومت-زمین(بکفیل)'  , '/');
Route::permanentRedirect('/blog/لیست-اقلام-مورد-نیاز-الکترود-فونداسیون-(ارت-فونداسیون)'  , '/');
Route::permanentRedirect('/article/نگهداری-و-باز-بینی-ارت-پست/'  , '/');
Route::permanentRedirect('/product_cat/earth-equipments/'  , '/');
Route::permanentRedirect('/blog/چگونگی-ایجاد-صاعقه'  , '/');
Route::permanentRedirect('/article/الکترود-زمین-مستقل-یا-ایزوله/'  , '/');
Route::permanentRedirect('/product/کلمپ-سیم-به-میله-ارت(u-کلمپ)'  , '/');
Route::permanentRedirect('/product/ekf-کلید-محافظ-جان-برند'  , '/');
Route::permanentRedirect('/catalog/کاتالوگ-انگلیسی'  , '/');
Route::permanentRedirect('/product/nsdwپایه-برقگیردیواری'  , '/');
Route::permanentRedirect('/product/پودر-جوش-احتراقی-(کدولد)'  , '/');
Route::permanentRedirect('/product/حوضچه-ارت/'  , '/');
Route::permanentRedirect('/article/اقدامات-حفاظتی-در-برابر-صاعقه/'  , '/');
Route::permanentRedirect('/downloads/'  , '/');
Route::permanentRedirect('/project/مراکز-تامین-برق-اضطراری-مجتمع-ایرانما/'  , '/');
Route::permanentRedirect('/product/کلمپ-نگهدارنده-تسمه-(فورج-دوپارچه)'  , '/');
Route::permanentRedirect('/blog/حفاظت-صاعقه-در-سازه-های-بالای-60-متر'  , '/');
Route::permanentRedirect('/product/تسمه-مسی-قابل-انعطاف'  , '/');
Route::permanentRedirect('/standard/ec-62305-2-:-protection-against-lightning-–-part-2:-risk-management'  , '/');
Route::permanentRedirect('/blog/لیست-اقلام-مورد-نیاز-الکترود-زمین-صفحه-ای-(چاه-ارت)'  , '/');
Route::permanentRedirect('/wp-content/uploads/2021/02/IEC-60076-1-2011.pdf'  , '/');
Route::permanentRedirect('/standard/ec-62305-3-:-protection-against-lightning-–-part-3:-physical-damage-to-structures-and-life-hazard'  , '/');
Route::permanentRedirect('/blog/میله-ارت-مسی'  , '/');
Route::permanentRedirect('/product/صاعقه-گیر-الکترونیکی'  , '/');
Route::permanentRedirect('/article/در-حال-بارگزاری-محتوا/'  , '/');
Route::permanentRedirect('/wp-content/uploads/2020/08/mohandesi-seda.pdf'  , '/');
Route::permanentRedirect('/دانلود-classics-of-russian-literature-آموزش-ادبیات-روسی-کلاسیک/item'  , '/');
Route::permanentRedirect('/product/مواد-کاهنده/'  , '/');
Route::permanentRedirect('/project/tag/earthing-standard'  , '/');
Route::permanentRedirect('/product/کابلشو'  , '/');
Route::permanentRedirect('/product/کلمپ-سه-راه-و-چهارراه-سیم-به-تسمه-(فورج-دوپارچه-)'  , '/');
Route::permanentRedirect('/blog/دستور-العمل-انتخاب-ارستر-هگر'  , '/');
Route::permanentRedirect('/product/برقگیر-استیل-چندشاخه'  , '/');
Route::permanentRedirect('/blog/لیست-اقلام-مورد-نیاز-الکترود-رینگ-ارت-(الکترود-افقی)'  , '/');
Route::permanentRedirect('/آموزش-پریمیر-کلیپ-سازی،-تدوین،-مونتاژ/'  , '/');
Route::permanentRedirect('/دانلود-english-today-دوره-آموزش-زبان-انگلیسی/'  , '/');
Route::permanentRedirect('/product/کلمپ-نگهدارنده-هادی-ها/'  , '/');
Route::permanentRedirect('/service/در-حال-بارگزاری-محتوا/'  , '/');
Route::permanentRedirect('/product/کلمپ-مسی-پرسی(سی-کلمپ)-:'  , '/');
Route::permanentRedirect('/product/سرج-ارستر-5081800-nd-cat6-ea-|-obo-(ارستر-شبکه)-obo-net-defender'  , '/');
Route::permanentRedirect('/blog/جنس-و-ابعاد-مورد-نیازالكترود-زمين'  , '/');
Route::permanentRedirect('/index.php/project/تاییدیه-ارت-اداره-کار/service/'  , '/');
Route::permanentRedirect('/product/category/product/قالب-گرافیتی'  , '/');
Route::permanentRedirect('/project/category/project/شرکت-توسه-راهبرد-سلامت-برکت'  , '/');
Route::permanentRedirect('/blog/صاعقه-گیر-الکترونیکی-لیوا-liva'  , '/');
Route::permanentRedirect('/article/محاسبات-شعاع-پوششی-صاعقه-گیرهای-پسیو/'  , '/');
Route::permanentRedirect('/article/شبیه-سازی-الکترود-زمین-با-استفاده-از-نر/'  , '/');
Route::permanentRedirect('/article/page/2/'  , '/');
Route::permanentRedirect('/project_cat/lightning-protection/'  , '/');
Route::permanentRedirect('/blog/اجزا-تشکیل-دهنده-سیستم-صاعقه‌گیر'  , '/');
Route::permanentRedirect('/product/کلمپ-نگهدارنده-سیم(بست-یکطرفه-سیم)'  , '/');
Route::permanentRedirect('/projects/'  , '/');
Route::permanentRedirect('/project/گل-گهر-سیرجان'  , '/');
Route::permanentRedirect('/storage/282/gvd968Bo1nxyw9Vd05eAslCMWqxwQj-meta2qnYp9iq2KfZhNmI2q8g2YHYp9ix2LPbjC5wZGY=-.pdf'  , '/');
Route::permanentRedirect('/blog/اتصال-زمین-کلیدهای-هوایی-شبکه-فشار-متوسط'  , '/');
Route::permanentRedirect('/catalog/ارتینگ'  , '/');
Route::permanentRedirect('/article/انتخاب-الکترود-زمین/'  , '/');
Route::permanentRedirect('/product/میله-ارت-استنلس-استیل/'  , '/');
Route::permanentRedirect('/author/asad/'  , '/');
Route::permanentRedirect('/product/سرج-ارستر-5094444-obo-سری-1pole+nep-،v25-(تک-فاز-و-نول)-ارستر-ترکیبی-همراه-با-کانتکت-ارسال-خطا'  , '/');
Route::permanentRedirect('/inquery/'  , '/');
Route::permanentRedirect('/project/بهمن-موتور/'  , '/');
Route::permanentRedirect('/catalogs/'  , '/');
Route::permanentRedirect('/product/صاعقه-گیرهای-الکترونیک-خازنی-برند-forend'  , '/');
Route::permanentRedirect('/project/مجموعه-سان-استار/'  , '/');
Route::permanentRedirect('/products/'  , '/');
Route::permanentRedirect('/blog/لیست-اقلام-مورد-نیاز-الکترود-زمین-میله-ای-(الکترود-عمودی)'  , '/');
Route::permanentRedirect('/product/product/کلمپ-نگهدارنده-تسمه-(فورج-دوپارچه)'  , '/');
Route::permanentRedirect('/articles/'  , '/');
Route::permanentRedirect('/earthing-and-lightning-english-catalog/'  , '/');
Route::permanentRedirect('/blog/انواع-سیستم‌های-توزيع-براساس-نحوه-اتصال-آن-با-سيستم-زمين'  , '/');
Route::permanentRedirect('/product/دکل-های-گالوانیزه-گرم-خودایستا/دکل-های-گالوانیزه-گرم-خودایستا'  , '/');
Route::permanentRedirect('/catalog/کلمپ گالوانیزه (FONDATION CLAMP)'  , '/');
Route::permanentRedirect('/blog/ارتینگ-و-همبندی-کابل-فشارقوی'  , '/');
Route::permanentRedirect('/Illuminate/Database/Eloquent/Collection/iec-62305-1-:-protection-against-lightning-–-part-1:-general-principles'  , '/');
Route::permanentRedirect('/product_cat/active-lightning-arrester-equipment/'  , '/');
Route::permanentRedirect('/2021/03/07/'  , '/');
Route::permanentRedirect('/standard/feed/'  , '/');
Route::permanentRedirect('/product/category/product/پودر-جوش-احتراقی-(کدولد)'  , '/');
Route::permanentRedirect('/standard/تاییدیه-ارت-اداره-کار/service/'  , '/');
Route::permanentRedirect('/Illuminate/Database/Eloquent/Collection/شرکت-طرح-و-ساخت-نگر-اندیش'  , '/');
Route::permanentRedirect('/blog/جوش-احتراقی'  , '/');
Route::permanentRedirect('/دانلود-english-way-24-volume-complete-مجموعه-آموزشی-زبان-انگلی/'  , '/');
Route::permanentRedirect('/Illuminate/Database/Eloquent/Collection/ec-62305-3-:-protection-against-lightning-–-part-3:-physical-damage-to-structures-and-life-hazard'  , '/');
Route::permanentRedirect('/blog/اصول-اولیه-در-طراحی-سیستم-زمین-و-سیستم-مش'  , '/');
Route::permanentRedirect('/product/پودر-جوش-احتراقی/'  , '/');
Route::permanentRedirect('/دانلود-english-today-project/feed/'  , '/');
Route::permanentRedirect('/blog/نحوه-نصب-ارسترها-بر-اساس-شبکه-توزیع-نیرو'  , '/');
Route::permanentRedirect('/standard/الزمات-دریچه-بازدید-الکترود-زمین-و-آب-بندی-آن'  , '/');
Route::permanentRedirect('/Illuminate/Database/Eloquent/Collection/ec-62305-2-:-protection-against-lightning-–-part-2:-risk-management'  , '/');
Route::permanentRedirect('/blog/سیستم-حفاظت-از-شوک-الکتریکی-در-اتاق-باتری'  , '/');
Route::permanentRedirect('/product/earthing-rod/'  , '/');
Route::permanentRedirect('/Illuminate/Database/Eloquent/Collection/ec-62305-4-:-protection-against-lightning-–-part-4:-electrical-and-electronic-systems-within-structures'  , '/');
Route::permanentRedirect('/دانلود-udemy-improve-your-english-spelling-punctuation-and-grammar-آموزش-تلفظ،-نقطه-گذ/'  , '/');
Route::permanentRedirect('/دانلود-classics-of-russian-literature-آموزش-ادبیات-روسی-کلاسیک/feed/'  , '/');
Route::permanentRedirect('/article/حفاظت-در-برابر-صاعقه-مخازن/'  , '/');
Route::permanentRedirect('/article/ارتینگ-و-همبندی-کابلهای-فشار-قوی/'  , '/');
Route::permanentRedirect('/product/product/میله-های-ارت-مسی'  , '/');
Route::permanentRedirect('/product/دیسک(پولکی)-و-چاشنی'  , '/');
Route::permanentRedirect('/storage/114/6ZKNbSVqifh0c59h3gvA3EaNgx4Ouh-metaRk9OREFUSU9OIENMQU1QUy5wZGY=-.pdf'  , '/');
Route::permanentRedirect('/catalog/ese-lightning-protection-2/'  , '/');
Route::permanentRedirect('/about-us/'  , '/');
Route::permanentRedirect('/Illuminate/Database/Eloquent/Collection/شرکت-پلیمر-آریاساسول'  , '/');
Route::permanentRedirect('/product/کلمپ-سیم-به-میله-ارت/'  , '/');
Route::permanentRedirect('/article/محاسبه-شعاع-پوششی-صاعقه-گیر-اکتیو-یا-ال/'  , '/');
Route::permanentRedirect('/دانلود-your-baby-can-read-complete-dvd-tutorials-مجموعه-آموزشی-کودک-شما/'  , '/');
Route::permanentRedirect('/product/مولتی-متر'  , '/');
Route::permanentRedirect('/product/سرج-ارستر-5081804-nd-cat6-e-b-|-obo-(ارستر-شبکه)-obo-net-defender'  , '/');
Route::permanentRedirect('/product/category/product/nsdb-پایه-های-نگهدارنده-برقگیربرای-تسمه'  , '/');
Route::permanentRedirect('/standard/ec-62305-4-:-protection-against-lightning-–-part-4:-electrical-and-electronic-systems-within-structures'  , '/');
Route::permanentRedirect('/product/روش-اجرای-زمین-حفاظتی:'  , '/');
Route::permanentRedirect('/service/برگزاری-دوره-های-آموزشی'  , '/');
Route::permanentRedirect('/article/همبندی-همپتانسیل-ساز/'  , '/');
Route::permanentRedirect('/product/کابلشو/'  , '/');
Route::permanentRedirect('/wp-content/uploads/2020/08/synthesis.docx'  , '/');
Route::permanentRedirect('/article/موارد-کلی-در-اجرای-سیستم-حفاظت-از-صاعقه/'  , '/');
Route::permanentRedirect('/product/روش-اجرای-زمین-الکتریکی'  , '/');
Route::permanentRedirect('/article/'  , '/');
Route::permanentRedirect('/product/کلمپ-سه-راه-و-چهارراه-تسمه-(فورج-دوپارچه-)'  , '/');
Route::permanentRedirect('/product/صاعقه-گیر-الکترونیک-خازنی/'  , '/');
Route::permanentRedirect('/product/product/مفتول-(راندوایر)-گالوانیزه-گرم'  , '/');
Route::permanentRedirect('/blog/ارت-موقت'  , '/');
Route::permanentRedirect('/product/اتصال-زمین-کلیدهای-هوایی-شبکه-فشار-متوسط'  , '/');
Route::permanentRedirect('/product/اسپارک-گپ-آنتن-obo-bettermann'  , '/');
Route::permanentRedirect('/blog/اقدامات-حفاظتی-در-برابر-صاعقه'  , '/');
Route::permanentRedirect('/blog/همبندی-همپتانسیل-ساز'  , '/');
Route::permanentRedirect('/project/مجتمع-ویلایی-لواسان/'  , '/');
Route::permanentRedirect('/product/تسمه'  , '/');
Route::permanentRedirect('/project/cvxc/'  , '/');
Route::permanentRedirect('/service/تست-یک-خدمات-تامین-و-نگهداری/'  , '/');
Route::permanentRedirect('/blog/انتخاب-الکترود-زمین'  , '/');
Route::permanentRedirect('/product/ekf-کنتاکتور-برند'  , '/');
Route::permanentRedirect('/project/اهم-پروژه-ها/'  , '/');
Route::permanentRedirect('/product/پایه-نگهدارنده-برقگیر/'  , '/');
Route::permanentRedirect('/product/product/nsd-پایه-های-نگهدارنده-برقگیربرای-سیم'  , '/');
Route::permanentRedirect('/product/قالب-گرافیتی'  , '/');
Route::permanentRedirect('/product/صاعقه-گیر-الکترونیک-خازنی-برند-ekf'  , '/');
Route::permanentRedirect('/blog/شبیه-سازی-مدل-الکترود-زمین'  , '/');
Route::permanentRedirect('/blog/آشنایی-با-مفاهیم-سیستم-زمین'  , '/');
Route::permanentRedirect('/blog/چاه-ارت-و-موارد-مربوط-به-آن'  , '/');
Route::permanentRedirect('/layout-mode'  , '/');
Route::permanentRedirect('/standard/الزامات-شمارنده-صاعقه'  , '/');
Route::permanentRedirect('/blog/active-lightning-protection-system'  , '/');
Route::permanentRedirect('/catalog/کاتالوگ-صاعقه-گیر'  , '/');
Route::permanentRedirect('/product/قالب-جوش-اتصال-سیم-به-میله-عبوری'  , '/');
Route::permanentRedirect('/catalog/تاییدیه-ارت-اداره-کار/service/'  , '/');
Route::permanentRedirect('/product/category/product/شمارنده-صاعقه'  , '/');
Route::permanentRedirect('/product/category/product/صاعقه-گیرهای-الکترونیک-خازنی-برند-forend'  , '/');
Route::permanentRedirect('/blog/ولتاژ-گام-و-تماس-چیست-؟'  , '/');
Route::permanentRedirect('/product_cat/passive-lightning-arrester-equipment/feed/'  , '/');
Route::permanentRedirect('/product/قالب-جوش-اتصال-چهارراهی-عبوری-سیم-به-سیم'  , '/');
Route::permanentRedirect('/standard/الزامات-برای-هادی-ها-و-الکترود-های-زمین'  , '/');
Route::permanentRedirect('/product/سرج-ارستر-5081802-nd-cat6-e-f-|-obo-(ارستر-شبکه)-obo-net-defender'  , '/');
Route::permanentRedirect('/blog/حفاظت-مخازن-در-برابر-صاعقه'  , '/');
Route::permanentRedirect('/product/در-حال-بارگزاری-محتوا/'  , '/');
Route::permanentRedirect('/product/قالب-جوش-اتصال-سیم-به-سیم-موازی'  , '/');
Route::permanentRedirect('/blog/استراکچر-فلزی-ساختمان-به-عنوان-الکترود-زمین'  , '/');
Route::permanentRedirect('/product/دریچه-بازدید-(حوضچه-ارت-)'  , '/');
Route::permanentRedirect('/product/میله-های-ارت-مسی'  , '/');
Route::permanentRedirect('/blog/l-p-implementation'  , '/');
Route::permanentRedirect('/blog/سیستم-ارت'  , '/');
Route::permanentRedirect('/product/پودرکاهنده-مقاومت-زمین-(بکفیل)'  , '/');
Route::permanentRedirect('/product/صاعقه-گیرهای-الکترونیک-خازنی-برند-forend-مدل-petex-–m'  , '/');
Route::permanentRedirect('/Illuminate/Database/Eloquent/Collection/category/production'  , '/');
Route::permanentRedirect('/product/product/کابلشو'  , '/');
Route::permanentRedirect('/blog/موارد-کلی-در-اجرای-سیستم-حفاظت-از-صاعقه'  , '/');
Route::permanentRedirect('/product/قالب-جوش-چهارراهی-متقاطع-سیم-به-سیم'  , '/');
Route::permanentRedirect('/product/تسمه-استیل'  , '/');
Route::permanentRedirect('/Illuminate/Database/Eloquent/Collection/کاتالوگ صاعقه گیر'  , '/');
Route::permanentRedirect('/product/سرج-ارستر-ترکیبی-obo-سری-3pole+npe-،v25-(سه-فاز-و-نول)-همراه-با-کانتکت-ارسال-خطا'  , '/');
Route::permanentRedirect('/product/شمارنده-صاعقه'  , '/');
Route::permanentRedirect('/product/کلمپ-سه-راه-و-چهارراه-سیم-(فورج-دوپارچه-)'  , '/');
Route::permanentRedirect('/product/کلمپ-سیم-به-میله-ارت(کلمپ-انگشتی)'  , '/');
Route::permanentRedirect('/product/ms8232-مولتی-متر-مدل'  , '/');
Route::permanentRedirect('/product/صفحه-مسی-ارت'  , '/');
Route::permanentRedirect('/product/category/طراحی-و-محاسبات/service/'  , '/');
Route::permanentRedirect('/product/کلمپ-تسمه-به-میله-ارت(کلمپ-انگشتی)'  , '/');
Route::permanentRedirect('/Illuminate/Database/Eloquent/Collection/کلمپ گالوانیزه (FONDATION CLAMP)'  , '/');
Route::permanentRedirect('/product/active-lightning-protection-system'  , '/');
