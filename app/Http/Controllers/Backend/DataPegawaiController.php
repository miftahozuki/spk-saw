<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DataPegawai as Pegawai;

class DataPegawaiController extends Controller
{
    public function index() {
        $datapegawai= Pegawai::get();
        return view('backend.data-pegawai.index', compact('datapegawai'));
    }

    public function store(Request $request) {
        // dd($request);
        Pegawai::create($request->all());

        return redirect()->route('data-pegawai.index')
                        ->with('success', 'Data Pegawai baru telah berhasil disimpan.');
    }


    public function destroy($id) {
        $pegawai = Pegawai::findorFail($id);
        $pegawai->delete();
        return redirect()->route('data-pegawai.index')
                        ->with('success', 'Pegawai berhasil dihapus.');
    }

    public function update(Request $request, Pegawai $pegawai)
    {
        $pegawai = Pegawai::findorFail($request->id);
        $pegawai->update($request->all());
        return redirect()->route('data-pegawai.index')->with('success', 'Nama Pegawai berhasil diubah.');
    }
    
}