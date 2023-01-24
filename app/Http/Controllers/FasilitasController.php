<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Gallery;

class FasilitasController extends Controller
{
    public function fasilitasKelas(){
         return view('frontend.fasilitas.index');
    }
}
