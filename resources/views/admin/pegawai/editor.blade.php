@extends('layouts.admin.app')

@section ('content')

<div class="main-content" style="min-height: 524px;">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{ route("pegawai.index") }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Back</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route("admin.dashboard") }}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ route("pegawai.index") }}">Pegawai</a></div>
                <div class="breadcrumb-item">Create New Pegawai</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Create New Pegawai</h2>
            <p class="section-lead">
                On this page you can create a new Pegawai and fill in all fields.
            </p>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Write Your Post</h4>
                        </div>
                        <form action="{{ $route }}" method="POST" enctype="multipart/form-data">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset(isset($pegawai)?'images/pegawai/'.$pegawai->foto:'assets/admin/def/default1.jpg') }}" style="max-height: 150px" id="preview-img" alt="" class="img-thumbnail">
                            </div>
                            @csrf
                            @method($method)
                            <div class="card-body">
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">foto</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="file" name="foto" id="foto" class="form-control" value="{{ old('foto',$pegawai->foto??'') }} required">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">nama</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="nama" class="form-control" value="{{ old('nama',$pegawai->nama??'') }}">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jabatan</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="jabatan" class="form-control" value="{{ old('slug',$pegawai->jabatan??'') }}">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">jenis_kelamin</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="jenis_kelamin" class="form-control" value="{{ old('excerpt', $pegawai->jenis_kelamin??'') }}">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tenaga Pendidik</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="key_pegawai" class="form-control" value="{{ old('excerpt', $pegawai->key_pegawai??'') }}">
                                    </div>
                                </div>

                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button class="btn btn-primary">Submit pegawai</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </form>
</div>
</section>
</div>
@endsection

@section('script')
    <script>
        $('#banner').on('change', function(){
            const [file] = $(this)[0].files;
            if(file){
                $('#preview-img').attr('src', URL.createObjectURL(file))
            }
        })
    </script>

@endsection
