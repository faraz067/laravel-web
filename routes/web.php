<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MahasiswaController;

Route::get('/pcr', function () {
    return 'selamat datang diwebsite kampus PCR!';
});

route:: get('/nama/{param}', function ($faraz){
    return 'nama saya: '.$faraz;


});


route::get('/nim/{param1?}', function ($param1 = ''){
    return 'nim saya; '.$param1;
});


Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);


route::get('/about', function() {
    return view('halaman-about');
});
