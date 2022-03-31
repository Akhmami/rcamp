<?php

use Illuminate\Support\Facades\Route;
use App\Models\Participant;

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
    return view('welcome');
});

Route::get('pembayaran/{no_pendaftaran}', function ($no_pendaftaran) {
    $participant = Participant::where('no_pendaftaran', $no_pendaftaran)->first();
    return view('payment', compact('participant'));
})->name('payment');

Route::get('partisipan', function () {
    return view('participants');
});
