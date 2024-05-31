<?php

use App\Filament\Resources\ResponseResource\Pages\CreateResponse;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ResponseController;
use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\CreateResponse as LivewireCreateResponse;
use App\Mail\EmailResponse;
use App\Models\Response;
use Illuminate\Support\Facades\Mail;
use MailerSend\Endpoints\Email;

Route::get('/', HomeController::class)->name('home');


Route::get('/product', [ProductController::class, 'index'])->name('products.index');

Route::get('/product/{product:slug}', [ProductController::class, 'show'])->name('products.show');
// Route::post('/product/{product:slug}/', [MailController::class, 'maildata'])->name('send_mail');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])
->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
});

