<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use App\Models\LoaiSanPham;
use App\Models\HangSanXuat;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\File;
use App\Imports\SanPhamImport;
use App\Exports\SanPhamExport;
use Excel;

class SanPhamController extends Controller
{
    //nhap tu excel
    public function postNhap(Request $request)
    {
        Excel::import(new SanPhamImport, $request->file('file_excel'));
        return redirect()->route('admin.sanpham');
    }

    // Xuất ra Excel
    public function getXuat()
    {
        return Excel::download(new SanPhamExport, 'danh-sach-san-pham.xlsx');
    }

    public function getDanhSach()
    {
        $sanpham = SanPham::paginate(30);
        return view('admin.sanpham.danhsach', compact('sanpham'));
    }
    public function getThem()
    {
        $loaisanpham = LoaiSanPham::all();
        $hangsanxuat = HangSanXuat::all();
        return view('admin.sanpham.them', compact('loaisanpham', 'hangsanxuat'));
    }

    public function postThem(Request $request)
    {
        $this->validate($request, [
            'loaisanpham_id' => ['required'],
            'hangsanxuat_id' => ['required'],
            'tensanpham' => ['required', 'string', 'max:191', 'unique:sanpham'],
            'soluong' => ['required', 'numeric'],
            'dongia' => ['required', 'numeric'],
            'hinhanh' => ['nullable', 'image', 'max:2048'],
        ]);

        // Upload hình ảnh 
        $path = ''; 
        if($request->hasFile('hinhanh')) 
        { 
            // Tạo thư mục nếu chưa có 
            $lsp = LoaiSanPham::find($request->loaisanpham_id); 
            File::isDirectory($lsp->tenloai_slug) or Storage::makeDirectory($lsp->tenloai_slug, 0775);

            // Xác định tên tập tin 
            $extension = $request->file('hinhanh')->extension(); 
            $filename = Str::slug($request->tensanpham, '-') . '.' . $extension; 
            
            // Upload vào thư mục và trả về đường dẫn 
            $path = Storage::putFileAs($lsp->tenloai_slug, $request->file('hinhanh'), $filename); 
        }

        $orm = new SanPham();
        $orm->loaisanpham_id = $request->loaisanpham_id;
        $orm->hangsanxuat_id = $request->hangsanxuat_id;
        $orm->tensanpham = $request->tensanpham;
        $orm->tensanpham_slug = Str::slug($request->tensanpham, '-');
        $orm->soluong = $request->soluong;
        $orm->dongia = $request->dongia;
        if(!empty($path)) $orm->hinhanh = $path;
        /*if($request->hasFile('hinhanh')) $orm->hinhanh = $request->hinhanh;*/
        $orm->motasanpham = $request->motasanpham;

        $orm->save();
        
        return redirect()->route('admin.sanpham');
    }

    public function getSua($id)
    {
        $sanpham = SanPham::find($id);
        $loaisanpham = LoaiSanPham::all();
        $hangsanxuat = HangSanXuat::all();
        return view('admin.sanpham.sua', compact('sanpham', 'loaisanpham', 'hangsanxuat'));
    }

    public function postSua(Request $request, $id)
    {
        $this->validate($request, [
            'loaisanpham_id' => ['required'],
            'hangsanxuat_id' => ['required'],
            'tensanpham' => ['required', 'string', 'max:191', 'unique:sanpham,tensanpham,' . $id],
            'soluong' => ['required', 'numeric'],
            'dongia' => ['required', 'numeric'],
            'hinhanh' => ['nullable', 'image', 'max:2048'],
        ]);

        // Upload hình ảnh 
        $path = ''; 
        if($request->hasFile('hinhanh')) 
        { 
            // Xóa tập tin cũ 
            $sp = SanPham::find($id); 
            if(!empty($sp->hinhanh)) Storage::delete($sp->hinhanh); 
            
            // Xác định tên tập tin mới 
            $extension = $request->file('hinhanh')->extension(); 
            $filename = Str::slug($request->tensanpham, '-') . '.' . $extension; 
            
            // Upload vào thư mục và trả về đường dẫn 
            $lsp = LoaiSanPham::find($request->loaisanpham_id);
            $path = Storage::putFileAs($lsp->tenloai_slug, $request->file('hinhanh'), $filename); 
        }

        $orm = SanPham::find($id);
        $orm->loaisanpham_id = $request->loaisanpham_id;
        $orm->hangsanxuat_id = $request->hangsanxuat_id;
        $orm->tensanpham = $request->tensanpham;
        $orm->tensanpham_slug = Str::slug($request->tensanpham, '-');
        $orm->soluong = $request->soluong;
        $orm->dongia = $request->dongia;
        if(!empty($path)) $orm->hinhanh = $path;
        /*if($request->hasFile('hinhanh')) $orm->hinhanh = $request->hinhanh;*/
        $orm->motasanpham = $request->motasanpham;
        $orm->save();

        return redirect()->route('admin.sanpham');
    }

    public function getXoa($id)
    {
        $orm = SanPham::find($id);
        $orm->delete();

        // Xóa tập tin khi xóa sản phẩm 
        if(!empty($orm->hinhanh)) Storage::delete($orm->hinhanh);

        return redirect()->route('admin.sanpham');
    }
}