<?php

use App\Http\Controllers\AssetController;
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

Route::get('/', [AssetController::class, 'index'])->name('assets');

Route::get('new/asset', [AssetController::class, 'create'])->name('asset.create');

Route::post('new/asset', [AssetController::class, 'store'])->name('asset.store');
