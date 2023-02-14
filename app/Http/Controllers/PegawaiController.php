<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai=[
            'title'=>'List Pegawai',
            'pegawai'=> Pegawai::orderBy('created_at', 'desc')->get(),
            'route' => route('pegawai.create'),
        ];
        
        return view('admin.pegawai.index', $pegawai);
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => 'New Pegaawai',
            'method' => 'POST',
            'route' => route('pegawai.store'),
        ];
        return view('admin.pegawai.editor', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'jenis_kelamin' => 'required',
            'key_pegawai' => 'required',
        ]);

        $pegawai = new Pegawai();

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $foto = time().'-'.$file->getClientOriginalName();
            $file->move('images/pegawai/', $foto);
            $pegawai->foto = $foto;
        } else {
            $pegawai->foto = 'default.jpg';
        }
        $pegawai->nama = $request->nama;
        $pegawai->jabatan = $request->jabatan;
        $pegawai->struktur = $request->struktur;
        $pegawai->jenis_kelamin = $request->jenis_kelamin;
        $pegawai->key_pegawai = $request->key_pegawai;
        $pegawai->save();

        return redirect()->route('pegawai.index')->with('success', 'pegawai has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'title' => 'Edit Pegawai',
            'method' => 'PUT',
            'route' => route('pegawai.update', $id),
            'pegawai' => Pegawai::where('id', $id)->first(),
            // 'categories' => Category::get(),
            // 'poststatuses'=> PostStatus::All(),
        ];
        return view('admin.pegawai.editor', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $post->update();

        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'jenis_kelamin' => 'required',
            'key_pegawai' => 'required',
        ]);

        $pegawai = Pegawai::find($id);


        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            if (file_exists(public_path('images/pegawai/'.$pegawai->foto))) {
                unlink(public_path('images/pegawai/'.$pegawai->foto));
            }
            $foto = time().'-'.$file->getClientOriginalName();
            $file->move('images/pegawai/', $foto);
            $pegawai->foto = $foto;
        }else{
            $pegawai->foto = 'default.jpg';
        }
        $pegawai->nama = $request->nama;
        $pegawai->jabatan = $request->jabatan;
        $pegawai->struktur = $request->struktur;
        $pegawai->jenis_kelamin = $request->jenis_kelamin;
        $pegawai->key_pegawai = $request->key_pegawai;
        $pegawai->update();

        return redirect()->route('pegawai.index')->with('success', 'pegawai has been update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Pegawai::where('id', $id);
        $destroy->delete();
        // return redirect(route("post.index"));
        return redirect()->route('pegawai.index')->with('success', 'Pegawai deleted successfully');
    }
}
