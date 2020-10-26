<?php
// use Illuminate\Routing\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
// Route::get('qr-code', function () {
//     return  QRCode::text('mey123')
//         ->setOutfile('images/mey123-qr-code.png')
//         ->png();
// });


Route::middleware(['auth'])->group(function () {

    Route::get('/', 'HomeController@cekLogin');

});

Route::get('/login', 'LoginController@showLogin')->middleware('guest')->name('home');

Route::post('/login', 'LoginController@postLogin')->middleware('guest')->name('login');


Route::middleware(['auth.admin'])->prefix('admin')->name('admin.')->group(function () {

    // Admin Dahsboard

    Route::get('dashboard', 'Admin\DashboardController@index')
    ->name('dashboard');

    // User Admin
    Route::prefix('users')->group(function () {

        Route::prefix('admin')->group(function () {
            Route::get('/', 'Admin\UserAdminController@index')
                ->name('usersAdmin');
        });

        // User
        Route::prefix('user')->group(function () {
            Route::get('/', 'Admin\UsersUserController@index')
                ->name('userUser');
            Route::get('/ShowRegisterUser', 'Admin\UsersUserController@create')
                ->name('showRegister');
            Route::post('/Register', 'Admin\UsersUserController@store')
                ->name('register');
            Route::get('/{id}/edit', 'Admin\UsersUserController@edit')
                ->name('showEditUser');
            Route::post('/edit', 'Admin\UsersUserController@update')
                ->name('editUser');
        });
    });

    // Absen
    Route::prefix('absen')->group(function(){
        Route::get('/', 'Admin\AbsenController@index')
        ->name('absen');
        Route::get('/{id}/detail', 'Admin\AbsenController@detailAbsen')
        ->name('absenDetail');
        Route::get('/{id}/ShowAbsen', 'Admin\AbsenController@store')
        ->name('showAbsen');
        Route::post('/tambahAbsen', 'Admin\AbsenController@create')
        ->name('addAbsen');
    });

    Route::prefix('laporan')->group(function () {
        Route::get('/', 'Admin\LaporanController@index')
        ->name('laporan');
        Route::get('/filterAbsen', 'Admin\LaporanController@exportexcel')
        ->name('filterAbsenexport');
        Route::post('/filterAbsen', 'Admin\LaporanController@filterAbsen')
            ->name('filterAbsen');

    });


});

// Auth User
Route::middleware(['auth.user'])->prefix('user')->name('user.')->group(function () {
    Route::get('Dashboard', 'User\DashboardController@index')
    ->name('dashboard');

        Route::prefix('absen')->group(function () {
            Route::get('/', 'User\AbsenController@index')
            ->name('absen');
             Route::post('/absen', 'User\AbsenController@create')
            ->name('absenUser');
        });

        Route::prefix('laporan')->group(function () {
            Route::get('/', 'User\LaporanController@index')
            ->name('laporan');
        });

});




Route::get('/logout', 'LoginController@logout')->middleware('auth')->name('logout');
