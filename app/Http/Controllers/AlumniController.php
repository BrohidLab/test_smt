<?php

namespace App\Http\Controllers;

use App\Models\alumni;
use App\Models\kejuruan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlumniController extends Controller
{
    public function index(){
        $data = DB::table('tb_alumni')->select('tb_alumni.id', 'tb_alumni.nim', 'tb_alumni.nama_lengkap', 'tb_alumni.tempat_lahir', 'tb_alumni.tgl_lahir', 'tb_kejuruan.jurusan', 'tb_alumni.pekerjaan', 'tb_alumni.alamat', 'tb_alumni.ipk')->join('tb_kejuruan','tb_alumni.kode_kejuruan', '=', 'tb_kejuruan.kode_kejurusan')->get();
        return view('alumni.index', compact('data'));
    }

    public function tambahAlumni() {
        $data = kejuruan::all();
        return view('alumni.tambah_alumni', compact('data'));
    }

    public function createAlumni(Request $request){
        alumni::create($request->all());
        return redirect()->route('alumni')->with('success', 'Data berhasil ditambahkan');
    }

    public function viewEditAlumni($id){
        $alumni = alumni::find($id);
        $jurusan = kejuruan::all();
    
        return view('alumni.edit_alumni', compact(['alumni', 'jurusan']));
    }

    public function editAlumni(Request $request, $id) {
        $data = alumni::find($id);
        $data->update($request->all());
        return redirect()->route('alumni')->with('success', 'Data berhasil dirubah');
    }

    public function hapusAlumni($id){
        $data = alumni::find($id);
        $data->delete();
        return redirect()->route('alumni')->with('success', 'Data berhasil dihapus');

    }

}
