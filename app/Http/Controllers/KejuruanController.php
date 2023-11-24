<?php

namespace App\Http\Controllers;

use App\Models\kejuruan;
use Illuminate\Http\Request;

class KejuruanController extends Controller
{
    public function index() {
        $data = kejuruan::all();
        return view('kejuruan/index', compact('data'));
    }

    public function ViewInputKejuruan(){
        return view('kejuruan.tambah_kejuruan');
    }

    public function createKejuruan(Request $request){
        kejuruan::create($request->all());
        return redirect()->route('kejuruan')->with('success', 'Data berhasil ditambahkan');
    }

    public function tampilanEditkejuruan($id){
        $data = kejuruan::find($id);
        return view('kejuruan.edit_kejuruan', compact('data'));
    }

    public function editkejuruan(Request $requet, $id){
        $data = kejuruan::find($id);
        $data->update($requet->all());
        return redirect()->route('kejuruan')->with('success', 'Data berhasil diubah');
    }

    public function deleteKejuruan($id)
    {
        $data = kejuruan::find($id);
        $data->delete();
        return redirect()->route('kejuruan')->with('success','Data berhasil dihapus');
    }
}
