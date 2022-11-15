<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use illuminate\Support\str;

use Illuminate\Support\Facades\File;


class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mahasiswa.index')->with([
            'mahasiswa' => Mahasiswa::all(),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'destinasi' => 'required|max:225',
            'tanggal' => 'required|max:225|',
            'budget' => 'required',
            'gambar' => 'required|image|mimes:png,jpg|max:2040',
  
        ]);

        $gambar = $request->gambar;
        $slug = Str::slug($gambar->getClientOriginalName());
        $new_gambar = time() .'_'. $slug;
        $gambar ->move('uploads/mahasiswa/' ,$new_gambar);

        $mahasiswa = new Mahasiswa;
        $mahasiswa ->destinasi = $request->destinasi;
        $mahasiswa ->tanggal = $request->tanggal;
        $mahasiswa ->budget = $request->budget;
        $mahasiswa ->gambar = 'uploads/mahasiswa/'.$new_gambar;
        $mahasiswa->save();
        return to_route('mahasiswa.index')->with('success','Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('mahasiswa.edit')->with([
            'mahasiswa'=>Mahasiswa::find($id),

        ]);
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
        $request -> validate([
            'destinasi' => 'required|max:225',
            'tanggal' => 'required|max:225|',
            'budget' => 'required',
  
        ]);
        
        $mahasiswa = Mahasiswa::find($id);
        
        if($request ->hasFile('gambar')){

            $request -> validate([
                'gambar' => 'required|image|mimes:png,jpg|max:2040'
            ]);
            File::delete($mahasiswa->gambar);
            $gambar = $request->gambar;
            $slug = Str::slug($gambar->getClientOriginalName());
            $new_gambar = time() .'_'. $slug;
            $gambar ->move('uploads/mahasiswa/' ,$new_gambar);
            $mahasiswa ->gambar = 'uploads/mahasiswa/'.$new_gambar;
            

        }

        $mahasiswa ->destinasi = $request->destinasi;
        $mahasiswa ->tanggal = $request->tanggal;
        $mahasiswa ->budget = $request->budget;
        $mahasiswa->save();
        return to_route('mahasiswa.index')->with('success','Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        File::delete($mahasiswa->gambar);
        $mahasiswa->delete();
        return back()->with('success','Data berhasil di hapus');
    }
}
