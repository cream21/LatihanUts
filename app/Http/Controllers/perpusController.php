<?php

namespace App\Http\Controllers;
use App\Models\perpus;
use Illuminate\Http\Request;

class perpusController extends Controller
{
    public function index()
    {
        $data = perpus::all();
        return view('perpustakaan/index', compact('data'));
    }
    public function create()
    {
        return view('perpustakaan/add');
    }
    public function ambilData(Request $request)
    {
        $this->validate($request,[
            'id' => 'required|numeric|unique:perpustakaan2|min:3',
            'nama_buku' => 'required|min:4|max:40',
            'penerbit' => 'required|min:4|max:50',
            'pengarang' => 'required|min:4|max:40',
            'jumlah_buku' => 'required|numeric',
            'keterangan' => 'required|min:4|max:255',
        ]);
        $data = perpus::create($request->all());
        // redirect
        return redirect(url('data-perpus'));
        // dd($request->all());
    }
    public function destroy(perpus $id){
        $id->delete();
        return redirect(url('data-perpus'));

    }
    public function edit($id){
        $data = perpus::find($id);
        // dd($data);
        return view('perpustakaan/edit', compact('data'));
    }
    public function update($id, Request $request){
        $data = perpus::find($id);
         //    validasi update perpus
        $rules = [
            'nama_buku' => 'required|min:4|max:40',
            'penerbit' => 'required|min:4|max:50',
            'pengarang' => 'required|min:4|max:40',
            'jumlah_buku' => 'required|numeric',
            'keterangan' => 'required|min:4|max:255',
        ];
        // validasi nim untuk nim agar tidak sama dengan nim yg lain(unique)
        if($request->id != $data->id) {
            $rules['id'] = 'required|unique:perpustakaan2';
        }
        $validatedData = $request->validate($rules);
        // end validasi siswa
        $data->update($request->all());
        // redirect
        return redirect(url('data-perpus'));
        // dd($request->all());
    }
   
}