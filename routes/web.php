<?php

use Illuminate\Support\Facades\Route;

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

Route::get('activeX', function () {
    $ie = new COM('InternetExplorer.Application');
    $ie->Visible = true;
    $ie->Navigate('https://www.example.com');
    while ($ie->Busy) {
        com_message_pump(100);
    }
    $html = $ie->Document->documentElement->outerHTML;
    echo $html;
});
