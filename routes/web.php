<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MarketController;
use App\Models\{Pengajuan,Countries};

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
    try {
        $lang = $_GET['lang'];
        if ($lang == 'eng') {
            return view('welcome-eng');
        }
        else {
            return view('welcome');
        }
    } catch (\Throwable $th) {
        return view('welcome-eng');
    }
});

Route::get('/dashboard', function () {

    $data = Pengajuan::where('user_id',Auth::id())->get();

    return view('dashboard',['data'=>$data]);
})->middleware(['auth','checkApprove'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/wait', function () {
    return view('wait');
})->name('wait');

Route::middleware(['auth','checkApprove'])->group(function () {

Route::get('/makePengajuan', [UserController::class,'makePengajuan'])->name('makePengajuan');

Route::get('/cetakPengajuan/{id}', [AdminController::class,'cetakPengajuan'])->name('cetakPengajuan');
Route::get('/cetakInvoice/{id}', [AdminController::class,'cetakInvoice'])->name('cetakInvoice');
Route::get('/addTanamanToPengajuan', [UserController::class,'addTanamanToPengajuan'])->name('addTanamanToPengajuan');
Route::post('/addTanamanToPengajuanPost/{id}', [UserController::class,'addTanamanToPengajuanPost'])->name('addTanamanToPengajuanPost');
Route::post('/editTanamanPengajuanPost/{id}', [UserController::class,'editTanamanPengajuanPost'])->name('editTanamanPengajuanPost');
Route::post('/pengajuanPost', [UserController::class,'pengajuanPost'])->name('pengajuanPost');
Route::get('/seeTanamanPengajuan/{id}', [UserController::class,'seeTanamanPengajuan'])->name('seeTanamanPengajuan');
Route::get('/historyPengajuan', [UserController::class,'historyPengajuan'])->name('historyPengajuan');
Route::get('/requestTanaman', [UserController::class,'requestTanaman'])->name('requestTanaman');
Route::post('/requestTanamanPost', [UserController::class,'requestTanamanPost'])->name('requestTanamanPost');
Route::get('/pay/{id}', [UserController::class,'pay'])->name('pay');
Route::get('/detailRequest/{id}', [UserController::class,'detailRequest'])->name('detailRequest');

Route::post('/bayar_ongkir', [UserController::class,'bayar_ongkir'])->name('bayar_ongkir');
Route::post('/cst', [UserController::class,'cst'])->name('cst');
Route::get('/profile', [UserController::class,'profile'])->name('profile');
Route::get('/seeTrackingStatus/{id}', [UserController::class,'seeTrackingStatus'])->name('seeTrackingStatus');

Route::get('/seeReport', [UserController::class,'seeReport'])->name('seeReport');

Route::get('/deleteTanamanPengajuan/{id}', [UserController::class,'deleteTanamanPengajuan'])->name('deleteTanamanPengajuan');

Route::get('/updateTanamanPengajuan', [UserController::class,'updateTanamanPengajuan'])->name('updateTanamanPengajuan');
Route::get('/downloadPhyto/{id}', [UserController::class,'downloadPhyto'])->name('downloadPhyto');


Route::post('/updateProfile', [UserController::class,'updateProfile'])->name('updateProfile');



Route::post('/uploadLisensi/{id}', [UserController::class,'uploadLisensi'])->name('uploadLisensi');
Route::post('/changePassword', [UserController::class,'changePassword'])->name('changePassword');
Route::get('/autocomplete-search', [UserController::class, 'autocompleteSearch']);
Route::get('/autocomplete-search-tanaman', [UserController::class, 'autocompleteSearchTanaman']);
Route::get('/getTanamanId/{id}', [UserController::class, 'getTanamanId']);
Route::get('/filterRequest', [UserController::class,'filterRequest'])->name('filterRequest');
Route::get('/filterReport', [UserController::class,'filterReport'])->name('filterReport');
Route::get('/filterRealisation', [UserController::class,'filterRealisation'])->name('filterRealisation');


Route::prefix('admin')->middleware(['isAdmin'])->group(function () {

    Route::get('/', [AdminController::class,'index'])->name('index');
    Route::get('/listUser', [AdminController::class,'listUser'])->name('listUser');
    Route::post('/approve/{id}', [AdminController::class,'approve'])->name('approve');
    Route::get('/seePengajuan', [AdminController::class,'seePengajuan'])->name('seePengajuan');
    Route::get('/exportPengajuan/{id}', [AdminController::class,'cetakPengajuan'])->name('exportPengajuan');
    Route::get('/approvePengajuan/{id}', [AdminController::class,'approvePengajuan'])->name('approvePengajuan');
    Route::post('/declinePengajuan', [AdminController::class,'declinePengajuan'])->name('declinePengajuan');
    Route::get('/seeDocument', [AdminController::class,'seeDocument'])->name('seeDocument');
    Route::post('/changeStatus', [AdminController::class,'changeStatus'])->name('changeStatus');
    Route::post('/addNoResi', [AdminController::class,'addNoResi'])->name('addNoResi');
    Route::post('/addResi/{id}', [AdminController::class,'addResi'])->name('addResi');
    Route::post('/sendNotif', [AdminController::class,'sendNotif'])->name('sendNotif');
    Route::get('/countryLicense', [AdminController::class,'countryLicense'])->name('countryLicense');
    Route::get('/listPlants', [AdminController::class,'listPlants'])->name('listPlants');
    Route::post('/createTanaman', [AdminController::class,'createTanaman'])->name('createTanaman');
    Route::post('/editTanaman/{id}', [AdminController::class,'editTanaman'])->name('editTanaman');
    Route::get('/deleteTanaman/{id}', [AdminController::class,'deleteTanaman'])->name('deleteTanaman');
    Route::get('/listPricing', [AdminController::class,'listPricing'])->name('listPricing');
    Route::post('/createPricing', [AdminController::class,'createPricing'])->name('createPricing');
    Route::post('/editPricing/{id}', [AdminController::class,'editPricing'])->name('editPricing');
    Route::get('/deletePricing/{id}', [AdminController::class,'deletePricing'])->name('deletePricing');
    Route::get('/listRealisation', [AdminController::class,'listRealisation'])->name('listRealisation');
    Route::post('/createRealisation', [AdminController::class,'createRealisation'])->name('createRealisation');
    Route::post('/editRealisation/{id}', [AdminController::class,'editRealisation'])->name('editRealisation');
    Route::get('/deleteRealisation/{id}', [AdminController::class,'deleteRealisation'])->name('deleteRealisation');
    Route::get('/downloadLicense/{id}', [AdminController::class,'downloadLicense'])->name('downloadLicense');
    Route::post('/changeLicenseCountry', [AdminController::class,'changeLicenseCountry'])->name('changeLicenseCountry');


Route::get('/cetakkebenaranDokumen/{id}', [AdminController::class,'cetakkebenaranDokumen'])->name('cetakkebenaranDokumen');
Route::get('/informasiTanaman/{id}', [AdminController::class,'informasiTanaman'])->name('informasiTanaman');

});


});



Route::get('/testKoneksi', [UserController::class,'testKoneksi'])->name('testKoneksi');
// Route::prefix('marketplace')->group(function () {


//     Route::get('/', [MarketController::class,'index'])->name('index');
//     Route::get('/pay/{id}', [MarketController::class,'pay'])->name('pay');
//     Route::get('/yourCart', [MarketController::class,'yourCart'])->name('yourCart');
//     Route::get('/checkoutAll', [MarketController::class,'checkoutAll'])->name('checkoutAll');
//     Route::get('/checkout/{id}', [MarketController::class,'checkout'])->name('checkout');
//     Route::get('/seeRequest/{id}', [MarketController::class,'seeRequest'])->name('seeRequest');


// });

Route::post('/sendMailContact', [UserController::class,'sendMailContact'])->name('sendMailContact');


Route::get('/getCountries', function () {
    $countries = Countries::whereNotNull('latitude')
    ->whereNotNull('longitude')
    ->get();

// Kirim data negara ke view
return view('sig.index', compact('countries'));
})->name('getCountries');
