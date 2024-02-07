<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DataPegawai as Pegawai;
use PDF;

class CetakPegawaiController extends Controller
{
    public function cetakPDF() {
        
        $pegawai = Pegawai::get();

        $data = [
            'title' => 'Daftar Data Pegawai',
            'pegawai' => $pegawai
        ];

        $pdf = PDF::loadView('backend.data-pegawai.cetak', $data);

        return $pdf->stream();
    }
}
