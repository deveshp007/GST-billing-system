<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\PartyController;
use App\Http\Controllers\GSTBillController;
use App\Http\Controllers\VendorInvoice;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;



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

// Route::get('/', function () {
//     return view('welcome');
// });


// Index
Route::get("/", [AppController::class, "index"])->name("dashboard");


// party
Route::get("/add-party", [PartyController::class, "addParty"])->name("add-party");
Route::post('/create-party', [PartyController::class,"createParty"])->name('create-party');
Route::get("/manage-parties", [PartyController::class, "index"])->name("manage-parties");
Route::get('/edit-party/{id}', [PartyController::class, "editParty"])->name('edit-party');
Route::put('/update-party/{id}', [PartyController::class, "updateParty"])->name('update-party');
Route::delete('delete-party/{party}', [PartyController::class, "deleteParty"])->name('delete-party');

// GST Bill
Route::get('/add-gst-bill', [GSTBillController::class, "addGSTBill"])->name("add-gst-bill");
Route::get('/manage-gst-bills', [GSTBillController::class, "index"])->name("manage-gst-bills");
Route::get('/print-gst-bill/{id}', [GSTBillController::class, "print"])->name("print-gst-bill");
Route::post('/create-gst-bill', [GstBillController::class, "createGstBill"])->name('create-gst-bill');


// Soft Delete route
Route::get('/delete/{table}/{id}', [AppController::class, "delete"])->name('delete');

// Resource Controller routes
Route::resource('vendor-invoice', VendorInvoice::class);
// Route::resource('vendor-invoice', 'VendorInvoice');

Auth::routes();

Route::get('/home', [HomeController::class, "index"])->name('home');
