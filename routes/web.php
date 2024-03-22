<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MentorsController;
use App\Http\Controllers\FaqsController;
use App\Http\Controllers\InfoBlogsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\DashboardController as AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RelationsController;
use App\Http\Controllers\Admin\FaqsController as AdminFaqsController;
use App\Http\Controllers\Admin\MenuController as AdminMenuController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\UserInfoController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\AnnoController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\CalendarController as AdminCalendarController;


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

Route::get('/', [PageController::class, 'index'])->name('home');

//Login Register Logout
Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [LoginController::class, 'showRegister'])->name('register');
Route::post('/register', [LoginController::class, 'register']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/myblogs', [DashboardController::class, 'myBlogs'])->name('myblogs');
    Route::get('/addblog', [DashboardController::class, 'addBlog'])->name('addblog');
    Route::post('/storeBlog', [DashboardController::class, 'storeBlog'])->name('storeBlog');
    Route::get('/editBlog/{id}', [DashboardController::class, 'editBlog'])->name('editBlog');
    Route::post('/updateBlog', [DashboardController::class, 'updateBlog'])->name('updateBlog');
    Route::delete('/deleteBlog/{id}', [DashboardController::class, 'deleteBlog'])->name('deleteBlog');
    Route::get('/messages/{id}', [MessagesController::class, 'index'])->name('messages');
    Route::post('/broadcast', [MessagesController::class, 'broadcast']);
    Route::post('/receive', [MessagesController::class, 'receive']);
    Route::post('/send-mentee-message', [MessagesController::class, 'sendMessage'])->name('send-mentee-message');

    Route::get('/profilesettings', [DashboardController::class, 'profilesettings'])->name('profilesettings');
    Route::post('/profilesettings', [DashboardController::class, 'updateProfile'])->name('profilesettings.update');
    Route::post('comment',[CommentsController::class, 'create'])->name('comment.create');
    Route::get('/chat/{id}',[MessagesController::class, 'chat'])->name('chat');
    Route::get('/profile/{id}',[UserInfoController::class,'index'])->name('profile');
    Route::get('/profileset',[UserInfoController::class,'profile'])->name('profileset');
    Route::post('/profileset',[UserInfoController::class,'updateProfile'])->name('profileset.update');
    Route::get('/calendar',[CalendarController::class,'index'])->name('calendar');
    Route::post('/calendar',[CalendarController::class,'store'])->name('calendar.store');
    Route::delete('/deleteCalendar/{id}',[CalendarController::class,'delete'])->name('calendar.delete');
    Route::get('/anno',[AnnoController::class,'index'])->name('anno');
});


//Pages
Route::get('/infoblog', [InfoBlogsController::class, 'index'])->name('infoblog');
Route::get('/infoblogs/{id}', [InfoBlogsController::class, 'detail'])->name('blogdetail');
Route::get('/faqs', [FaqsController::class, 'index'])->name('faqs');
Route::get('/mentors', [MentorsController::class, 'index'])->name('mentors');
Route::get('/menu/detail/{id}', [PageController::class, 'menu'])->name('menu.detail');


//Admin
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'login'])->name('admin.login');
});
Route::prefix('admin')->middleware('redirect.if.not.admin')->group(function () {
    Route::get('/home', [AdminController::class, 'home'])->name('admin.home');
    Route::post('/logout', [AdminController::class,'logout'])->name('admin.logout');
    Route::get('/mentors', [UserController::class, 'mentors'])->name('admin.mentors');
    Route::get('/mentees', [UserController::class, 'mentees'])->name('admin.mentees');
    Route::get('/waitingusers', [UserController::class, 'waitingUsers'])->name('admin.waitingusers');
    Route::get('/users/{id}', [UserController::class, 'detail'])->name('admin.users.detail');
    Route::delete('/users/destroy/{id}', [UserController::class, 'destroy'])->name('admin.users.destroy');
    Route::get('/users/approve/{id}', [UserController::class, 'approve'])->name('admin.users.approve');
    Route::get('/relations', [RelationsController::class, 'index'])->name('admin.relations');
    Route::post('/relations', [RelationsController::class, 'create'])->name('admin.relations.create');
    Route::delete('/relations/destroy/{id}', [RelationsController::class, 'destroy'])->name('admin.relations.destroy');
    Route::get('/faqs', [AdminFaqsController::class, 'list'])->name('admin.faqs');
    Route::get('/faqs/create', [AdminFaqsController::class, 'create'])->name('admin.faqs.create');
    Route::post('/faqs/store', [AdminFaqsController::class, 'store'])->name('admin.faqs.store');
    Route::get('/faqs/edit/{id}', [AdminFaqsController::class, 'edit'])->name('admin.faqs.edit');
    Route::post('/faqs/update', [AdminFaqsController::class, 'update'])->name('admin.faqs.update');
    Route::get('/faqs/passive/{id}', [AdminFaqsController::class, 'passive'])->name('admin.faqs.passive');
    Route::get('/faqs/active/{id}', [AdminFaqsController::class, 'active'])->name('admin.faqs.active');
    Route::get('/menu/list)', [AdminMenuController::class, 'list'])->name('admin.menu.list');
    Route::get('/menu/content/{id}', [AdminMenuController::class, 'content'])->name('admin.menu.content');
    Route::get('/menu/create', [AdminMenuController::class, 'create'])->name('admin.menu.create');
    Route::post('/menu/store', [AdminMenuController::class, 'store'])->name('admin.menu.store');
    Route::get('/menu/edit/{id}', [AdminMenuController::class, 'edit'])->name('admin.menu.edit');
    Route::post('/menu/update', [AdminMenuController::class, 'update'])->name('admin.menu.update');
    Route::delete('/menu/destroy/{id}', [AdminMenuController::class, 'destroy'])->name('admin.menu.destroy');
    Route::get('/anno', [AdminController::class, 'anno'])->name('admin.anno.list');
    Route::get('/anno/create', [AdminController::class, 'annoCreate'])->name('admin.anno.create');
    Route::post('/anno', [AdminController::class, 'annoStore'])->name('admin.anno.store');
    Route::get('/settings',[SettingsController::class,'index'])->name('admin.settings');
    Route::get('/calendar',[AdminCalendarController::class,'index'])->name('admin.calendar');
    Route::post('/settings/logo',[SettingsController::class,'logo'])->name('admin.settings.logo');
    Route::post('/settings/banner',[SettingsController::class,'banner'])->name('admin.settings.banner');
    Route::post('/settings/section1',[SettingsController::class,'section1'])->name('admin.settings.section1');
    Route::post('/settings/section4',[SettingsController::class,'section4'])->name('admin.settings.section4');


});

