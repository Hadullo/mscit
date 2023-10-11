<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('dashboard.admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

//Route::middleware('auth')->group(function () {
    //Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    //Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    //Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});

//Admin All Group
Route::controller(AdminController::class)->group(function() {
    Route::get('admin/logout', 'destroy')->name('admin.logout');
    Route::get('view/profile', 'ViewProfile')->name('view.profile');
    Route::get('edit/profile', 'EditProfile')->name('edit.profile');
    Route::get('store/profile', 'StoreProfile')->name('store.profile');

});

//Frontend All Group
Route::controller(FrontendController::class)->group(function() {
    Route::get('/', 'Home')->name('home.index');
    Route::get('/phd', 'Phd')->name('phd.index');
    Route::get('/msc', 'Msc')->name('msc.index');
    Route::get('/btit', 'Btit')->name('btit.index');
    Route::get('/bsit', 'Bsit')->name('bsit.index');
    Route::get('/bscs', 'Bscs')->name('bscs.index');
    Route::get('/dcs', 'Dcs')->name('dcs.index');
    Route::get('/dict', 'Dict')->name('dict.index');




});




require __DIR__.'/auth.php';
