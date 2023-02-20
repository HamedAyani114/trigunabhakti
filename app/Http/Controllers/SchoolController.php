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
            'pegawais' => Pegawai::where('key_pegawai', 'sd')->where('jabatan','!=', 'Kepala Sekolah')->where('struktur','!=', 'pegawai')->get(),
        ];
        
        $totalPegawaiSd = DB::table('pegawai')
        ->select(DB::raw('COUNT(id) as total_pegawai'))
        ->where('key_pegawai', '=', 'sd')
        ->where('struktur','!=', 'pegawai')
        ->first()
        ->total_pegawai;

        $data['totalPegawaiSd'] = $totalPegawaiSd;
        // dd($data);
        return view('frontend.profil.sd', $data);
    }
    public function showSMP()
    {
        $data = [
            // data pegawai
            'kepseks'=> Pegawai::where('key_pegawai', 'smp')->where('jabatan', 'Kepala Sekolah')->get(),
            'pegawais' => Pegawai::where('key_pegawai', 'smp')->where('jabatan','!=', 'Kepala Sekolah')->where('struktur','!=', 'pegawai')->get(),
        ];
        
        $totalPegawaiSmp = DB::table('pegawai')
        ->select(DB::raw('COUNT(id) as total_pegawai'))
        ->where('key_pegawai', '=', 'smp')
        ->where('struktur','!=', 'pegawai')
        ->first()
        ->total_pegawai;

        $data['totalPegawaiSmp'] = $totalPegawaiSmp;
        return view('frontend.profil.smp', $data);
    }
    public function showSMK()
    {
        $data = [
            // data pegawai
            'kepseks'=> Pegawai::where('key_pegawai', 'smk')->where('jabatan', 'Kepala Sekolah')->get(),
            'pegawais' => Pegawai::where('key_pegawai', 'smk')->where('jabatan','!=', 'Kepala Sekolah')->where('struktur','!=', 'pegawai')->get(),
        ];
        
        $totalPegawaiSmk = DB::table('pegawai')
        ->select(DB::raw('COUNT(id) as total_pegawai'))
        ->where('key_pegawai', '=', 'smk')
        ->where('struktur','!=', 'pegawai')
        ->first()
        ->total_pegawai;

        $data['totalPegawaiSmk'] = $totalPegawaiSmk;
        return view('frontend.profil.smk', $data);
    }
}
