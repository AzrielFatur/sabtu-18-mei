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
    $datapt = DB::table('datapt')->get();
    $about = DB::table('about')->get();
    $service = DB::table('service')->get();
    $gallery = DB::table('gallery')->get();
    $tim = DB::table('tim')->get();
    $testi = DB::table('testi')->get();
    return view('awal',['service' =>$service,
                        'datapt' =>$datapt,
                        'about' =>$about,
                        'gallery' =>$gallery,
                        'tim' =>$tim,
                        'testi' =>$testi
                        ]);    
});

Route::get('/tambahdetail', function(){
    $detail = DB::table('detail')->get();

    return view('tambahdetail',['detail' =>$detail]);
});

Route::get('/sertifikat', function(){
    $detail = DB::table('detail')->get();
    $sertifikaat = DB::table('sertifikaat')->get();
    
    return view('sertifikat',['detail' =>$detail,
    'sertifikaat' =>$sertifikaat
    ]);
});


Route::get('/service','ServiceController@index');

Route::get('/service/ubah/{id}','ServiceController@ubah');


Route::post('/service/update','ServiceController@update');

Route::post('/service/updatedatapt','ServiceController@updatedatapt');

Route::post('/service/updateabout','ServiceController@updateabout');

Route::post('/service/updategallery','ServiceController@updategallery');

Route::post('/service/updatetim','ServiceController@updatetim');

Route::post('/service/updatetesti','ServiceController@updatetesti');

Route::post('/service/updatedetail','ServiceController@updatedetail');

Route::post('/service/updatesertifikaat','ServiceController@updatesertifikaat');


// VIEW DOANG
Route::get('/myabout','LandingController@myabout');

Route::get('/sertifikat','LandingController@sertifikat');

Route::get('/lowongankerja','LandingController@lowongankerja');

Route::get('/tambahdetail','ServiceController@tambahdetail');

Route::get('/tambahtesti','ServiceController@tambahtesti');

Route::get('/berhasillowongan','LandingController@berhasillowongan');

Route::get('/message','LandingController@message');

Route::get('/semuapelanggan','LandingController@semuapelanggan');

Route::get('/semuapelamar','LandingController@semuapelamar');

Route::get('/setting','ServiceController@setting');




Route::get('/pelamar','ServiceController@pelamar');

Route::get('/lowongankerja/pelamar/{id}','LandingController@tampillowongan');



Route::get('/gallery','ServiceController@gallery');

Route::get('/gallery/ubahgallery/{id}','ServiceController@ubahgallery');




Route::get('/testi','ServiceController@testi');

Route::get('/testi/ubahtesti/{id}','ServiceController@ubahtesti');



Route::get('/detail','ServiceController@detail');

Route::get('/detail/ubahdetail/{id}','ServiceController@ubahdetail');


Route::get('/sertifikaat','ServiceController@sertifikaat');

Route::get('/sertifikaat/ubahsertifikaat/{id}','ServiceController@ubahsertifikaat');



Route::get('/data','ServiceController@datapt');

Route::get('/data/ubahdatapt/{id}','ServiceController@ubahdatapt');




Route::get('/about','ServiceController@about');

Route::get('/about/ubahabout/{id}','ServiceController@ubahabout');




Route::get('/tim','ServiceController@tim');

Route::get('/tim/ubahtim/{id}','ServiceController@ubahtim');


Route::get('/service/tambahdetail','ServiceController@tambahdetail');

Route::post('/service/storedetail','ServiceController@storedetail');

Route::post('/service/storetesti','ServiceController@storetesti');

Route::get('/landing/lowongankerja','LandingController@tambahlowongan');

Route::post('/landing/storelowongan','LandingController@storelowongan');

Route::get('/landing/sertifikat','LandingController@tambahpesanan');

Route::post('/landing/storepesanan','LandingController@storepesanan');




Route::get('/service/tambah','ServiceController@tambah');

Route::post('/service/store','ServiceController@store');

Route::get('/service/hapus/{id}','ServiceController@hapus');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
