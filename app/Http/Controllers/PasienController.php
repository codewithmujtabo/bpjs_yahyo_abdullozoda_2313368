<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class PasienController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        // Retrieve all records from the 'pasien' table using the Pasien model
        $pasien = Pasien::all();
        // Return the 'index' view with the variable 'all_pasien' containing all pasien records
        return view('pasien.index')->with('all_pasien', $pasien);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        // Return the 'create' view for creating a new pasien record
       return view("pasien.create");    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        // Validate the incoming request data
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
            'tgl_lahir' => 'required',
            'nik' => 'required'
          ]);
       
          // Get all input data from the request
          $input = $request->all();
       
          // Create a new pasien record in the database
          Pasien::create($input);
       
          // Flash a success message to the session
          Session::flash('flash_message', 'Pasien telah ditambahkan ke database dengan sukses!');
       
          // Redirect back to the previous page 
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
        // Find a pasien record by its ID
        $pasien = Pasien::find($id);
        // Return the 'edit' view with the pasien record
        return view('pasien.edit')->with('pasien',$pasien);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) {
        // Find a pasien record by its ID
        $pasien = Pasien::find($id);

        // Validate the incoming request data
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
            'tgl_lahir' => 'required',
            'nik' => 'required'
        ]);

        // Get all input data from the request
        $input = $request->all();

        // Update the pasien record with the new data
        $pasien->fill($input)->save();

        // Flash a success message to the session
        Session::flash('flash_message', 'Pasien telah diperbarui dengan sukses!');

        // Redirect back to the previous page
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) {
        // Find a pasien record by its ID
        $pasien = Pasien::find($id);

        // Delete the pasien record
        $pasien->delete();

        // Flash a success message to the session
        Session::flash('flash_message', 'Pasien telah dihapus dengan sukses!');

        // Redirect to the 'index' route for pasien records
        return redirect()->route('pasien.index');
    }
}
