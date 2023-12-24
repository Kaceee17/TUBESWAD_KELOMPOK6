<?php

namespace App\Http\Controllers;

use App\Models\ManageInstansi;
use Illuminate\Http\Request;

class InstansiController extends Controller
{
    public function create()
    {
        return view("manageinstansi.create");
    }

    public function store(Request $request)
    {
        $data = $request->all();

        ManageInstansi::create([
            "nama_instansi" => $data["nama_instansi"],
            "lokasi" => $data["lokasi"],
            "jumlah_pegawai" => $data["jumlah_pegawai"],
            "link_web_instansi" => $data["link_web_instansi"],
        ]);

        return redirect()->route("manageinstansi.index");
    }

    public function edit($id)
    {
        $instansi = ManageInstansi::findOrFail($id);
        return view('manageinstansi.edit', compact('instansi'));
    }

    public function update(Request $request, $id)
    {
        $instansi = ManageInstansi::findOrFail($id);

        $instansi->nama_instansi = $request->input('nama_instansi');
        $instansi->lokasi = $request->input('lokasi');
        $instansi->jumlah_pegawai = $request->input('jumlah_pegawai');
        $instansi->link_web_instansi = $request->input('link_web_instansi');
        
        $instansi->save();
        return redirect()->route('manageinstansi.index')->with('status', "Data telah berhasil diubah");
    }

    public function destroy($id)
    {
        $instansi = ManageInstansi::findOrFail($id);
        $instansi->delete();

        return redirect()->route('manageinstansi.index')->with('success', 'Instansi deleted successfully');
    }

    public function index()
    {
        $manageinstansi = ManageInstansi::all();
        return view('manageinstansi.index', compact("manageinstansi"));
    }
}
