<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nqtSinhVien;
class nqtSinhVienController extends Controller
{
    public function nqtList()
    {
    // Lấy toàn bộ dữ liệu trong bảng sinh viên
        $nqtsinhViens = nqtSinhVien::all();
        return view('nqt_sinhvien.nqt_index', ['sinhViens'=>$nqtsinhViens]);
    }
    public function nqtdetail($masv)
    {
    // Lấy toàn bộ dữ liệu trong bảng sinh viên
        $nqtsinhViens = nqtSinhVien::where('MaSV',$masv)->first();
        return view('nqt_sinhvien.nqt_detail', ['sinhViens'=>$nqtsinhViens]);
    }
    public function nqtadd(){
        return view('nqt_sinhvien.nqt_add');
    }
}
