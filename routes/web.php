<?php

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
    return view('auth.login');
});

Route::group(['middleware' => ['isAdmin']], function() {
  

// anggota
Route::get('/anggota','anggotacontrol@index');
Route::get('/anggota/add','anggotacontrol@add');
Route::post('/anggota/save','anggotacontrol@save');
Route::get('/anggota/delete/{kd_anggota}','anggotacontrol@delete');
Route::get('/anggota/edit/{kd_anggota}','anggotacontrol@edit');


// buku
Route::get('/buku','bukucontrol@index');
Route::get('/buku/add','bukucontrol@add');
Route::post('/buku/save','bukucontrol@save');
Route::get('/buku/delete/{kd_anggota}','bukucontrol@delete');
Route::get('/buku/edit/{kd_anggota}','bukucontrol@edit');

// koleksi
Route::get('/koleksi','koleksicontrol@index');
Route::get('/koleksi/add','koleksicontrol@add');
Route::post('/koleksi/save','koleksicontrol@save');
Route::get('/koleksi/delete/{kd_anggota}','koleksicontrol@delete');
Route::get('/koleksi/edit/{kd_anggota}','koleksicontrol@edit');




// transaksi
Route::post('/trans/peminjaman','transaksicontrol@peminjaman');
Route::get('/trans/peminjaman','transaksicontrol@peminjaman');
Route::post('/trans/peminjaman/save','transaksicontrol@save_peminjaman');


// transaksi
Route::post('/trans/pengembalian','transaksicontrol@pengembalian');
Route::get('/trans/pengembalian','transaksicontrol@pengembalian');
Route::post('/trans/pengembalian/save','transaksicontrol@save_pengembalian');

// report
Route::get('/report/anggota','reportcontrol@rpt_anggota');
Route::get('/report/qrcode_buku','reportcontrol@rpt_qrcode_buku');

// Pengarang
Route::get('/Pengarang','pengarangcontrol@index');
Route::get('/Pengarang/add','pengarangcontrol@add');
Route::get('/Pengarang/edit/{kd_pengarang}','pengarangcontrol@edit');
Route::post('/Pengarang/save','pengarangcontrol@save');
Route::get('/Pengarang/delete/{kd_pengarang}','pengarangcontrol@delete');


// penerbit
Route::get('/Penerbit','penerbitcontrol@index');
Route::get('/Penerbit/add','penerbitcontrol@add');
Route::get('/Penerbit/edit/{kd_penerbit}','penerbitcontrol@edit');
Route::post('/Penerbit/save','penerbitcontrol@save');
Route::get('/Penerbit/delete/{kd_penerbit}','penerbitcontrol@delete');




// rak
Route::get('/Rak','rakcontrol@index');
Route::get('/Rak/add','rakcontrol@add');
Route::get('/Rak/edit/{kd_rak}','rakcontrol@edit');
Route::post('/Rak/save','rakcontrol@save');
Route::get('/Rak/delete/{kd_rak}','rakcontrol@delete');

// your routes
Route::get('user','userscontrol@index');
Route::get('user/add','userscontrol@add');
Route::get('user/edit/{id}','userscontrol@edit');
Route::get('user/delete/{id}','userscontrol@delete');
Route::post('user/save','userscontrol@save');

});

Route::group(['middleware' => ['isOperator']], function() {
    // Anggota
    Route::get('/anggota','anggotacontrol@index');
    // Buku
    Route::get('/buku','bukucontrol@index');
    // Koleksi
    Route::get('/koleksi','koleksicontrol@index');   
    // Transaksi
    Route::get('/trans/peminjaman','transaksicontrol@peminjaman');
    Route::post('/trans/peminjaman','transaksicontrol@peminjaman');
    Route::post('/trans/peminjaman/save','transaksicontrol@save_peminjaman');

    Route::post('/trans/pengembalian','transaksicontrol@pengembalian');
    Route::get('/trans/pengembalian','transaksicontrol@pengembalian');
    Route::post('/trans/pengembalian/save','transaksicontrol@save_pengembalian');

    Route::get('report/qrcode_buku','reportcontrol@rpt_qrcode_buku');


});



Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');

//mobile serve
    Route::get('/mobile/get_buku','MobileControl@get_Buku');
    Route::get('/mobile/get_koleksi/{kd_buku}','MobileControl@get_Koleksi');
    Route::post('/mobile/registrasi','MobileControl@registrasi');
   // Route::get('/mobile/get_token','MobileControl@get_token');


