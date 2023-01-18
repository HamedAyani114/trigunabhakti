<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function showSejarah()
    {
        return view('frontend.profilesekolah.yayasan');
    }
    public function visiMisi()
    {
        return view('frontend.profilesekolah.visimisi');
    }
    public function showProgram()
    {
        return view('frontend.profilesekolah.program');
    }
    public function modelSeragam()
    {
        return view('frontend.profilesekolah.modelseragam');
    }
    public function showKurikulum()
    {
        return view('frontend.profilesekolah.kurikulum');
    }
}
