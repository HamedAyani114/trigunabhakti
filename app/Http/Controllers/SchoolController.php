<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Pegawai;

class SchoolController extends Controller
{
    public function showSD()
    {
        $data = [
            // data pegawai
            'kepseks'=> Pegawai::where('key_pegawai', 'sd')->where('jabatan', 'Kepala Sekolah')->get(),
            'pegawais' => Pegawai::where('key_pegawai', 'sd')->where('jabatan','!=', 'Kepala Sekolah')->get(),
        ];
        
        $totalPegawaiSd = DB::table('pegawai')
        ->select(DB::raw('COUNT(id) as total_pegawai'))
        ->where('key_pegawai', '=', 'sd')
        ->first()
        ->total_pegawai;

        $data['totalPegawaiSd'] = $totalPegawaiSd;
        // dd($data);
        return view('frontend.profil.sd', $data);
    }
    public function showSMP()
    {
        return view('frontend.profil.smp');
    }
    public function showSMK()
    {
        return view('frontend.profil.smk');
    }
}
