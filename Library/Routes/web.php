use App\Http\Controllers\PengarangController;  
use App\Http\Controllers\PenerbitController;  
use App\Http\Controllers\KategoriController;  
use App\Http\Controllers\BukuController;



Route::resource('pengarang', PengarangController::class);  
Route::resource('penerbit', PenerbitController::class);  
Route::resource('kategori', KategoriController::class);  
Route::resource('buku', BukuController::class);
