<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function showSD()
    {
        return view('frontend.profil.sd');
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
