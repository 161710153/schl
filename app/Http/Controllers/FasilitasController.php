<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\fasilitas;
use App\programstudi;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    // menampilkan semua data post melalui model 'Post'
        $fasilitas = fasilitas::with('programstudi')->get();
        return view('fasilitas.index',compact('fasilitas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $programstudi = programstudi::all();
        return view('fasilitas.create',compact('programstudi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'nama' => 'required|max:255',
            'foto' => 'required|max:255',
            'jumlah' => 'required|max:255',
            'programstudis_id'=>'required'
        ]);
        $fasilitas = new Fasilitas;
        $fasilitas->nama = $request->nama;

        if ($request->hasFile('foto')){
            $file=$request->file('foto');
            $destinationPath=public_path().'/assets/admin/images/icon/d2.jpg';
            $filename=str_random(6).'_'.$file->getClietOriginalName();
            $uploadSucces=$file->move($destinationPath,$filename);
            $fasilitas->foto=$filename;

        $fasilitas->jumlah = $request->jumlah;
    }
        $fasilitas->save();
        return redirect()->route('fasilitas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        return view('fasilitas.show',compact('fasilitas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // memanggil data pos berdasrkan id di halaman pos edit
        $fasilitas = fasilitas::findOrFail($id);
        $programstudi = programstudi::all();
        $selectedProgramstudi =fasilitas::findOrFail($id)->Programstudis_id;
        return view('fasilitas.edit',compact('fasilitas','programstudi','selectedProgramstudi'));
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
        // unique dihapus karena ketika update data title tidak diubah juga tidak apa-apa
            $this->validate($request,[
                'nama' => 'required|max:255',
                'foto' => 'required|max:255',
                'jumlah' => 'required|max:255',
                'programstudis_id'=>'required'
            ]);
            $fasilitas = new Fasilitas;
            $fasilitas->nama = $request->nama;
    
            if ($request->hasFile('foto')){
                $file=$request->file('foto');
                $destinationPath=public_path().'/assets/admin/images/icon/d2.jpg';
                $filename=str_random(6).'_'.$file->getClietOriginalName();
                $uploadSucces=$file->move($destinationPath,$filename);
                $fasilitas->foto=$filename;
    
            $fasilitas->jumlah = $request->jumlah;
        }
            $fasilitas->save();
            return redirect()->route('fasilitas.index');
        }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete data beradasarkan id
        $fasilitas = fasilitas::findOrFail($id);
        $fasilitas->delete();
        return redirect()->route('fasilitas.index');  
    }
}