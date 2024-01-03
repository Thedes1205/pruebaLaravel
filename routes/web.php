<?php
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ContactanosController;
use Illuminate\Support\Facades\Route;

use App\Controllers\ContactanosMailable;
use App\Http\Controllers\FileController;
use App\Http\Controllers\StatusController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return redirect('/inicio');
    })->name('inicio');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('inicio');
});

// Route::get('/crear', function () {
//     return view('form');
// });

Route::get('/inicio', function () {
    return view('inicio');
});

// Route::get('/editar', function () {
//     return view('editform');
// });

// Route::get('/contacto', function () {
//     return view('contactanos');
// });

// Route::get('/perfil', function () {
//     return view('perfil');
// });

Route::get('/expediente', function () {
    if(Auth::user()->registration)
    return view('expediente');
    else{
        return redirect('/');
    }
})->middleware('auth')->middleware('verified');

Route::get('/usuario', function () {
    return view('perfil');
})->middleware('auth')->middleware('verified');

Route::get('/Aviso', function () {
    return view('policy');
})->middleware('auth')->middleware('verified');

Route::resource('registration',RegistrationController::class);

Route::resource('reply',ReplyController::class);

Route::resource('question',QuestionController::class);

Route::resource('file',FileController::class);

Route::resource('status',StatusController::class);

Route::get('pdf',[RegistrationController::class,'pdf'])->name('registration.pdf')->middleware('auth')->middleware('verified');

Route::get('contactanos',[ContactanosController::class, 'index'])->name('contactanos.index');

Route::post('contactanos',[ContactanosController::class, 'store'])->name('contactanos.store');

/*Route::get('/navbar',
    [RegistrationController::class, 'navBar']
)->name('navbar');*/
