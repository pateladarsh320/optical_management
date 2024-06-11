<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FlowController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\LenseGroupController;
use App\Http\Controllers\LensProductController;
use App\Http\Controllers\ClipController;
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
Route::get('/dashboard', [FlowController::class, 'dashboard'])->name('dashboard');
Route::get('/flow-page', [FlowController::class, 'index'])->name('flow-page');
Route::get('/new-flow', [FlowController::class, 'addFlow'])->name('flow-add');
Route::post('/add-presciption', [PrescriptionController::class, 'addPrescription'])->name('presciption.addprocess');
Route::post('/add-presciptiongroup', [LenseGroupController::class, 'addlensGroup'])->name('lensgroup.addprocess');
Route::post('/add-lenseProduct', [LensProductController::class, 'addlensproduct'])->name('lensproduct.addprocess');
Route::post('/add-clip', [ClipController::class, 'addclip'])->name('clip.addprocess');
Route::post('/add-lenseIndex', [LensProductController::class, 'addlensIndex'])->name('lensproductindex.addprocess');
