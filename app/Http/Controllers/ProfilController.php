<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function showYayasan()
    {
        return view('frontend.profilesekolah.yayasan');
    }
    public function showEkstrakulikuler()
    {
        return view('frontend.profilesekolah.ekstrakulikuler');
    }
    public function showPendidikan()
    {
        return view('frontend.profilesekolah.pendidikan');
    }
    public function showSejarah()
    {
        return view('frontend.profilesekolah.sejarah');
    }
}
