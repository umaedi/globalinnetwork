<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'otp.verified'])->group(function() {
    Route::prefix('cms')->group(function() {
        Route::get('/dashboard', CMS\DashboardController::class)->name('cms-dashboard');
    
        //route berita
        Route::controller(CMS\BeritaController::class)->group(function() {
            Route::get('/berita', 'index')->name('cms-berita');
            Route::get('/berita/create', 'create')->name('cms-berita-create');
            Route::post('/berita/store', 'store')->name('cms-berita-store');
            Route::get('/berita/edit/{id}', 'edit')->name('cms-berita-edit');
            Route::post('/berita/update/{id}', 'update')->name('cms-berita-update');
            Route::post('/berita/hapus/{id}', 'delete')->name('cms-berita-delete');
        });

        //route subberita
        Route::controller(CMS\SubberitaController::class)->group(function() {
            Route::get('/berita/subberita/{berita_id}', 'index')->name('cms-subberita');
            Route::get('/berita/sub-berita/create/{berita_id}', 'create')->name('cms-sub_berita.create');
            Route::post('/berita/sub-berita/store/{berita_id}', 'store')->name('cms.sub_berita.store');
            Route::post('/subberita/update/{id}', 'update')->name('cms-subberita-update');
            Route::post('/subberita/hapus/{id}', 'delete')->name('cms-subberita-delete');
        });
    
        //route kategori berita
        Route::controller(CMS\KategoriController::class)->group(function() {
            Route::get('/kategori', 'index')->name('cms-kategori');
            Route::post('/kategori/store', 'store')->name('cms-kategori-store');
            Route::post('/kategori/update/{id}', 'update')->name('cms-kategori-update');
            Route::post('/kategori/hapus/{id}', 'delete')->name('cms-kategori-delete');
        });

        //route menu
        Route::controller(CMS\MenuController::class)->group(function() {
            Route::get('/menu', 'index')->name('cms-menu');
            Route::post('/menu/store', 'store')->name('cms-menu-store');
            Route::post('/menu/update/{id}', 'update')->name('cms-menu-update');
            Route::post('/menu/hapus/{id}', 'delete')->name('cms-menu-delete');
        });

        //route submenu
        Route::controller(CMS\SubmenuController::class)->group(function() {
            Route::get('/menu/submenu/{menu_id}', 'index')->name('cms-submenu');
            Route::post('/submenu/store', 'store')->name('cms-submenu-store');
            Route::post('/submenu/update/{id}', 'update')->name('cms-submenu-update');
            Route::post('/submenu/hapus/{id}', 'delete')->name('cms-submenu-delete');
        });

        //route halaman
        Route::controller(CMS\HalamanController::class)->group(function() {
            Route::get('/halaman', 'index')->name('cms-halaman');
            Route::get('/halaman/create', 'create')->name('cms-halaman-create');
            Route::post('/halaman/store', 'store')->name('cms-halaman-store');
            Route::get('/halaman/edit/{id}', 'edit')->name('cms-halaman-edit');
            Route::post('/halaman/update/{id}', 'update')->name('cms-halaman-update');
            Route::post('/halaman/hapus/{id}', 'delete')->name('cms-halaman-delete');
        });

        //route subdomain
        Route::controller(CMS\SubdomainController::class)->group(function() {
            Route::get('/subdomain', 'index')->name('cms-subdomain');
            Route::post('/subdomain/store', 'store')->name('cms-subdomain-store');
            Route::post('/subdomain/update/{id}', 'update')->name('cms-subdomain-update');
            Route::post('/subdomain/hapus/{id}', 'delete')->name('cms-subdomain-delete');
        });

        //route user
        Route::controller(CMS\UserController::class)->group(function() {
            Route::get('/user', 'index')->name('cms-user');
            Route::post('/user/set-role', 'setRole')->name('cms-setRole');
            Route::post('/user/store', 'store')->name('cms-user-store');
            Route::post('/user/update/{id}', 'update')->name('cms-user-update');
            Route::post('/user/destroy/{id}', 'destory')->name('cms-user-delete');
        });

        //route pengaturan
        Route::controller(CMS\PengaturanController::class)->group(function() {
            Route::get('/pengaturan', 'index')->name('cms-pengaturan');
            Route::post('/pengaturan/update', 'update')->name('cms-pengaturan-update');
        });
    
        //route upload konten gambar ketika membuat berita
        Route::post('/upload/gambar', [CMS\ImageController::class, 'upload'])->name('cms-upload-gambar');
        Route::post('/hapus/gambar', [CMS\ImageController::class, 'delete'])->name('cms-upload-delete');
    });
});



