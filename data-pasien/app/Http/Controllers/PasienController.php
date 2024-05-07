<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $pasien = Pasien::all();
        return view('pasien.index')->with('all_pasien', $pasien);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
       return view("pasien.create");    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
            'tgl_lahir' => 'required',
            'nik' => 'required'
          ]);
       
          $input = $request->all();
       
          Pasien::create($input);
       
          Session::flash('flash_message', 'Pasien telah ditambahkan ke database dengan sukses!');
       
          return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {
        $pasien = Pasien::find($id);
        return view('pasien.show')->with('pasien',$pasien);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) {
        $pasien = Pasien::find($id);
        return view('pasien.edit')->with('pasien',$pasien);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) {
        $pasien = Pasien::find($id);


        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
            'tgl_lahir' => 'required',
            'nik' => 'required'
        ]);


        $input = $request->all();


        $pasien->fill($input)->save();


        Session::flash('flash_message', 'Pasien telah diperbarui dengan sukses!');


        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) {
        $pasien = Pasien::find($id);


        $pasien->delete();


        Session::flash('flash_message', 'Pasien telah dihapus dengan sukses!');


        return redirect()->route('pasien.index');
    }
}
