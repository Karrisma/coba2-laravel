<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
    return view('Home', [
        "title" =>"Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "image" => "RISMA.jpg",
        "name" => " Nama      : KARISMA FIDIYA",
        "address" => " Alamat : Ds.Betet, Kec.Kasiman Kab.Bojonegoro Jatim",
        "email" => "E-Mail    : karismafidya103@gmail.com",
        "pendidikan"=> "Pendidikan : SDN BETET, SMPIT Fathul Majid, SMK T Fathul Majid, 
                                  Universitas: UNUGIRI (Universitas Nahdlatul Ulama Sunan Giri).",
        "organisasi"=> "Organisasi : HMP_TI (Himpunan Mahasiswa Teknik Informatika)",
        "article"=> ""

       
        
    ]);
});



Route::get('/blog', [PostController::class, 'index']);

// Halaman single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);
