<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function showYayasan()
    {
        return view('frontend.profilesekolah.yayasan');
    }
    public function modelSeragam()
    {
        return view('frontend.profilesekolah.modelseragam');
    }
    public function showPendidikan()
    {
        return view('frontend.profilesekolah.pendidikan');
    }
}
