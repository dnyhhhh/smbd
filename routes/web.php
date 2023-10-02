    <?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\UserController;
    use App\Http\Controllers\TabelController;


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

    // Route::get('/', 'HomeController@index');



    Route::get('register',[UserController::class,'register'])->name('register');
    Route::post('register',[UserController::class,'register_action'])->name('register.action');

    Route::get('/',[UserController::class,'login'])->name('login');
    Route::post('login',[UserController::class,'login_action'])->name('login.action');

    Route::get('/layout-table', 'TabelController@index')->name('layout-table')->middleware('auth');
    Route::get('/tabel/create', [TabelController::class, 'create'])->name('tabel.create');
    Route::post('/tabel', [TabelController::class, 'store'])->name('tabel.store');
    Route::delete('/tabel/{id}', [TabelController::class, 'destroy'])->name('tabel.destroy');
    Route::get('/tabel/{id}/edit', [TabelController::class, 'edit'])->name('tabel.edit');
    Route::put('/tabel/{id}', [TabelController::class, 'update'])->name('tabel.update');
    Route::get('/tabel', [TabelController::class, 'index'])->name('tabel.index');
    






