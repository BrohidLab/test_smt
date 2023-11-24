<?php

namespace App\Http\Controllers;

use App\Models\kejuruan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        $jurusan = kejuruan::all();
        $alumni = DB::table('tb_alumni')->select('tb_alumni.id', 'tb_alumni.nim', 'tb_alumni.nama_lengkap', 'tb_alumni.tempat_lahir', 'tb_alumni.tgl_lahir', 'tb_kejuruan.jurusan', 'tb_alumni.pekerjaan', 'tb_alumni.alamat', 'tb_alumni.ipk')->join('tb_kejuruan','tb_alumni.kode_kejuruan', '=', 'tb_kejuruan.kode_kejurusan')->get();
        
        return view('index', compact(['jurusan', 'alumni']));
    }
}
