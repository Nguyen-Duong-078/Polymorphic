<?php

use App\Events\OrderShipped;
use App\Http\Controllers\ArticleController;
use App\Models\articles;
use App\Models\User;
use App\Notifications\InvoicePaid;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    // $delay = now()->addMinutes(10);
    // $name = 'ahihi';
    // $user = new User();
    // $user->id = 1;
    // $user->email = 'duongnvph33164@fpt.edu.vn';
    // $user->notify((new InvoicePaid($name))->delay($delay));
    dd(1);
});

Route::get('/articles', [ArticleController::class, 'index']);
