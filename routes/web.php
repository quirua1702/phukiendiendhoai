<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoaiSanPhamController;
use App\Http\Controllers\HangSanXuatController;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\TinhTrangController;
use App\Http\Controllers\DonHangController;
use App\Http\Controllers\DonHangChiTietController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\AdminController;

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
Auth::routes();
// Trang chủ
// Các trang dành cho khách chưa đăng nhập
Route::name('frontend.')->group(function () {
    // Trang chủ
    Route::get('/', [HomeController::class, 'getHome'])->name('home');
    Route::get('/home', [HomeController::class, 'getHome'])->name('home');
    // Trang sản phẩm
    Route::get('/san-pham', [HomeController::class, 'getSanPham'])->name('sanpham');
    Route::get('/san-pham/{tenloai_slug}', [HomeController::class, 'getSanPham'])->name('sanpham.phanloai');
    Route::get('/san-pham/{tenloai_slug}/{tensanpham_slug}', [HomeController::class, 'getSanPham_ChiTiet'])->name('sanpham.chitiet');
    // Tin tức
    Route::get('/bai-viet', [HomeController::class, 'getBaiViet'])->name('baiviet');
    Route::get('/bai-viet/{tenchude_slug}', [HomeController::class, 'getBaiViet'])->name('baiviet.chude');
    Route::get('/bai-viet/{tenchude_slug}/{tieude_slug}', [HomeController::class, 'getBaiViet_ChiTiet'])->name('baiviet.chitiet');
    // Trang giỏ hàng
    Route::get('/gio-hang', [HomeController::class, 'getGioHang'])->name('giohang');
    Route::get('/gio-hang/them/{tensanpham_slug}', [HomeController::class, 'getGioHang_Them'])->name('giohang.them');
    Route::get('/gio-hang/xoa/{row_id}', [HomeController::class, 'getGioHang_Xoa'])->name('giohang.xoa');
    Route::get('/gio-hang/giam/{row_id}', [HomeController::class, 'getGioHang_Giam'])->name('giohang.giam');
    Route::get('/gio-hang/tang/{row_id}', [HomeController::class, 'getGioHang_Tang'])->name('giohang.tang');
    Route::post('/gio-hang/cap-nhat', [HomeController::class, 'postGioHang_CapNhat'])->name('giohang.capnhat');
    // Tuyển dụng
    Route::get('/tuyen-dung', [HomeController::class, 'getTuyenDung'])->name('tuyendung');
    // Liên hệ
    Route::get('/lien-he', [HomeController::class, 'getLienHe'])->name('lienhe');
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('welcome');
});
