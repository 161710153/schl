<?php

namespace App\Http\Controllers;

use App\programstudi;
use Illuminate\Http\Request;

class ProgramstudiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programstudi = programstudi::all();
        return view('programstudi.index',compact('programstudi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('programstudi.create');
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
            'nama_program' => 'required|max:255',
            'ket' => 'required|max:255'

            ]);
      
        $programstudi = new programstudi;
        $programstudi->nama_program = $request->nama_program;
        $programstudi->ket = $request->ket;
        $programstudi->save();
        return redirect()->route('program_studis.index');
    }

    /**id_eskulDisplay the sid_eskulified resource.
     *
     * @param  \App\mapel_siswa  $mapel_siswa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $programstudi = programstudi::findOrFail($id);
        return view('programstudi.show',compact('programstudi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\mapel_siswa  $mapel_siswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $programstudi = programstudi::findOrFail($id);
        return view('programstudi.edit',compact('programstudi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mapel_siswa  $mapel_siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama_program' => 'required|max:255',
            'ket' => 'required|max:255'
            ]);
      
        $programstudi = programstudi::findOrFail($id);
        $programstudi->nama_program = $request->nama_program;
        $programstudi->ket = $request->ket;
        $programstudi->save();
        return redirect()->route('program_studis.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mapel_siswa  $mapel_siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $programstudi = programstudi::findOrFail($id);
        $programstudi->delete();
        return redirect()->route('program_studis.index');  
    }
}