@extends('layouts.frontend.page')

@section('content')
    <section class="fasilitas">
        <div class="container">
            <div class="section-title">
                <h2>Fasilitas</h2>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{ asset('assets/frontend/img/tes1.jpg') }}" alt="" width="500">
                </div>
                <div class="col-lg-6">
                    <div class="section-body">
                        <ul>
                            <li>Tempat parkir</li>
                            <li>ruang kelas</li>
                            <li>Lapangan voli, futsal, badminton</li>
                            <li>lab komputer</li>
                            <li>Musholla</li>
                            <li>Aula</li>
                            <li>Perpustakaan</li>
                            <li>Kantin</li>
                            <li>Lab Biologi</li>
                            <li>UKS</li>
                            <li>Koperasi</li>
                            <li>Ruang Multimedia</li>
                        </ul>
                    </div>
                </div>
            </div>
            <a class="read-fasilitas" href="{{ route('fasilitas.sekolah') }}" >Read More ...</a>
        </div>
    </section>
@endsection