<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventHomeController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriEventController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return redirect()->route('home.index');
// });

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::post('/ulasan/post', [HomeController::class, 'ulasan'])->name('home.ulasan');

Route::get('/auth/login', [AuthController::class, 'login'])->name('login');
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/auth/login/post', [AuthController::class, 'login_post'])->name('login.post');

Route::get('/auth/register', [AuthController::class, 'register'])->name('register');
Route::post('/auth/register/post', [AuthController::class, 'register_post'])->name('register.post');

Route::get('/kontak', [HomeController::class, 'kontak'])->name('home.kontak');
Route::post('/kontak/post', [HomeController::class, 'kontak_post'])->name('home.kontak.post');

Route::get('/event', [EventHomeController::class, 'index'])->name('home.event');
Route::get('/event/show/{uuid}', [EventHomeController::class, 'show'])->name('home.event.show');
Route::get('/event/follow/{uuid}', [EventHomeController::class, 'follow'])->name('home.event.follow');
Route::get('/event/like/{uuid}', [EventHomeController::class, 'like'])->name('home.event.like');
Route::post('/event/comment', [EventHomeController::class, 'comment'])->name('home.event.comment');

Route::get('/galeri', [HomeController::class, 'galeri'])->name('home.galeri');

Route::get('/about', [HomeController::class, 'about'])->name('home.about');

Route::group(['middleware' => ['auth']], function(){
    //dashboard
    Route::get('/dashboards/index', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::get('/dashboards/users/index', [UserController::class, 'index'])->name('users.index');
    Route::get('/dashboards/users/reset-password/{id}', [UserController::class, 'resetPassword'])->name('users.resetPassword');
    Route::get('/dashboards/users/change-status/{id}', [UserController::class, 'statusEnabled'])->name('users.changeStatus');

    Route::get('/dashboards/kontak/index', [KontakController::class, 'index'])->name('kontak.index');
    Route::get('/dashboards/kontak/delete/{uuid}', [KontakController::class, 'delete'])->name('kontak.delete');

    Route::get('/dashboards/kategori-event/index', [KategoriEventController::class, 'index'])->name('kategorievent.index');
    Route::post('/dashboards/kategori-event/insert', [KategoriEventController::class, 'insert'])->name('kategorievent.insert');
    Route::get('/dashboards/kategori-event/delete/{uuid}', [KategoriEventController::class, 'delete'])->name('kategorievent.delete');
    Route::post('/dashboards/kategori-event/update/{uuid}', [KategoriEventController::class, 'update'])->name('kategorievent.update');

    Route::get('/dashboards/tags-event/index', [TagsController::class, 'index'])->name('tagsevent.index');
    Route::post('/dashboards/tags-event/insert', [TagsController::class, 'insert'])->name('tagsevent.insert');
    Route::post('/dashboards/tags-event/update/{uuid}', [TagsController::class, 'update'])->name('tagsevent.update');
    Route::get('/dashboards/tags-event/delete/{uuid}', [TagsController::class, 'delete'])->name('tagsevent.delete');

    Route::get('/dashboards/galeri/index', [GaleriController::class, 'index'])->name('galeri.index');
    Route::post('/dashboards/galeri/insert', [GaleriController::class, 'insert'])->name('galeri.insert');
    Route::get('/dashboards/galeri/delete/{uuid}', [GaleriController::class, 'delete'])->name('galeri.delete');

    Route::get('/dashboards/event/index', [EventController::class, 'index'])->name('event.index');
    Route::get('/dashboards/event/insert', [EventController::class, 'insert'])->name('event.insert');
    Route::get('/dashboards/event/edit/{uuid}', [EventController::class, 'edit'])->name('event.edit');
    Route::post('/dashboards/event/update/{uuid}', [EventController::class, 'update'])->name('event.update');
    Route::post('/dashboards/event/post', [EventController::class, 'post'])->name('event.post');
    Route::get('/dashboards/event/delete/{uuid}', [EventController::class, 'delete'])->name('event.delete');
    Route::get('/dashboards/event/done/{uuid}', [EventController::class, 'done'])->name('event.done');
});
