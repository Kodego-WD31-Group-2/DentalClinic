<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DarkModeController;
use App\Http\Controllers\ColorSchemeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AppointmentsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', function () {
    return view('pages.home');
});


//Admin Middleware
Route::middleware(['auth', 'admin'])->group(function () {
    /// Enter Admin Pages Here
});

Route::get('doctors/add', [DoctorsController::class, 'add'])->name('doctors.add');
    Route::post('doctors/store', [DoctorsController::class, 'store'])->name('doctors.store');
    Route::get('doctors/show', [DoctorsController::class, 'show'])->name('doctors.show');
    Route::get('doctors/{doctor}/edit', [DoctorsController::class, 'edit']);
    Route::get('doctors/{doctor}/view', [DoctorsController::class, 'view']);
    Route::put('doctors/{doctor}', [DoctorsController::class, 'update']);
    Route::delete('doctors/{doctor}', [DoctorsController::class,'destroy']);
    Route::get('/services/add', [ServicesController::class, 'add']);
    Route::post('/services/store', [ServicesController::class, 'store']);
    Route::get('/services/{service}', [ServicesController::class, 'show']);
    Route::get('/services/{service}/edit', [ServicesController::class, 'edit']);
    Route::put('/services/{service}', [ServicesController::class, 'update']);
    Route::delete('/services/{service}', [ServicesController::class,'destroy']);
    Route::get('/patients/list', [PatientsController::class, 'index']);
    Route::get('/patients/add', [PatientsController::class, 'add']);
    Route::post('/patients/store', [PatientsController::class, 'store'])->name('patients.store');
    Route::get('/patients/{patient}', [PatientsController::class, 'show']);
    Route::get('/patients/{patient}/edit', [PatientsController::class, 'edit']);
    Route::put('/patients/{patient}', [PatientsController::class, 'update'])->name('patients.update');
    Route::delete('/patients/{patient}', [PatientsController::class,'destroy']);
    Route::get('/employees/list', [EmployeesController::class, 'index']);
    Route::get('/employees/add', [EmployeesController::class, 'add']);
    Route::post('/employees/store', [EmployeesController::class, 'store'])->name('employees.store');
    Route::get('/employees/{employee}', [EmployeesController::class, 'show']);
    Route::get('/employees/{employee}/edit', [EmployeesController::class, 'edit']);
    Route::put('/employees/{employee}', [EmployeesController::class, 'update'])->name('employees.update');
    Route::delete('/employees/{employee}', [EmployeesController::class,'destroy']);
    Route::get('/employees/list', [EmployeesController::class, 'index']);
    Route::get('/employees/add', [EmployeesController::class, 'add']);
    Route::post('/employees/store', [EmployeesController::class, 'store'])->name('employees.store');
    Route::get('/employees/{employee}', [EmployeesController::class, 'show']);
    Route::get('/employees/{employee}/edit', [EmployeesController::class, 'edit']);
    Route::put('/employees/{employee}', [EmployeesController::class, 'update'])->name('employees.update');
    Route::delete('/employees/{employee}', [EmployeesController::class,'destroy']);


//Show Register / Create Form
Route::get('/register', [AuthController::class, 'create'])->middleware('guest');

//Create New User
Route::post('/register', [AuthController::class, 'store']);

Route::get('dark-mode-switcher', [DarkModeController::class, 'switch'])->name('dark-mode-switcher');
Route::get('color-scheme-switcher/{color_scheme}', [ColorSchemeController::class, 'switch'])->name('color-scheme-switcher');

Route::controller(AuthController::class)->middleware('loggedin')->group(function() {
    Route::get('login', 'loginView')->name('login.index');
    Route::post('login', 'login')->name('login.check');
});

Route::middleware('auth')->group(function() {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::controller(PageController::class)->group(function() {
        Route::get('dashboard-overview-1-page', 'dashboardOverview1')->name('dashboard-overview-1');
        Route::get('dashboard-overview-2-page', 'dashboardOverview2')->name('dashboard-overview-2');
        Route::get('dashboard-overview-3-page', 'dashboardOverview3')->name('dashboard-overview-3');
        Route::get('dashboard-overview-4-page', 'dashboardOverview4')->name('dashboard-overview-4');
        // Add routes for the dashboard here
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        ///////////////////////////////
        Route::get('categories-page', 'categories')->name('categories');
        Route::get('add-product-page', 'addProduct')->name('add-product');
        Route::get('product-list-page', 'productList')->name('product-list');
        Route::get('product-grid-page', 'productGrid')->name('product-grid');
        Route::get('transaction-list-page', 'transactionList')->name('transaction-list');
        Route::get('transaction-detail-page', 'transactionDetail')->name('transaction-detail');
        Route::get('seller-list-page', 'sellerList')->name('seller-list');
        Route::get('seller-detail-page', 'sellerDetail')->name('seller-detail');
        Route::get('reviews-page', 'reviews')->name('reviews');
        Route::get('inbox-page', 'inbox')->name('inbox');
        Route::get('file-manager-page', 'fileManager')->name('file-manager');
        Route::get('point-of-sale-page', 'pointOfSale')->name('point-of-sale');
        Route::get('chat-page', 'chat')->name('chat');
        Route::get('post-page', 'post')->name('post');
        Route::get('calendar-page', 'calendar')->name('calendar');
        Route::get('crud-data-list-page', 'crudDataList')->name('crud-data-list');
        Route::get('crud-form-page', 'crudForm')->name('crud-form');
        Route::get('users-layout-1-page', 'usersLayout1')->name('users-layout-1');
        Route::get('users-layout-2-page', 'usersLayout2')->name('users-layout-2');
        Route::get('users-layout-3-page', 'usersLayout3')->name('users-layout-3');
        Route::get('/', 'profileOverview1')->name('profile-overview-1');
        Route::get('profile-overview-2-page', 'profileOverview2')->name('profile-overview-2');
        Route::get('profile-overview-3-page', 'profileOverview3')->name('profile-overview-3');
        Route::get('wizard-layout-1-page', 'wizardLayout1')->name('wizard-layout-1');
        Route::get('wizard-layout-2-page', 'wizardLayout2')->name('wizard-layout-2');
        Route::get('wizard-layout-3-page', 'wizardLayout3')->name('wizard-layout-3');
        Route::get('blog-layout-1-page', 'blogLayout1')->name('blog-layout-1');
        Route::get('blog-layout-2-page', 'blogLayout2')->name('blog-layout-2');
        Route::get('blog-layout-3-page', 'blogLayout3')->name('blog-layout-3');
        Route::get('pricing-layout-1-page', 'pricingLayout1')->name('pricing-layout-1');
        Route::get('pricing-layout-2-page', 'pricingLayout2')->name('pricing-layout-2');
        Route::get('invoice-layout-1-page', 'invoiceLayout1')->name('invoice-layout-1');
        Route::get('invoice-layout-2-page', 'invoiceLayout2')->name('invoice-layout-2');
        Route::get('faq-layout-1-page', 'faqLayout1')->name('faq-layout-1');
        Route::get('faq-layout-2-page', 'faqLayout2')->name('faq-layout-2');
        Route::get('faq-layout-3-page', 'faqLayout3')->name('faq-layout-3');
        Route::get('login-page', 'login')->name('login');
        Route::get('register-page', 'register')->name('register');
        Route::get('error-page-page', 'errorPage')->name('error-page');
        Route::get('update-profile-page', 'updateProfile')->name('update-profile');
        Route::get('change-password-page', 'changePassword')->name('change-password');
        Route::get('regular-table-page', 'regularTable')->name('regular-table');
        Route::get('tabulator-page', 'tabulator')->name('tabulator');
        Route::get('modal-page', 'modal')->name('modal');
        Route::get('slide-over-page', 'slideOver')->name('slide-over');
        Route::get('notification-page', 'notification')->name('notification');
        Route::get('tab-page', 'tab')->name('tab');
        Route::get('accordion-page', 'accordion')->name('accordion');
        Route::get('button-page', 'button')->name('button');
        Route::get('alert-page', 'alert')->name('alert');
        Route::get('progress-bar-page', 'progressBar')->name('progress-bar');
        Route::get('tooltip-page', 'tooltip')->name('tooltip');
        Route::get('dropdown-page', 'dropdown')->name('dropdown');
        Route::get('typography-page', 'typography')->name('typography');
        Route::get('icon-page', 'icon')->name('icon');
        Route::get('loading-icon-page', 'loadingIcon')->name('loading-icon');
        Route::get('regular-form-page', 'regularForm')->name('regular-form');
        Route::get('datepicker-page', 'datepicker')->name('datepicker');
        Route::get('tom-select-page', 'tomSelect')->name('tom-select');
        Route::get('file-upload-page', 'fileUpload')->name('file-upload');
        Route::get('wysiwyg-editor-classic', 'wysiwygEditorClassic')->name('wysiwyg-editor-classic');
        Route::get('wysiwyg-editor-inline', 'wysiwygEditorInline')->name('wysiwyg-editor-inline');
        Route::get('wysiwyg-editor-balloon', 'wysiwygEditorBalloon')->name('wysiwyg-editor-balloon');
        Route::get('wysiwyg-editor-balloon-block', 'wysiwygEditorBalloonBlock')->name('wysiwyg-editor-balloon-block');
        Route::get('wysiwyg-editor-document', 'wysiwygEditorDocument')->name('wysiwyg-editor-document');
        Route::get('validation-page', 'validation')->name('validation');
        Route::get('chart-page', 'chart')->name('chart');
        Route::get('slider-page', 'slider')->name('slider');
        Route::get('image-zoom-page', 'imageZoom')->name('image-zoom');
    });
});


Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::get('/contacts', [HomeController::class, 'contacts']);

Route::get('/dashboard', [PageController::class, 'dashboard']);


Route::get('/home', [HomeController::class, 'home'])->name('home');


// Route::get('/home-test', [HomeController::class, 'try'])->name('home');





//Services Routes
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/services/add', [ServicesController::class, 'add'])->middleware('auth');
Route::post('/services/store', [ServicesController::class, 'store'])->middleware('auth');
Route::get('/services/show', [ServicesController::class, 'show'])->middleware('auth')->name('services-list');
Route::get('/services/{service}/edit', [ServicesController::class, 'edit'])->middleware('auth');
Route::put('/services/{service}', [ServicesController::class, 'update'])->middleware('auth');
Route::delete('/services/{service}', [ServicesController::class,'destroy'])->middleware('auth');
Route::get('/services/offer', [ServicesController::class, 'offer'])->middleware('auth');


// Route::get('/services/{service}', [ServicesController::class, 'view']);

Route::get('/employees/list', [EmployeesController::class, 'index'])->name('employees');
Route::get('/employees/add', [EmployeesController::class, 'add']);
Route::post('/employees/store', [EmployeesController::class, 'store'])->name('employees.store');
Route::get('/employees/{employee}', [EmployeesController::class, 'show']);
Route::get('/employees/{employee}/edit', [EmployeesController::class, 'edit']);
Route::put('/employees/{employee}', [EmployeesController::class, 'update'])->name('employees.update');
Route::delete('/employees/{employee}', [EmployeesController::class,'destroy']);


// Doctor Route
Route::get('doctors', [DoctorsController::class, 'index'])->name('doctors');
// Route::get('doctors/add', [DoctorsController::class, 'add'])->name('doctors.add');
// Route::post('doctors/store', [DoctorsController::class, 'store'])->name('doctors.store')->middleware('auth');
// Route::get('doctors/show', [DoctorsController::class, 'show'])->name('doctors.show')->middleware('auth');
// Route::get('doctors/{doctor}/edit', [DoctorsController::class, 'edit'])->middleware('auth');
// Route::get('doctors/{doctor}/view', [DoctorsController::class, 'view']);
// Route::put('doctors/{doctor}', [DoctorsController::class, 'update'])->middleware('auth');
// Route::delete('doctors/{doctor}', [DoctorsController::class,'destroy'])->middleware('auth');


// Route::get('/patients/list', [PatientsController::class, 'index']);
// Route::get('/patients/add', [PatientsController::class, 'add']);
// Route::post('/patients/store', [PatientsController::class, 'store'])->name('patients.store');
// Route::get('/patients/{patient}', [PatientsController::class, 'show']);
// Route::get('/patients/{patient}/edit', [PatientsController::class, 'edit']);
// Route::put('/patients/{patient}', [PatientsController::class, 'update'])->name('patients.update');
// Route::delete('/patients/{patient}', [PatientsController::class,'destroy']);



Route::get('/appointments/list', [AppointmentsController::class, 'index'])->name('appointments-list');
Route::get('/appointments/book-appointment', [AppointmentsController::class, 'add'])->name('book-appointment');
Route::post('/appointments/store', [AppointmentsController::class, 'store'])->name('appointments.store');
// Route::get('/appointments/{appointment}', [AppointmentsController::class, 'show']);
Route::get('/appointments/{appointment}/edit', [AppointmentsController::class, 'edit'])->name('appointments.edit');
Route::put('/appointments/{appointment}', [AppointmentsController::class, 'update'])->name('appointments.update');
Route::delete('/appointments/{appointment}', [AppointmentsController::class,'destroy'])->name('appointments.destroy');


Route::put('/appointments/list', [AppointmentsController::class, 'status'])->name('appointments.status');
Route::put('/appointments/{appointment}/status', [AppointmentsController::class, 'status'])->name('appointments.status');



Route::get('/billings/list', [BillingsController::class, 'index'])->name('billings-list');
Route::get('/billings/book-billing', [BillingsController::class, 'add'])->name('add-billing');
// Route::pos('/billings/store', [BillingsController::class, 'store'])->name('billings.store');
Route::get('/billings/{billing}', [BillingsController::class, 'show'])->name('billing-details');
Route::get('/billings/{billing}/edit', [BillingsController::class, 'edit']);
Route::put('/billings/{billing}', [BillingsController::class, 'update'])->name('billings.update');
Route::delete('/billings/{billing}', [BillingsController::class,'destroy']);



// Route::get('/book-appointment', [AppointmentsController::class, 'appointment']);