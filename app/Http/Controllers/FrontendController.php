<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Gallery;
use App\Models\Post;
use App\Models\Pegawai;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }

    public function showgallery()
    {
        $data = [
            'galleries' => Gallery::orderBy('created_at', 'desc')->paginate(21),
            'albums' => Album::get(),
        ];
        return view('frontend.gallery', $data);
    }

    public function prestasiSekolah()
    {
        $data = [
            'galleries' => Gallery::select('title', 'picture', 'album_name', 'album_id')
                ->join('albums', 'galleries.album_id', '=', 'albums.id')
                ->where('album_name', 'Prestasi')
                ->get(),
            'albums' => Album::get(),
        ];
        return view('frontend.home', $data);
    }
    public function showslider()
    {
        $data = [
            'title' => 'Post Detail',
            'posts' => Post::where('post_type', '=', 'Blog')->where('category_id', '=', '1')->where('is_publish', '=', '1')->orderBy('created_at', 'desc')->limit(4)->get(),
            // 'services' => Post::where('post_type', '=', 'Page')->where('category_id', '=', '2')->where('is_publish', '=', '1')->get(),
        ];
        return view('frontend.home', $data);
    }

    public function showAbout()
    {
        $data = [
            // data pegawai
            'ketuas' => Pegawai::where('key_pegawai', 'yysn')->where('jabatan', 'Ketua')->get(),
            'pegawais' => Pegawai::where('key_pegawai', 'yysn')->where('jabatan', '!=', 'Ketua')->get(),
        ];
        // dd($data);
        return view('frontend.about', $data);
    }

    // public function showservices()
    // {
    //     $data = [
    //         'title' => 'Services Content',
    //         'services' => Post::where('post_type', '=', 'Page')->get(),
    //     ];
    //     return view('frontend.service', $data);
    // }
}
