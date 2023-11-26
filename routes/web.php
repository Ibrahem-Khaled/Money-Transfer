<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\EdietUsersConreoller;
use App\Http\Controllers\CreattransConreoller;
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
Route::group(['middleware'=>'auth'],function(){
    Route::get('/transfers/pending/accounting', function () {
        return view('anypage.accounting3');
    });

     Route::get('/transfers/pending/abouts', function () {
         return view('anypage.about');
    });
     Route::get('/wel', function () {
         return view('welcome');
    });
});


Route::get('transfer', [App\Http\Controllers\TransactionController::class, 'indexOptions'])->middleware('auth');

Route::post('/transfer/confirmation', [App\Http\Controllers\TransactionController::class, 'store'])->middleware('auth');

Route::put('/transactions/{id}', [App\Http\Controllers\TransactionController::class, 'update'])->middleware('auth');

// Send payment
Route::get('transfer/contact', [App\Http\Controllers\ContactController::class, 'create'])->middleware('auth');
Route::post('transfer/contact', [App\Http\Controllers\ContactController::class, 'storeAtTransfer'])->middleware('auth');
Route::post('transfer', [App\Http\Controllers\TransactionController::class, 'store'])->middleware('auth');
Route::get('transfer/confirmation', [App\Http\Controllers\TransactionController::class, 'show'])->middleware('auth');

// Manage contacts
Route::get('contacts', [App\Http\Controllers\ContactController::class, 'index'])->middleware('auth');
Route::post('contacts', [App\Http\Controllers\ContactController::class, 'store'])->middleware('auth');
Route::delete('contacts/delete/{contact}', [App\Http\Controllers\ContactController::class, 'destroy'])->middleware('auth')->name('contact.destroy');

// Accounts summary
Route::resource('transfers/pending/accounts', 'App\Http\Controllers\AccountController')->middleware('auth');

// Pending incoming transfers
Route::get('transfers/pending/incoming', [App\Http\Controllers\TransactionController::class, 'indexIncoming'])->middleware('auth');
Route::get('transfers/pending/outgoing', [App\Http\Controllers\TransactionController::class, 'indexOutgoing'])->middleware('auth');

// User details
Route::resource('users', 'App\Http\Controllers\UserController')->middleware('auth');

Route::get('/', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login'); 
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');





Route::get('admin/dashbord/registration', [CustomAuthController::class, 'registration'])->name('admin.home')->middleware('is_admin');
Route::get('admin/dashbord/editaccount', [EdietUsersConreoller::class, 'editaccounts'])->name('admin.edit')->middleware('is_admin');

Route::get('admin/dashbord/setting/{id}', [EdietUsersConreoller::class, 'gneralsetting'])->name('admin.gneralsetting')->middleware('is_admin');
Route::put('admin/dashbord/editsetting/{id}', [EdietUsersConreoller::class, 'editsetting'])->name('admin.editsetting')->middleware('is_admin');


Route::get('admin/dashbord/addmoney/{id}', [EdietUsersConreoller::class, 'addmoney'])->name('admin.addmoney')->middleware('is_admin');

Route::post('addmoney', [EdietUsersConreoller::class, 'creataddmoney'])->name('creataddmoney');

Route::get('admin/dashbord/gneralsetting/{id}', [EdietUsersConreoller::class, 'edituser'])->name('admin.gsetting')->middleware('is_admin');
Route::put('admin/dashbord/update/{id}', [EdietUsersConreoller::class, 'updatedata'])->name('admin.updatedata')->middleware('is_admin');


Route::get('admin/dashbord/transform/', [CreattransConreoller::class, 'creat'])->name('admin.transform')->middleware('is_admin');
