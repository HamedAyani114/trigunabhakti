<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Gallery;

class FasilitasController extends Controller
{
    public function showFasilitas(){
        $data = [
            'galleries' =>Gallery::select('title', 'picture', 'album_name', 'album_id')
            ->join('albums', 'galleries.album_id', '=', 'albums.id')
            ->where('album_name', 'Fasilitas')
            ->get(),
            'albums' => Album::get(),
        ];
        return view('frontend.fasilitas.index', $data);
    }

    
}
